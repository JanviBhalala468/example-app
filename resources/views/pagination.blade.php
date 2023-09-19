@extends('master')
@section('mainData')

        
<h1>This is table content of Damo table in DB</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Number</th>
    </tr>
    @foreach($data as $d)
    
    <tr>  
        <td>{{$d->id}}</td>
        <td>{{$d->name}}</td>
        <td>{{$d->number}}</td>
    </tr>
    
    @endforeach
</table>

<div>{{$data->links()}}</div> 
 
@endsection