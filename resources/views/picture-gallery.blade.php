@extends('layouts.master')

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
            <section class="section bg-white" data-clip-id="1">
                <div class="content">
                    <div class="full-width align-in-center pb-60">
                        <div class="_75-width md_90-width flex-column justify-center">
                            <h1 class="h1 text-default sm_font-size-35 text-center mb-10">Picture Gallery</h1>
                            <div class="gallery mt-40">
                                <div id="img-1" class="item">
                                    <a class="popup-page-url" parent-id="img-1" href="images.html #image_1"><img src="{{asset('images/image_2.jpg')}}"></a>
                                </div>
                                <div id="img-2" class="item">
                                    <a class="popup-page-url" parent-id="img-2" href="images.html #image_2"><img src="{{asset('images/image_5.jpg')}}"></a>
                                </div>
                                <div id="img-3" class="item">
                                    <a class="popup-page-url" parent-id="img-3" href="images.html #image_3"><img src="{{asset('images/image_6.jpg')}}"></a>
                                </div>
                                <div id="img-4" class="item">
                                    <a class="popup-page-url" parent-id="img-4" href="images.html #image_4"><img src="{{asset('images/image_3.jpg')}}"></a>
                                </div>
                                <div id="img-5" class="item">
                                    <a class="popup-page-url" parent-id="img-5" href="images.html #image_5"><img src="{{asset('images/image_2.jpg')}}"></a>
                                </div>
                                <div id="img-6" class="item">
                                    <a class="popup-page-url" parent-id="img-6" href="images.html #image_6"><img src="{{asset('images/header2-image.jpg')}}"></a>
                                </div>
                                <div id="img-7" class="item">
                                    <a class="popup-page-url" parent-id="img-7" href="images.html #image_7"><img src="{{asset('images/image_6.jpg')}}"></a>
                                </div>
                                <div id="img-8" class="item">
                                    <a class="popup-page-url" parent-id="img-8" href="images.html #image_8"><img src="{{asset('images/image_3.jpg')}}"></a>
                                </div>
                                <div id="img-9" class="item">
                                    <a class="popup-page-url" parent-id="img-9" href="images.html #image_9"><img src="{{asset('images/image_5.jpg')}}"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        

@endsection