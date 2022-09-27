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
            <section class="section" data-clip-id="1"
                style="background-image: url('{{asset('bg/Grey_Background_13.png')}}');">
                <div class="content full-width">
                    <div class="full-width align-in-center pb-120">
                        <div class="_75-width flex-column z-index-1 justify-center md_90-width md_align-center">
                            <h1 class="h1 sm_font-size-25 text-yellow text-center">Information</h1>
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
            </section>
            <section class="section" data-clip-id="2"
                style="background-image: url({{asset('bg/Grey_Background_5.png')}});">
                <div class="content">
                    <div class="full-width align-in-center pb-100">
                        <div
                            class="_75-width flex-column z-index-1 justify-center sm_90-width sm_align-center mt-100 sm_mt-10">
                            <h1 class="h1 text-white sm_font-size-30 text-center">More Info</h1>
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
                <img img-arc="1" class="img-arc" src="{{asset('arcs/arc_11.svg')}}" />
            </section>
            <section class="section" data-clip-id="3"
                style="background-image: url({{asset('bg/Grey_Background_3.png')}});">
                <div class="content">
                    <div class="full-width align-in-center pb-40">
                        <div
                            class="_75-width flex-column z-index-1 justify-center sm_90-width sm_align-center mt-80 sm_mt-10">
                            <h1 class="h1 text-white sm_font-size-30 text-center">More Info</h1>
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
                <img img-arc="2" class="img-arc" src="{{asset('arcs/arc_14.svg')}}" />
            </section>
        </div>
@endsection