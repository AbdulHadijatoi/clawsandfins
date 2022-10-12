<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Peter">
        <title>
            @hasSection('title')
                @yield('title')
            @else
                Pete's Claws and Fins
            @endif
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Style -->
        <link rel="stylesheet" href="{{asset('css/common.css')}}">
        
        <link rel="stylesheet" href="{{asset('css/style.css?v=8')}}">
    
        <!-- Icon -->
        <link rel="stylesheet" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}"> <!-- Font Awesome Icon 4.7.0 -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> <!--Material Icon -->
        <!-- JS Script -->
        <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('js/svg-inject.js')}}"></script>
        <script src="{{asset('js/js-cookie.js')}}"></script>
        <script src="{{asset('js/main.js?v=8')}}"></script>
        
        @yield('head_extra')

        @yield('style_extra')
    </head>
    
    <body class="@hasSection('body_class') @yield('body_class') @else open @endif">
        <div class="body-content max-w1280 margin-auto overflow-hidden">
            @include('components.header')
            @yield('content')

            
            @include('components.footer')
            <div class="copyright-text">
                <p>
                    © 2020-{{date("Y")}} Pete's Claws and Fins, Yat Fung International Holding Ltd. All rights reserved.
                </p>
            </div>
        </div>
        @yield('script_extra')
    </body>
</html>