@extends('layout')


@section('title')
    Fiche du produit {{$id}}
@endsection


@section('header')
    @parent
    <a href="/backoffice/products">Back</a>
@endsection

@section('content')
    <h1>Edit Product</h1>
    <div class="containerDetail">
        <form method="POST" action="/backoffice/products/{{$product->id}}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div><img src="{{$product->image_url}}" alt="Photo of iPhone" height="400"></div>
            <label>Photo URL:<textarea type="text" name="image_url" cols="26">{{$product->image_url}}</textarea></label>
            <br><br>
            <div><label for="name">Name: {{$product->name}}</label>
                <input type="text" name="name" size="30" value="{{$product->name}}">
                <br><br>
                <label for="id">Product id: {{$product->id}}</label>
                <input type="hidden" name="id" size="30" value="{{$product->id}}">
                <br><br>
                <label for="description">Description: {{$product->description}}</label><br>
                <textarea type="text" cols="26" name="description">{{$product->description}}</textarea>
                <br><br>
                <label for="price">Price: {{$product->price}}</label>
                <input type="text" name="price" size="30" value="{{$product->price}}">  (in cents)
                <br><br>
                <label for="weight">Weight: {{$product->weight}}g</label>
                <input type="text" name="weight" size="30" value="{{$product->weight}}">
                <br><br>
                @if($product->available =='1')
                    <label for="available">Product availability: Available</label>
                @else
                    <label for="available" class="notAvailable">Product availability: Not available</label>
                @endif
                <input type="text" name="available" size="30" value="{{$product->available}}">(1-Available, 0-Not available)
                <br><br>
                <label for="stock">Quantity in stock: {{$product->stock}}</label>
                <input type="text" name="stock" size="30" value="{{$product->stock}}">
                <br><br>
                <label for="category_id">Category: {{$product->category_id}}</label>
                <input type="text" name="category_id" size="30" value="{{$product->category_id}}">
            </div>
            <div class="validationButtonContainer">
                <button type="submit" id="validationButton">Confirm</button>
            </div>
            <br>
        </form>
    </div>
@endsection
