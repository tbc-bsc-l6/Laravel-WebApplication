@extends('product.layout')
@section('content')
<div class="contianer">
<form>
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Caterogy:</strong>
                <input type="text" name="Category" value="{{$product->Category}}" class="form-control"  readonly="readonly">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID:</strong>
                <input type="text" name="id" value="{{$product->id}}" class="form-control"  readonly="readonly">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="Title" value="{{$product->Title}}" class="form-control"  readonly="readonly">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Creator:</strong>
                <input type="text" name="Creator" value="{{$product->Creator}}" class="form-control"  readonly="readonly">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pages/Length:</strong>
                <input type="text" name="PagesorLength" value="{{$product->PagesorLength}}" class="form-control" readonly="readonly">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="text" name="Price" value="{{$product->Price}}" class="form-control" readonly="readonly">
            </div>
        </div>
    </div>
    <div class="row">
        <a href="{{'/product'}}" class="btn btn-primary">GO BACK</button>
    </div>
</form>
</div>
@endsection