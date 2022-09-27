@extends('layouts.master')



@section('menu')
    @include('components.menu_1')
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

@section('content')
        <!-- Content -->
        <div class="content-wrapper">
            <section class="section" data-clip-id="1" style="background-image: url({{asset('bg/Grey_Background_14.png')}});">
                <div class="content full-width">
                    <div class="full-width align-in-center pb-120">
                        <div class="_75-width flex-column z-index-1 justify-center md_90-width md_align-center">
                            <h1 class="h1 text-yellow sm_font-size-35 sm_mt-40 text-center">What makes our
                            crabs so special</h1>
                            <div class="full-width mt-50">
                                <video class="full-width" controls>
                                    <source src="{{asset('videos/crabs.mp4')}}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section" data-clip-id="2" style="background-image: url({{asset('bg/Grey_Background_2.png')}});">
                <div class="content">
                    <div class="full-width align-in-center pb-40">
                        <div class="_75-width flex-column z-index-1 justify-center sm_90-width sm_align-center mt-20 sm_mt-10">
                            <h1 class="h1 sm_font-size-25 text-yellow text-center">What is a Softshelled mud crab?</h1>
                            <p class="para text-white sm_font-size-11 sm_text-center">
                                All our seafoods are ecologically produced. Our endeavor is not using resources from the
                                wildlife. We are only
                                using farm-raised animals for our production. Our production is free from using harmful
                                chemicals that can
                                contaminate the environment or the food products we produce. Instead, we use natural
                                minerals and bacteria to
                                break down our waste products into harmless, biodegradable compounds.
                            </p>
                            <div class="full-width justify-between align-center sm_flex-column sm_justify-center">
                                <div class="w400 p-30 sm_p-10 sm_w250">
                                    <img class="full-width circle border-15-orange sm_border-10 shadow_1"
                                        src="{{asset('images/image_2.jpg')}}">
                                </div>
                                <div class="flex-column _50-width sm_text-center sm_90-width">
                                    <p class="para text-white sm_font-size-11">
                                        We recycle all organic waste we produce, also, we obtain organic waste from
                                        other farms, restaurants,
                                        and food markets. The organic waste we collect allows a particular larva from
                                        the <em class="text-yellow">Hermetia illucens</em> species, known commonly as
                                        black soldier fly larva
                                        (BSFL), to feeds on it and grow fatter. When the larva has developed to a pupa,
                                        it is cleaned, cooked
                                        and grided to a paste used as a high-quality protein and lipids perfectly suited
                                        as ecological animal
                                        feed, reducing the need for wild-sourced feed ingredients such as fishmeal which
                                        contributes to the
                                        global overfishing.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img img-arc="1" class="img-arc" src="{{asset('arcs/arc_2.svg')}}" />
            </section>
            <section class="section" data-clip-id="3" style="background-image: url({{asset('bg/Grey_Background_4.png')}});">
                <div class="content">
                    <div class="full-width align-in-center pt-100 pb-60">
                        <div
                            class="_75-width flex-column z-index-1 justify-center sm_90-width sm_align-center sm_mt_60">
                            <h1 class="h1 text-white sm_font-size-30 text-center">Nutrition</h1>
                            <p class="para text-white sm_font-size-11 text-right sm_text-center">
                                It is in our core believe that if you benefit the local community, the people there will
                                add value to your
                                business as well. For every site we establish a manufacturing facility, our project will
                                add value to the
                                community as whole. We will provide jobs for hundreds of local residents with positions
                                available within our
                                production, sales, administration, and management teams. We will also offer hundreds of
                                local farmers
                                opportunities to join our supply network, providing training, coaching, and financial
                                support to help them adapt
                                to a more intensive and efficient farming system. Through our research and development,
                                anything learned or
                                discovered will be shared with our farmers to produce more efficiently and a healthier
                                product. One among many
                                different local benefitting activities, is that we will arrange cleanup days where we
                                offer students an extra
                                income for their effort as well as courses in environment know-how and teach them the
                                importance of keeping the
                                environment healthy.
                            </p>
                        </div>
                    </div>
                </div>
                <img img-arc="2" class="img-arc" src="{{asset('arcs/arc_15.svg')}}" />
            </section>
            <section class="section" data-clip-id="4" style="background-image: url({{asset('bg/Grey_Background_15.png')}});">
                <div class="content">
                    <div class="full-width align-in-center pt-100 pb-10">
                        <div
                            class="_75-width flex-column z-index-1 justify-center sm_90-width sm_align-center sm_mt_60">
                            <h1 class="h1 text-white sm_font-size-30 text-center">Production</h1>
                            <p class="para text-white sm_font-size-11 text-right sm_text-center">
                                It is in our core believe that if you benefit the local community, the people there will
                                add value to your
                                business as well. For every site we establish a manufacturing facility, our project will
                                add value to the
                                community as whole. We will provide jobs for hundreds of local residents with positions
                                available within our
                                production, sales, administration, and management teams. We will also offer hundreds of
                                local farmers
                                opportunities to join our supply network, providing training, coaching, and financial
                                support to help them adapt
                                to a more intensive and efficient farming system. Through our research and development,
                                anything learned or
                                discovered will be shared with our farmers to produce more efficiently and a healthier
                                product. One among many
                                different local benefitting activities, is that we will arrange cleanup days where we
                                offer students an extra
                                income for their effort as well as courses in environment know-how and teach them the
                                importance of keeping the
                                environment healthy.
                            </p>
                        </div>
                    </div>
                </div>
                <img img-arc="3" class="img-arc" src="{{asset('arcs/arc_10.svg')}}" />
            </section>
            <section class="section" data-clip-id="5" style="background-image: url({{asset('bg/Grey_Background_3.png')}});">
                <div class="content">
                    <div class="full-width align-in-center pt-100 pb-60">
                        <div class="_75-width flex-column z-index-1 justify-center sm_90-width sm_align-center sm_mt_60">
                            <h1 class="h1 text-yellow sm_font-size-30 text-center mt-60">We don't harm our
                            crabs.</h1>
                            <p class="para text-white sm_font-size-11 text-right sm_text-center">
                                It is in our core believe that if you benefit the local community, the people there will
                                add value to your
                                business as well. For every site we establish a manufacturing facility, our project will
                                add value to the
                                community as whole. We will provide jobs for hundreds of local residents with positions
                                available within our
                                production, sales, administration, and management teams. We will also offer hundreds of
                                local farmers
                                opportunities to join our supply network, providing training, coaching, and financial
                                support to help them adapt
                                to a more intensive and efficient farming system. Through our research and development,
                                anything learned or
                                discovered will be shared with our farmers to produce more efficiently and a healthier
                                product. One among many
                                different local benefitting activities, is that we will arrange cleanup days where we
                                offer students an extra
                                income for their effort as well as courses in environment know-how and teach them the
                                importance of keeping the
                                environment healthy.
                            </p>
                        </div>
                    </div>
                </div>
                <img img-arc="4" class="img-arc" src="{{asset('arcs/arc_13.svg')}}" />
            </section>
            <section class="section" data-clip-id="6" style="background-image: url({{asset('bg/pattern_bg4.jpg')}});">
                <div class="content">
                    <div class="full-width align-in-center pt-100 pb-60">
                        <div class="_75-width flex-column z-index-1 justify-center sm_90-width sm_align-center sm_mt_60">
                            <h1 class="h1 text-white sm_font-size-30 text-center mt-60">Competitor's chemically dissolved crab shells</h1>
                            <p class="para text-white sm_font-size-11 text-right sm_text-center">
                                It is in our core believe that if you benefit the local community, the people there will
                                add value to your
                                business as well. For every site we establish a manufacturing facility, our project will
                                add value to the
                                community as whole. We will provide jobs for hundreds of local residents with positions
                                available within our
                                production, sales, administration, and management teams. We will also offer hundreds of
                                local farmers
                                opportunities to join our supply network, providing training, coaching, and financial
                                support to help them adapt
                                to a more intensive and efficient farming system. Through our research and development,
                                anything learned or
                                discovered will be shared with our farmers to produce more efficiently and a healthier
                                product. One among many
                                different local benefitting activities, is that we will arrange cleanup days where we
                                offer students an extra
                                income for their effort as well as courses in environment know-how and teach them the
                                importance of keeping the
                                environment healthy.
                            </p>
                        </div>
                    </div>
                </div>
                <img img-arc="5" class="img-arc" src="{{asset('arcs/arc_6.svg')}}" />
            </section>
        </div>
@endsection