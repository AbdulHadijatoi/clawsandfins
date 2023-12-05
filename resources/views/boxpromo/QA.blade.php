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
                            <h1 class="h1 font-size-25 sm_font-size-20 text-center mb-10 text-yellow">Questions & Answers</h1>
                            <div class="text-white font-size-12 p-10 mb-20">
                                <a class="text-yellow text-center mb-20" style="width: 100% !important; display: block; font-size: 1.2rem;">
                                    <strong></strong> 
                                </a>

                                <p class="para sm_font-size-11 text-white mt-20 mb-20 expandable-content" id="time_plan">
                                    <strong class="text-yellow">What happened with the earlier box offering? </strong>- As some of you might remember, I had a crab-box offering earlier, just before Covid struck us. All boxes got booked in a matter of days and a reserve list had to be created as well. But Covid made it impossible to continue the project, so I had to withdraw the offer and no money ever changed hands.
                                    <br><br>
                                    
                                    <p class="para sm_font-size-11 text-white mt-20 mb-20 expandable-content" id="time_plan">
                                    <strong class="text-yellow">Why not offer shares instead? </strong>- Later, I will be offering you the opportunity to purchase shares in my company. But for now, due to these modest investments and the many people involved, if offering you shares in this stage, I would have to register my company as a publicly traded company. And due to very complex rules imposed on such a company, it would increase our administrative workload and costs 10-fold and be impossible for a small startup company like mine to manage at the beginning. We must grow to a significantly larger size first.
                                    <br><br>
                                    
                                    <p class="para sm_font-size-11 text-white mt-20 mb-20 expandable-content" id="time_plan">
                                    <strong class="text-yellow">What is the smallest number of boxes you can buy? </strong>- To minimize future administrative workload, the smallest number of boxes you can buy is a bundle of 500 boxes. But If you wish to buy fewer boxes, see if you can partner with some friends, or contact me and I will see if I can partner you with someone in the same situation. But remember full bundle buyers will have priority on availability, so you might end up without any.
                                    <br><br>
                                    
                                    <p class="para sm_font-size-11 text-white mt-20 mb-20 expandable-content" id="time_plan">
                                    <strong class="text-yellow">How fast can a machine be built? </strong>- My machine’s parts are designed to be cheap and fast to mass-produce and easy and fast to assemble. And given that funds are available, a machine can be built within 3 months and pay for itself in 6-8 months.
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
