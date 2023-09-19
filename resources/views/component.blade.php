@extends('master')
@section('mainData')

    <div class="main-container">
        <x-navbar data="janvi"/>
        
    
        <div id="main"><!-- <h3>Welcome {{$name ?? ''}} to Laravel</h3> -->
            <h3>Component</h3>
            
            <ul>
                <li><strong>Command to create</strong>php artisan make:component navbar</li>
            </ul>
            
        </div>
    <div>
  
@endsection