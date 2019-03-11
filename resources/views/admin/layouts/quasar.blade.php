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

        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons" rel="stylesheet" type="text/css">
        <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/ionicons@^4.0.0/dist/css/ionicons.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/@mdi/font@^3.0.0/css/materialdesignicons.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/animate.css@^3.5.2/animate.min.css" rel="stylesheet">

        <!-- Css Cdns -->
        @stack('css_cdn')
        <link href="{{ mix('app.css', 'backend') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/quasar@^1.0.0-beta.0/dist/quasar.min.css" rel="stylesheet" type="text/css">
        @stack('css')
    </head>

    <body>
        <div id="app" v-cloak>
            @section('navbar')
            @include('layouts.templates.navbar')
            @show

            <main class="py-4">
                @yield('content')
            </main>
        </div>

        <!-- Js -->
        @stack('js_cdn')
        <script src="https://cdn.jsdelivr.net/npm/quasar@^1.0.0-beta.0/dist/quasar.ie.polyfills.umd.min.js"></script>
        {{-- <script src="https://cdn.jsdelivr.net/npm/vue@latest/dist/vue.min.js"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.6/dist/vue.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/quasar@^1.0.0-beta.0/dist/quasar.umd.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/quasar@^1.0.0-beta.0/dist/lang/pt-br.umd.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/quasar@^1.0.0-beta.0/dist/icon-set/fontawesome-v5.umd.min.js"></script>

        <script src="{{ mix('manifest.js', 'backend') }}"></script>
        <script src="{{ mix('vendor.js', 'backend') }}"></script>
        <script src="{{ mix('app.js', 'backend') }}"></script>
        @stack('js')
    </body>

</html>
