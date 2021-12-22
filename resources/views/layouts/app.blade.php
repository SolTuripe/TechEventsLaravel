<!doctype html>
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
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{asset('events-css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('events-css/carousel.css')}}" rel="stylesheet"> <!-- link boostrap??????-->
</head>
<body>
   
    <!--<script src="{{asset('events-css/bootstrap.bundle.min.js')}}" ></script> -->
   <!-- <script src="./plantillaBoostrap_html_files/bootstrap.bundle.min.js" ></script> -->
   @auth
        <section class="alert alert-secondary">
         <a class="btn btn-outline-primary" href="{{ route('events.create') }}">New Instant</a>
            
         <a class="btn btn-outline-primary" href="{{ route('home') }}">My Instants</a>
        </section>
       
    @endauth
    
    <div id="app">
            @yield('content')
            
    </div>
</body>
</html>
