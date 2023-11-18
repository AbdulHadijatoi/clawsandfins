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
</script>
<!-- >>> End -->
@endsection

@section('content')
        <!-- Content -->
        <div class="content-wrapper">
            <section class="section" data-clip-id="1"
                style="background-image: url({{asset('bg/Grey_Background_10.png')}});">
                <div class="content full-width">
                    <div class="full-width align-in-center pb-120">
                        <div class="_75-width flex-column z-index-1 justify-center md_90-width md_align-center">
                            <h1 class="h1 sm_font-size-25 text-yellow text-center">Hard-shelled Mudcrabs</h1>
                            <p class="para text-white sm_font-size-11 sm_text-center">We will be adding hard-shell crabs to our product assortment in a near future. Please feel free to contact us if you would like us to notify you when they become available.
                            </p>
                            <div class="full-width justify-between align-center sm_flex-column sm_justify-center">
                                <div class="w400 p-30 sm_p-10 sm_w250">
                                    <img class="full-width circle border-15-orange sm_border-10 shadow_1" src="{{asset('images/image_2.jpg')}}">
                                </div>
                                <div class="flex-column _70-width sm_text-center sm_90-width">
                                    <h1 class="h1 sm_font-size-25 text-yellow text-center"> A culinary seafood gem</h1>
                                    <p class="para text-white sm_font-size-11">In the realm of seafood delicacies, few creatures can rival the allure of mud crabs. These crustaceans, revered for their succulent meat, delicate texture, and captivating flavor, have long been a staple in cuisines across the globe. Among the diverse mud crab species, the genus Scylla stands out as a culinary gem, particularly the Scylla paramamosain, commonly known as the green mud crab. Their sweet taste and high nutritional value have earned them a reputation as a premium seafood choice.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section" data-clip-id="2"
                style="background-image: url({{asset('bg/Grey_Background_3.png')}});">
                <div class="content">
                    <div class="full-width align-in-center pb-40">
                        <div
                            class="_75-width flex-column z-index-1 justify-center sm_90-width sm_align-center mt-20 sm_mt-10">
                            <h1 class="h1 text-yellow sm_font-size-25 text-center">More Info</h1>
                            <p class="para text-white sm_font-size-11 text-right sm_text-center">Beyond their captivating flavor, mud crabs are a rich source of essential nutrients, making them an excellent addition to a balanced diet. Their meat is packed with protein, essential amino acids, vitamins, and minerals, providing a wealth of health benefits.
                            </p>
                        </div>
                    </div>
                </div>
                <img img-arc="1" class="img-arc" src="{{asset('arcs/arc_7.svg')}}" />
            </section>
            <section class="section" data-clip-id="3"
                style="background-image: url({{asset('bg/Grey_Background_3.png')}});">
                <div class="content">
                    <div class="full-width align-in-center pb-40">
                        <div
                            class="_75-width flex-column z-index-1 justify-center sm_90-width sm_align-center mt-20 sm_mt-10">
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
                <img img-arc="2" class="img-arc" src="{{asset('arcs/arc_9.svg')}}" />
            </section>
        </div>
@endsection