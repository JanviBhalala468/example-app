@extends('master')
@section('mainData')

    
<h1>Group Middleware</h1>
<h2>Please enter your any count in request as param named as count to see how it works </h2>
<h4>This will work only on bellow list of tabs</h4>

<ul class="navbar-nav">

    <li class="nav-item">
    <a class="nav-link" href="{{URL::to('/')}}/middleware">Global Middleware</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="{{URL::to('/')}}/group_middlewere">Group Middleware</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="{{URL::to('/')}}/route_middlewere">Route Middleware</a>
    </li>
</ul>

@endsection