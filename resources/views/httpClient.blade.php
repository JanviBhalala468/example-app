@extends('master')
@section('mainData')

        
<h1> Data Using Http CLient Request</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Email</th>
        <th> Name</th>
        <th>Image</th>
    </tr>
    @foreach($data1 as $d)
    
    <tr>  
        <td>{{$d['id']}}</td>
        <td>{{$d['email']}}</td>
        <td>{{$d['first_name']}} {{$d['last_name']}}</td>
        <td><img src="{{$d['avatar']}}"/></td>
    </tr> 
    
    @endforeach
</table>

            
 
@endsection