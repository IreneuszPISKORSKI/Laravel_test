@extends('layout')


@section('title')
    Add new product
@endsection

@section('header')
    @parent
    <a href="/backoffice/products">Back</a>
@endsection

@section('content')
    <h1 class="centerThings">Create Product</h1>
    <div class="containerDetail">
        <form method="POST" action="/backoffice/products/create">
            {{ csrf_field() }}
            <div>
                <label>Photo URL:<textarea type="text" name="image_url" cols="26"></textarea></label>
                <br><br>
                <label>Name:<input type="text" name="name" size="30"></label>
                <br><br>
                <label>Description:<textarea type="text" cols="26" name="description"></textarea></label>
                <br><br>
                <label>Price:<input type="text" name="price" size="30">cents</label>
                <br><br>
                <label>Weight:<input type="text" name="weight" size="30">g</label>
                <br><br>
                <label>Product availability:<input type="text" name="available" size="30">(1-Available, 0-Not available)</label>
                <br><br>
                <label>Quantity in stock:<input type="text" name="stock" size="30"></label>
                <br><br>
                <label>Category:<input type="text" name="category_id" size="30"></label>
            </div>
            <div class="validationButtonContainer">
                <button type="submit" id="validationButton">Confirm</button>
            </div>
        </form>
    </div>
@endsection
