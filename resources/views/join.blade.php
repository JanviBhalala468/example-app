@extends('master')
@section('mainData')


        
<h1>JOIN Operation</h1>
<table>
    <tr>
        <th>Employee Name</th>
        <th>Company Id</th>
        <th>Company</th>
    </tr>
    <tr>
        <td><b>Syntax: </b></td>
        <td colspan="2">  DB::table('join_employee')->join('join_company', 'join_employee.company_id', "=", 'join_company.id')
->select('join_employee.name', 'join_employee.company_id', 'join_company.name AS c_name')
->get();</td>
        
    </tr>
    @foreach($data as $d)
    
    <tr>  
        <td>{{$d->name}}</td>
        <td>{{$d->company_id}}</td>
        <td>{{$d->c_name}}</td>
    </tr>
    
    @endforeach
</table>

@endsection