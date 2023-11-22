@extends('layouts.master')

@section('body_class')
page-no-arc
@endsection

@section('custom-class-menu', 'menu-dark')

@section('content')
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

                                <a class="text-yellow text-center mb-20 expand-link" data-target="offerings" style="width: 100% !important; display: block; font-size: 1.2rem;">
                                    <strong>Offerings</strong>
                                </a>

                                <p class="para sm_font-size-11 mt-20 mb-20 expandable-content" id="offerings">
                                    Book all your boxes and pay only 1/3 now. Boxes are sold in bundles of 500 boxes for $4000-6000 each depending on which offering you choose below. The reason for these bundles is to minimize future administrative workload. If you wish to buy fewer boxes, see if you can partner with some friends, or contact me and I will see if I can partner you with someone in the same situation. But remember full bundle buyers will have priority on availability, so you might end up without any.   
                                    <ul style="display: block; list-style: disc" class="para sm_font-size-11 mt-20 mb-20 ml-20">
                                        <li>
                                            <strong class="text-yellow">Offering A - $8 box with $1.2 return, unlimited growth - Early adopters, Available now, pay only 33% now ($1334 per bundle).</strong><br></a>
                                            <u>NOTE: Only 33 bundles are available with this unlimited growth, </u>High risk, machine still in building stage, longer waiting. But it will also have the highest long-term rewards with unlimited growth. You will be given free boxes as the project grows, if we grow for example to having 100 machines in the future, you will be given 99 free boxes, for every box you initially purchased, totaling 100 boxes including the one you purchased for $8, and earn you a rental fee of $120 which equals to a 1500% yearly return from them. AND you will also be given first priority on any future offerings as well, based on your box holding volume. Price per bundle is $4000, but you only pay a third now, $1334 which will secure your 1 bundle of 500 boxes. Later in February-March 2024, you will pay the next third $1334, after you have been shown our progress with a full-sized machine, 5.5 meters tall, but shorter at 15 meters long. (it will be fully extended to about 120 meters with two rows with 49,500 boxes each when all fine adjustments are completed) The machine you will be shown will still not be completed nor operational, but it will show you our progress. In May-June 2024, you will pay the last third, $1333 after you have been shown a complete but still short version, with 5 service robots (software might not be final yet though, so time will tell how much they will move around automatically at this demonstration.
                                        </li>
                                        <br>
                                        <li>
                                            <strong class="text-yellow">Offering B - $XX box with $1.2 return. The number of free boxes will be limited. - Not available yet.</strong><br></a>
                                            <u> </u>
                                        </li>
                                        <br>
                                        <li>
                                            <strong class="text-yellow">Offering C - $12 box with $1.2 return, limited to 14 free boxes – For more careful adopters. Available quarter 3, 2024 but can be booked now (10% deposit).</strong><br>
                                            33 bundles will be available. Machine fully tested and operational so less risk, shorter waiting till you first rental payment. Shortly after mid 2024 you will be asked to pay 40% of your total bundle value within 14 days. After that you and all the other box holders will be invited to visit us here on site in Vietnam, and you will be shown our full size but short version of our production machine in action with live crabs. 4 weeks later you will be asked to pay for your booked bundles in full at $6000 per bundle.  This offer will come with a limit of a maximum of 14 free boxes, which will limit your maximal returns to 150% per year, regardless of how many machines we will have in production.
                                            
                                        
                                       
                                            <span style="font-weight: bold; text-decoration: underline">
                                                This offering's price and benefits can be changed or even be canceled at anytime without any prior notice depending of how things develops. Your prebooked boxes will still be available for you in this current state though. 
                                            </span>
                                         </li>
                                         <br>
                                         <li>
                                            <strong class="text-yellow">
                                                If you wish to become a significant partner and have the means >$500k for it,
                                                feel free to email me at
                                                <a href="mailto:tramsrepus@gmail.com" class="text-yellow">tramsrepus@gmail.com</a>
                                              </strong>                                              
                                         </li>
                                    </ul>
                                   
                                    </p>
                                 
                                   
                                    
                                
                                    <br>
                                    <br>
                                   
                                <a href="{{url('/boxpromo/time-plan')}}" class="text-yellow text-center mb-20 expand-link" data-target="short-introduction" style="width: 100% !important; display: block; font-size: 1.2rem;">
                                    <strong><u>Click for time plan</u></strong><br>
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
