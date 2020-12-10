@extends('layouts.app')
@section('content')
<style>

</style>
<div class="container">

<div class="col-sm-12">
  @if(session('msg'))
  <div class="alert alert-success">
    {{ session('msg') }}
  </div>
  @endif

  @if(session('msg_update'))
  <div class="alert alert-info">
    {{ session('msg_update') }}
  </div>
  @endif


  @if(session('msg_delete'))
  <div class="alert alert-danger">
    {{ session('msg_delete') }}
  </div>
  @endif
</div>
<div class="col-md-12">
  <div class="row">
    @foreach($products as $product)
    <div class="col-md-4">
    <div class="card-deck">

      <!-- Card -->
      <div class="card mb-4">

        <!--Card image-->
        <div class="view overlay">
          <img class="card-img-top" src="https://cdn-a.william-reed.com/var/wrbm_gb_food_pharma/storage/images/publications/food-beverage-nutrition/foodnavigator-asia.com/headlines/markets/hong-kong-protests-supermarket-sales-increase-while-other-retail-sectors-feel-the-pinch/10085144-1-eng-GB/Hong-Kong-protests-Supermarket-sales-increase-while-other-retail-sectors-feel-the-pinch_wrbm_large.jpg"
            alt="Card image cap">
          <a href="#!">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <!--Card content-->
        <div class="card-body">

          <!--Title-->
          <h4 class="card-title">{{ $product -> name}}</h4>
          <!--Text-->
          <p class="card-text">
            Description:
            {{ $product -> description }} </br>
            Price:
            {{ $product -> price }} </br>
            Quantity:
            {{ $product -> quantity }} </br>
            Manufacturer:
            {{ $product -> manufacturer }} </br>
          </p>
          <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
          <hr>
          <a href="{{ route('product.edit',['id'=>$product->id]) }}" class="btn btn-info">Edit</a>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalLong{{ $product->id }}">
            Delete
          </button>

          <div class="modal fade" id="exampleModalLong{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
            
                    <div class="modal-body">
                      <p class="lead">Delete {{ $product->name }} ??</p>
                    </div>
                    <div class="modal-footer">
                      <form action="{{ route('product.destroy',['id'=>$product->id]) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                      <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
        </div>
  </div>
</div>
</div>

@endforeach


</div>

@endsection