@extends('layouts.master')

@section('head_extra')
<link rel="stylesheet" href="{{asset('css/style.css')}}">
@endsection

@section('body_class')
page-no-arc
@endsection

@section('content')
        <!-- Content -->
        <div class="content-wrapper">
            <section class="section" data-clip-id="1" style="background-image: url('{{asset('bg/grey4.jpg')}}');">
                <div class="content">
                    <div class="full-width align-in-center pb-120">
                        <div class="_75-width md_90-width flex-column justify-center max-w700">
                            <div class="confirm-box">
                                <h1 class="h1 text-yellow sm_font-size-35 text-center mb-10">Contact us</h1>
                                <div class="text-white p-20 text-center mb-20">
                                    If you wish to contact us, please fill out the form below and we will reply back to you as soon as possible
                                </div>
                                <form id="form" action="{{route('contact-us.send')}}" method="POST" onsubmit="return inputValidation(this,function(){ loader=showLoader(); });" target="framesubmit">
                                    @csrf
                                    <div class="d-flex full-width form-responsive">
                                        <div class="input-text">
                                            <label>Name</label>
                                            <input type="text" id="name" placeholder="Name" name="name">
                                        </div>
                                        <div class="input-text">
                                            <label>Email</label>
                                            <input type="text" id="email" placeholder="Email" name="email">
                                        </div>
                                    </div>
                                    <div class="d-flex full-width form-responsive">
                                        <div class="input-text">
                                            <label>Subject</label>
                                            <input type="text" id="subject" placeholder="Subject" name="subject">
                                        </div>
                                    </div>
                                    <div class="d-flex full-width form-responsive">
                                        <div class="input-textarea">
                                            <label>Message</label>
                                            <textarea id="message" placeholder="Type message" name="message"></textarea>
                                        </div>
                                    </div>
                                    <div class="d-flex full-width form-responsive">
                                        <div class="captcha-img align-center"><span class="d-flex">{!! captcha_img() !!}</span></div>
                                        <div class="reload-captcha align-center"><button id="reload-captcha" type="button"><i class="material-icons">refresh</i></button></div>
                                        <div class="input-text">
                                            <input type="text" placeholder="Enter Captcha" name="captcha">
                                        </div>
                                    </div>
                                    <div class="d-flex full-width justify-center">
                                        <div class="button-secondary">
                                            <button type="submit">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <iframe class="display-none" name="framesubmit" src=""></iframe>
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

    .confirm-box{
        background: #4b4b4b !important;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    .captcha-img{
        padding: 5px;
    }

    .captcha-img img{
        margin-top: 0;
        min-width: 140px;
    }

    .captcha-img span{
        min-width: 140px;
        border-radius: 5px;
        overflow: hidden;
    }

    .reload-captcha button{
        height: 40px;
        padding: 5px;
        border-radius: 5px;
        border: 0;
        line-height: 45px;
        vertical-align: middle;
        background: #d71319;
        color: #FFF;
        cursor: pointer;
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
<script>
    var loader;
    function inputValidation(form,callback) {
        var errMsgCount = 0;
        $(form).find('input[type=text],textarea').each(function () {
            var elm = $(this);
            var parentElm = elm.parent();
            if (elm.val() == '') {
                errMsgCount++;
                parentElm.addClass('input-error');
                if (parentElm.find('.err-msg').length == 0) {
                    var inpErr = document.createElement('span');
                    $(inpErr).addClass('err-msg').html('Required');
                    parentElm.append(inpErr);
                }
                elm.keyup(function () {
                    $(this).parent().removeClass('input-error');
                    $(this).next('.err-msg').remove();
                })
                if (errMsgCount == 1) {
                    elm.focus();
                }
            }
        })

        if (errMsgCount > 0) {
            return false;
        }

        callback();

        return true;
    }

    $('body').on('click', '#popup .close', function(){
        if($(this).parent().find('h2').html() == 'Captcha error'){
            reloadCaptcha();
        }
    })

    function reloadCaptcha() {
        $.ajax({
            type: 'GET',
            url: 'reload-captcha',
            success: function (data) {
                $(".captcha-img span").html(data.captcha);
            }
        });
    }

    $('#reload-captcha').click(function () {
        reloadCaptcha();
    });

</script>
<!-- >>> End -->
@endsection
