@extends('layouts.master')

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

    if (Cookies.get('logged-out')) {
        openDialog('Logout','You are logged out');
        Cookies.remove('logged-out', { path: '/' });
    }
</script>
<!-- >>> End -->
@endsection

@section('content')
    <!-- Content -->
    <div class="content-wrapper">
        <section class="section" data-clip-id="1" style="background-image: url({{asset('bg/pattern_bg1.jpg')}});">
            <div class="content">
                <div class="full-width align-in-center pb-120">
                    <div class="_75-width flex-column z-index-1 justify-center md_90-width md_align-center">
                        <h1 class="h1 text-yellow sm_font-size-35 sm_mt-40 text-center">We are using</h1>
                        <p class="sub-heading mb-20 text-center sm_mb-0">High-tech and artificial intelligence (AI) to produce ecological
                            food.</p>
                        <div class="full-width justify-between md_flex-column md_align-center md_justify-center">
                            <div class="w400 p-30 sm_p-10 md_w350 sm_w250">
                                <img class="full-width circle border-15-orange sm_border-10 shadow_1" src="{{asset('images/image_2.jpg')}}">
                            </div>
                            <div class="flex-column _50-width md_text-center md_90-width">
                                <h2 class="h2 text-yellow sm_font-size-30">ABOUT US</h2>
                                <p class="para text-white sm_font-size-11">
                                    Pete's Claws and Fins is a high-tech producer of ecological seafood. We use state-of-the-art, highly
                                    computerized equipment to monitor and manage our seafood to ensure it is of the highest possible
                                    quality. All equipment we use is developed by ourselves in-house. We are the only company operating such
                                    high-tech equipment. The company started its research and development 2016 by Peter Persson, a Swedish
                                    inventor who has designed and built automated and computer-controlled machines and robots for over 30
                                    years. Peter has over the years developed an increasing personal interest for natural and unprocessed
                                    food, and though he could make difference with help of his high-tech knowhow.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section" data-clip-id="2" style="background-image: url({{asset('bg/pattern_bg2.jpg')}});">
            <div class="content">
                <div class="full-width align-in-center pb-120">
                    <div class="_75-width flex-column z-index-1 justify-center sm_90-width sm_align-center mt-180 sm_mt-10">
                        <div class="w400 p-30 absolute top-0 right-0 sm_p-10 sm_w250 sm_relative z-index-3">
                            <img class="full-width circle border-15-orange sm_border-10 shadow_1" src="{{asset('images/image_2.jpg')}}">
                        </div>
                        <h1 class="h1 sm_font-size-25 text-white sm_text-center">ECOLOGICAL PRODUCTION</h1>
                        <p class="para text-white sm_font-size-11 sm_text-center">
                            All our seafoods are ecologically produced. Our endeavor is not using resources from the wildlife. We are only
                            using farm-raised animals for our production. Our production is free from using harmful chemicals that can
                            contaminate the environment or the food products we produce. Instead, we use natural minerals and bacteria to
                            break down our waste products into harmless, biodegradable compounds.
                        </p>
                        <div class="full-width justify-between align-center sm_flex-column sm_justify-center">
                            <div class="w400 p-30 sm_p-10 sm_w250">
                                <img class="full-width circle border-15-orange sm_border-10 shadow_1" src="{{asset('images/image_2.jpg')}}">
                            </div>
                            <div class="flex-column _50-width sm_text-center sm_90-width">
                                <p class="para text-white sm_font-size-11">
                                    We recycle all organic waste we produce, also, we obtain organic waste from other farms, restaurants,
                                    and food markets. The organic waste we collect allows a particular larva from the <em
                                        class="text-yellow">Hermetia illucens</em> species, known commonly as black soldier fly larva
                                    (BSFL), to feeds on it and grow fatter. When the larva has developed to a pupa, it is cleaned, cooked
                                    and grided to a paste used as a high-quality protein and lipids perfectly suited as ecological animal
                                    feed, reducing the need for wild-sourced feed ingredients such as fishmeal which contributes to the
                                    global overfishing.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img img-arc="1" class="img-arc" src="{{asset('arcs/arc_15.svg')}}"/>
        </section>
        <!-- <section class="section" data-clip-id="3" style="background-image: url({{asset('bg/pattern_bg3.jpg')}});">
            <div class="content">
                <div class="full-width align-in-center pt-100 pb-120">
                    <div class="_75-width flex-column z-index-1 justify-center sm_90-width sm_align-center sm_mt_60">
                        <h1 class="h1 text-yellow sm_font-size-30 text-right sm_text-center">LOCAL COMMUNITY ENGAGEMENT</h1>
                        <p class="para text-white sm_font-size-11 text-right sm_text-center">
                            It is in our core believe that if you benefit the local community, the people there will add value to your
                            business as well. For every site we establish a manufacturing facility, our project will add value to the
                            community as whole. We will provide jobs for hundreds of local residents with positions available within our
                            production, sales, administration, and management teams. We will also offer hundreds of local farmers
                            opportunities to join our supply network, providing training, coaching, and financial support to help them adapt
                            to a more intensive and efficient farming system. Through our research and development, anything learned or
                            discovered will be shared with our farmers to produce more efficiently and a healthier product. One among many
                            different local benefitting activities, is that we will arrange cleanup days where we offer students an extra
                            income for their effort as well as courses in environment know-how and teach them the importance of keeping the
                            environment healthy.
                        </p>
                    </div>
                </div>
            </div>
            <img img-arc="2" class="img-arc" src="arcs/arc_2.svg"/>
        </section> -->
        <!-- <section class="section" data-clip-id="4" style="background-image: url(bg/pattern_bg4.jpg);">
            <div class="content">
            <div style="padding: 0 40px;padding-top: 50px">
                <div class="cnt-1" style="color: #EBEBEB;text-align: left;">
                <p><h1 style="color: #FDC403">LOCAL COMMUNITY<br/>ENGAGEMENT. 3</h1>
                    <img src="{{asset('images/img1.png')}}" style="float: right;max-width: 500px;padding: 0 40px">
                    It is in our core believe that if you benefit the local community, the people there will add value to your business as well. For every site we establish a manufacturing facility, our project will add value to the community as whole. We will provide jobs for hundreds of local residents with positions available within our production, sales, administration, and management teams. We will also offer hundreds of local farmers opportunities to join our supply network, providing training, coaching, and financial support to help them adapt to a more intensive and efficient farming system. Through our research and development, anything learned or discovered will be shared with our farmers to produce more efficiently and a healthier product. One among many different local benefitting activities, is that we will arrange cleanup days where we offer students an extra income for their effort as well as courses in environment know-how and teach them the importance of keeping the environment healthy.
                </p>
                </div>
            </div>
            </div>
            <img img-arc="3" class="img-arc" src="{{asset('arcs/arc_3.svg')}}"/>
        </section> -->
    </div>

    
@endsection