@extends('master')
@section('mainData')


<h1>Mutator</h1>
<table>

    <tr>
        <td colspan="2">
            <h4>It's used to modify or formet data before save in DB and after updation save in DB</h4>
        </td>
    </tr>

    <tr>
        <td width="200px"><b>In Model file</b></td>
        <td>
            <pre>
function setNameAttribute($value)
{
return $this->attribute['name'] = "Mr/Ms. " . $value;
}                </pre>
        </td>
    </tr>
    <tr>
        <td colspan="2">formate of function name will be fixed.

    <tr>


</table>

<form action="{{URL::to('/')}}/mutatorController" method="POST">
    @csrf
    <div class="container ">

        <div>
            <div for="name"><b>Username</b></div>
            <input type="text" placeholder="Enter Username" name="name" />

        </div>
        <div>
            <div for="number"><b>Number</b></div>
            <input type="text" placeholder="Enter Password" name="number" />


        </div>



        <button type="submit" class="login">Add</button>

    </div>

</form>

    @endsection