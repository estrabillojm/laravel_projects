@extends('layouts.app')
@section('content')

<style>
    .gar-d{
        font-size:100px;
    }

    .box{
        color:white;
    }
</style>
<div class="container col-md-12 row">
  @if(session('msg'))
    <div class="alert alert-success">
      <p class="lead text-success">{{ session('msg') }}</p>
    </div>
  @endif

  <div class="col-md-6">
    <p class="text-justify gar-d"><span class="font-weight-bold text-primary">GARBES</span>  <br> <div class="p-2 gar-d box text-right bg-primary"> DIZON </div></p>
  </div>
  <div class="col-md-6">
    <h3 class="text-primary">Garbes Dizon</h3>
    <hr>
    <form action="{{ route('product.store') }}" method="POST">
      @csrf
      <div class="row">
        
        <div class="form-group col-sm-12">
        <label for="">Product Name*</label>
          <input type="text" required class="btn-block form-control" name="name" placeholder="Product Name*">
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="form-group col-sm-12">
          <label for="">Product Description*</label>
          <textarea type="text" required class="btn-block form-control" rows="4" name="description" placeholder="Product Description*"></textarea>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="form-group col-sm-12">
          <label for="">Product Quantity*</label>
          <input type="number" required class="btn-block form-control" name="quantity" placeholder="Product Quantity*" min=0>
        </div>
      </div>

      <hr>
      <div class="row">
        <div class="form-group col-sm-12">
          <label for="">Product Price*</label>
          <input type="number" required min=0 class="btn-block form-control" name="price" placeholder="Product Price*">
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="form-group col-sm-12">
          <label for="">Product Manufacturer*</label>
          <input type="text" required class="btn-block form-control" name="manufacturer" placeholder="Product Manufacturer*">
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="form-group col-sm-5">
          <input type="submit" value="Submit" class="btn btn-block btn-primary">
        </div>
      </div>

    </form>
  </div>
</div>

@endsection