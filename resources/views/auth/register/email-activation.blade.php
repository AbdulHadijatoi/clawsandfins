@extends('layouts.master')

@section('menu')
@include('components.menu_1')
@endsection

@section('body_class')
page-no-arc
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
        .confirm-box .fa{
            font-size: 150px;
            color: #EF280E;
            text-shadow: 0 0 5px rgba(0,0,0,0.3);
        }
        header, footer{
            display: none !important;
        }
    </style>
@endsection

@section('content')
        <!-- Content -->
        <div class="content-wrapper">
            <section class="section" data-clip-id="1" style="background-image: url('{{asset('bg/grey4.jpg')}}');">
                <div class="content">
                    <div class="full-width align-in-center pb-120">
                        <div class="_75-width md_90-width flex-column justify-center max-w700">
                            @if($status==1)
                            <div class="confirm-box text-center" style="margin-top: 150px;">
                                <img src="{{asset('svg/mail.svg')}}">
                                <h1 class="h1 text-yellow sm_font-size-35 text-center mb-30">Email activation success
                                </h1>
                                <div class="text-light p-20 text-center">
                                    Please log in to start using your account
                                </div>
                                <div class="d-flex full-width justify-center">
                                    <div class="button-secondary">
                                        <button type="submit" onclick="location.href='{{route('login')}}'">Log In</button>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="confirm-box text-center" style="background: #0f0f0f">
                                <span class="fa fa-times-circle"></span>
                                <h1 class="h1 text-yellow sm_font-size-35 text-center mb-30">Email verification link has expired
                                </h1>
                                <div class="text-light p-20 text-center" style="color: #959595">
                                    Please log in and resend the link
                                </div>
                                <div class="d-flex full-width justify-center">
                                    <div class="button-secondary">
                                        <button type="submit" onclick="location.href='{{route('login')}}'">Log In</button>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
        </div>
@endsection

@section('script_extra')
<script>
    
</script>
@endsection