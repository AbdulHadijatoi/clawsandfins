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
                                <a class="text-yellow text-center mb-20 expand-link" data-target="short-introduction" style="width: 100% !important; display: block; font-size: 1.2rem;">
                                    <strong>Short version</strong><br>
                                    <span class="text-blue font-size-12 expand-indicator hidden">(Click to expand down)</span>
                                </a>
                                <p class="para sm_font-size-11 mt-20 mb-20 expandable-content expanded" id="short-introduction">
                                    <strong>Buy a crab box for $8</strong> - Pay only $2.67 now. Rent it out to me for use in my machine later for $1.2 (equals to 15% yearly return). And as the project grows, I will give you many additional boxes for free, and you will earn an additional $1.2 rental income from each box, including the free ones. So, 10 boxes earn you $12 which equals to 150% yearly return, 50 boxes earn you $60 (750%). 100 boxes earn you $120 (1500%) in yearly return, and so on.<br><br>
                                    How can I afford this? One box will earn me $1.2 per harvested crab, we get 10.5 crabs out of one box each year, so that box earns me $12.6 per year. I will pay you a rental fee of $1.2 for the box, and then I will use a part of that box' profit to buy an additional box in the next machine we build, and I will give it to you for free, and you will now earn $1.2 from that free box as well. And I will continue to give you free boxes as the project grows.<br><br>
                                    Why would I be so generous? Well, I will only offer this to very few people who know me, so it will not affect the project's future economy that much. And as your contribution will help me to speed things up significantly, and that there will be a waiting period of between 12-24 month before your box starts generating you an income, I will be more than happy to share the income from these boxes and their growth with you, as a token of gratitude for your belief in me and my project.
                                </p>
                                
                                <a href="{{url('/boxpromo/long-version')}}" class="text-yellow text-center mb-20 expand-link" data-target="short-introduction" style="width: 100% !important; display: block; font-size: 1.2rem;">
                                    <strong>Long version</strong><br>
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
