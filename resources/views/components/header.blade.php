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
        <ul class="menu">
            @yield('menu')
        </ul>
    </nav>
    <div class="menu-button-container z-index-5">
        <button id="menu-toggle">M<br>E</br>N<br>U</button>
    </div>
</div>
@auth
    <!-- After Login - Distributor/Inverstor Topbar >>> -->
    <div class="nav-top justify-center nav-distributor-investor">
        <div class="nav-area max-w1280 justify-between align-center">
            <div class="welcome-message no-wrap">
                <h4>Welcome Back,</h4>
                <h3>Contact Name</h3>
            </div>
            <div class="zoom-info-button">
                <button onclick="zoomNotif(0)">Content too small or big?</button>
            </div>
            <div class="align-center full-height">
                <div class="company-info align-center full-height">
                    <div class="menu-dropdown-overlay">
                        <ul>
                            <li><a href="{{url('account')}}">Account Info</a></li>
                            <li><a href="{{url('account/add-user')}}">Add User</a></li>
                            <li class="md-divider"></li>
                            <li class="logout-menu display-none"><a href="{{route('logout')}}">Log out</a></li>
                        </ul>
                    </div>
                    <div class="text-right">
                        <h3>Company Name</h3>
                        <span class="user-status">Candidate</span>
                    </div>
                    <img src="{{asset('images/logo.png')}}">
                </div>
            </div>
        </div>
    </div>
    <!-- >>> End -->
@else
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
                            <li class="login-menu"><a href="{{route('login')}}">Log in</a></li>
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
@endauth


