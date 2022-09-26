@extends('layout')


@section('title')
    Fiche du produit {{$product->id}}
@endsection


@section('header')
    @parent
    <a href="/product-list">Back</a>
@endsection

@section('content')
<h1>Product detail</h1>
<div class="containerDetail">
    <div><img src="{{$product->image_url}}" alt="Photo of {{$product->name}}" height="400"></div>
    <div><h3>Name: {{$product->name}}</h3>
        <p>Description: {{$product->description}}</p>
        <p>Price: {{$product->price}}</p>
{{--        <p>Price:{{formatPrice($product->price)}}</p>--}}
        <p>Weight: {{$product->weight}}g</p>
        @if($product->available =='1')
            <p>Product availability: Available</p>
        @else
            <p class="notAvailable">Product availability: Not available</p>
        @endif
        <p>Quantity in stock: {{$product->stock}}</p>
    </div>
</div>
@endsection
