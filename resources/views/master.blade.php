
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
</head>
<body>
    <div class="main-container">
        <div id="side-bar">@include('nav')</div>
    
        <div id="main">
            @yield('mainData')
            
            
        </div>
    <div>
    
</body>
</html>