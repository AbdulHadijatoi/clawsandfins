@extends('layouts.master')



@section('menu')
    @include('components.menu_1')
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

<script>
    function inputValidation(form) {
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

        return true;
    }
</script>
<!-- >>> End -->
@endsection

@section('content')
      
        

        <!-- Content -->
        <div class="content-wrapper">
            <section class="section default-bg" data-clip-id="1">
                <div class="content">
                    <div class="full-width align-in-center pb-120">
                        <div class="_75-width md_90-width flex-column justify-center max-w700">
                            <div class="confirm-box default-form-bg">
                                <h1 class="h1 text-yellow sm_font-size-35 text-center mb-10 text-yellow">Contact us</h1>
                                <div class="text-white font-size-12 p-10 text-center mb-20">
                                    Fill out the form and well get back to you as soon as possible
                                </div>
                                <form action="message-sent" method="get" onsubmit="return inputValidation(this)" target="framesubmit">
                                    <div class="d-flex full-width form-responsive">
                                        <div class="input-text">
                                            <label>First Name</label>
                                            <input type="text" id="first-name" placeholder="First Name">
                                        </div>
                                        <div class="input-text">
                                            <label>Last Name</label>
                                            <input type="text" id="last-name" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="d-flex full-width form-responsive">
                                        <div class="input-text">
                                            <label>Subject</label>
                                            <input type="text" id="subject" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="d-flex full-width form-responsive">
                                        <div class="input-textarea">
                                            <label>Message</label>
                                            <textarea id="message" placeholder="Type message"></textarea>
                                        </div>
                                    </div>
                                    <div class="d-flex full-width justify-center">
                                        <div class="button-primary">
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
