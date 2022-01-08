@extends('master')
@section('content')
<div class="custom-product container">
    <!--Trending Products-->
    <div class="col-md-12 list">
        <div class="trending-product">
            <h3>Orders List</h3>
            
            <div class="">
                @foreach ($orders as $item)
                <div class="row searched-item cart-list-devider">
                  <div class="col-lg-4">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-img" src="{{$item->gallery}}">
                    </a>
                  </div>
                  <div class="col-lg-4">
                    <div class="">
                        <h3>{{$item->name}}</h3>
                        <h5>Delivery Status: {{$item->status}}</h5>
                        <h5>Payment Status: {{$item->payment_status}}</h5>
                        <h5>Payment Method: {{$item->payment_method}}</h5>
                        <h5>Delivery Address: {{$item->address}}</h5>
                        <h5>Price: {{$item->price}}</h5>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    
                  </div>
                </div>
                @endforeach
            </div>
            
        </div>
    </div>
</div>
@endsection