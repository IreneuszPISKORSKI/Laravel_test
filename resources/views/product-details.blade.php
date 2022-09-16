@extends('layout')


@section('title')
    Fiche du produit {{$id}}
@endsection


@section('header')
    @parent
    <a href="/product-list">Back</a>
@endsection

@section('content')
    <?php
    $idItem = \Request::segment(2);

    $product = DB::table ;
    use App\Models\ItemInStock;
    $product = $product[0];
    $name = $product->name;
    $product_id = $product->product_id;
    $price = $product->price;
    $weight = $product->weight;
    $available = $product->available;
    $description = $product->description;
    $stock = $product->stock;
    $category_id = $product->category_id;
    $image_url = $product->image_url;

    $item = new ItemInStock($name, $product_id, $price, $weight, $available, $description, $stock, $category_id, $image_url);
    echo $item->itemDetails();
    ?>
@endsection
