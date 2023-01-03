@extends('product.layout')
@section('content')
<form>
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Caterogy_ID:</strong>
                <input type="text" name="Category" value="{{$product->category_id}}" class="form-control"  readonly="readonly">
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
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <img src="{{ asset('/images/uploads/'.$product->Image)}}" width="200px" height="200px" alt="NO IMAGE FOR THIS PRODUCT">
            </div>
        </div>
    </div>
    <div class="row">
    <a href="{{'/product'}}" class="btn btn-primary">GO BACK</button> 
    </div>   
</form>


@endsection