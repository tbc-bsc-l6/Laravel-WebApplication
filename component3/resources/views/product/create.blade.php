@extends('product.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add new Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary"href="{{'product'}}">Back</a>
          

        </div>
    </div>
</div>

@if($errors->any())
<div class="alert alert-danger">
    <!-- this is client side validation -->
    <strong>Whoops!</strong>There was some probelm with your input<br><br>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{'/product/store'}}" method="POST">

@csrf


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Caterogy:</strong>
                <select name="Category">
                <option  disabled selected>----Choose---</option>
                <option value="Movie">Movie</option>
                <option value="Book">Book</option>
                </select>
            </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title:</strong>
            <input type="text" name="Title" class="form-control" placeholder="TItle">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Creator:</strong>
            <input type="text" name="Creator" class="form-control" placeholder="Creator">
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>PagesorLength</strong>
            <input type="text" name="PagesorLength" class="form-control" placeholder="Pages/Length">
        </div>
    </div>

  
    <!-- <label>Category:  </label> -->
            <!-- <select>
            <option value="1" name="Category">Movie</option>
            <option value="2" name="Category">Book</option>
            </select> -->
  

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Price:</strong>
            <input type="text" name="Price" class="form-control" placeholder="Price">
        </div>
    </div>


    
    


    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">SUBMIT</button>
    </div>
</div>
</form>
@endsection