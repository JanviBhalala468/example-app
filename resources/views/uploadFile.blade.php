@extends('master')
@section('mainData')

<h1>Upload File </h1>

<form action="{{URL::to('/')}}/uploadFileController" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container ">
        <div>
            <div for="file"><b>Upload File</b></div>
            <input type="file" placeholder="upload file" name="file" >
            <div class="error">@error('file'){{$message}}@enderror</div>
        </div>
    

    <button type="submit" class="login">Upload</button>
    
</div>

</form>

@endsection