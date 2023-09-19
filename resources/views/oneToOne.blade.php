@extends('master')
@section('mainData')

        
<h1>One To One</h1>
<table>
    <tr>
        <td colspan="3">One employee can work witd only one company</d>
    </tr>
    <tr>
        <td><b>Id</b></d>
        <td><b>Name</b></d>
        <td><b>Company Id</b></d>
    </tr>
    
    
    <tr>  
        <td>{{$data->id}}</d>
        <td>{{$data->e_name}}</d>
        <td>{{$data->compny_id}}</d>
    </tr>
    
    
</table>
         

@endsection