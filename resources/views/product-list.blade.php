@extends('layout')

@section('title')
    Product list
@endsection

@section('content')
    <h1>Product list</h1>
    <div class="containerAll">
    @foreach($products as $key => $product)
        <div class="containerItem">
            <div><img src="{{$product->image_url}}" alt="Photo of iPhone" height="100">
                <a href="/product/{{$product->product_id}}">Details</a>
            </div>
            <div><h3>Name:{{$product->name}}</h3>
                <p>Description:{{$product->description}}</p>
{{--                <p>Price:{{formatPrice($product->price)}}</p>--}}
                <p>Price:{{$product->price}}</p>
                <p>Weight:{{$product->weight}}g</p>
                <label for="quantity">Quantity: <input type="number" name="{{$key}}[quantity]" value="0" min="0"></label>
                <input type="hidden" name="{{$key}}[product_id]" value="{{$product->product_id}}">
            </div>
        </div>

    @endforeach
    </div>
@endsection
