@extends('layouts.master')

@section('menu')
    @include('components.menu_1')
@endsection

@section('head_extra')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
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
                        <div class="_75-width md_90-width md_align-center flex-column justify-center max-w700">
                            <h1 class="h1 text-yellow sm_font-size-35 sm_mt-60 text-center">Become an Investor
                            </h1>
                            <span class="h4 text-white text-center mb-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua.</span>
                            <form action="confirm-email" method="post" onsubmit="return inputValidation(this)">
                                <div class="form-container">
                                    <div class="full-width text-center">
                                        <div class="logo-container align-in-center flex-column mt-20">
                                            <label>Your Photo (Optional)</label>
                                            <div class="logo d-flex align-in-center">
                                                <img id="logo-img" alt="logo-img">
                                                <span class="material-icons">
                                                    image
                                                </span>
                                            </div>
                                            <button id="remove-logo" type="button">Remove Photo</button>
                                        </div>
                                    </div>
                                    <div class="d-flex full-width form-responsive">
                                        <div class="input-text" required>
                                            <label label="(Must be filled in)">First Name</label>
                                            <input type="text" id="first-name" placeholder="First Name">
                                        </div>
                                        <div class="input-text" required>
                                            <label label="(Must be filled in)">Last Name</label>
                                            <input type="text" id="last-name" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="d-flex full-width form-responsive">
                                        <div class="input-text" required>
                                            <label label="(Must be filled in)">Email</label>
                                            <input type="email" id="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="d-flex full-width form-responsive">
                                        <div class="input-text" required>
                                            <label label="(Must be filled in)">Password</label>
                                            <input type="password" id="password" placeholder="Password">
                                        </div>
                                        <div class="input-text" required>
                                            <label label="(Must be filled in)">Confirm Password</label>
                                            <input type="password" id="confirm-password" placeholder="Confirm Password">
                                        </div>
                                    </div>
                                    <div class="d-flex full-width form-responsive">
                                        <div class="input-textarea" required>
                                            <label style="font-size: 14px" label="(Must be filled in)">Address</label>
                                            <textarea id="address" placeholder="Address"></textarea>
                                        </div>
                                    </div>
                                    <div class="d-flex full-width form-responsive">
                                        <div class="input-text" required>
                                            <label label="(Must be filled in) This is just suggestion, and not binding in any way">Size of possible investment</label>
                                            <div class="currency-field" prefix="US$">
                                                <input class="format-currency" type="text" id="investment" parent=".input-text" placeholder="0">
                                            </div>
                                            <!-- <div class="input-group d-flex-important align-center full-width">
                                                <div class="label">US$</div>
                                                <input class="number-format" type="text" id="investment" placeholder="0">
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="d-flex full-width form-responsive">
                                        <div class="input-textarea" required>
                                            <label label="(Must be filled in)">Do you have any "special skills" that you would be happy offer us? Or anything else, please write us a few lines below.</label>
                                            <textarea id="skills" placeholder="Special skills"></textarea>
                                        </div>
                                    </div>
                                    <div class="d-flex full-width justify-center">
                                        <div class="button-secondary">
                                            <button type="submit">SUBMIT</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>


    <input id="logo-file" class="display-none" type="file" accept="image/*" onchange="loadFile(event)">
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

<script>
    var loadFile = function (event) {
        var output = $('#logo-img');
        var reader = new FileReader();
        reader.onload = function () {
            output.attr('src', reader.result).parent().addClass('image-opened');
        }
        reader.readAsDataURL(event.target.files[0]);
    };
</script>

<script>
    function inputValidation(form) {
        var errMsgCount = 0;
        $(form).find('.input-text[required] input, .input-textarea[required] textarea').each(function () {
            var elm = $(this);
            var parentElm = elm.attr('parent')? elm.parents(elm.attr('parent')) :elm.parent();
            if (elm.val() == '') {
                errMsgCount++;
                parentElm.addClass('input-error');
                if (parentElm.find('.err-msg').length == 0) {
                    var inpErr = document.createElement('span');
                    $(inpErr).addClass('err-msg').html('Required');
                    parentElm.append(inpErr);
                }
                elm.keyup(function () {
                    $(this).parents('.input-error').removeClass('input-error');
                    $(this).next('.err-msg').remove();
                })
                if (errMsgCount == 1) {
                    elm.focus();
                }

            }

            if (($('#password').val() != $('#confirm-password').val()) && errMsgCount == 0) {
                openDialog('Password', "Password doesn't match");
                $('#password').focus();
                errMsgCount++;
            }
        })

        if (errMsgCount > 0) {
            return false;
        }

        return true;
    }
</script>

<script>

    $(function () {

        $('.checkbox').click(function () {
            $(this).find('input[type=checkbox]').prop('checked', !$(this).find('input[type=checkbox]').prop('checked')).change();
        })

        $('.logo').click(function () {
            $('#logo-file').click();
        })

        $('#remove-logo').click(function (e) {
            e.stopPropagation();
            $('#logo-img').attr('src', '').parent().removeClass('image-opened');
        })

    })

</script>
@endsection



@section('style_extra')
<style>
    .logo {
        background-color: rgba(255, 255, 255, 0.1);
        width: 150px;
        height: 150px;
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        margin-bottom: 30px;
        cursor: pointer;
    }

    .logo img {
        display: none;
    }

    .logo span {
        font-size: 45px;
        color: white;
    }

    .logo + button {
        display: none;
        margin-top: 20px;
        background: transparent;
        border: 1px solid #FFF;
        color: #FFF;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
    }

    .logo.image-opened {
        background:#585858;
        border: 0;
        width: 150px;
        height: 150px;
        flex-direction: column;
        margin-bottom: 0px;
        overflow: hidden;
    }

    .logo.image-opened img {
        display: block;
    }

    .logo.image-opened span {
        display: none;
    }

    .logo.image-opened + button {
        display: block;
    }

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

    .currency-field{
        position: relative;
    }
    .currency-field:before{
        content: attr(prefix);
        position: absolute;
        left: 10px;
        top: calc(50% - 1px);
        transform: translatey(-50%);
        color: #c8c8c8;
        font-size: 14px;
    }

    .currency-field input{
        padding-left: 45px;
    }

    .form-container{
        background: #4b4b4b;
    }
</style>
@endsection
