@extends('layouts.master_no_footer')

@section('menu')
    <li class="{{ (request()->is('soft-shelled-mudcrabs*')) ? 'active' : '' }}"><a href="{{url('soft-shelled-mudcrabs/')}}">Soft-shelled mudcrabs</a></li>
    <li class="{{ (request()->is('hard-shelled-mudcrabs*')) ? 'active' : '' }}"><a href="{{url('hard-shelled-mudcrabs/')}}">Hard-shelled mudcrabs</a></li>
    <li class="{{ (request()->is('information*')) ? 'active' : '' }}"><a href="{{url('information/')}}">Information</a></li>
    <li class="{{ (request()->is('where-to-buy*')) ? 'active' : '' }}"><a href="{{url('where-to-buy/')}}">Where to buy</a></li>
    <li class="{{ (request()->is('contact-us*')) ? 'active' : '' }}"><a href="{{url('contact-us')}}">Contact us</a></li>
    <li class="{{ (request()->is('become-distributor*')) ? 'active' : '' }}"><a href="{{url('become-distributor')}}">Become a distributor</a></li>
    <li class="{{ (request()->is('become-investor*')) ? 'active' : '' }}"><a href="{{url('become-investor')}}">Become an investor</a></li>
@endsection

@section('body_class')
page-no-arc
@endsection

@section('content')
        

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