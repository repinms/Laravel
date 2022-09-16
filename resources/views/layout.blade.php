<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <div class="wrapper">
        @yield('content')
    </div>
    <script src="{{url('js/bootstrap.js')}}"></script>
</body>
</html>