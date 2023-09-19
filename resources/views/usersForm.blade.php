@extends('master')
@section('mainData')

<h1>Log in page </h1>

<form action="{{URL::to('/')}}/userForm" method="POST">
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

    

    <button type="submit" class="login">Login</button>
    
</div>

</form>

@endsection