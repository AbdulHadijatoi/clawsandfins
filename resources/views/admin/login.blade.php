@extends('layouts.master_no_footer')


@section('menu')
    <li class="{{ (request()->is('soft-shelled-mudcrabs*')) ? 'active' : '' }}"><a href="{{url('soft-shelled-mudcrabs/')}}">Soft-shelled mudcrabs</a></li>
    <li class="{{ (request()->is('hard-shelled-mudcrabs*')) ? 'active' : '' }}"><a href="{{url('hard-shelled-mudcrabs/')}}">Hard-shelled mudcrabs</a></li>
    <li class="{{ (request()->is('information*')) ? 'active' : '' }}"><a href="{{url('information/')}}">Information</a></li>
    <li class="{{ (request()->is('where-to-buy*')) ? 'active' : '' }}"><a href="{{url('where-to-buy/')}}">Where to buy</a></li>
    <li class="{{ (request()->is('contact-us*')) ? 'active' : '' }}"><a href="{{url('contact-us')}}">Contact us</a></li>
    <li><a href="{{route('become-distributor')}}">Become a distributor</a></li>
    <li><a href="{{route('become-investor')}}">Become an investor</a></li>
@endsection

@section('content')
        <!-- Visitor Topbar >>> -->
        <div class="nav-top justify-center nav-visitor">
            <div class="nav-area max-w1280 justify-between align-center">
                <div class="welcome-message no-wrap">
                    <h4>Admin,</h4>
                    <h3>Login</h3>
                </div>
                <div class="zoom-info-button">
                    <button onclick="zoomNotif(0)">Content too small or big?</button>
                </div>
                <div class="align-center full-height">
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
                                <h1 class="h1 text-yellow sm_font-size-35 text-center mb-30">Administrator Login</h1>
                                <form action="{{route('admin.login.post')}}" method="post">
                                    @csrf
                                    <div class="d-flex full-width">
                                        <div class="input-text">
                                            <input type="email" id="email" placeholder="Email" style="box-shadow: unset;" name="email" value="{{old('email')}}" >
                                        </div>
                                    </div>
                                    <div class="d-flex full-width">
                                        <div class="input-text">
                                            <input type="password" id="password" placeholder="Password" style="box-shadow: unset;" name="password">
                                        </div>
                                    </div>
                                    @if(count($errors))
                                        @foreach($errors->all() as $error)
                                            <div class="info primary-warning d-flex-important">
                                                <label>{{ $error }}</label>
                                            </div>
                                        @endforeach
                                    @endif
                                    @if(session('error'))
                                        <div class="info primary-warning d-flex-important">
                                            <label>{{session('error')}}</label>
                                        </div>
                                    @endif
                                    @if(session('success'))
                                        <div class="info primary-info d-flex-important">
                                            <label>{{session('success')}}</label>
                                        </div>
                                    @endif
                                    <div class="d-flex full-width justify-center">
                                        <div class="button-primary mb-10">
                                            <button type="submit">LOGIN</button>
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
