
@extends('product.layout')

@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Product</h2>
        </div>
        <div class="pull-right">
            <a  class="btn btn-primary" href="{{'/product'}}">Back</a>
        </div>
    </div>
</div>

@if($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong>There was a problem!
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif



<form action="/product/update{{$product->id}}" method="POST">
    @csrf
    @method('PUT')
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
</div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                
                <input type="hidden" name="id" value="{{$product->id}}" class="form-control" placeholder="">
            </div>
        </div>
</div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="Title" value="{{$product->Title}}" class="form-control" placeholder="Title">
            </div>
        </div>
</div>
<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Creator:</strong>
                <input type="text" name="Creator" value="{{$product->Creator}}" class="form-control" placeholder="Creator">
            </div>
        </div>
</div>
<div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pages/Length:</strong>
                <input type="text" name="PagesorLength" value="{{$product->PagesorLength}}" class="form-control" placeholder="Pages/Length">
            </div>
        </div>
</div>
<div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="text" name="Price" value="{{$product->Price}}" class="form-control" placeholder="Price">
            </div>
        </div>
</div>

       

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">SUBMIT</button>
        </div>
    </div>
</form>
</div>
@endsection