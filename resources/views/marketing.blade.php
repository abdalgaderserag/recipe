<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <div class="header" style="background-image: url('images/pexels-photo-1565982.jpeg')">
    </div>

    <div style="height: 860px">
    </div>

    <div style="width: 100%;display: flex;flex-wrap: wrap">
        <div style="width: 40%;height:600px;background-image: url('images/food/pexels-photo-1633578.jpeg');background-position: center;background-size: cover;"></div>
        <div style="width: 60%;height: 600px;background-image: url('images/food/pexels-photo-461198.jpeg');background-position: center;background-size: cover;"></div>
        <div style="width: 60%;height: 600px;background-image: url('images/food/pexels-photo-376464.jpeg');background-position: center;background-size: cover;"></div>
        <div style="width: 40%;height:600px;background-image: url('images/food/pexels-photo-255501.jpeg');background-position: center;background-size: cover;"></div>
    </div>
    <img src="images/fb40088c908451dd0fb1e904d43df5a8.jpg" style="width: 100%" alt="">
    <div style="width: 100%;height: 142px;background-color: #383838;margin-top: -4px;">

    </div>
</div>
</body>
</html>
