@extends('layout')

@section('title')
    Backoffice - {{$tomato}}
@endsection

@section('content')
    <h1><a href="/backoffice/others/products">Product list</a> | <a href="/backoffice/others/orders">Orders</a> | <a
            href="/backoffice/others/order_product">Order product</a> | <a
            href="/backoffice/others/customers">Customers</a> | <a href="/backoffice/others/categories">Categories</a>
    </h1>
    <a href="/backoffice/{{$tomato}}/create">
        <button>Add new customer</button>
    </a>
        @foreach($products as $key => $product)
            <div>
                <h3>Customer nb: {{$product->id}}</h3> <p>First name: {{$product->first_name}} | Last name: {{$product->last_name}} | Adderss: {{$product->address}}</p>
            </div>
        @endforeach
@endsection
