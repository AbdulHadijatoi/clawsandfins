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
                            <h1 class="h1 sm_font-size-25 text-yellow text-center">Hard-shelled Mudcrabs <br><br>Future offering</h1>
                            <p class="para text-white sm_font-size-11 sm_text-center">
                                We will be adding hard-shell crabs to our product assortment in a near future. Please feel free to contact us if you would like us to notify you when they become available.
                            </p>
                            <div class="full-width justify-between align-center sm_flex-column sm_justify-center">
                                <div class="w400 p-30 sm_p-10 sm_w250">
                                    <img class="full-width circle border-15-orange sm_border-10 shadow_1" src="{{asset('images/image_7.jpg')}}">
                                </div>
                                <div class="flex-column _70-width sm_text-center sm_90-width">
                                    <h1 class="h1 sm_font-size-25 text-yellow text-center"> 
                                        A culinary seafood gem
                                    </h1>
                                    <p class="para text-white sm_font-size-11">
                                        In the realm of seafood delicacies, few creatures can rival the allure of mud crabs. These crustaceans, revered for their succulent meat, delicate texture, and captivating flavor, have long been a staple in cuisines across the globe. Among the diverse mud crab species, the genus Scylla stands out as a culinary gem, particularly the Scylla paramamosain, commonly known as the green mud crab. Their sweet taste and high nutritional value have earned them a reputation as a premium seafood choice.
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
                    <div class="full-width align-in-center">
                        <div class="_75-width z-index-1 justify-center md_90-width align-center sm_flex_column">
                            <div class="flex-column _70-width sm_text-center sm_90-width">
                                <h1 class="h1 sm_font-size-25 text-yellow text-center">
                                    A nutritional powerhouse
                                </h1>
                                <p class="para text-white sm_font-size-11 mb-50 pb-30 sm_pb-0 sm_mb-10">
                                    Beyond their captivating flavor, mud crabs are a rich source of essential nutrients, making them an excellent addition to a balanced diet. Their meat is packed with protein, essential amino acids, vitamins, and minerals, providing a wealth of health benefits.
                                </p>
                            </div>
                            <div class="w400 p-30 sm_p-10 sm_w250">
                                <img class="full-width circle border-15-orange sm_border-10 shadow_1" src="{{asset('images/image_8.jpg')}}">
                            </div>
                        </div>
                    </div>
                </div>
                <img img-arc="1" class="img-arc" src="{{asset('arcs/arc_7.svg')}}" />
            </section>
            <section class="section" data-clip-id="3"
                style="background-image: url({{asset('bg/Grey_Background_3.png')}});">
                <div class="content pb-30">
                    <div class="full-width align-in-center">
                        <div class="_75-width z-index-1 justify-center md_90-width md_align-center sm_flex_column">
                            <div class="w400 p-30 sm_p-10 sm_w250">
                                <img class="full-width circle border-15-orange sm_border-10 shadow_1" src="{{asset('images/image_7.jpg')}}">
                            </div>
                            <div class="flex-column _70-width sm_text-center sm_90-width">
                                <h1 class="h1 sm_font-size-25 text-yellow text-center">
                                    Versatile and flavorful
                                </h1>
                                <p class="para text-white sm_font-size-11 pb-10 sm_pb-0 sm_mb-10">
                                    Mud crabs offer a unique culinary experience that tantalizes the taste buds and adapts to various cooking styles. Their delicately sweet meat, with a hint of ocean freshness, is a testament to their pure and natural upbringing.
                                    <ul style="display: block; list-style: disc" class="para text-white sm_font-size-11 mb-20 ml-20">
                                        <li>
                                            <strong class="text-yellow">Steamed Simplicity: </strong>
                                                For a taste of mud crabs in their purest form, simply steam them to retain their natural flavor and delicate texture. Enjoy them with a squeeze of lime and a drizzle of melted butter for a simple yet satisfying meal.
                                            </strong>
                                        </li>
                                        <li class="mt-10">
                                            <strong class="text-yellow">Stir-Fried Delights: </strong>
                                            Elevate your culinary creations by stir-frying mud crabs with aromatic spices, fresh vegetables, and a touch of soy sauce. The flavors will meld together, creating a symphony of taste that will impress even the most discerning palates.
                                            </strong>
                                        </li>
                                        <li class="mt-10">
                                            <strong class="text-yellow">Salads and Stir-Fries: </strong>
                                            A Touch of Seafood Goodness: Incorporate mud crabs into salads and stir-fries for a burst of seafood goodness. Their delicate texture and sweet flavor will complement a variety of ingredients, adding a unique dimension to your culinary creations.
                                            </strong>
                                        </li>
                                    </ul>
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <img img-arc="2" class="img-arc" src="{{asset('arcs/arc_9.svg')}}" />
            </section>
            <section class="section" data-clip-id="4" style="background-image: url({{asset('bg/pattern_bg2.jpg')}});">
                <div class="content">
                    <div class="full-width align-in-center">
                        <div class="_75-width z-index-1 justify-center md_90-width md_align-center sm_flex_column">
                            
                            <div class="flex-column _70-width sm_text-center sm_90-width">
                                <h1 class="h1 sm_font-size-25 text-yellow text-center">
                                    Ecological farming
                                </h1>
                                <p class="para text-white sm_font-size-11 mb-50 pb-30 sm_pb-0 sm_mb-10">
                                    Ecological mud crab farming embraces a philosophy of sustainability, prioritizing environmental protection and ethical practices. Farms are carefully sited to minimize their impact on sensitive ecosystems, often utilizing mangrove forests as natural habitats for the crabs. Responsible pond management practices are employed to maintain water quality and prevent pollution, while organic feed ensures the highest quality crabs, devoid of harmful chemicals and antibiotics.
                                    <br><br>
                                    By choosing ecologically farmed mud crabs, you are making a conscious decision to support sustainable seafood practices. Your choice contributes to the protection of marine ecosystems, promotes ethical farming methods, and ensures the continued availability of high-quality seafood for future generations.
                                </p>
                            </div>

                            <div class="w400 p-30 sm_p-10 sm_w250">
                                <img class="full-width circle border-15-orange sm_border-10 shadow_1" src="{{asset('images/image_8.jpg')}}">
                            </div>
                        </div>
                    </div>
                </div>
                <img img-arc="3" class="img-arc" src="{{asset('arcs/arc_15.svg')}}"/>
            </section>
            <section class="section sm_pb-50 sm_mb-50 pb-50 mb-50" data-clip-id="5" style="background-image: url({{asset('bg/pattern_bg3.jpg')}});">
                <div class="content mt-100">
                        <div class="full-width align-in-center">
                            <div class="_75-width flex-column z-index-1 justify-center md_90-width md_align-center">
                                <div class="full-width justify-between align-center sm_flex-column sm_justify-center">
                                    <div class="w400 p-30 sm_p-10 sm_w250">
                                        <img class="full-width circle border-15-orange sm_border-10 shadow_1" src="{{asset('images/image_7.jpg')}}">
                                    </div>
                                    <div class="flex-column _70-width sm_text-center sm_90-width">
                                        <h1 class="h1 sm_font-size-25 text-yellow text-center">
                                            Embrace the Goodness of Mud Crabs
                                        </h1>
                                        <p class="para text-white sm_font-size-11 mb-50 pb-30 sm_pb-0 sm_mb-10">
                                            Embark on a culinary journey with mud crabs and savor the flavors of a sustainable seafood delicacy. With every bite, you are not only indulging in a culinary masterpiece but also contributing to a healthier planet for all. Experience the delectable taste of mud crabs, knowing that your choice is making a positive impact on the environment and supporting responsible farming practices.
                                        </p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                <img img-arc="4" class="img-arc" src="arcs/arc_2.svg"/>
            </section>
        </div>
@endsection