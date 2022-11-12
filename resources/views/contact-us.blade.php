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
                                    Fill out the form and well get back to you as soon as possible
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

</script>
<!-- >>> End -->
@endsection
