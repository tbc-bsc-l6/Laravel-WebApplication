@extends('lipstick.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Product</h2>
        </div>
        <div class="pull-right">
            <a  class="btn btn-primary" href="{{'/lipstick'}}">Back</a>
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


<form action="/lipstick/update{{$lipstick->id}}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>BrandName:</strong>
                <input type="text" name="BrandName" value="{{ $lipstick->BrandName}}" class="form-control" placeholder="BradName">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Colour:</strong>
                <input type="text" name="Colour" value="{{ $lipstick->Colour}}" class="form-control" placeholder="Colour">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Shade:</strong>
                <input type="text" name="Shade" value="{{ $lipstick->Shade}}" class="form-control" placeholder="Shade">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="text" name="Price" value="{{ $lipstick->Price}}" class="form-control" placeholder="Price">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>MadeIn:</strong>
                <input type="text" name="MadeIn" value="{{ $lipstick->MadeIn}}" class="form-control" placeholder="MadeIn">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">SUBMIT</button>
        </div>
    </div>
</form>

@endsection