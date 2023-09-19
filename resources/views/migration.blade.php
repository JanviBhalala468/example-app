@extends('master')
@section('mainData')


<h1>Migrations</h1> <br/>
<table >
<tr><td  colspan="2" ><h4>Step to work with It...</h4></td></tr>
    <tr>
        <td width="200px"><b>Create Migration</b></td>
        <td>php artisan make:migration create_test_table</td>
    </tr>
    <tr>
        <td width="200px"><b>Add Columns to Table</b></td>
        <td>Schema::create('test', function (Blueprint $table) {
$table->id();
$table->string('name');
$table->timestamps();
});</td>
    </tr>
    <tr>
        <td width="200px"><b>Migrate table to DB</b></td>
        <td>php artisan migrate</td>
    </tr>
    <tr><td  colspan="2" ><h4>Important Migration Commandss</h4></td></tr>
    <tr>
        <td width="200px"><b>Reset Migration</b></td>
        <td>php artisan migrate:reset (Removes whole Migration)</td>
    </tr>
    <tr>
        <td width="200px"><b>RollBack</b></td>
        <td>php artisan migrate:rollback (Removes first last Migration)</td>
    </tr>
    <tr>
        <td width="200px"><b></b></td>
        <td>php artisan migrate:rollback --step 2 (Removes last 2 Migration)</td>
    </tr>
    <tr>
        <td width="200px"><b>Refresh</b></td>
        <td>php artisan migrate:refresh  (Remove all migrations and than migrate it again)</td>
    </tr>
    <tr>
        <td width="200px"><b>Migrate Specific table</b></td>
        <td>php artisan migrate --path=/database/migrations/xyz.php</td>
    </tr>
    
</table>

@endsection