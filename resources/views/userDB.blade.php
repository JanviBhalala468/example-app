@extends('master')
@section('mainData')





<h1>This is table content of Damo table in DB</h1>

@foreach($data as $d)
<li>{{$d->name}}</li>
@endforeach

@endsection