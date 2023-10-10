<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @stack('meta')

        <title>MSMEPCI</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('/public')}}/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="{{asset('/public')}}/assets/css/swiper.min.css" />
        <link rel="stylesheet" href="{{asset('/public')}}/assets/css/style.min.css" />
        @stack('styles')
    </head>
    <body>
        {{-- @include('layouts.header') --}}
        <main>
            @yield('content')
        </main>
        {{-- @include('layouts.footer') --}}
        @stack('scripts')
        <script src="{{asset('/public')}}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('/public')}}/assets/libs/swiper/swiper-bundle.min.js"></script>
    </body>
</html>
