@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="detail-img" src="{{$products['gallery']}}" alt="">
            </div>
            <div class="col-sm-6">
                <h4><a href="{{route('/')}}">Go Back</a></h4>
                <h2>Name: {{$products['name']}}</h2>
                <h4>Price: {{$products['price']}}</h4>
                <h4>Category: {{$products['category']}}</h4>
                <h4>Description: {{$products['description']}}</h4>
                <br>
                <form action="{{route('add-to-cart')}}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$products['id']}}">
                    <button class="btn btn-success">Add To Cart</button> <br><br>
                </form>
                
                <button class="btn btn-primary">Buy Now</button><br><br>
            </div>
        </div>
    </div>
@endsection