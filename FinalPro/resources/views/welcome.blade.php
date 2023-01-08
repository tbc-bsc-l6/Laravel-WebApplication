@extends('product.layout')
@section('content')
<link href="../welcome.css" rel="stylesheet" type="text/css">
@if($message = Session::get('success'))
                              <div class="alert alert-success">
                                <p>{{ $message }}</p>
                                </div>
                              @endif
                              @if($message = Session::get('error'))
                              <div class="alert alert-danger">
                                <p>{{ $message }}</p>
                                </div>
                              @endif
@endsection