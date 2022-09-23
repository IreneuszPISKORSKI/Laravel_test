@extends('layout')

@section('title')
    Backoffice - Main
@endsection

@section('content')

    @switch($tomato)
        @case('products')
            <h1><a href="/backoffice/others/products">Product list</a>
                | <a href="/backoffice/others/orders">Orders</a>
                | <a href="/backoffice/others/order_product">Order product</a>
                | <a href="/backoffice/others/customers">Customers</a>
                | <a href="/backoffice/others/categories">Categories</a></h1>
            <a href="/backoffice/{{$tomato}}/create">
                <button>Create new Product</button>
            </a>
            <div class="containerAll">
                @foreach($dataArray as $key => $product)
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
            <h1><a href="/backoffice/others/products">Product list</a>
                | <a href="/backoffice/others/orders">Orders</a>
                | <a href="/backoffice/others/order_product">Order product</a>
                | <a href="/backoffice/others/customers">Customers</a>
                | <a href="/backoffice/others/categories">Categories</a></h1>
            <a href="/backoffice/{{$tomato}}/create">
                <button>Create new Order</button>
            </a>
                    @foreach($dataArray as $order)
                        <div>
                            <h3>Order id: {{$order->id}}</h3>
{{--    {{$order->customers->id}}  ----------------------------------------------------------------------------------------}}
{{--                            @foreach($order as $product)--}}
{{--                                <p>Product id: {{$product->order_product->id}}</p>--}}
{{--                                    | Quantity: {{$product->quantity}}--}}
{{--                                    | Total Price: {{$product->total_product_price}}</p>--}}
{{--                            @endforeach--}}
                        </div>
                    @endforeach
            @break

        @case('customers')
            <h1><a href="/backoffice/others/products">Product list</a>
                | <a href="/backoffice/others/orders">Orders</a>
                | <a href="/backoffice/others/order_product">Order product</a>
                | <a href="/backoffice/others/customers">Customers</a>
                | <a href="/backoffice/others/categories">Categories</a>
            </h1>
            <a href="/backoffice/{{$tomato}}/create">
                <button>Add new customer</button>
            </a>
            @foreach($dataArray as $key => $product)
                <div>
                    <h3>Customer nb: {{$product->id}}</h3>
                    <p>First name: {{$product->first_name}}
                        | Last name: {{$product->last_name}}
                        | Adderss: {{$product->address}}</p>
                </div>
            @endforeach
            @break

        @case('order_product')
            <h1><a href="/backoffice/others/products">Product list</a>
                | <a href="/backoffice/others/orders">Orders</a>
                | <a href="/backoffice/others/order_product">Order product</a>
                | <a href="/backoffice/others/customers">Customers</a>
                | <a href="/backoffice/others/categories">Categories</a>
            </h1>
            <a href="/backoffice/{{$tomato}}/create">
                <button>Add new product to order</button>
            </a>

            @foreach($dataArray as $key => $order)
                <div>
                    <h3>Order id: {{$key}}</h3>

                @foreach($order as $product)
                    <p>Product id: {{$product->id}}
                        | Quantity: {{$product->quantity}}
                        | Total Price: {{$product->total_product_price}}</p>
                    @endforeach
                </div>
            @endforeach

            @break

        @case('categories')
            <h1><a href="/backoffice/others/products">Product list</a>
                | <a href="/backoffice/others/orders">Orders</a>
                | <a href="/backoffice/others/order_product">Order product</a>
                | <a href="/backoffice/others/customers">Customers</a>
                | <a href="/backoffice/others/categories">Categories</a>
            </h1>
            <a href="/backoffice/{{$tomato}}/create">
                <button>Add new category</button>
            </a>

            @foreach($dataArray as $key => $product)
                <div>
                    <h3>Category nb: {{$product->id}}</h3>
                    <p>Category name: {{$product->category_name}}</p>
                </div>
            @endforeach

            @break

        @default
        <p>Something is not yes {{$tomato}}</p>

    @endswitch
@endsection
