<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <title>@yield('title', 'No title')</title>
</head>

<body>
    <div class="header">
        @section('header')
            @include('includes.header')
        @show
    </div>

    <div class="container">
        @yield('content')
    </div>

    <div class="footer">
        @section('footer')
            @include('includes.footer')
        @show
    </div>
</body>
</html>
