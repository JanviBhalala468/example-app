@extends('master')
@section('mainData')
<!DOCTYPE html>
<html>
<head>
	<title>Laravel CRUD Application </title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="{{ URL::asset('css/nav.css') }}" /> 
</head>
<body>


<div class="container">
    @yield('content')
</div>


</body>
</html>

@endsection