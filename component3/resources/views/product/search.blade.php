@extends('product.layout')
@section('content')
<h4>PRODUCT</h4>
<table class="table table-bordered">
    <tr>
        <th>Title</th>
        <th>Creator</th>
        <th>Category</th>
        <th>Pages</th>
        <th>Price</th>
        <th width="280px">Action</th>
    </tr>

    @foreach($product as $booc)
    <tr>
        <td>{{ $booc->Title }}</td>
        <td>{{ $booc->Creator }}</td>
        <td>{{ $booc->Category }}</td>
        <td>{{ $booc->PagesorLength }}</td>
        <td>{{ $booc->Price }}</td>
        <td>
        <form action="product/delete{{$booc->id}}" method="POST">
            <a class="btn btn-info" href="/product/show{{$booc->id}}">Show</a>
            <a class="btn btn-info" href="/product/edit{{$booc->id}}">Edit</a>
            
            
            <button type="submit" class="btn btn-danger">Delete</button>
            @csrf
            @method('DELETE')
            </form> 
            
        </td>
    </tr>
    @endforeach
    </table>
    <a class="btn btn-info" href="/product">GO BACK</a>
 
    










@endsection