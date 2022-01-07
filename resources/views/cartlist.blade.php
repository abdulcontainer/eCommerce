@extends('master')
@section('content')
<div class="custom-product container">
    <!--Trending Products-->
    <div class="col-md-12 list">
        <div class="trending-product">
            <h3>Cart List</h3>
            <div class="">
                @foreach ($products as $item)
                <div class="row searched-item cart-list-devider">
                  <div class="col-lg-4">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-img" src="{{$item->gallery}}">
                    </a>
                  </div>
                  <div class="col-lg-4">
                    <div class="">
                        <h3>{{$item->name}}</h3>
                        <h5>{{$item->description}}</h5>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <a href="remove-cart/{{$item->cart_id}}" class="btn btn-warning">Remove from Cart</a>
                  </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection