@extends('master')
@section('mainData')





<h1>Log in page </h1>

<form action="{{URL::to('/')}}/{{$data ?? ''  ? 'editController' : 'saveInDBController' }}" method="POST">
    @csrf
    <div class="container ">
        <div>
            <input type="hidden" placeholder="Enter Username" name="id" value="{{ $data['id'] ?? '' }} ">
        </div>
        <div>
            <div for="name"><b>Username</b></div>
            <input type="text" placeholder="Enter Username" name="name" value="{{ $data['name'] ?? '' }} " >
            <div class="error">@error('name'){{$message}}@enderror</div>
        </div>
        <div>
            <div for="number"><b>Number</b></div>
            <input type="text" placeholder="Enter Password" name="number"  value="{{ $data['number'] ?? '' }} ">
            <div class="error">@error('number'){{$message}}@enderror</div>
        </div>

    

    <button type="submit" class="login">{{$data ?? ''  ? 'Edit' : 'Add' }}</button>
    
</div>

</form>
                        

    

@endsection