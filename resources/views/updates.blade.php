@extends('layouts.master')

@section('body_class')
page-no-arc
@endsection

@section('custom-class-menu', 'menu-dark')

@section('content')
    <!-- Content -->
    <div class="content-wrapper">
        <section class="section bg-white" data-clip-id="1">
            <div class="content">
                <div class="full-width align-in-center pb-60">
                    <div class="_75-width md_90-width flex-column justify-center max-w700">
                        <h1 class="h1 text-default sm_font-size-35 text-center mb-10">Updates</h1>
                        <div class="text-default font-size-12 p-10 mb-20">
                            <p class="para sm_font-size-11 text-center mt-20 mb-20">
                                Here we will post weekly updates for distributors 
                            </p>

                            <p class="para sm_font-size-11 text-default mt-20 mb-20">
                                
                            </p>

                            <p class="para sm_font-size-11 text-default mt-20 mb-20">
                                
                            </p>
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
        $('.distributor-investor-menu').removeClass('display-none');
        $('.distributor-investor-menu').nextAll().hide();
        $('.distributor-investor-menu').show();
        $('.login-menu').hide();
        $('.logout-menu').show();
        $('.nav-visitor').addClass('display-none');
        $('.nav-distributor-investor').removeClass('display-none');
    }
</script>
<!-- >>> End -->
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
