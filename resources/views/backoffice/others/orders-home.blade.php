@extends('layout')

@section('title')
    Backoffice - {{$tomato}}
@endsection

@section('content')

    @switch($tomato)
        @case('products')
            <h1><a href="/backoffice/products">Product list</a> | <a href="/backoffice/orders">Orders</a> | <a href="/backoffice/order_product">Order product</a> | <a href="/backoffice/customers">Customers</a> | <a href="/backoffice/categories">Categories</a></h1>

            <div class="containerAll">
                @foreach($products as $key => $product)
                    <div class="containerItem">
                        <div><img class="imgCatalog" src="{{$product->image_url}}" alt="Photo of {{$product->name}}">
                            <p class="linkToDetails"><a href="/backoffice/{{$tomato}}/{{$product->id}}/edit">
                                    <button>Edit</button>
                                </a></p>
                            <form method="post" action="/backoffice/{{$tomato}}/{{$product->id}}" class="linkToDetails">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button>Delete</button>
                            </form>
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
            @break

        @case('orders')
            <h1>Product list</h1> <a href="/backoffice/create">
                <button>Create new Product</button>
            </a>
            <div class="containerAll">
                @foreach($products as $key => $product)
                    <div class="containerItem">
                        <div><img class="imgCatalog" src="{{$product->image_url}}" alt="Photo of {{$product->name}}">
                            <p class="linkToDetails"><a href="/backoffice/{{$product->id}}/edit">
                                    <button>Edit</button>
                                </a></p>
                            <form method="post" action="/backoffice/{{$product->id}}" class="linkToDetails">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button>Delete</button>
                            </form>
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
            @break

        @default

    @endswitch
@endsection
