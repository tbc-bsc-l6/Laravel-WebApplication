@extends('product.layout')
@section('content')
<h4>PRODUCT</h4>
<table class="table table-bordered">
    <tr>
        <th>Title</th>
        <th>Creator</th>
        <th>category_is</th>
        <th>Pages</th>
        <th>Price</th>
        <th>Image</th>
       
    </tr>

    @foreach($product as $booc)
    <tr>
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
    @if(auth()->user())
    <a class="btn btn-info" href="/product">GO BACK</a>
    @else
    <a class="btn btn-info" href="/productguest">GO BACK</a>
    @endif










@endsection