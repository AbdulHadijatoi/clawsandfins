<!doctype html>
<html>

    <head>
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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{asset('js/svg-inject.js')}}"></script>
        <script src="{{asset('js/js-cookie.js')}}"></script>
        <script src="{{asset('js/main.js?v=8')}}"></script>
        
        @yield('head_extra')

        @yield('style_extra')
    </head>
    
    <body class="page-no-arc">
        <div class="body-content max-w1280 margin-auto overflow-hidden">
            <!-- Menu -->
            <div id="mainMenuContainer" class="main-menu-container full-height w0 fixed">
                <nav id="main-menu" role="navigation">
                    <a href="{{url('/')}}" class="full-width align-in-center">
                        <img class="mb-10" src="{{asset('images/logo.png')}}" alt="profile photo" width="150">
                    </a>
                    <h2 class="font-size-20 font-weight-400 text-white text-center">Pete's Claws & Fins</h2>
                    <p class="font-size-12 font-weight-300 text-white text-center mb-20">Ecological Seafood Production</p>
                    <div class="full-width justify-center">
                        <a href="#"><img class="social-icon" src="{{asset('svg/twitter-square.svg')}}" alt="twitter"></a>
                        <a href="#"><img class="social-icon" src="{{asset('svg/facebook-square.svg')}}" alt="twitter"></a>
                        <a href="#"><img class="social-icon" src="{{asset('svg/instagram-square.svg')}}" alt="twitter"></a>
                        <a href="#"><img class="social-icon" src="{{asset('svg/pinterest-square.svg')}}" alt="twitter"></a>
                    </div>
                    <hr>
                    <ul>
                        <ul class="menu">
                            <li><a href="{{url('soft-shelled-mudcrabs')}}">Soft-shelled mudcrabs</a></li>
                            <li><a href="{{url('hard-shelled-mudcrabs')}}">Hard-shelled mudcrabs</a></li>
                            <li><a href="{{url('information')}}">Information</a></li>
                            <li><a href="{{url('where-to-buy')}}">Where to buy</a></li>
                            <li><a href="{{url('contact-us')}}">Contact us</a></li>
                            <li><a href="{{url('become-distributor')}}">Become a distributor</a></li>
                            <li><a href="{{url('become-investor')}}">Become an investor</a></li>
                        </ul>
                    </ul>
                </nav>
                <div class="menu-button-container z-index-5">
                    <button id="menu-toggle">M<br>E</br>N<br>U</button>
                </div>
            </div>

            <!-- Visitor Topbar >>> -->
            <div class="nav-top justify-center nav-visitor">
                <div class="nav-area max-w1280 justify-between align-center">
                    <div class="welcome-message no-wrap">
                        <h4>Welcome,</h4>
                        <h3>Visitor</h3>
                    </div>
                    <div class="zoom-info-button">
                        <button onclick="zoomNotif(0)">Content too small or big?</button>
                    </div>
                    <div class="align-center full-height">
                        <div class="company-info align-center full-height">
                            <div class="menu-dropdown-overlay">
                                <ul>
                                    <li class="disable-menu"><a>Account Info</a></li>
                                    <li class="login-menu"><a href="../login/">Log in</a></li>
                                </ul>
                            </div>
                            <div class="text-right">
                                <span class="user-status">Unknown</span>
                            </div>
                            <span>V</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- >>> End -->
            @yield('content')

        </div>
        @yield('script_extra')
    </body>
</html>