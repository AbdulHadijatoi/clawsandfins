@extends('layouts.master')

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
    </style>
@endsection

@section('content')
        <!-- Content -->
        <div class="content-wrapper">
            <section class="section" data-clip-id="1" style="background-image: url('{{asset('bg/grey4.jpg')}}');">
                <div class="content">
                    <div class="full-width align-in-center pb-120">
                        <div class="_75-width md_90-width flex-column justify-center max-w700">
                            <div class="confirm-box text-center">
                                <img src="{{asset('svg/mail.svg')}}">
                                <h1 class="h1 text-yellow sm_font-size-35 text-center mb-30">Your email is not verified
                                </h1>
                                {{-- <div class="text-light p-20 text-center">
                                    We sent a confirmation email to:
                                </div>
                                <div class="text-light p-20 text-center">
                                    <strong>{{$user->email}}</strong>
                                </div> --}}
                                <div class="text-light p-20 text-center">
                                    Check your email and click on the<br>confirmation link to continue.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
@endsection