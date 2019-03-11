<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- meta -->
        @yield('meta')

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">

        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Css Cdns -->
        @stack('css_cdn')
        <!-- Styles -->
        <link href="{{ mix('app.css', 'frontend') }}" rel="stylesheet">
        @stack('css')

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-52997245-18"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-52997245-18');
        </script>
    </head>

    <body>
        <div id="app" v-cloak>
            @yield('content')
        </div>

        <!-- Js -->
        @stack('js_cdn')
        <script src="{{ mix('manifest.js', 'frontend') }}"></script>
        <script src="{{ mix('vendor.js', 'frontend') }}"></script>
        <script src="{{ mix('app.js', 'frontend') }}"></script>
        @stack('js')
    </body>

</html>
