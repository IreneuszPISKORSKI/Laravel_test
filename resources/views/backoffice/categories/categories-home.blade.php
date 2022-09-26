@extends('layout')

@section('title')
    Backoffice - Categories
@endsection

@section('content')
    <a href="/backoffice/products"><button>Products</button></a>

    <div class="containerAll">
        @foreach($data as $category)
            <div>
                <h3>Category: {{$category->category_name}}</h3>
                @foreach($category->products as $product)
                    <div class="containerItem">
                        <div><img class="imgCatalog" src="{{$product->image_url}}" alt="Photo of {{$product->name}}">
                        </div>
                        <div class="descriptionCatalog"><h3>Name: {{$product->name}}</h3>
                            <p>Description: {{$product->description}}</p>
                            <p>Price: {{$product->price}}</p>
                            <p>Weight: {{$product->weight}}g</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
