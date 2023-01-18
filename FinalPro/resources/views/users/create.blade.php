@extends('product.layout')
@section('content')

<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add new user</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary"href="{{'/users'}}">Back</a>
          

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

<form action="{{'/users/store'}}" method="POST">

@csrf


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>ID:</strong>
            <input type="text" name="id" class="form-control" placeholder="ID">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="name" class="form-control" placeholder="Name">
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email</strong>
            <input type="text" name="email" class="form-control" placeholder="Email">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Role:</strong>
            <select name="role">
            <option  disabled selected>----Choose---</option>
            <option value="Admin">Admin</option>
            <option value="SuperAdmin">SuperAdmin</option>
            </select>
        </div>
    </div>

    <!-- <label>Category:  </label> -->
            <!-- <select>
            <option value="1" name="Category">Movie</option>
            <option value="2" name="Category">Book</option>
            </select> -->
  

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Password:</strong>
            <input type="text" name="password" class="form-control" placeholder="********">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">SUBMIT</button>
    </div>
</div>
</form>
</div>

@endsection