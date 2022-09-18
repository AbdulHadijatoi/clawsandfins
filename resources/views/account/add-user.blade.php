@extends('layouts.master')



@section('menu')
<li><a href="{{url('soft-shelled-mudcrabs')}}">Soft-shelled mudcrabs</a></li>
<li><a href="{{url('hard-shelled-mudcrabs')}}">Hard-shelled mudcrabs</a></li>
<li><a href="{{url('information')}}">Information</a></li>
<li><a href="{{url('where-to-buy')}}">Where to buy</a></li>
<li><a href="{{url('contact-us')}}">Contact us</a></li>
<li class="distributor-investor-menu display-none"><a href="{{url('updates')}}">Updates</a></li>
<li class="distributor-investor-menu display-none"><a href="picture-gallery">Picture
        Gallery</a></li>
<li class="distributor-investor-menu display-none"><a href="future-ideas">Future
        Ideas</a></li>
<li class="distributor-investor-menu display-none"><a href="financial-updates">Financial
        Updates</a></li>
<li><a href="become-distributor">Become a distributor</a></li>
<li><a href="become-investor">Become an investor</a></li>
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

        .logo+button {
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
            background: #585858;
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

        .logo.image-opened+button {
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

        .currency-field {
            position: relative;
        }

        .currency-field:before {
            content: attr(prefix);
            position: absolute;
            left: 10px;
            top: calc(50% - 1px);
            transform: translatey(-50%);
            color: #c8c8c8;
            font-size: 14px;
        }

        .currency-field input {
            padding-left: 45px;
        }

        .form-container {
            background: #4b4b4b;
        }

        .table-header{
            color: #FFF;
            font-size: 12px;
            padding: 5px 10px;
            border-bottom: 1px solid #6f6f6f;
        }

        .table-row{
            color: #FFF;
            font-size: 14px;
            padding: 10px;
            border-bottom: 1px solid #6f6f6f;
        }

        .user-avatar{
            display: block;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #312f2b;
            text-align: center;
            line-height: 40px;
            margin-right: 10px;
        }

        .more-menu{
            position: relative;
        }

        .more-menu button{
            background: transparent;
            border: 0;
            color: #d1d1d1;
            cursor: pointer;
        }

        .context-menu{
            visibility: hidden;
            position: absolute;
            background: #FFF;
            top: 0;
            left: 0;
            color: #2d2d2d;
            border-radius: 5px;
            z-index: 1;
        }

        .context-menu ul{
            padding: 5px 0;
        }

        .context-menu ul li{
            padding: 5px 20px;
            cursor: pointer;
            font-size: 14px;
        }

        .context-menu ul li:hover{
            background: #eae9e9;
        }

        .open-context-menu{
            outline: none;
        }

        .open-context-menu:focus .context-menu{
            visibility: visible;
        }
</style>
@endsection
@section('head_script_extra')
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
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
    function openContextMenu(elm){
        elm.addClass('open-context-menu').attr('tabindex','-1').focus();
        elm.find('.context-menu .context-menu-item').click(function(e){
            e.stopPropagation();
            elm.removeClass('open-context-menu');
        })
    }
</script>
<script>
function inputValidation(form) {
    var errMsgCount = 0;
    $(form).find('.input-text[required] input, .input-textarea[required] textarea').each(function () {
        var elm = $(this);
        var parentElm = elm.attr('parent') ? elm.parents(elm.attr('parent')) : elm.parent();
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
<!-- >>> End -->
@endsection

@section('content')


        <!-- Visitor Topbar >>> -->
        <div class="nav-top justify-center nav-visitor">
            <div class="nav-area max-w1280 justify-between align-center">
                <div class="welcome-message no-wrap">
                    <h4>Welcome,</h4>
                    <h3>Visitor</h3>
                </div>
                <div class="zoom-info-button">
                    <button onclick="zoomNotif(0)">Content too small or big?</button>
                </div>
                <div class="align-center full-height">
                    <div class="company-info align-center full-height">
                        <div class="menu-dropdown-overlay">
                            <ul>
                                <li class="disable-menu"><a>Account Info</a></li>
                                <li class="login-menu"><a href="{{route('login')}}">Log in</a></li>
                            </ul>
                        </div>
                        <div class="text-right">
                            <span class="user-status">Unknown</span>
                        </div>
                        <span>V</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- >>> End -->

        <!-- After Login - Distributor/Inverstor Topbar >>> -->
        <div class="nav-top justify-center nav-distributor-investor display-none">
            <div class="nav-area max-w1280 justify-between align-center">
                <div class="welcome-message no-wrap">
                    <h4>Welcome Back,</h4>
                    <h3>Contact Name</h3>
                </div>
                <div class="zoom-info-button">
                    <button onclick="zoomNotif(0)">Content too small or big?</button>
                </div>
                <div class="align-center full-height">
                    <div class="company-info align-center full-height">
                        <div class="menu-dropdown-overlay">
                            <ul>
                                <li><a href="{{url('account')}}">Account Info</a></li>
                                <li><a href="{{url('account/add-user')}}">Add User</a></li>
                                <li class="md-divider"></li>
                                @auth
                                <li class="logout-menu display-none"><a href="{{route('logout')}}">Log out</a></li>
                                @endauth
                            </ul>
                        </div>
                        <div class="text-right">
                            <h3>Company Name</h3>
                            <span class="user-status">Candidate</span>
                        </div>
                        <img src="{{asset('images/logo.png')}}">
                    </div>
                </div>
            </div>
        </div>
        <!-- >>> End -->

        <!-- Header -->
        <header class="full-width text-white flex justify-between relative _mt_100">
            <div id="placeholder1"></div>
            <div id="headerSvg" class="_50-width z-index-2 absolute top-left">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 628.99 462.748">
                    <defs>
                        <linearGradient id="linear-gradient" x1="-0.077" y1="-0.016" x2="0.954" y2="0.868"
                            gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#ff1300" />
                            <stop offset="0.024" stop-color="#ff1a00" />
                            <stop offset="0.144" stop-color="#ff3c02" />
                            <stop offset="0.273" stop-color="#ff5804" />
                            <stop offset="0.411" stop-color="#ff6d05" />
                            <stop offset="0.564" stop-color="#ff7d06" />
                            <stop offset="0.741" stop-color="#ff8606" />
                            <stop offset="1" stop-color="#ff8907" />
                        </linearGradient>
                        <linearGradient id="linear-gradient-2" x1="-0.147" y1="0.5" x2="1.059" y2="0.5"
                            gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#e01514" />
                            <stop offset="0.105" stop-color="#e31818" />
                            <stop offset="0.468" stop-color="#ea2121" />
                            <stop offset="1" stop-color="#ed2424" />
                        </linearGradient>
                        <linearGradient id="linear-gradient-3" x1="-0.289" y1="0.5" x2="0.711" y2="0.5"
                            xlink:href="#linear-gradient-2" />
                        <radialGradient id="radial-gradient" cx="0.542" cy="0.349" r="0.806"
                            gradientTransform="matrix(0.766, 0.497, -0.209, 0.414, 0.2, -0.064)"
                            gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#550002" />
                            <stop offset="0.197" stop-color="#5e0101" stop-opacity="0.941" />
                            <stop offset="0.428" stop-color="#7b0401" stop-opacity="0.773" />
                            <stop offset="0.676" stop-color="#aa0900" stop-opacity="0.498" />
                            <stop offset="0.935" stop-color="#ec1000" stop-opacity="0.11" />
                            <stop offset="1" stop-color="#ff1300" stop-opacity="0" />
                        </radialGradient>
                        <radialGradient id="radial-gradient-2" cx="0.382" cy="0.407" r="0.563"
                            gradientTransform="matrix(0.62, 0.639, -0.332, 0.496, 0.28, -0.039)"
                            gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#940000" />
                            <stop offset="0.143" stop-color="#970000" stop-opacity="0.969" />
                            <stop offset="0.312" stop-color="#a10200" stop-opacity="0.871" />
                            <stop offset="0.493" stop-color="#b20500" stop-opacity="0.71" />
                            <stop offset="0.683" stop-color="#ca0900" stop-opacity="0.486" />
                            <stop offset="0.879" stop-color="#e90f00" stop-opacity="0.204" />
                            <stop offset="1" stop-color="#ff1300" stop-opacity="0" />
                        </radialGradient>
                    </defs>
                    <g id="Group_91" data-name="Group 91" transform="translate(5787 665)">
                        <path id="Path_5" data-name="Path 5"
                            d="M548.676,0H0V254.318l.2-.029Q.18,329.869.1,405.449c-.005,4.509,1.33,6.267,5.535,7.47a389.728,389.728,0,0,0,136.631,14.1C262.2,418.265,364,368.807,451.686,288.3c56.573-51.941,98.6-113.749,124.559-186.233A465.017,465.017,0,0,0,599.779.97,9.13,9.13,0,0,1,600,0Z"
                            transform="translate(-5787 -665)" opacity="0.97" fill="url(#linear-gradient)" />
                        <g id="Group_2" data-name="Group 2" transform="translate(-5787 -665)">
                            <g id="Group_1" data-name="Group 1">
                                <path id="Path_1" data-name="Path 1"
                                    d="M628.99,0V2a37.991,37.991,0,0,0-1.02,4.31c-1.37,11.03-2.36,22.13-4.05,33.11-9.14,59.46-29.36,114.98-59.83,166.82-34.45,58.62-79.96,107.41-133.86,148.38-83.7,63.62-177.26,101.9-283.12,107.54A397.231,397.231,0,0,1,4.94,444.18C1.02,442.94,0,441.24,0,437.27Q.165,221.465.09,5.65V2.24C.16,3.81.22,5.39.22,6.96Q.235,206.2.1,405.45c0,4.51,1.33,6.27,5.54,7.47a389.8,389.8,0,0,0,136.63,14.1C262.2,418.27,364,368.81,451.69,288.3c56.57-51.94,98.6-113.75,124.55-186.24A464.813,464.813,0,0,0,599.78.97a6.68,6.68,0,0,1,.16-.75h23.09C625.02.22,627.01.08,628.99,0Z"
                                    opacity="0.6" fill="url(#linear-gradient-2)" />
                                <path id="Path_2" data-name="Path 2"
                                    d="M553.04,6.29a479.518,479.518,0,0,1-18.22,124.38c-25.98,90.98-72.7,169.07-145.88,230.06-49.59,41.34-105.73,68.76-170.91,74.57-44.09,3.93-86.45-3-126.35-22.97a183.035,183.035,0,0,1-33.2-21.03,137,137,0,0,1-33.55-39.16A147.892,147.892,0,0,0,11.17,332.6C8.01,328.69,3.76,325.67,0,322.26V254.32s27.53-4.35,45.95,18.71c15.71,19.66,28.29,66.58,109.54,88.42a319.329,319.329,0,0,0,48.67,8.81C332.62,384.19,525.11,249.74,548.67.15h4.37C553.04,2.67,553.07,4.48,553.04,6.29Z"
                                    opacity="0.6" fill="url(#linear-gradient-3)" />
                                <path id="Path_3" data-name="Path 3"
                                    d="M155.49,361.45,58.48,391.3a137,137,0,0,1-33.55-39.16A147.892,147.892,0,0,0,11.17,332.6C8.01,328.69,3.76,325.67,0,322.26V254.32s27.53-4.35,45.95,18.71C61.66,292.69,74.24,339.61,155.49,361.45Z"
                                    opacity="0.5" fill="url(#radial-gradient)" />
                            </g>
                            <path id="Path_4" data-name="Path 4"
                                d="M131.13,427.68A389.413,389.413,0,0,1,5.64,412.92C1.43,411.72.1,409.96.1,405.45q.045-37.785.07-75.58c0-2.48,0-4.97.01-7.45,3.71,3.35,7.88,6.33,10.99,10.18a147.892,147.892,0,0,1,13.76,19.54A137,137,0,0,0,58.48,391.3a183.035,183.035,0,0,0,33.2,21.03A225.313,225.313,0,0,0,131.13,427.68Z"
                                opacity="0.5" fill="url(#radial-gradient-2)" />
                        </g>
                    </g>
                </svg>

                <div class="absolute top-left _85-width _85-height align-in-center">
                    <a href="{{url('/')}}" class="full-width align-in-center"><img
                            class="_40-width _mb_40 mr-80 sm_mb-20 mr-5" src="{{asset('images/logo.png')}}"></a>
                </div>

            </div>
            <div id="headerArc" class="_70-width z-index-1 absolute top-right sm_full-width">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="-5 18 977.35 707.88">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: none;
                            }

                            .cls-2 {
                                clip-path: url(#clip-path);
                            }

                            .cls-3 {
                                fill: #b10207;
                            }

                            .cls-4 {
                                fill: #e50b00;
                            }

                            .cls-5 {
                                fill: url(#linear-gradient);
                            }

                            .cls-6 {
                                fill: url(#radial-gradient);
                            }

                            .cls-7 {
                                filter: url(#Path_6);
                            }
                        </style>
                        <clipPath id="clip-path">
                            <path id="Path_11" data-name="Path 11" class="cls-1"
                                d="M1286.124,0V568.1q-27.8,10.18-57.321,18.164c-70.31,19.07-147.617,28.817-230.251,28.817-175.688,0-334.854-62.134-450.614-162.77-32.331-29-60.432-60.462-83.641-94C420.016,294.348,393.455,222.84,389,146.469A396.051,396.051,0,0,1,404.943,10.512l-3.383.2q1.4-5.377,2.93-10.713Z"
                                transform="translate(-388.344)" />
                        </clipPath>
                        <filter id="Path_6" x="0" y="0" width="977.35" height="707.88" filterUnits="userSpaceOnUse">
                            <feOffset dx="-10" dy="3" input="SourceAlpha" />
                            <feGaussianBlur stdDeviation="5" result="blur" />
                            <feFlood />
                            <feComposite operator="in" in2="blur" />
                            <feComposite in="SourceGraphic" />
                        </filter>
                        <linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#ff8907" />
                            <stop offset="0.223" stop-color="#ff5e04" />
                            <stop offset="0.439" stop-color="#ff3d02" />
                            <stop offset="0.645" stop-color="#ff2601" />
                            <stop offset="0.837" stop-color="#ff1700" />
                            <stop offset="1" stop-color="#ff1300" />
                        </linearGradient>
                        <radialGradient id="radial-gradient" cx="0.427" cy="0.476" fx="0.3279726505279541" r="0.211"
                            gradientTransform="matrix(1.131, -0.651, 2.499, 1.953, -1.095, -0.191)"
                            gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#360000" />
                            <stop offset="0.255" stop-color="#410000" stop-opacity="0.91" />
                            <stop offset="0.554" stop-color="#610002" stop-opacity="0.643" />
                            <stop offset="0.875" stop-color="#970105" stop-opacity="0.208" />
                            <stop offset="1" stop-color="#b10207" stop-opacity="0" />
                        </radialGradient>
                    </defs>
                    <g id="Group_93" data-name="Group 93" transform="translate(-66.324 12)">
                        <g id="Group_91" data-name="Group 91" transform="translate(-247.656)">
                            <g id="Group_4" data-name="Group 4" class="cls-2" transform="translate(388.344)">
                                <g id="sjaWRX.tif" transform="translate(-162.452)">
                                    <image id="Layer_1" data-name="Layer 1" width="1060.232" height="757.165"
                                        xlink:href="{{asset('images/header2-image.jpg')}}" />
                                </g>
                            </g>
                        </g>
                        <g id="Group_92" data-name="Group 92" transform="translate(-241.326)">
                            <g class="cls-7" transform="matrix(1, 0, 0, 1, 307.65, -12)">
                                <path id="Path_6-2" data-name="Path 6"
                                    d="M347.85,0a469.03,469.03,0,0,0-15.2,118.55c0,139.15,61.37,266.42,162.92,364.3,123.9,119.4,307.6,195.03,512.65,195.03,96.68,0,188.62-16.81,271.78-47.1V600.24S930.2,747.051,593,535.519C268.372,313.93,347.85,0,347.85,0Z"
                                    transform="translate(-307.65 12)" />
                            </g>
                            <path id="Path_7" data-name="Path 7" class="cls-3"
                                d="M1280,600.24v30.54c-83.16,30.29-175.1,47.1-271.78,47.1-205.05,0-388.75-75.63-512.65-195.03,123.19,105.3,297.89,171.03,491.65,171.03C1092.11,653.88,1191.42,634.62,1280,600.24Z" />
                            <path id="Path_8" data-name="Path 8" class="cls-4"
                                d="M1279.995,564.22v36.02c-88.58,34.38-187.89,53.64-292.78,53.64-193.76,0-368.46-65.73-491.65-171.03-101.55-97.88-162.92-225.15-162.92-364.3A469.03,469.03,0,0,1,347.845,0h56.53a436.958,436.958,0,0,0-16.96,120.68c0,68.49,15.93,133.78,44.76,193.25,30.83,63.57,76.41,120.5,133.05,167.61a.109.109,0,0,1,.04.02,569.815,569.815,0,0,0,46.62,34.86l.01.01c98.45,66.09,222.2,105.45,356.61,105.45,93.31,0,179.13-13.45,254.56-39.62Q1252.36,574.325,1279.995,564.22Z" />
                            <path id="Path_9" data-name="Path 9" class="cls-5"
                                d="M1223.07,582.26c-75.43,26.17-161.25,39.62-254.56,39.62-241.52,0-448.62-127.08-536.33-307.95C539.15,490.6,750.79,610.88,994.39,610.88,1076.46,610.88,1153.24,601.2,1223.07,582.26Z" />
                            <path id="Path_10" data-name="Path 10" class="cls-6"
                                d="M679.61,537.784c-41.707,0-385.285-74.713-351.48-522.764l78.7-4.583A393.218,393.218,0,0,0,391,145.465c4.417,75.853,36.634,143.209,74.775,210.4C522.566,455.9,656.285,527.019,679.61,537.784Z" />
                        </g>
                    </g>
                </svg>
            </div>
        </header>

        <!-- Content -->
        <div class="content-wrapper">
            <section class="section" data-clip-id="1" style="background-image: url('{{asset('bg/grey4.jpg')}}');">
                <div class="content">
                    <div class="full-width align-in-center pb-120">
                        <div class="_75-width md_90-width md_align-center flex-column justify-center max-w700">
                            <h1 class="h1 text-yellow sm_font-size-35 sm_mt-60 text-center">Add User</h1>
                            <form class="full-width" action="user/add" method="post" onsubmit="return inputValidation(this)">
                                <div class="form-container">
                                    <div class="d-flex full-width form-responsive mt-20">
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
                                            <label label="(Must be filled in)">Title</label>
                                            <input type="title" id="title" placeholder="Title">
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
                                    <div class="d-flex full-width justify-center">
                                        <div class="button-secondary">
                                            <button type="submit">Add User</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="full-width">
                                <div class="form-container">
                                    <div class="table-header d-flex">
                                        <div class="equal-width">User</div>
                                        <div class="equal-width">Title</div>
                                    </div>
                                    <div class="table-row d-flex">
                                        <div class="equal-width">
                                            <div class="d-flex">
                                                <div><span class="user-avatar">R</span></div>
                                                <div class="flex-column">
                                                    <span>Richard Kyle</span>
                                                    <span class="font-size-12 text-light">order@mail.com</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="equal-width d-flex">
                                            <div class="equal-width">
                                                <span class="font-size-12 text-light">Admin</span>
                                            </div>
                                            <div class="more-menu">
                                                <button onclick="openContextMenu($(this).parent())">
                                                    <span class="material-icons">
                                                        more_vert
                                                    </span>
                                                </button>
                                                <div class="context-menu">
                                                    <ul>
                                                        <li class="context-menu-item">Remove</li>
                                                        <li class="context-menu-item">Disable</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row d-flex">
                                        <div class="equal-width">
                                            <div class="d-flex">
                                                <div><span class="user-avatar">J</span></div>
                                                <div class="flex-column">
                                                    <span>Jan Peter</span>
                                                    <span class="font-size-12 text-light">janpeter@gmail.com</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="equal-width d-flex">
                                            <div class="equal-width">
                                                <span class="font-size-12 text-light">Owner</span>
                                            </div>
                                            <div class="more-menu">
                                                <button onclick="openContextMenu($(this).parent())">
                                                    <span class="material-icons">
                                                        more_vert
                                                    </span>
                                                </button>
                                                <div class="context-menu">
                                                    <ul>
                                                        <li class="context-menu-item">Remove</li>
                                                        <li class="context-menu-item">Disable</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

@endsection