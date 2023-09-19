@extends('master')
@section('mainData')

<h1>Seeder</h1> <br/>
<table >

    <tr><td  colspan="2" ><h4>Seeder is used to generate dummy data</h4></td></tr>
    <tr>
        <td width="200px"><b>Create Seeder</b></td>
        <td>php artisan make:seeder TestSeeder</td>
    </tr>
    <tr>
        <td width="200px"><b>Update TesrSeeder File</b></td>
        <td><pre>
public function run()
{
    DB::table('test')->insert([
        'name' => Str::random(10)
    ]);
}
        </pre></td>
    </tr>
    <tr>
        <td width="200px"><b>Running Seeder</b></td>
        <td>php artisan db:seed --class=TestSeeder</td>
    </tr>
    
    
</table>

@endsection