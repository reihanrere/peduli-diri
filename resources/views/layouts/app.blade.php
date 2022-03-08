<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @yield('cssOrJs')
    <link rel="stylesheet"
    href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.css"
    type="text/css" />
    <link href="https://api.mapbox.com/mapbox-assembly/v1.3.0/assembly.min.css" rel="stylesheet" />
    <link href="https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css" rel="stylesheet" />


    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/mapbox.css') }}">
    
</head>

<body>
    <header class="foi-header {{ Route::getCurrentRoute()->uri() == '/' ? 'landing-header' : '' }}">
        <div class="container">
            @include('layouts.navbar')
            @yield('header')
        </div>
    </header>
    @yield('content')
    @include('layouts.footer')
    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/popper.js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>

</body>

</html>
