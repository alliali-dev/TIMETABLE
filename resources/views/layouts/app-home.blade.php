<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" type="image/icon" />

        <!-- Styles / Scripts -->
        {{-- <link href="{{ asset('assets/css/style.css') }}">
        <link href="{{ asset('assets/css/pages.css') }}">
        <link href="{{ asset('assets/css/bootstrap/bootstrap.min.css') }}"> --}}
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else

        @endif   
            <style scoped>
              @import url('assets/css/style.css');
              @import url('assets/css/pages.css');
              @import url('assets/css/bootstrap/bootstrap.min.css');
              /* @import url('assets/css/components.css'); */
              @import url('assets/css/font-awesome.min.css');
            </style>
        @routes
    </head>
    <body class="flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col" themebg-pattern="theme1">
        <div id="login">
            @yield('content')
        </div>
        <script>
        window.appName = "{{ config('app.name') }}";
        </script>
    </body>
</html>
