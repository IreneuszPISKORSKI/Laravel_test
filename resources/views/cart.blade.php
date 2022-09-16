@extends('layout')

@section('title')
    Panier
@endsection

@section('content')
    <h1>Panier</h1>

    <div>
        <div>Product</div>
        <div>Price per unit</div>
        <div>Quantity</div>
        <div>Total</div>
    </div>
@endsection

@section('footer')
    @parent
    <p>Created by me</p>
@endsection
