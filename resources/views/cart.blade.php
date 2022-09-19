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


    @foreach($productsInCart as $key => $product)
        @if($product['quantity']>0)
        <div class="containerCart">
            <div id="containerCartName">{{$products[$key]['name']}}</div>
            <div>{{$products[$key]['price']}}</div>
            <div>{{$product['quantity']}}</div>
            <div>{{$products[$key]['price']*$product['quantity']}}</div>
        </div>
        @endif
    @endforeach
@endsection

@section('footer')
    @parent
    <p>Created by me</p>
@endsection
