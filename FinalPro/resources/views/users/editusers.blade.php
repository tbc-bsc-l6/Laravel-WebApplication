
@extends('product.layout')

@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit User</h2>
        </div>
        <div class="pull-right">
            <a  class="btn btn-primary" href="{{'/users'}}">Back</a>
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



<form action="/users/update{{$users->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>ID:</strong>
                <input type="text" name="id" value="{{$users->id}}" class="form-control" placeholder="">
            </div>
        </div>
</div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" value="{{$users->name}}" class="form-control" placeholder="name">
            </div>
        </div>
</div>
<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" value="{{$users->email}}" class="form-control" placeholder="email">
            </div>
        </div>
</div>
<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Role:</strong>
                <input type="text" name="role" value="{{$users->role}}" class="form-control" placeholder="name">
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