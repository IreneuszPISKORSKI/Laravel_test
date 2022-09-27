@extends('layout')

@section('title')
    Panier
@endsection

@section('content')
    <h1>Panier</h1>

    <div class="containerCart">
        <div>Product</div>
        <div>Price per unit</div>
        <div>Quantity</div>
        <div>Total</div>
    </div>

        <div class="containerCart">
            <div id="containerCartName">{{$product->name}}</div>
            <div>{{$product->price}}</div>
            <div>{{$productInCart['quantity']}}</div>
            <div>{{$product->price*$productInCart['quantity']}}</div>
        </div>

@endsection

@section('footer')
    @parent
    <p>Created by me</p>
@endsection
