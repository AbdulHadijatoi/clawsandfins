@extends('layouts.master_no_footer')

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

@section('content')
        <!-- Content -->
        <div class="content-wrapper">
            <section class="login">
                <div class="content">
                    <div class="full-width align-in-center vh100">
                        <div
                            class="_75-width md_90-width md_align-center flex-column justify-center align-center max-w700" style="padding: 50px 20px;">
                            <div class="login-form pt-30 align-in-center flex-column">
                                <div class="login-spinner align-in-center">
                                    <div class="loader"></div>
                                    <span class="material-icons d-flex-important align-in-center">
                                        check
                                    </span>
                                </div>
                                <h1 class="h1 text-yellow sm_font-size-35 text-center mb-30">Login Success</h1>
                                <div class="text-light p-20 text-center">
                                    Please wait, you will be redirect you...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
@endsection

<script>
    Cookies.set('logged-in', 'true', { path: '/' });
    $(function(){
        setTimeout(function(){
            window.location.href= '{{url('/')}}';
        },1000);
    })
</script>
<!-- >>> End -->
@endsection