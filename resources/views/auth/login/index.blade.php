@extends('layouts.master_no_footer')

@section('content')
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

        <!-- After Login - Distributor/Inverstor Topbar >>> -->
        <div class="nav-top justify-center nav-distributor-investor display-none">
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

        <!-- Content -->
        <div class="content-wrapper">
            <section class="login">
                <div class="content">
                    <div class="full-width align-in-center vh100">
                        <div class="_75-width md_90-width md_align-center flex-column justify-center align-center max-w700" style="padding: 50px 0;">
                            <img class="mb-10 max-w200" src="{{asset('images/logo.png')}}" alt="Logo">
                            <div class="login-form">
                                <h1 class="h1 text-yellow sm_font-size-35 text-center mb-30">Login to your account</h1>
                                <div class="info primary-info d-flex-important">
                                    <label>Don't have an account, please register as a distributor <strong><a href="{{route('become-distributor')}}">Become a distributor</a></strong></label>
                                </div>
                                @include('auth.login.login-form')
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
@endsection


@section('style_extra')
    <style>
        .visiting-address {
            height: 300px;
        }

        .visiting-address #map {
            height: 100%;
        }

        .map-marker-label {
            display: block;
            border-radius: 5px;
            padding: 2px 8px;
        }
    </style>
@endsection

@section('script_extra')
<script>
    $('#password').keydown(function(e){
        if(e.keyCode===13){
            $('.login form')[0].submit();
        }
    })
</script>
@endsection
