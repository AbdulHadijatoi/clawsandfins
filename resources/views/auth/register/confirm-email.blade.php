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
                                <h1 class="h1 text-yellow sm_font-size-35 text-center mb-30">Confirm your email address
                                </h1>
                                <div class="text-light p-20 text-center">
                                    We sent a confirmation email to:
                                </div>
                                <div class="text-light p-20 text-center">
                                    <strong>{{$user->email}}</strong>
                                </div>
                                <div class="text-light p-20 text-center">
                                    Check your email and click on the<br>confirmation link to continue.
                                </div>
                                <div class="d-flex full-width justify-center">
                                    <div class="button-secondary">
                                        <button type="submit" class="resend-email">Resend Email</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
@endsection

@section('script_extra')
<script>
    var loader;
    $('.resend-email').click(function(){
        loader=showLoader();
        $.ajax({
            url: "{{url('confirm-email/resend/'.request()->token)}}",
            type: "POST",
            data: {
                _token: '{{csrf_token()}}'
            },
            dataType: 'json',
            success: function (result) {
                if(result.success){
                    openDialog('Confirm Email', 'Confirmation email has been sent successfully');
                }else if(result.error){
                    if(result.error == 1){
                        openDialog('Confirm Email', 'Confirmation email not sent, check yout connection');
                    }else{
                        openDialog('Error', 'Something went wrong, please try again');
                    }
                }
                loader.remove();
            }
        });
    })

    let emailIsVerified=false;
    let listenInterval=setInterval(function(){
        $.ajax({
            url: "{{ url('verification/verified') }}",
            type: "GET",
            data: {
                listenEmailVerified: true,
                token: '{{request()->token}}',
                _token: '{{csrf_token()}}'
            },
            dataType: 'json',
            success: function (result) {
                if(result.verified && !emailIsVerified){
                    emailIsVerified=true;
                    openDialog('Congratulations', 'Your email has been verified');
                    clearInterval(listenInterval);
                    listenInterval=setInterval(function() {
                        if($('.open-dialog').length <=0 ){
                            clearInterval(listenInterval);
                            window.location.href="{{ url('/login') }}";
                        }
                    }, 1000);
                }
            }
        });
    }, 10000)
</script>
@endsection