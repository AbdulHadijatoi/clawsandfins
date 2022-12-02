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
                            <h1 class="h1 text-default sm_font-size-35 text-center mb-10">Distributor Picture Gallery</h1>
                            <div class="gallery mt-40">
                                @if($pictures)
                                    @foreach ($pictures as $index => $pic)
                                        <div id="img-{{$index}}" class="item">
                                            <a class="popup-page-url" parent-id="img-{{$index}}" href="{{url('show-gallery/'.$pic->id)}}"><img src="{{url('storage/'.$pic->name)}}"></a>
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
    .image img {
        display: block;
    }

    @media screen and (min-width: 768px){
        .popup-page {
            max-width: 1280px !important;
            width: 80% !important;
        }
    }

</style>
@endsection

