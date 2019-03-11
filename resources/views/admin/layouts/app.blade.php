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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <!-- Css Cdns -->
        @stack('css_cdn')
        <link href="{{ mix('app.css', 'backend') }}" rel="stylesheet">
        @stack('css')
    </head>

    <body>
        <div id="app" v-cloak>

            @include('admin.layouts.navbar')

            @if (Session::has('message'))
                <alert-bar message="{{ Session::get('message') }}"></alert-bar>
            @endif

            <main class="py-4">
                @yield('content')
            </main>
        </div>

        <!-- Js -->
        @stack('js_cdn')
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.6/dist/vue.js"></script>
        <script src="{{ mix('manifest.js', 'backend') }}"></script>
        <script src="{{ mix('vendor.js', 'backend') }}"></script>
        <script src="{{ mix('app.js', 'backend') }}"></script>
        @stack('js')
    </body>

</html>
