@extends('master')
@section('mainData')


<h1>Many To Many</h1>
<table>
    <tr>
        <td colspan="3">Your Order table contains orders placed by multiple customers (who are listed in the Customers table), and a customer may place more than one order</d>
    </tr>
    <tr>
        <td><b>Id</b></d>
        <td><b>Role</b></d>
        <td><b>Pivot Table row</b></d>
    </tr>
    @foreach($list as $data)
    
    <tr>  
        <td>{{$data->id}}</d>
        <td>{{$data->r_name}}</d>
        <td>{{$data->pivot}}</d>
    </tr>
    @endforeach
    
</table>
   
@endsection