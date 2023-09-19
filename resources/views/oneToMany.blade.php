@extends('master')
@section('mainData')


<h1>One To Many</h1>
<table>
    <tr>
        <td colspan="3">One campany have many employees</d>
    </tr>
    <tr>
        <td><b>Id</b></d>
        <td><b>Name</b></d>
        <td><b>Company Id</b></d>
    </tr>
    @foreach($list as $data)
    
    <tr>  
        <td>{{$data->id}}</d>
        <td>{{$data->e_name}}</d>
        <td>{{$data->compny_id}}</d>
    </tr>
    @endforeach
    
</table>


@endsection