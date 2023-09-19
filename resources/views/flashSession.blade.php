@extends('master')
@section('mainData')

   
<h1>Flash session </h1>

@if(session('user'))
<h1>Data saved for {{session('user')}}</h1>
@endif
<form action="{{URL::to('/')}}/flashSessionController" method="POST">
    @csrf
    <div class="container ">
        <div>
            <div for="uname"><b>Username</b></div>
            <input type="text" placeholder="Enter Username" name="uname" >
            <div class="error">@error('uname'){{$message}}@enderror</div>
        </div>
        <div>
            <div for="psw"><b>Password</b></div>
            <input type="password" placeholder="Enter Password" name="psw" >
            <div class="error">@error('psw'){{$message}}@enderror</div>
        </div>
        <div>
            <div for="psw"><b>Email</b></div>
            <input type="email" placeholder="Enter Email" name="email" >
            <div class="error">@error('email'){{$message}}@enderror</div>
        </div>

    <button type="submit" class="login">Login</button>         
</div>
</form>
<ul>
    <li>We can use session data as many time we want to use.</li>
    <li>We can use flash session data only once .</li>
    <li>Once we reload the url flash session data will be distroied.</li>
</ul>

@endsection