@extends('layout')

@section('title')
    Backoffice - Main
@endsection

@section('header')
    @parent
    <a href="/backoffice/others/products">Product list</a>
        | <a href="/backoffice/others/orders">Orders</a>
        | <a href="/backoffice/others/customers">Customers</a>
        | <a href="/backoffice/others/categories">Categories</a>
    <br>
@endsection

@section('content')

    @switch($array)
        @case('products')
                        <a href="/backoffice/others/{{$array}}/create">
                            <button>Create new Product</button>
                        </a>
            <div class="containerAll">
                @foreach($dataArray as $key => $product)
                    <div class="containerItem">
                        <div><img class="imgCatalog" src="{{$product->image_url}}" alt="Photo of {{$product->name}}">
                            <p class="linkToDetails"><a href="/backoffice/others/products/{{$product->id}}/edit">
                                    <button>Edit</button>
                                </a></p>
                            <form method="post" action="/backoffice/others/products/{{$product->id}}" class="linkToDetails">
                                @csrf
                                @method('DELETE')
                                <button>Delete</button>
                            </form>
                        </div>
                        <div class="descriptionCatalog"><h3>Name: {{$product->name}}</h3>
                            <p>Description: {{$product->description}}</p>
                            {{--                <p>Price:{{formatPrice($product->price)}}</p>--}}
                            <p>Price: {{$product->price}}</p>
                            <p>Weight: {{$product->weight}}g</p>
                            <p>Category: {{$product->categories->category_name}} </p>
                        </div>
                    </div>
                @endforeach
            </div>
            @break

        @case('orders')
{{--            <a href="/backoffice/others/{{$array}}/create">--}}
{{--                <button>Create new Order</button>--}}
{{--            </a>--}}
                    @foreach($dataArray as $order)
                        <div>
                            <h3>Order id: {{$order->id}}</h3>
                            @foreach($order->order_product as $key => $product)
                                <p> {{$key+1}}. Product name: {{$product->products->name}}
                                    | Quantity: {{$product->quantity}}
                                    | Total Price: {{$product->total_product_price}}
                                    | Category: {{$product->products->categories->category_name}}
                                    | Customer: {{$order->customers->first_name}}
                                </p>
                            @endforeach
                        </div>
                    @endforeach
            @break

        @case('customers')
{{--            <a href="/backoffice/others/{{$array}}/create">--}}
{{--                <button>Create new Customer</button>--}}
{{--            </a>--}}
            @foreach($dataArray as $key => $product)
                <div>
                    <h3>Customer nb: {{$product->id}}</h3>
                    <p>First name: {{$product->first_name}}
                        | Last name: {{$product->last_name}}
                        | Adderss: {{$product->address}}
                    </p>
                </div>
            @endforeach
            @break

        @case('categories')
            {{--            <a href="/backoffice/others/{{$array}}/create">--}}
            {{--                <button>Add category</button>--}}
            {{--            </a>--}}
            <div class="containerAll">
            @foreach($dataArray as $category)
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
            @break

        @default
        <p>Something is not yes {{$array}}</p>

    @endswitch
@endsection
