<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="shortcut icon"  href="/favicon.ico">

    <!-- Scripts
    <script src="{{ asset('js/app.js') }}" defer></script>
-->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    -->

    <!-- Themes -->
    <link href="{{ asset('themes/sneaky/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/themes/sneaky/vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/themes/sneaky/vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="/themes/sneaky/vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="/themes/sneaky/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/themes/sneaky/vendors/Magnific-Popup/magnific-popup.css">
    <!-- Themes -->


    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
    <link href="{{ asset('package/open-iconic/font/css/open-iconic-bootstrap.css')}}" rel="stylesheet">
    <!-- include libraries(jQuery, bootstrap) -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
@include('blocks.header')
    <div id="app">
        <div class="container">

        </div>
        <main>
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
    @stack('scripts')
    @stack('jscroll')
</body>
</html>
