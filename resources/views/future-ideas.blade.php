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
                        <div class="_75-width md_90-width flex-column justify-center max-w700">
                            <h1 class="h1 text-default sm_font-size-35 text-center mb-10">Future Ideas</h1>
                            <div class="text-default font-size-12 p-10 mb-20">
                                <p class="para sm_font-size-11 text-default mt-20 mb-20">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Elit ut aliquam purus sit amet luctus venenatis. Enim tortor at auctor urna nunc id. Eu tincidunt tortor aliquam
                                    nulla. Cursus sit amet dictum sit. Egestas diam in arcu cursus euismod. Eu ultrices vitae auctor eu augue. Aliquam
                                    faucibus purus in massa tempor nec. Lectus quam id leo in vitae turpis. Nibh sit amet commodo nulla. Neque viverra justo
                                    nec ultrices dui sapien. Eros donec ac odio tempor orci dapibus ultrices in iaculis. Sodales neque sodales ut etiam sit
                                    amet nisl. Quam elementum pulvinar etiam non quam lacus suspendisse faucibus interdum. Tincidunt vitae semper quis
                                    lectus nulla at volutpat diam ut. Risus sed vulputate odio ut enim. Morbi tristique senectus et netus et malesuada fames
                                    ac. In eu mi bibendum neque egestas congue quisque egestas. Viverra accumsan in nisl nisi scelerisque eu ultrices vitae.
                                    Est ante in nibh mauris cursus mattis molestie a.
                                </p>

                                <p class="para sm_font-size-11 text-default mt-20 mb-20">
                                    Venenatis cras sed felis eget velit aliquet sagittis. Egestas egestas fringilla phasellus faucibus scelerisque eleifend.
                                    Dis parturient montes nascetur ridiculus mus mauris vitae. Blandit turpis cursus in hac. Bibendum est ultricies integer
                                    quis auctor elit. Dictum sit amet justo donec. Netus et malesuada fames ac. Eget egestas purus viverra accumsan in.
                                    Egestas maecenas pharetra convallis posuere. Massa tincidunt dui ut ornare lectus sit amet. Ridiculus mus mauris vitae
                                    ultricies leo integer. Netus et malesuada fames ac turpis egestas sed. Hac habitasse platea dictumst quisque sagittis
                                    purus. Gravida in fermentum et sollicitudin ac orci phasellus. Ornare arcu odio ut sem nulla. In metus vulputate eu
                                    scelerisque felis imperdiet proin. Nisl tincidunt eget nullam non nisi est sit amet facilisis. Consequat ac felis donec
                                    et. Sed nisi lacus sed viverra tellus. Sed sed risus pretium quam vulputate dignissim suspendisse.
                                </p>

                                <p class="para sm_font-size-11 text-default mt-20 mb-20">
                                    Gravida arcu ac tortor dignissim. Tempor nec feugiat nisl pretium. Vestibulum mattis ullamcorper velit sed ullamcorper
                                    morbi. Interdum velit euismod in pellentesque massa. Enim nunc faucibus a pellentesque. Nec dui nunc mattis enim ut
                                    tellus. Nulla facilisi cras fermentum odio eu feugiat pretium nibh ipsum. Dignissim convallis aenean et tortor at risus
                                    viverra. Posuere ac ut consequat semper viverra nam. Phasellus faucibus scelerisque eleifend donec pretium vulputate. At
                                    quis risus sed vulputate odio ut enim blandit volutpat. Non tellus orci ac auctor augue mauris augue. Viverra tellus in
                                    hac habitasse. Suspendisse interdum consectetur libero id. Sed viverra tellus in hac habitasse platea. Morbi enim nunc
                                    faucibus a pellentesque sit. Dignissim diam quis enim lobortis scelerisque. Cursus turpis massa tincidunt dui ut ornare
                                    lectus sit amet. Quis enim lobortis scelerisque fermentum. Hendrerit dolor magna eget est lorem ipsum.
                                </p>
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
