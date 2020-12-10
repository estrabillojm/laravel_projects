@extends('layouts.app')
@section('content')
<div class="container">
  <div class="col-md-6">
    <h3 class="text-primary text-uppercase">Edit {{ $product -> name}}</h3>
    <hr>
    <form action="{{ route('product.update', ['id'=> $product->id]) }}" method="POST">
      @csrf
      <div class="row">
        <div class="form-group col-sm-12">
          <input type="text" value="{{ old('name', $product->name )}}"  required class="btn-block form-control" name="name" placeholder="Product Name*">
        </div>
      </div>

      <div class="row">
        <div class="form-group col-sm-12">
          <textarea class="btn-block form-control" rows="4" required name="description" placeholder="Product Description*">{{ old('description', $product->description )}}</textarea>
        </div>
      </div>

      <div class="row">
        <div class="form-group col-sm-12">
          <input type="number" value="{{ old('quantity', $product->quantity)}}" required class="btn-block form-control" name="quantity" placeholder="Product Quantity*" min=0>
        </div>
      </div>


      <div class="row">
        <div class="form-group col-sm-12">
          <input type="number" value="{{ old('price', $product->price)}}" required min=0 class="btn-block form-control" name="price" placeholder="Product Price*">
        </div>
      </div>

      <div class="row">
        <div class="form-group col-sm-12">
          <input type="text" value="{{ old('manufacturer', $product->manufacturer)}}" required class="btn-block form-control" name="manufacturer" placeholder="Product Manufacturer*">
        </div>
      </div>

      <div class="row">
        <div class="form-group col-sm-5 offset-sm-7">
          <input type="submit" value="Update" class="btn btn-block btn-primary">
        </div>
      </div>

    </form>
  </div>
</div>

@endsection