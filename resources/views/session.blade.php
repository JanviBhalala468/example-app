@extends('master')
@section('mainData')


<h1>Session damo</h1>
<h2>Please click to login to set session</h2>

<button clss="login"><a class="nav-link" href="{{URL::to('/')}}/userForm">Login</a></button>
              
        
    

@endsection