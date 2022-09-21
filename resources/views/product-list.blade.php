@extends('layout')

@section('title')
    Product list
@endsection

@section('content')
    <h1>Product list</h1>
    <a href="/product-list"><button>By id</button></a>
    <a href="/product-list/productsByPrice"><button>By price</button></a>
    <a href="/product-list/productsByName"><button>By name</button></a>
    <form action="/cart" method="POST">
        {{ csrf_field() }}
        <div class="containerAll">
            @foreach($products as $key => $product)
                <div class="containerItem">
                    <div><img class="imgCatalog" src="{{$product->image_url}}" alt="Photo of {{$product->name}}">
                        <p class="linkToDetails"><a href="/product/{{$product->id}}">Details</a></p>
                    </div>
                    <div class="descriptionCatalog"><h3>Name: {{$product->name}}</h3>
                        <p>Description: {{$product->description}}</p>
                        {{--                <p>Price:{{formatPrice($product->price)}}</p>--}}
                        <p>Price: {{$product->price}}</p>
                        <p>Weight: {{$product->weight}}g</p>
                        <label for="quantity">Quantity: <input type="number" name="{{$key}}[quantity]" value="0"
                                                               min="0"></label>
                        <input type="hidden" name="{{$key}}[id]" value="{{$product->id}}">
                    </div>
                </div>
            @endforeach
        </div>
        <div class="validationButtonContainer">
            <button type="submit" id="validationButton">Order</button>
        </div>
        <br>
    </form>
@endsection
