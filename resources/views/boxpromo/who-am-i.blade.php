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
                            <h1 class="h1 font-size-25 sm_font-size-20 text-center mb-10 text-yellow">Earn a good income from your own crab box</h1>
                            <div class="text-white font-size-12 p-10 mb-20">
                                <a class="text-yellow text-center mb-20" style="width: 100% !important; display: block; font-size: 1.2rem;">
                                    <strong>Who is Peter</strong> 
                                </a>

                                <p class="para sm_font-size-11 text-white mt-20 mb-20 expandable-content" id="time_plan">
                                    <strong class="text-yellow">Who am I</strong> - For those of you who might not know me so well. Let me present myself. I am Peter Persson, a 54-year-old Swedish machine designer (automation, robotics, and machine mechanics). But I am not your regular paper tossing desk-engineer. Surely, I love my desk and computer where I design everything, but I also love to get my hands dirty on a workshop floor while building my creations. I have been doing this as a self-employed entrepreneur for 34 years and I still love every minute of it 😊.
                                    <br><br>
                                  
                                </p>

                                <a href="{{url('/boxpromo/important-notes')}}" class="text-yellow text-center mb-20 expand-link" data-target="important-notes" style="width: 100% !important; display: block; font-size: 1.2rem;">
                                    <strong><u>Click for important notes</strong></u><br>
                                    <span class="text-blue font-size-12"></span>
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
