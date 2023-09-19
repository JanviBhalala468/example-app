@extends('master')
@section('mainData')
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home1</title>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
</head>
<body>
    <div class="main-container">
    
        <div id="main">

            <h1>Custom Commands</h1> <br/>
            <table >
           
                <tr><td  colspan="2" ><h4></h4>
            <h5></h5></td></tr>
                <tr>
                    <td width="200px"><b>Create Command File</b></td>
                    <td>php artisan make:command DamoCommand <ul><li>File will be created in app->Console->Commands->DamoCommand.php</li></ul></td>
                </tr>
                <tr>
                    <td width="200px"><b>In "DamoCommand.php"</b></td>
                    <td>
                        <ul>
                            <li><b>Set Title : </b> protected $signature = 'showSD';</li>
                            <li><b>Add Discription : </b> protected $description = 'Show current DB';</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td width="200px"><b>Register in kernal.php</b></td>
                    <td>$commands = [Commands\DamoCommand::class]; <ul><li><b>File Path :</b>app->Console->kernal.php</li></ul></td>
                </tr>
                <!-- <tr>
                    <td width="200px"><b></b></td>
                    <td><pre>
                    </pre></td>
                </tr> -->
                
               
            </table>
            
            
        </div>
    <div>
    
</body>
</html>
@endsection