@extends('layouts.master')

@section('body_class')
page-no-arc
@endsection

@section('custom-class-menu', 'menu-dark')

@section('content')
        <!-- Content -->
        <style>
            .text-blue{
                color:brown;
            }
        </style>
        <div class="content-wrapper">
            <section class="section bg-white" data-clip-id="1" style="background-color: #0d0d0d">
                <div class="content">
                    <div class="full-width align-in-center pb-60">
                        <div class="_75-width md_90-width flex-column justify-center max-w700">
                            <h1 class="h1 font-size-25 sm_font-size-20 text-center mb-10 text-yellow">Investment Proposal - Soft-Shelled Crabs</h1>
                            <div class="text-white font-size-12 p-10 mb-20">
                                <a class="text-yellow text-center mt-40 mb-20" style="width: 100% !important; display: block; font-size: 1.2rem;">
                                    <strong>Time Plan</strong> 
                                </a>

                                <p class="para sm_font-size-11 text-white mt-20 mb-20 expandable-content" id="time_plan">
                                    <strong>Time Plan</strong> -The estimated time plan for the first full-length machine to be in full production is slightly more than a year from now, at around the beginning of 2025. You will receive your first rental fees as soon as the machine has been in full production for at least half a year, maybe even a bit earlier depending on how smooth things develop. It will be my priority to honor our rental agreement as soon as production income allows for it. The current estimate is that you will get your first rental payment sometime around quarter 3 2025. But remember, these time frames are just rough estimates.
                                </p>

                                <a href="{{url('/boxpromo/crab-box-promo-video')}}" class="text-yellow text-center mb-20 expand-link" data-target="short-introduction" style="width: 100% !important; display: block; font-size: 1.2rem;">
                                    <strong>Crab Box Promo Video</strong><br>
                                    <span class="text-blue font-size-12">(Click to open)</span>
                                </a>
                                
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
@endsection
