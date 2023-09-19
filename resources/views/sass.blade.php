
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <!-- <link rel="stylesheet" href="{{ URL::asset('css/main1.css') }}" /> -->
    <link rel="stylesheet" href="{{URL::to('/')}}/{{ mix('css/main1.css') }}">
    <!-- <link rel="stylesheet" href="{{ mix('css/main1.css') }}"> -->
    <title>form</title>
</head>
<body>
    <div class="main-container mt-5">
    
        <div id="main"  style="padding-left:300px;">
        <div class="spinner-border text-primary my-5" role="status">
            <span class="visually-hidden">Loading...</span>Spinner
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
        </div>
            
            <h2>Used Only Sass Without Mix</h2>
            
            <table class="table table-hover" >
                <tr><td colspan="3"><h3>Work Flow</h3></td></tr>
                <tr>
                    <td>Step 1</td>
                    <td><b>Install Sass Compiler globally</b></td>
                    <td>sudo npm install -g sass</td>
                </tr>
                
                <tr>
                    <td>Step 2</td>
                    <td colspan="2">Create scss file at resoutces/scss/main.scss</td>
                    
                </tr>
                <tr>
                    <td>Step 3</td>
                    <td><b>Run Command To compile scss file </b></td>
                    <td>sass resources/sass/main1.scss public/css/main1.css</td>
                </tr>
            </table>
            <h2>Compiling Assets with Laravel Mix</h2>
            <table>
                <tr><td colspan="3"><h3>Work Flow to use it with Laravel mix</h3></td></tr>
                <tr>
                    <td>Step 1</td>
                    <td><b>Install Laravel Mix</b></td>
                    <td>npm install</td>
                </tr>
                <tr>
                    <td>Step 2</td>
                    <td><b>Configure Laravel Mix</b></td>
                    <td><ul class="list-group">
                        <li class="list-group-item ">Hello List</li>
                        <li class="list-group-item "><b>in webpack.mix.js</b>
                        <ul>
                            <pre>
const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/main1.scss', 'public/css')
    .version();

                            </pre>
                        </ul>
                        </li>
                    </ul></td>
                </tr>
                <tr>
                    <td>Step 3</td>
                    <td><b>Compile Assets</b></td>
                    <td>npm run dev ( For Development Mode)</td>
                </tr>
                <tr>
                <tr>
                    <td>Step 4</td>
                    <td><b>Use Compiled Assets </b></td>
                    <td>mix('js/main1.js')</td>
                </tr>
                <tr>
                    <td>***</td>
                    <td><b>Watching for Changes</b></td>
                    <td>
                        <li class="list-group-item align-items-center">During development, you can run Mix in watch mode to automatically recompile assets when changes are detected</li>
                        <li class="list-group-item align-items-center">npm run watch</li>
                    </td>
                </tr>
            </table>
            <form action="{{URL::to('/')}}/{{'addproductController'}}" method="POST">
                @csrf
                <h2>Form</h2>
                <div >
                    <div>
                        <input type="hidden" name="id" value="{{ $data['id'] ?? '' }} ">
                    </div>
                    <div>
                        <div for="name"><b>Product Name *</b></div>
                        <input class="form-control" placeholder="Enter Value" type="text" name="name" value="{{ $data['name'] ?? '' }} " >
                        <div class="error">@error('name'){{$message}}@enderror</div>
                    </div>
                   

                <button type="submit" class=" button login btn btn-primary">{{$data ?? ''  ? 'Edit' : 'Add' }}</button>
                <button class="btn btn-warning">Warning</button>
                <a href="#">Bootstrap Link</a>
               
            </div>

            </form>
                       
            
        </div>
    <div>
    
</body>
</html>

