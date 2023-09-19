@extends('master')
@section('mainData')


<h1>Query Builder</h1> <br/>
<table >
<tr><td  colspan="2" ><h4>Regular Operations</h4></td></tr>
    <tr>
        <td width="100px"><b>Select</b></td>
        <td>DB::table('model_damos')->get();</td>
    </tr>
    <tr>
        <td width="100px"><b>Condition</b></td>
        <td>DB::table('model_damos')->where('name', 'Bansi')->get();</td>
    </tr>
    <tr>
        <td width="100px"><b>Count</b></td>
        <td>DB::table('model_damos')->count();</td>
    </tr>
    <tr>
        <td width="100px"><b>Find</b></td>
        <td>(array) DB::table('model_damos')->find('4');</td>
    </tr>
    <tr>
        <td width="100px"><b>Insert</b></td>
        <td>DB::table('model_damos')->insert(['name' => 'Neel', 'number' => '12234456']);</td>
    </tr>
    <tr>
        <td width="100px"><b>Delete</b></td>
        <td>DB::table('model_damos')->where('id', '4')->delete();</td>
    </tr>
    <tr><td  colspan="2" ><h4>Aggregate Functoins</h4></td></tr>
    <tr>
        <td width="100px"><b>Sum</b></td>
        <td>DB::table('model_damos')->sum('id');</td>
    </tr>
    <tr>
        <td width="100px"><b>Min</b></td>
        <td>DB::table('model_damos')->min('id');</td>
    </tr>
    <tr>
        <td width="100px"><b>Max</b></td>
        <td>DB::table('model_damos')->max('id');</td>
    </tr>
    <tr>
        <td width="100px"><b>Max</b></td>
        <td>DB::table('model_damos')->avg('id');</td>
    </tr>
</table>
            

@endsection