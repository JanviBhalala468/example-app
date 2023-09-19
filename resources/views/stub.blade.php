@extends('master')
@section('mainData')




<h1>Stub</h1> <br/>
<table >

    <tr><td  colspan="2" >
            <h4>It's used to create default code in controller /Model/...</h4>
            <h5>Here we will create default function when we create controller</h5>
        </td>
    </tr>
    <tr>
        <td width="200px"><b>Publish Stub</b></td>
        <td>php artisan stub:publish</td>
    </tr>
    <tr>
        <td width="200px"><b>"Controller.plain.stub "File</b></td>
        <td><pre>
function index(){
    return "Code Here";
}
        </pre></td>
    </tr>
    <tr>
        <td width="200px"><b>Running Seeder</b></td>
        <td>php artisan db:seed --class=TestSeeder</td>
    </tr>
    
    
</table>
            

@endsection