@extends('master')
@section('mainData')

<h3>Blade Template</h3>
    <ul>
        <li><strong>Creat Controller :</strong>php artisan make:controller Users</li>
        <li><strong>Create Blade File :</strong> name:user</li>
        <li><strong>Define in Web.php :</strong> Route::get('users', [Users::class, 'viewLoad']);</li>
        <li><strong>Add two numbers 10+10 :</strong> {{10+10}}</li>
        <li><strong>Length of 'array' =>  ['janvi', 'prutha', 'pooja'] :</strong> {{count($array)}}</li>
        <li><strong>If Condition</strong>
            <ul>
                @if($user=='janvi')
                <li>hello {{$user}}</li>
                @endif
            </ul>
        </li>
        <li><strong>For Loop</strong>
            <ul>
                @for($i=1;$i<5;$i++)
                <li>Itteration {{$i}}</li>
                @endfor
            </ul>
        </li>   
        <li><strong>For Each Loop</strong>
            <ul>
                @foreach($array as $e)
                <li>{{$e}}</li>
                @endforeach
            </ul>
        </li> 
        
    </ul>

<script>
    var data=@json($array);
    console.log(data);
    console.warn(data[0]);
</script>

@endsection