@extends('product.layout')
@section('content')
<div class="pull-left">
    <h2>Products</h2>
</div>

 


@if($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif


<h4>BOOK</h4>
<form type="get" action="/product/sort{orderby}">
    <select name="orderby" id="">
        <option value="" selected="selected">Default sorting</option>
        <option value="price" >Sort By Price</option>
        <option value="PagesorLength">Sort By Page</option>
    </select>
    <button type="submit" name="button1" class="btn btn-info">Sort</button>
</form>
<div style="overflow-x:auto;">
<table class="table table-bordered">
    <tr>
        <th>S.No.</th>
        <th>Title</th>
        <th>Creator</th>
        <th>Category_id</th>
        <th>Pages</th>
        <th>£ Price</th>
        <th>Image</th>
        
    </tr>

    @foreach($book as $booc)
    <tr>
         <td>{{ ++$i }}</td>
        <td>{{ $booc->Title }}</td>
        <td>{{ $booc->Creator }}</td>
        <td>{{ $booc->category_id }}</td>
        <td>{{ $booc->PagesorLength }}</td>
        <td>{{ $booc->Price }}</td>
        <td>
        @if($booc->Image == null)
        <img src="../images/uploads/empty.jpg"  width="100px" height="100px">
        @else
        <img src="{{ asset('/images/uploads/'.$booc->Image)}}" width="100px" height="100px" alt="">
        @endif
        </td>
        <td>
       
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
<form type="get" action="/product/sort2{order}">
    <select name="order" id="">
        <option value="" selected="selected">Default sorting</option>
        <option value="price">Sort By Price</option>
        <option value="PagesorLength">Sort By Length</option>
    </select>
    <button type="submit" class="btn btn-info">SORT</button>
</form>
    <table class="table table-bordered">
    <tr>
        <th>S.No.</th>
        <th>Title</th>
        <th>Creator</th>
        <th>Category_id</th>
        <th>Length(min)</th>
        <th>£ Price</th>
        <th>Image</th>
        
    </tr>

    @foreach($movie as $mov)
    <tr>
        <td>{{ ++$a }}</td>
        <td>{{ $mov->Title }}</td>
        <td>{{ $mov->Creator }}</td>
        <td>{{ $mov->category_id }}</td>
        <td>{{ $mov->PagesorLength }}</td>
        <td>{{ $mov->Price }}</td>
        <td>
        @if($mov->Image == null)
        <img src="../images/uploads/empty.jpg"  width="100px" height="100px">
        @else
        <img src="{{ asset('/images/uploads/'.$mov->Image)}}" width="100px" height="100px" alt="">
        @endif
        </td>
        <td>
          
        </td>
    </tr>
    @endforeach
    </table> 
 
    
     @if(count($movie))
     {!! $movie->links('pagination::bootstrap-4') !!}
    @else
    <p class="text-center">No more products to show!</p>
    @endif
    </div>

@endsection