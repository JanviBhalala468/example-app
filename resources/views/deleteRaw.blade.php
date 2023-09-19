@extends('master')
@section('mainData')


             <h1>This is table content of Damo table in DB</h1>
            <table>
                <tr>
                       <th>Id</th>
                    <th>Name</th>
                    <th>Number</th>
                       <th>Acti o n</th>
                </tr>
                @foreach($data as $d)
                       
                <tr>  
                    <td>{{$d->id}}</td>
                       <td>{{ $d->name}}</td>
                    <td>{{$d->number}}</td>
                    <td><button class="" style="color:red;"><a href="{{URL::to('/')}}{{'/deleteControllerBtn/'.$d->id}}">Delete</a></button><button class="" style="color:red;"><a href="{{URL::to('/')}}{{'/editControllerBtn/'.$d->id}}">Edit</a></button></td>
                    
                </tr>

               
              

  @endforeach 
            </table>
         

  
    
 
    

@endsection