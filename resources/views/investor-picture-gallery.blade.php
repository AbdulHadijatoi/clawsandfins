@extends('layouts.master')

@section('body_class')
page-no-arc
@endsection

@section('custom-class-menu', 'menu-dark')

@section('content')
        <!-- Content -->
        <div class="content-wrapper">
            <section class="section bg-white" data-clip-id="1">
                <div class="content">
                    <div class="full-width align-in-center pb-60">
                        <div class="_75-width md_90-width flex-column justify-center">
                            <h1 class="h1 text-default sm_font-size-35 text-center mb-10">Investor Picture Gallery</h1>
                            <div class="gallery mt-40">
                                @if($pictures)
                                    @foreach ($pictures as $index => $pic)
                                        <div id="img-{{$index}}" class="item">
                                            <a class="popup-page-url" parent-id="img-{{$index}}" href="images.html #image_{{$index}}"><img src="{{url('storage/'.$pic->name)}}"></a>
                                        </div>
                                    @endforeach
                                @endif
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
