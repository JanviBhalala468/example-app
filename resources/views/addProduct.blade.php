@extends('master')
@section('mainData')

        <h1>Add Product</h1>
           
            <form action="{{URL::to('/')}}/{{'addproductController'}}" method="POST">
                @csrf
                <div >
                    <div>
                        <input type="hidden" name="id" value="{{ $data['id'] ?? '' }} ">
                    </div>
                    <div>
                        <div for="name"><b>Product Name *</b></div>
                         <input type="text" name="name" value="{{ $data['name'] ?? '' }} " >
                        <div class="error">@error('name'){{$message}}@enderror</div>
                    </div>
                    <button type="submit" class=" button login">{{$data ?? ''  ? 'Edit' : 'Add' }}</button>
               

                


               
                </div>

            </form>
                   
     

@endsection