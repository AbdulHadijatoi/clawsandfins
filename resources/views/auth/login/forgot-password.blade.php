@extends('layouts.master')

@section('menu')
    <li><a href="{{url('soft-shelled-mudcrabs')}}">Soft-shelled mudcrabs</a></li>
    <li><a href="{{url('hard-shelled-mudcrabs')}}">Hard-shelled mudcrabs</a></li>
    <li><a href="{{url('information')}}">Information</a></li>
    <li><a href="{{url('where-to-buy')}}">Where to buy</a></li>
    <li><a href="{{url('contact-us')}}">Contact us</a></li>
    <li><a href="{{url('become-distributor')}}">Become a Distributor</a></li>
    <li><a href="{{url('become-investor')}}">Become an investor</a></li>
@endsection

@section('script_extra')
<!-- Temporary Script for Logged in User >>> -->
<script>
    if (Cookies.get('logged-in')) {
        $('.login-menu').hide();
        $('.logout-menu').show();
        $('.nav-visitor').addClass('display-none');
        $('.nav-distributor-investor').removeClass('display-none');
    }
</script>
<!-- >>> End -->
@endsection

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
                                @auth
                                <li class="logout-menu display-none"><a href="{{route('logout')}}">Log out</a></li>
                                @endauth
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
                        <div
                            class="_75-width md_90-width md_align-center flex-column justify-center align-center max-w700" style="padding: 50px 0;">
                            <div class="login-form pt-30 align-in-center flex-column">
                                <div class="big-icon d-flex-important justify-center">
                                    <span class="material-icons d-flex-important align-in-center">
                                        lock
                                    </span>
                                </div>
                                <h1 class="h1 text-yellow sm_font-size-35 text-center">Reset Password</h1>
                                <div class="text-light p-20 text-center">
                                    Enter the email associated with your account and we'll send an email with instructions to reset your password.
                                </div>
                                <form class="full-width" action="login-success" method="post" onsubmit="return inputValidation(this)">
                                    <div class="d-flex full-width">
                                        <div class="input-text">
                                            <input type="email" id="email" placeholder="Administration Email" style="box-shadow: unset;">
                                        </div>
                                    </div>
                                    <div class="d-flex full-width justify-center">
                                        <div class="button-primary mb-10">
                                            <button type="submit">RESET</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
@endsection