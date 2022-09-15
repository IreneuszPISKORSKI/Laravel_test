@extends('layout')


@section('title')
    Fiche du produit {{$id}}
@endsection

@section('content')
    <h1>Fiche du produit {{$id}} </h1>

    <a href="/">Home</a>
    <br>
    <a href="/product-list">Back</a>
@endsection
