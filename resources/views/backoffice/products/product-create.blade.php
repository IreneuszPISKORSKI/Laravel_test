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
                <label>Photo URL:
                    <textarea
                        class="@error('image_url') inputRed @enderror"
                        type="text" name="image_url"
                        cols="26">{{ old('image_url') }}</textarea></label>
                @error('image_url'))
                <p class="errorRed">{{ $errors->first('image_url') }}</p>
                @enderror
                    <br><br>

                <label>Name:<input
                        type="text"
                        name="name"
                        size="30"
                        class="@error('name') inputRed @enderror"
                        value="{{ old('name') }}"
                    ></label>
                @error('name')
                <p class="errorRed">{{ $errors->first('name') }}</p>
                @enderror

                <br><br>
                <label>Description:
                    <textarea
                        type="text"
                        cols="26"
                        name="description"
                        class="@error('description') inputRed @enderror">{{ old('description') }}</textarea></label>
                @error('description')
                <p class="errorRed">{{ $errors->first('description') }}</p>
                @enderror
                <br><br>
                <label>Price:<input
                        type="text"
                        name="price"
                        size="30"
                        value="{{ old('price') }}"
                        class="@error('price') inputRed @enderror">cents</label>
                @error('price')
                <p class="errorRed">{{ $errors->first('price') }}</p>
                @enderror
                <br><br>
                <label>Weight:<input
                        type="text"
                        name="weight"
                        size="30"
                        value="{{ old('weight') }}"
                        class="@error('weight') inputRed @enderror">g</label>
                @error('weight')
                    <p class="errorRed">{{ $errors->first('weight') }}</p>
                @enderror
                <br><br>
                <label>Product availability:<input
                        type="text"
                        name="available"
                        size="30"
                        value="{{ old('available') }}"
                        class="@error('available') inputRed @enderror">(1-Available, 0-Not available)</label>
                @error('available')
                    <p class="errorRed">{{ $errors->first('available') }}</p>
                @enderror
                <br><br>
                <label>Quantity in stock:<input
                        type="text"
                        name="stock"
                        size="30"
                        value="{{ old('stock') }}"
                        class="@error('stock') inputRed @enderror"></label>
                @error('stock')
                    <p class="errorRed">{{ $errors->first('stock') }}</p>
                @enderror
                <br><br>
                <label>Category:<input
                        type="text"
                        name="category_id"
                        size="30"
                        value="{{ old('category_id') }}"
                        class="@error('category_id') inputRed @enderror"> (1-3)</label>
                @error('category_id')
                    <p class="errorRed">{{ $errors->first('category_id') }}</p>
                @enderror
            </div>
            <div class="validationButtonContainer">
                <button type="submit" id="validationButton">Confirm</button>
            </div>
        </form>
    </div>
@endsection
