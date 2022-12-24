@extends('lipstick.layout')
@section('content')
<div class="pull-left">
    <h2>Cosmetics Crud Functionality</h2>
</div>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-success" href="/lipstick/create">Add new cosmetic!</a>
        </div>
    </div>
</div>

@if($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>NO</th>
        <th>BrandName</th>
        <th>Colour</th>
        <th>Shade</th>
        <th>Price</th>
        <th>MadeIn</th>
        <th>Image</th>
        <th width="280px">Action</th>
    </tr>

    @foreach($lipstick as $lips)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $lips->BrandName }}</td>
        <td>{{ $lips->Colour }}</td>
        <td>{{ $lips->Shade }}</td>
        <td>{{ $lips->Price }}</td>
        <td>{{ $lips->MadeIn }}</td>
        <td></td>
        <td>
            <!-- <form action="#" method="POST"> -->
                <a class="btn btn-info" href="#">Show</a>
                <a class="btn btn-info" href="/lipstick/edit{{$lips->id}}">Edit</a>

                <!-- @csrf -->
                <!-- @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button> -->
   
            </form>
        </td>
    </tr>
    @endforeach
  
</table>
@if($lipstick->count())
    {{$lipstick->links('pagination::bootstrap-4')}}
    @else
    <p class="text-center">No more products to show!</p>
    @endif







    <!-- ************************************************ -->
    @if($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>NO</th>
        <th>BrandName</th>
        <th>Colour</th>
        <th>Shade</th>
        <th>Price</th>
        <th>MadeIn</th>
        <th>Image</th>
        <th width="280px">Action</th>
    </tr>

    @foreach($lipstick as $lips)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $lips->BrandName }}</td>
        <td>{{ $lips->Colour }}</td>
        <td>{{ $lips->Shade }}</td>
        <td>{{ $lips->Price }}</td>
        <td>{{ $lips->MadeIn }}</td>
        <td></td>
        <td>
            <!-- <form action="#" method="POST"> -->
                <a class="btn btn-info" href="#">Show</a>
                <a class="btn btn-info" href="/lipstick/edit{{$lips->id}}">Edit</a>

                <!-- @csrf -->
                <!-- @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button> -->
   
            </form>
        </td>
    </tr>
    @endforeach
  
</table>
@if($lipstick->count())
    {{$lipstick->links('pagination::bootstrap-4')}}
    @else
    <p class="text-center">No more products to show!</p>
    @endif
    <!-- *********************************************************** -->
@endsection