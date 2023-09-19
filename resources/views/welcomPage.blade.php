@extends('master')
@section('mainData')
     
@if(session()->has('user'))


<h1>Welcome to Laravel {{session('user')}}</h1> <br/>
<button class="login"><a class="nav-link" href="{{URL::to('/')}}/logout">Logout</a></button>
@else
<h1>Welcome to Laravel</h1>
Session value  is not available
@endif
    
 
    


    @endsection