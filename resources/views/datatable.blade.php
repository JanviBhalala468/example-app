@extends('master')
@section('mainData')
<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Yajra Datatable Example Tutorial - Techsolutionstuff</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
    
<div class="container">
    <h1>Laravel 8 Yajra Datatable</h1>
    <table class="table table-bordered data-table" id="data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>number</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
   
</body>
   
<script type="text/javascript">
  $(function () {
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        rowId: 'id',
        ajax: "{{ route('table.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'number', name: 'number'},
            {data: null, name: 'Action', orderable: false, searchable: false, render:function (data, type, row){
                //console.log("render: ", data.id);
                 var btn = '<div class="d-flex"><a href="fullNameBtn/' +data.id + '" class="edit btn btn-warning btn-sm m-1">FullName</a><a href="editControllerBtn/' + data.id + '" class="edit btn btn-info btn-sm m-1">Edit</a> <button class="btn-delete btn btn-danger btn-sm m-1">Delete</button><div>';

               return btn;
            }},
        ]
    });
    $('#data-table').on('click', '.btn-delete', function() {
           var id = $(this).closest('tr').attr('id');
           console.log("deleting id: " + id);
            $.ajax({url: "deleteControllerAjaxBtn/"+id ,
                type: "GET",
                // data: id,
                success: function(result){
                    table.draw(false);
                    console.log('hello done');
                }
            });
    });
    
  });
</script>
</html>
@endsection