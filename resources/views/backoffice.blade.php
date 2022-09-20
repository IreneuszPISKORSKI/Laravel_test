@extends('layout')

@section('title')
    Backoffice
@endsection

@section('content')
    <h1>Product list</h1> <a href="/backoffice/create"><button>Create new Product</button></a>
        <div class="containerAll">
            @foreach($products as $key => $product)
                <div class="containerItem">
                    <div><img class="imgCatalog" src="{{$product->image_url}}" alt="Photo of iPhone">
                        <p class="linkToDetails"><a href="/backoffice/product/{{$product->product_id}}"><button>Edit</button></a></p>
                        <p class="linkToDetails"><a href="/backoffice/delete/{{$product->product_id}}"><button>Delete</button></a></p>   {{-------------------------------}}
                    </div>
                    <div class="descriptionCatalog"><h3>Name: {{$product->name}}</h3>
                        <p>Description: {{$product->description}}</p>
                        {{--                <p>Price:{{formatPrice($product->price)}}</p>--}}
                        <p>Price: {{$product->price}}</p>
                        <p>Weight: {{$product->weight}}g</p>
                    </div>
                </div>
            @endforeach
        </div>
@endsection
