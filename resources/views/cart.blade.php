@extends('layout')

@section('title')
    Panier
@endsection

@section('content')
    <h1>Panier</h1>

    <a href="/">Home</a>
    <br>
    <a href="/product-list">Product list</a>
@endsection

@section('footer')
    @parent
    <p>Created by me</p>
@endsection
