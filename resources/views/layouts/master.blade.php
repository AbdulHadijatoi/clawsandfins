@php
if(Auth::user()==null || Auth::user()->getRoleNames()[0] != 'admin' ){
    $isUser=true;
}
if( explode('/', request()->route()->getPrefix() ?? '')[0] == 'admin'){
    $adminView=true;
}
@endphp
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

        <link rel="stylesheet" href="{{asset('css/style.css?v=9')}}">

        <!-- Icon -->
        <link rel="stylesheet" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}"> <!-- Font Awesome Icon 4.7.0 -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> <!--Material Icon -->
        <!-- JS Script -->
        <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('js/svg-inject.js')}}"></script>
        <script src="{{asset('js/js-cookie.js')}}"></script>
        <script src="{{asset('js/main.js?v=9')}}"></script>

        @yield('head_extra')

        @yield('style_extra')

        <style>
            .lds-dual-ring {
                display: inline-block;
                width: 25px;
                height: 25px;
            }
            .lds-dual-ring:after {
                content: " ";
                display: block;
                width: 20px;
                height: 20px;
                margin: 5px;
                border-radius: 50%;
                border: 3px solid #fff;
                border-color: #fff transparent #fff transparent;
                animation: lds-dual-ring 1.2s linear infinite;
            }
            @keyframes lds-dual-ring {
                0% {
                    transform: rotate(0deg);
                }
                100% {
                    transform: rotate(360deg);
                }
            }

        </style>
        @if(!isset($isUser) && isset($adminView))
        <style>
            .content-wrapper .section{
                padding-top: 50px;
            }

            .content-wrapper .section .md_90-width{
                max-width: 90%;
                width: 100%;
            }

            @media screen and (min-width: 1023px) {
                body.open .content-wrapper .section{
                    padding-left: 250px;
                }
            }

            #main-menu{
                padding-top: 30px;
            }

            .small-popup{
                background: #FFF;
            }
        </style>
        @endif
        @livewireStyles
        @stack('styles')
    </head>

    <body class="@hasSection('body_class') @yield('body_class') @endif @if(isset($_COOKIE['menu'])) open @endif">
        <div class="body-content margin-auto overflow-hidden @if(!isset($adminView) || isset($isUser)) max-w1280 @endif">
            @include('components.header')
            @yield('content')

            @if(!isset($adminView) || isset($isUser))
            @include('components.footer')
            @endif

            @if(!isset($adminView))
            <div class="copyright-text">
                <p>
                    © 2020-{{date("Y")}} Pete's Claws and Fins, Yat Fung International Holding Ltd. All rights reserved.
                </p>
            </div>
            @endif
        </div>
        @livewireScripts
        @stack('scripts')
        @yield('script_extra')
        <script>
        window.addEventListener('openDialog', (e) => {
            openDialog(e.detail.title,e.detail.content);
        });
        window.addEventListener('smallPopup', (e) => {
            smallPopup(e.detail.content, e.detail.callback, e.detail.delay, e.detail.autohide, e.detail.mouseout, e.detail.closeBtn);
        });
        Livewire.on('js', scripts => {
            if(Array.isArray(scripts)){
                scripts.forEach(function(js) {
                    eval(js+';');
                });
            }else{
                eval(scripts+';');
            }
        });
        Livewire.on('alert', msg => {
            alert(msg);
        });
        Livewire.on('removeSpinner', args => {
            $('#loader').remove();
        });
        </script>
    </body>
</html>
