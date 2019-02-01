@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4">
                    <img class="product_img"src="{{ asset($product_images) }}">
                    <div><a href="#">{{ $product->name }}</a></div>
                    <span>{{ $product->price }}</span>
                    <p><a class="btn btn-dark" href="#" role="button">Add to cart</a></p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
