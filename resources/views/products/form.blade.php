@extends('layouts.app')

@section('content')

<form class="form-horizontal" method="POST" action="/newProduct">
  {{ csrf_field() }}

  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

    <label for="name" class="control-label">Product Name:</label>
    <input type="text" id="name" name="name" class="form-control">

  </div>

  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

    <label for="price" class="control-label">Product Price:</label>
    <input type="text" id="price" name="price" class="form-control">

  </div>

  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

    <label for="product_details" class="control-label">Product Price:</label>
    <input type="text" id="product_details" name="product_details" class="form-control">

  </div>
</form>

@endsection
