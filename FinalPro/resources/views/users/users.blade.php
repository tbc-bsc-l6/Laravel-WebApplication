@extends('product.layout')
@section('content')
<div class="pull-left">
    <h2>Users</h2>
</div>

<div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-success" href="{{'/users/create'}}">Add new user!</a>
        </div>
    </div>


@if($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif


<h4>Normal Admins</h4>
<table class="table table-bordered">
    <tr>
       
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Action</th>
        
    </tr>

    @foreach($users as $user)
    <tr>
       
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->role }}</td>
        <td>
        <form action="users/delete{{$user->id}}" method="POST">
            <a class="btn btn-info" href="/users/editusers{{$user->id}}">Edit</a>
            
            <button type="submit" class="btn btn-danger">Delete</button>
            @csrf
            @method('DELETE')
            </form> 
        </td>
    </tr>
    @endforeach
    </table>
   
@endsection