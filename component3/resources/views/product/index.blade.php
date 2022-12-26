@extends('product.layout')
@section('content')
<div class="pull-left">
    <h2>Products</h2>
</div>

    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-success" href="/product/create">Add new product!</a>
        </div>
    </div>


@if($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif


<h4>BOOK</h4>
<table class="table table-bordered">
    <tr>
        <th>S.No.</th>
        <th>Title</th>
        <th>Creator</th>
        <th>Category</th>
        <th>Pages</th>
        <th>Price</th>
        <th width="280px">Action</th>
    </tr>

    @foreach($book as $booc)
    <tr>
         <td>{{ ++$i }}</td>
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
    @if(count($book))
     {!! $book->links('pagination::bootstrap-4') !!}
    @else
    <p class="text-center">No more products to show!</p>
    @endif

    <h4>MOVIE</h4>
    <table class="table table-bordered">
    <tr>
        <th>S.No.</th>
        <th>Title</th>
        <th>Creator</th>
        <th>Category</th>
        <th>Length(min)</th>
        <th>Price</th>
        <th width="280px">Action</th>
    </tr>

    @foreach($movie as $mov)
    <tr>
        <td>{{ ++$a }}</td>
        <td>{{ $mov->Title }}</td>
        <td>{{ $mov->Creator }}</td>
        <td>{{ $mov->Category }}</td>
        <td>{{ $mov->PagesorLength }}</td>
        <td>{{ $mov->Price }}</td>
        <td>
        <form action="product/delete{{$mov->id}}" method="POST">
            <a class="btn btn-info" href="/product/show{{$mov->id}}">Show</a>
            <a class="btn btn-info" href="/product/edit{{$mov->id}}">Edit</a>
           
            <button type="submit" class="btn btn-danger">Delete</button>
            @csrf
            @method('DELETE')
            </form>   
        </td>
    </tr>
    @endforeach
    </table> 
    
     @if(count($movie))
     {!! $movie->links('pagination::bootstrap-4') !!}
    @else
    <p class="text-center">No more products to show!</p>
    @endif
   
@endsection