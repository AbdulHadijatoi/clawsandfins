@extends('layouts.master_no_footer')

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