@extends('lipstick.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add new Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary"href="{{'lipstick'}}">Back</a>
            <label>Product:</label>
            <select name="" id="languages">
            <option value="1">Lipstick</option>
            <option value="2">Perfume</option>
            </select>

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

<form action="{{'/lipstick/store'}}" method="POST" encytype="multipart/form-data">

@csrf


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>BrandName:</strong>
            <input type="text" name="BrandName" class="form-control" placeholder="BrandName">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Colour:</strong>
            <input type="text" name="Colour" class="form-control" placeholder="Colour">
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Shade:</strong>
            <input type="text" name="Shade" class="form-control" placeholder="Shade">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Price:</strong>
            <input type="text" name="Price" class="form-control" placeholder="Price">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>MadeIn:</strong>
            <input type="text" name="MadeIn" class="form-control" placeholder="MadeIn">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Image:</strong>
            
            <input type="file" name="Image" class="form-control">
        </div>
    </div>
    


    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">SUBMIT</button>
    </div>
</div>
</form>
@endsection