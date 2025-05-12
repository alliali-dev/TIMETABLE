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
      
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else

        @endif   
            <style scoped>
              @import url('assets/css/style.css');
              @import url('assets/css/pages.css');
              @import url('assets/css/bootstrap/bootstrap.min.css');
              @import url('assets/css/components.css');
              @import url('assets/css/font-awesome.min.css');
              @import url('assets/pages/waves/css/waves.min.css');
              @import url('assets/assets/icon/feather/css/feather.css');
              @import url('assets/css/font-awesome-n.min.css');
              @import url('assets/assets/bower_components/chartist/css/chartist.css');
              @import url('assets/css/widget.css');
            </style>
        @routes
    </head>
    <body class="flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col" themebg-pattern="theme1">
        <div id="dashboard">
            @yield('content')
        </div>
        <script>
        window.appName = "{{ config('app.name') }}";
        window.appUrl = "{{ config('app.url') }}";
        window.locale = "{{ app()->getLocale() }}";
        
      
             {{-- <script type="text/javascript" src="{{ asset('assets/bower_components/jquery/js/jquery.min.js') }} "></script>
              //<script type="text/javascript" src="{{ asset('assets/bower_components/jquery-ui/js/jquery-ui.min.js') }} "></script>
           //<script type="text/javascript" src="{{ asset('assets/bower_components/popper.js/js/popper.min.js') }} "></script>
                <script type="text/javascript" src="{{ asset('assets/bower_components/bootstrap/js/bootstrap.min.js') }} "></script>
              --}}
  
          <script src="{{ asset('assets/pages/waves/js/waves.min.js') }} "></script>
  
          {{-- <script type="text/javascript" src="{{ asset('') }} assets/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script> --}}
  
          <script src="{{ asset('assets/pages/chart/float/jquery.flot.js') }} "></script>
          <script src="{{ asset('assets/pages/chart/float/jquery.flot.categories.js') }} "></script>
          <script src="{{ asset('assets/pages/chart/float/curvedLines.js') }} "></script>
          <script src="{{ asset('assets/pages/chart/float/jquery.flot.tooltip.min.js') }} "></script>
  
          {{-- <script src="{{ asset('') }} assets/bower_components/chartist/js/chartist.js"></script> --}}
  
          <script src="{{ asset('assets/pages/widget/amchart/amcharts.js') }} "></script>
          <script src="{{ asset('assets/pages/widget/amchart/serial.js') }} "></script>
          <script src="{{ asset('assets/pages/widget/amchart/light.js') }} "></script>
  
          <script src="{{ asset('assets/js/pcoded.min.js') }} "></script>
          <script src="{{ asset('assets/js/vertical/vertical-layout.min.js') }} "></script>
          <script type="text/javascript" src="{{ asset('assets/pages/dashboard/custom-dashboard.min.js') }} "></script>
          <script type="text/javascript" src="{{ asset('assets/js/script.min.js') }} "></script>
    </body>
</html>
