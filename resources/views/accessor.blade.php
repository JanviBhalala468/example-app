@extends('master')
@section('mainData')

        
            <h1>This is table content of _member table in DB</h1>
            <table >
           
                <tr><td  colspan="2" ><h4>It's used to modify or formet data coming from DB</h4>
            <h5>Here we will make First letter Capital in Name Column</h5></td></tr>
               
                <tr>
                    <td width="200px"><b>In Model file</b></td>
                    <td><pre>
function getNameAttribute($value)
{
    return ucfirst($value);
}                  </pre></td>
                </tr>
                <tr><td  colspan="2" >formate of function name will be fixed.
           
                <tr>
                
               
            </table>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Number</th>
                </tr>
                @foreach($data as $d)
                
                <tr>  
                    <td>{{$d->id}}</td>
                    <td>{{$d->name}}</td>
                    <td>{{$d->number}}</td>
                </tr>
               
                @endforeach
            </table>
            
         
            
      
    
</body>
</html>
@endsection