@extends('master')
    
@section('mainData')

    
                  
<h3>URL Generation</h3>
<ul>    
                    <li><strong>Cuttrnt URL :</strong> {{URL::current()}}</li>
    <li><strong>base URL :</strong> {{URL::to('/')}}</li>
    <li><b>Ptrviou
    s URL :</b> {{URL::previous()}}</li>
    </ul>







@endsection