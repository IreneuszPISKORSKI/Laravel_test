@extends('layout')


@section('title')
    Edit product nr {{$dataArray->id}}
@endsection


@section('header')
    @parent
    <a href="/backoffice/others/products">Back</a>
@endsection

@section('content')
    <h1>Edit Product</h1>
    <div class="containerDetail">
        <form method="POST" action="/backoffice/others/products/{{$dataArray->id}}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div><img src="{{$dataArray->image_url}}" alt="Photo of iPhone" height="400"></div>
            <label>Photo URL:<textarea type="text" name="image_url" cols="26">{{$dataArray->image_url}}</textarea></label>
            <br><br>
            <div><label for="name">Name: {{$dataArray->name}}</label>
                <input type="text" name="name" size="30" value="{{$dataArray->name}}">
                <br><br>
                <label for="id">Product id: {{$dataArray->id}}</label>
                <input type="hidden" name="id" size="30" value="{{$dataArray->id}}">
                <br><br>
                <label for="description">Description: {{$dataArray->description}}</label><br>
                <textarea type="text" cols="26" name="description">{{$dataArray->description}}</textarea>
                <br><br>
                <label for="price">Price: {{$dataArray->price}}</label>
                <input type="text" name="price" size="30" value="{{$dataArray->price}}">  (in cents)
                <br><br>
                <label for="weight">Weight: {{$dataArray->weight}}g</label>
                <input type="text" name="weight" size="30" value="{{$dataArray->weight}}">
                <br><br>
                @if($dataArray->available =='1')
                    <label for="available">Product availability: Available</label>
                @else
                    <label for="available" class="notAvailable">Product availability: Not available</label>
                @endif
                <input type="text" name="available" size="30" value="{{$dataArray->available}}">(1-Available, 0-Not available)
                <br><br>
                <label for="stock">Quantity in stock: {{$dataArray->stock}}</label>
                <input type="text" name="stock" size="30" value="{{$dataArray->stock}}">
                <br><br>
                <label for="category_id">Category: {{$dataArray->category_id}}</label>
                <input type="text" name="category_id" size="30" value="{{$dataArray->category_id}}">
            </div>
            <div class="validationButtonContainer">
                <button type="submit" id="validationButton">Confirm</button>
            </div>
            <br>
        </form>
    </div>
@endsection
