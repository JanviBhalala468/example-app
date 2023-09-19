@extends('master')
@section('mainData')

<h1>Edit Product</h1>
<form action="{{URL::to('/')}}/{{'editProController'}}" method="POST">
@csrf
    <div >
        <di>
            <input type="hidden" name="id" value="{{ $data['id'] ?? '' }} ">
        </div>
        <div>
            <div for="name"><b>Product Name *</b></div>
            <input type="text" name="name" value="{{ $data['name'] ?? '' }} " >
                <div class="error">@error('name'){{$message}}@enderror</div>
        </div>
        
            <div>
            <div for="days"><b>Days to use *</b></div>
            <input type="number"  name="days"  >
            <div class="error">@error('days'){{$message}}@enderror</div>
        </div>

        <button type="submit" class="login">{{$data ?? ''  ? 'Edit' : 'Add' }}</button>
        


    </div>



</form>



     
@endsection