@extends('product.layout')
@section('content')
<div class="pull-left">
    <h2>Products</h2>
</div>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-success" href="/product/create">Add new product!</a>
        </div>
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

    @foreach($book as $book)
    <tr>
         <td>{{ ++$i }}</td>
        <td>{{ $book->Title }}</td>
        <td>{{ $book->Creator }}</td>
        <td>{{ $book->Category }}</td>
        <td>{{ $book->PagesorLength }}</td>
        <td>{{ $book->Price }}</td>
        <td>
            <!-- <form action="#" method="POST"> -->
                <a class="btn btn-info" href="#">Show</a>
                <a class="btn btn-info" href="/product/edit{{$book->id}}">Edit</a>
                <a class="btn btn-danger" href="#">Delete</a>

                <!-- @csrf -->
                <!-- @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button> -->
   
            </form>
        </td>
    </tr>
    @endforeach
    </table>


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
            <form action="#" method="POST"> 
                <a class="btn btn-info" href="#">Show</a>
                <a class="btn btn-info" href="/product/edit{{$mov->id}}">Edit</a>
                <a class="btn btn-danger" href="#">Delete</a>

                @csrf
                @method('DELETE')

                
            </form>
        </td>
    </tr>
    @endforeach
    </table> 

 
    





    <!-- ************************************************ -->

    <!-- *********************************************************** -->
@endsection