@extends('layouts.master')

@section('menu')
    @include('components.menu_1')
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
                    <a href="{{url('/')}}" class="full-width align-in-center"><img class="_40-width _mb_40 mr-80 sm_mb-20 mr-5"
                            src="{{asset('images/logo.png')}}"></a>
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
                            <h1 class="h1 text-yellow sm_font-size-35 sm_mt-60 text-center">Account Info</h1>
                            <form action="update-success" method="get" onsubmit="return inputValidation(this)" target="framesubmit">
                                <div class="form-container">
                                    <div class="full-width text-center mb-30">
                                        <div class="logo-container align-in-center flex-column mt-20">
                                            <div class="logo d-flex align-in-center image-opened">
                                                <img id="logo-img" alt="logo-img" src="{{asset('images/logo.png')}}">
                                                <span class="material-icons">
                                                    image
                                                </span>
                                                <button id="remove-logo" type="button">Remove Logo</button>
                                            </div>
                                        </div>
                                        <h3 class="text-yellow text-center">Company Name</h3>
                                        <div class="text-light text-center">
                                            company@mail.com
                                        </div>
                                    </div>
                                    <div class="tile tile-info">
                                        <div class="d-flex full-width form-responsive tile-show align-start">
                                            <div class="tli-label text-white font-size-14 px-10">Contact Name</div>
                                            <div id="contact-name-info" class="tli-detail text-light font-size-14 px-10"></div>
                                            <div class="text-right"><button type="button" class="button-sm btn-edit">Edit</button></div>
                                        </div>
                                        <div class="tile-hide px-10">
                                            <div class="d-flex full-width form-responsive">
                                                <div class="input-text" required>
                                                    <label label="(Must be filled in)">Contact Name</label>
                                                    <input type="text" id="contact-name" placeholder="Contact Name" valuefor="contact-name-info" value="Richard Kyle">
                                                </div>
                                            </div>
                                            <div class="d-flex full-width justify-center align-center">
                                                <div class="button-secondary button-md px-5">
                                                    <button class="update-info" type="submit">Update</button>
                                                </div>
                                                <div class="button-primary button-md px-5">
                                                    <button type="button" class="btn-edit">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tile tile-info">
                                        <div class="d-flex full-width form-responsive tile-show align-start">
                                            <div class="tli-label text-white font-size-14 px-10">Location</div>
                                            <div class="tli-detail text-light font-size-14 px-10">
                                                <div class="text-yellow"><span id="country-info"></span><span id="city-info"></span></div>
                                                <span id="postal-address-info"></span>
                                            </div>
                                            <div class="text-right"><button type="button" class="button-sm btn-edit">Edit</button></div>
                                        </div>
                                        <div class="tile-hide px-10">
                                            <div class="d-flex full-width form-responsive">
                                                <div class="input-text" required>
                                                    <label label="(Must be filled in)">Country</label>
                                                    <div id="country" class="country-city-dropdown equal-width selected" value="United States" valuefor="country-info" >
                                                        <span class="align-center justify-between">
                                                            <span class="text" contenteditable="true">United States</span>
                                                            <i class="material-icons expand-more">expand_more</i>
                                                        </span>
                                                        <div id="country-box"></div>
                                                    </div>
                                                </div>
                                                <div class="input-text" required>
                                                    <label label="(Must be filled in)">City</label>
                                                    <div id="city" class="country-city-dropdown equal-width selected" value="New York City" valuefor="city-info" vf-prefix=", ">
                                                        <span class="align-center justify-between">
                                                            <span class="text" contenteditable="true">New York City</span>
                                                            <i class="material-icons expand-more">expand_more</i>
                                                        </span>
                                                        <div id="city-box"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex full-width form-responsive">
                                                <div class="input-textarea" required>
                                                    <label style="font-size: 14px" label="(Must be filled in)">Postal Address</label>
                                                    <textarea id="postal-address" placeholder="Postal Address" valuefor="postal-address-info">2869 Broadway, New York, NY 10025, United States</textarea>
                                                </div>
                                            </div>
                                            <div class="d-flex full-width justify-center align-center">
                                                <div class="button-secondary button-md px-5">
                                                    <button class="update-info" type="submit">Update</button>
                                                </div>
                                                <div class="button-primary button-md px-5">
                                                    <button type="button" class="btn-edit">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tile tile-info">
                                        <div class="d-flex full-width form-responsive tile-show align-start">
                                            <div class="tli-label text-white font-size-14 px-10">Phone Number</div>
                                            <div class="tli-detail text-light font-size-14 px-10"><span id="phone-number-prefix"></span><span id="phone-number-info"></span></div>
                                            <div class="text-right"><button type="button" class="button-sm btn-edit">Edit</button></div>
                                        </div>
                                        <div class="tile-hide px-10">
                                            <div class="d-flex full-width form-responsive">
                                                <div class="input-text" required>
                                                    <label label="(Must be filled in)">Phone Number</label>
                                                    <div class="input-group d-flex-important align-center full-width relative">
                                                        <div id="phone-code" class="dropdown equal-width" value="1" valuefor="phone-number-prefix" vf-prefix="+">
                                                            <span class="align-center justify-between"><span class="text">+1</span><i
                                                                    class="material-icons expand-more">expand_more</i></span>
                                                            <ul class="dropdown-item"></ul>
                                                        </div>
                                                        <input type="number" id="phone-number" parent=".input-text" placeholder="Phone Number" value="23456789098" valuefor="phone-number-info">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex full-width justify-center align-center">
                                                <div class="button-secondary button-md px-5">
                                                    <button class="update-info" type="submit">Update</button>
                                                </div>
                                                <div class="button-primary button-md px-5">
                                                    <button type="button" class="btn-edit">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tile tile-info">
                                        <div class="d-flex full-width form-responsive tile-show align-start">
                                            <div class="tli-label text-white font-size-14 px-10">Website URL</div>
                                            <div class="tli-detail text-light font-size-14 px-10"><span id="wesite-url-info"></span><span class="italic display-none">none</span></div>
                                            <div class="text-right"><button type="button" class="button-sm btn-edit">Edit</button></div>
                                        </div>
                                        <div class="tile-hide px-10">
                                            <div class="d-flex full-width form-responsive">
                                                <div class="input-text">
                                                    <label>Website URL</label>
                                                    <input type="text" id="website-url" placeholder="Website URL" valuefor="wesite-url-info">
                                                </div>
                                            </div>
                                            <div class="d-flex full-width justify-center align-center">
                                                <div class="button-secondary button-md px-5">
                                                    <button class="update-info" type="submit">Update</button>
                                                </div>
                                                <div class="button-primary button-md px-5">
                                                    <button type="button" class="btn-edit">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tile tile-info">
                                        <div class="d-flex full-width form-responsive tile-show align-start">
                                            <div class="tli-label text-white font-size-14 px-10">Order Email</div>
                                            <div class="tli-detail text-light font-size-14 px-10"><span id="order-mail-info"></span><span class="italic display-none">none</span></div>
                                            <div class="text-right"><button type="button" class="button-sm btn-edit">Edit</button></div>
                                        </div>
                                        <div class="tile-hide px-10">
                                            <div class="d-flex full-width form-responsive">
                                                <div class="input-text">
                                                    <label>Order Email</label>
                                                    <input type="email" id="order-email" placeholder="Order Email" value="order@mail.com" valuefor="order-mail-info">
                                                </div>
                                            </div>
                                            <div class="d-flex full-width justify-center align-center">
                                                <div class="button-secondary button-md px-5">
                                                    <button class="update-info" type="submit">Update</button>
                                                </div>
                                                <div class="button-primary button-md px-5">
                                                    <button type="button" class="btn-edit">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tile tile-info mb-30">
                                        <div class="d-flex full-width form-responsive tile-show align-start">
                                            <div class="tli-label text-white font-size-14 px-10">Password</div>
                                            <div class="text-right"><button type="button" class="button-sm btn-edit">Change Password</button></div>
                                        </div>
                                        <div class="tile-hide px-10">
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
                                            <div class="d-flex full-width justify-center align-center">
                                                <div class="button-secondary button-md px-5">
                                                    <button class="update-info" type="submit">Update</button>
                                                </div>
                                                <div class="button-primary button-md px-5">
                                                    <button type="button" class="btn-edit">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-container">
                                    <div class="d-flex full-width form-responsive">
                                        <div class="input-text">
                                            <!-- <label style="font-size: 14px">Visiting Address</label> -->
                                            <div class="_mt_10">
                                                <div class="d-flex-important align-center">
                                                    <span class="checkbox align-in-center">
                                                        <input type="checkbox" id="same-address" checked>
                                                        <span class="material-icons">check</span>
                                                    </span>
                                                    <label label="(Must be filled in)">Visiting address (for customers) is same as postal address?</label>
                                                </div>
                                            </div>
                                            <div class="input-textarea p-0 input-fly-button" required>
                                                <textarea id="visiting-address" placeholder="Visiting Address">2869 Broadway, New York, NY 10025, United States</textarea>
                                                <button type="button" id="update-map">Update Map</button>
                                            </div>
                                            <div class="mt-10">
                                                <div class="d-flex-important align-center">
                                                    <span class="checkbox align-in-center">
                                                        <input type="checkbox" id="no-disclose">
                                                        <span class="material-icons">check</span>
                                                    </span>
                                                    <label>We don't want to disclose our location on the map</label>
                                                </div>
                                            </div>
                                            <div class="visiting-address">
                                                <div id="map" tabindex="-1" latitude="40.80523" longitude="-73.96639309999999"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex full-width flex-column px-5 form-responsive">
                                        <div>
                                            <span class="text-white font-size-14" label="(Must be filled in)">Are you 100% sure your map location is correct? <font class="font-size-12">(Adjust the map manually so it better matches your location)</font></span>
                                            <div class="input-radio" required>
                                                <div class="radio-value" value=""></div>
                                                <div class="d-flex-important align-center">
                                                    <span class="radio align-in-center">
                                                        <input type="radio" name="location_is_correct" value="yes">
                                                        <span class="material-icons">check</span>
                                                    </span>
                                                    <label class="font-size-12 opacity-8">YES, i am (Position will be locked)</label>
                                                </div>
                                                <div class="d-flex-important align-center">
                                                    <span class="radio align-in-center">
                                                        <input type="radio" name="location_is_correct" value="no">
                                                        <span class="material-icons">check</span>
                                                    </span>
                                                    <label class="font-size-12 opacity-8">No, I'm not sure (Map-pin is removed and we will contact you for further support)</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info primary-info d-flex-important">
                                            <span class="material-icons">star</span>
                                            <label><strong>PLEASE NOTE!</strong> A correct map-location IS CRUCIAL for your customers to be able to find your
                                                business, and it is also
                                                needed for a correct display on our <strong>"Where to buy our products"</strong> page.</label>
                                        </div>
                                        <div class="d-flex full-width justify-center align-center mb-20 mt-10">
                                            <div class="button-secondary button-md px-5">
                                                <button class="update-info" type="submit">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <iframe class="display-none" name="framesubmit" src=""></iframe>
    <input id="logo-file" class="display-none" type="file" accept="image/*" onchange="loadFile(event)">

@endsection


@section('style_extra')
<style>
    .logo {
            background-color: rgba(255, 255, 255, 0.1);
            width: 150px;
            height: 150px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            margin-bottom: 10px;
            cursor: pointer;
        }

        .logo img {
            display: none;
        }

        .logo span {
            font-size: 45px;
            color: white;
        }

        .logo button {
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
            background: transparent;
            border: 0;
            width: 150px;
            height: auto;
            flex-direction: column;
            margin-bottom: 10px;
        }

        .logo.image-opened img {
            display: block;
        }

        .logo.image-opened span {
            display: none;
        }

        .logo.image-opened button {
            display: block;
        }
        .visiting-address{
            height: 300px;
        }
        .visiting-address #map{
            height: 100%;
        }

        .map-marker-label{
            display: block;
            border-radius: 5px;
            padding: 2px 8px;
        }

        #phone-code{
            position: absolute;
            min-width: 60px;
            max-width: 80px;
            height: 26px;
            padding: 3px 5px;
            left: 10px;
            border-radius: 15px;
            background: #b7b7b7;
            box-shadow: 0 0 5px rgba(0,0,0,0.3);
            font-size: 14px;
            padding-left: 8px;
            padding-right: 3px;
        }

        #phone-code + input{
            padding-left: 85px;
        }

        #phone-code span > *
        {
            display: block;
        }

        #phone-code .text{
            overflow: hidden;
            width: 100%;
            text-align: center;
        }

        #phone-code .expand-more{
            font-size: 20px;
        }

        .lock-map > div:before{
            content: " ";
            position: absolute;
            left: 0;
            top: 0;
            color: #FFF;
            background: rgba(0,0,0,0.6);
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1;
        }

        /*.lock-map:after{
            content: "\e897";
            font-family: 'Material Icons';
            font-weight: normal;
            font-style: normal;
            font-size: 40px;
            color: #FFF;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 60px;
            height: 60px;
            border: 2px solid #FFF;
            border-radius: 50%;
            line-height: 60px;
            text-align: center;
            z-index: 2;
        }*/

        .lock-map:before{
            content: "Map locked";
        /*     background: #FFF; */
            color: #FFF;
            position: absolute;
            top: 10px;
            left: 10px;
            border-radius: 20px;
            text-align: center;
            z-index: 2;
            border: 1px solid #FFF;
            font-size: 14px;
            padding: 5px 10px;
            padding-left: 40px;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
        }

        .lock-map:after{
            content: "\e897";
            font-family: 'Material Icons';
            font-weight: normal;
            font-style: normal;
            font-size: 12px;
            color: #FFF;
            position: absolute;
            top: 15px;
            left: 20px;
            transform: unset;
            width: 20px;
            height: 20px;
            border: 1px solid #FFF;
            border-radius: 50%;
            line-height: 20px;
            text-align: center;
            z-index: 2;
        }

        /* Custom Marker */
        .gm-style-iw {
            width: 350px !important;
            padding: 0px !important;
            /* 	top: 0px !important; */
            /* 	left: 0px !important; */
            background-color: #181818 !important;
            /* 	box-shadow: 0 1px 6px rgba(178, 178, 178, 0.6); */
            /* 	border: 1px solid rgba(72, 181, 233, 0.6); */
            /* 	border-radius: 2px 2px 10px 10px; */
        }

        .gm-style .gm-style-iw-t::after {
            background: #181818;
            z-index: -1;
        }

        .gm-style-iw-d {
            overflow: hidden !important;
            max-height: unset !important;
        }

        #iw-container .iw-title {
            font-family: 'Open Sans Condensed', sans-serif;
            font-size: 12px;
            font-weight: bold;
            padding: 5px 10px;
            background-color: #FF7F06;
            color: #181818;
            margin: 0;
            border-radius: 2px 2px 0 0;
        }

        #iw-container .iw-content {
            font-size: 13px;
            line-height: 18px;
            font-weight: 400;
            margin-right: 1px;
            max-height: 140px;
            overflow-y: auto;
            overflow-x: hidden;
        }

        .map-marker-label {
            color: #d1d1d1;
            padding: 8px 15px;
            font-size: 12px;
        }

        #wesite-url-info:empty + span,
        #order-mail-info:empty + span
        {
            display: block !important;
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
    <!-- >>> End -->

    <script>
        var loadFile = function (event) {
            var output = $('#logo-img');
            var reader = new FileReader();
            reader.onload = function(){
                output.attr('src', reader.result ).parent().addClass('image-opened');
            }
            reader.readAsDataURL(event.target.files[0]);
        };

        function setInfoValue(){
            $('[valuefor]').each(function(){
                var infoId=$(this).attr('valuefor');
                var elm= $(this);
                var prefix=elm.attr('vf-prefix');
                var val=elm.attr('value')? elm.attr('value') : elm.val();
                console.log(val);
                $('#'+infoId).html((prefix? prefix:'')+val);
            })
        }
    </script>

    <script>
        var formChildElm;
        function inputValidation(form){
            var errMsgCount=0;
            $(formChildElm?formChildElm:form).find('.input-text[required] input, .input-textarea[required] textarea, .input-text[required] .country-city-dropdown, .input-radio[required] .radio-value').each(function () {
                var elm=$(this);
                var parentElm = elm.attr('parent') ? elm.parents(elm.attr('parent')) : elm.parent();
                var val= elm.attr('value')? elm.attr('value') : elm.val();
                if( val == ''){
                    errMsgCount++;
                    parentElm.addClass('input-error');
                    if(parentElm.find('.err-msg').length==0){
                        var inpErr=document.createElement('span');
                            $(inpErr).addClass('err-msg').html('Required');
                        parentElm.append(inpErr);
                    }
                    elm.on('keyup',function(){
                        $(this).parents('.input-error').removeClass('input-error');
                        $(this).nextAll('.err-msg').remove();
                    })
                    if(errMsgCount==1){
                        elm.focus();
                    }
                }

                if( ($('#password').val() != $('#confirm-password').val()) && errMsgCount == 0){
                    openDialog('Password', "Password doesn't match");
                    $('#password').focus();
                    errMsgCount++;
                }
            })

            if(errMsgCount>0){
                return false;
            }

            return true;
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVckSdSfsjC7N1xkOULLyq38PbDiu9WvU&callback=initMap" defer></script>

    <script>
        var countrySelectedKey=0;
        var countrySelectedID=0;
        var citySelectedID=0;
        var countryKeyData=[];
        var currentCountryName='';
        var locationIsCorrect = '';
        var loader;
        
        $.getJSON("{{asset('library/country-city/countries+cities.json')}}", function (data) {
            data = countryFilter(data);
            $.each(data, function (key, val) {
                countryKeyData.push({
                    "name": val.name,
                    "key": key,
                    "phone_code" : val.phone_code
                });
                var item=$('<div class="country-item" value="' + val.name +'">' + val.name +'</div>');
                    item.click(function(e){
                        e.stopPropagation();
                        clearCity();
                        $('#city-box').addClass('loading').html('');
                        countrySelectedKey=key;
                        countrySelectedID=val.id;
                        setPhoneCode();
                        setMapAddress(val.name);
                        loader = showLoader();
                        getCities();
                        var prn=$(this).parents('.country-city-dropdown');
                            prn.removeClass('expanded').addClass('selected').attr('value', $(this).attr('value'));
                            prn.find('.text').html( $(this).attr('value') );
                        $('body').removeClass('dropdown-expanded');
                    })
                $('#country-box').append(item);

                var phoneCode = $('<li value="' + val.phone_code.replace('-') + '">' + val.name + ' (+'+ val.phone_code + ')' + '</li>');
                    phoneCode.click(function(e){
                        e.stopPropagation();
                        var val=$(this).attr('value').replace('-');
                        $(this).parents('.dropdown')
                            .removeClass('expanded')
                            .attr('value', val)
                            .find('.text').html('+' + val);
                        $('body').removeClass('dropdown-expanded');
                    })
                $('#phone-code .dropdown-item').append(phoneCode);
            });

            if(getMapLocation()){
                marker.setPosition(latlng);
                setMapPosition();
                map.setZoom(15);
                geocodeLatLng(geocoder, map);
            }

            //Set city
            var index = countryKeyData.findIndexBy('name', $('#country').attr('value'));
            if (index >= 0) {
                countrySelectedKey = countryKeyData[index].key;
                getCities();
                loader=showLoader();
            }


        });

        function getCities(){
            $.getJSON("{{asset('library/country-city/countries+cities.json')}}", function (data) {
                $('#city-box').html('').removeClass('loading');
                $.each(countryFilter(data)[countrySelectedKey].cities.filter((v, i, a) => a.findIndex(v2 => (v2.name === v.name)) === i), function (key, val) {
                    var item = $('<div class="city-item" value="' + val.name + '">' + val.name + '</div>');
                    item.click(function (e) {
                        e.stopPropagation();
                        citySelectedID = val.id;
                        var address= $('#country .text').html() + ', ' + val.name;
                        setMapAddress(address);
                        var prn = $(this).parents('.country-city-dropdown');
                        prn.removeClass('expanded').addClass('selected').attr('value', $(this).attr('value'));
                        prn.find('.text').html($(this).attr('value'));
                        $('body').removeClass('dropdown-expanded');
                    })
                    $('#city-box').append(item);
                });
                loader.remove();
            });
        }

        function setPhoneCode(){
            var index = countryKeyData.findIndexBy('key', countrySelectedKey);
            var pc = countryKeyData[index].phone_code;
            $('#phone-code')
                .attr('value', pc.replace('-'))
                .find('.text').html('+' + pc);
        }

        function clearCity(){
            var city= $('#city');
                city.removeClass('selected')
                city.find('.text')
                    .html('');
                city.find('#city-box')
                    .html('');
        }

        function removeErrMsg(elm){
            if($(elm).parent().hasClass('input-error')){
                $(elm).parent().removeClass('input-error');
                $(elm).nextAll('.err-msg').remove();
            }
        }

        $(function(){
            setInfoValue();

            $('.update-info').click(function(){
                formChildElm=$(this).parents('.tile-info');
            })

            $('#country, #city, .dropdown').click(function(){
                var elm=this;
                $('.country-city-dropdown, .dropdown').each(function(){
                    if(!this.isSameNode(elm)){
                        $(this).removeClass('expanded');
                    }
                })
                $(this).toggleClass('expanded');
                removeErrMsg(this);
                if($(this).hasClass('expanded')){
                    if(isMobile){
                        $('body').addClass('dropdown-expanded');
                    }
                }else{
                    $('body').removeClass('dropdown-expanded');
                }
                
            })
            
            $('#country .text, #city .text').click(function(e){
                e.stopPropagation();
                var parent= $(this).parents('.country-city-dropdown');
                removeErrMsg(parent[0]);
                if(!parent.hasClass('expanded')){
                    parent.addClass('expanded');

                    if (isMobile) {
                        $('body').addClass('dropdown-expanded');
                    }
                }
                
            })
            
            $('body').on('click','#country.search-mode .expand-more, #city.search-mode .expand-more',function(e){
                e.stopPropagation();
                var parent= $(this).parents('.country-city-dropdown');
                if(parent.hasClass('search-mode')){
                    parent
                        .addClass('expanded')
                        .removeClass('search-mode');
                    if (isMobile) {
                        $('body').addClass('dropdown-expanded');
                    }
                }
                
            })
            
            $('#postal-address').on('keyup', function () {
                if($('#same-address').is(':checked')){
                    $('#visiting-address').val( $(this).val() ).trigger('keyup');
                }
            })

            $('#same-address').on('change', function () {
                if (this.checked) {
                    var prn= $('#visiting-address').parents('.input-textarea');
                    var errMsg = prn.find('.err-msg');
                    var val= $('#postal-address').val();
                    $('#visiting-address').val( val );
                    if(val!=''){
                        prn.removeClass('input-error');
                        errMsg.remove();
                    }
                } else {
                    $('#visiting-address').val( '' );
                }
            })
            
            $('#no-disclose').on('change', function () {
                if (this.checked) {
                    lockMap = true;
                    addRemoveMarker(0);
                } else {
                    lockMap = false;
                    addRemoveMarker(1);
                }
            })
            
            
            $('input[type=radio][name=location_is_correct]').on('change', function () {
                var prn= $(this).parents('.input-radio').find('.radio-value');
                var errMsg= $(this).parents('.input-radio').find('.err-msg');
                var val= $(this).val();
                if(val == 'yes' && locationIsCorrect != 'yes'){
                    $('#map').addClass('lock-map');
                    lockMap=true;
                    if(!marker){
                        addRemoveMarker(1);
                    }
                    lockMapControl(true);
                    locationIsCorrect='yes';
                    prn.attr('value', 'yes');
                }else if (val == 'no' && locationIsCorrect != 'no') {
                    $('#map').removeClass('lock-map');
                    lockMap=true;
                    addRemoveMarker(0);
                    lockMapControl(false);
                    locationIsCorrect='no';
                    prn.attr('value', 'no');
                }else{
                    $('#map').removeClass('lock-map');
                    lockMap = false;
                    if(!marker){
                        addRemoveMarker(1);
                    }
                    lockMapControl(false);
                    locationIsCorrect='';
                    prn.attr('value', '');
                }
                errMsg.remove();
            })
            
            /*$('#visiting-address').delayKeyup(function (elm) { 
                setMapAddress(elm.val()); 
            }, 2000);*/

            /*$('#visiting-address').on('keypress', function (evt) { 
                var elm=$(this);
                var keyCode= evt.keyCode? evt.keyCode : evt.which;
                if(keyCode == 13){
                    if (lockMap) { return; }
                    setMapAddress(elm.val()); 
                }
            });
            
            $('#visiting-address').on('blur', function (evt) { 
                if (lockMap) { return; }
                var elm=$(this);
                setMapAddress(elm.val()); 
            });*/
            
            $('#update-map').click(function (evt) { 
                if (lockMap) { return; }
                var elm= $('#visiting-address');
                setMapAddress(elm.val()); 
            });

            $('.checkbox').click(function(){
                $(this).find('input[type=checkbox]').prop('checked', !$(this).find('input[type=checkbox]').prop('checked')).change();
            })
            
            $('.radio').click(function(){
                $(this).find('input[type=radio]').prop('checked', !$(this).find('input[type=radio]').prop('checked')).change();
            })

            $('.logo').click(function(){
                $('#logo-file').click();
            })
            
            $('#remove-logo').click(function(e){
                e.stopPropagation();
                $('#logo-img').attr('src','').parent().removeClass('image-opened');
            })

            $('#country .text').keyup(function () {
                var parent=$(this).parents('#country');
                    parent.find('.country-item').removeClass('not-match');
                if ($(this).html() != '') {
                    parent.addClass('search-mode');
                    $('#country-box').find('.country-item:not([value*="' + $(this).html().toLowerCase() + '"i])').addClass('not-match');
                } else {
                    parent.removeClass('search-mode');
                }
            })
            
            $('#city .text').keyup(function () {
                var parent=$(this).parents('#city');
                    parent.find('.city-item').removeClass('not-match');
                if ($(this).html() != '') {
                    parent.addClass('search-mode');
                    $('#city-box').find('.city-item:not([value*="' + $(this).html().toLowerCase() + '"i])').addClass('not-match');
                } else {
                    parent.removeClass('search-mode');
                }
            })
            
            $('.btn-edit').click(function () {
                var parent=$(this).parents('.tile-info');
                    parent.toggleClass('edit-mode');
            })
        })

        $(window).click(function(e){
            if ($(e.target).closest('.country-city-dropdown, .dropdown').length==0) {
                var dropdowns = $(".country-city-dropdown, .dropdown");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if ($(openDropdown).hasClass('expanded')) {
                        $(openDropdown).removeClass('expanded');
                    }
                    $('body').removeClass('dropdown-expanded');
                }
            }
        })

        // Google Maps
        let map, latlng, marker, infoWindow, geocoder;
        var lockMap=false;
        var infoWindowContent =
                '<div id="iw-container">' +
                '<div class="iw-title">Drag map or pin to change address</div>' +
                '<div class="iw-content">' +
                '<span class="map-marker-label"></span>' +
                '</div>' +
                '</div>';

        function addRemoveMarker(val){
            if (val == 0) {
                marker.setMap(null);
                marker=null;
            } else if(val == 1) {
                addMarker();
                setMapPosition();
                geocodeLatLng(geocoder, map);
            }
        }

        function setMapPosition() {
            infoWindow.setPosition(latlng);
            infoWindow.setContent(infoWindowContent);
            infoWindow.open(map, marker);
            map.setCenter(latlng);
        }
        

        function initMap() {
            latlng = { lat: 0, lng: 0 };

            map = new google.maps.Map(document.getElementById("map"), {
                center: latlng,
                zoom: 2,
                mapTypeControl: false,
                streetViewControl: false,
                scrollwheel: false,
                gestureHandling: "cooperative",
                restriction: {
                    latLngBounds: { north: 85, south: -85, west: -180, east: 180 },
                    strictBounds: true
                },
            });
            
            geocoder = new google.maps.Geocoder();

            
            infoWindow = new google.maps.InfoWindow({content: infoWindowContent });

            addMarker();

            google.maps.event.addListener(map, 'drag', function () {
                if (lockMap) { return; }
                infoWindow.close();
                marker.setPosition(map.getCenter());
            });
            
            google.maps.event.addListener(map, 'dragend', function () {
                if (lockMap) { return; }
                latlng = map.getCenter();
                setMapPosition();
                geocodeLatLng(geocoder, map);
            });

            google.maps.event.addListener(map, 'click', function (event) {
                if(lockMap || isMobile){ return; }
                latlng= event.latLng;
                marker.setPosition(latlng);
                geocodeLatLng(geocoder, map);
            });


        }

        function getMapLocation(){
            var mapElm=$('#map');
            var lat = parseFloat(mapElm.attr('latitude'));
            var lng = parseFloat(mapElm.attr('longitude'));
            if(lat && lng){
                latlng = { lat: lat, lng: lng };
                return latlng;
            }
            return null;
        }

        function getCurrentLocation(){
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    (position) => {
                        latlng = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude,
                        };

                        marker.setPosition(latlng);
                        setMapPosition();
                        map.setZoom(15);
                        geocodeLatLng(geocoder, map);
                    },
                    () => {
                        handleLocationError(true, infoWindow, map.getCenter());
                    }
                );
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter());
            }
        }

        function lockMapControl(lock=true){
            map.setOptions({
                draggable: lock ? false : true
            });
            if(marker){
                marker.setDraggable(lock ? false : true);
            }
        }

        function addMarker(){
            const svgMarker = {
                path: "M0-48c-9.8 0-17.7 7.8-17.7 17.4 0 15.5 17.7 30.6 17.7 30.6s17.7-15.4 17.7-30.6c0-9.6-7.9-17.4-17.7-17.4z",
                fillColor: "#FF7F06",
                fillOpacity: 1,
                strokeWeight: 0,
                rotation: 0,
                scale: 0.5,
                anchor: new google.maps.Point(0, 5),
            };

            marker = new google.maps.Marker({
                position: latlng,
                map: map,
                icon: svgMarker,
                draggable: true
            });

            marker.addListener("click", () => {
                infoWindow.open(map, marker);
            });

            google.maps.event.addListener(marker, 'drag', function (marker) {
                infoWindow.close();
            });

            google.maps.event.addListener(marker, 'dragend', function (marker) {
                latlng = marker.latLng;
                setMapPosition();
                geocodeLatLng(geocoder, map);
            });

            
        }

        function geocodeLatLng(geocoder, map) {
            geocoder
                .geocode({ location: latlng })
                .then((response) => {
                    if (response.results[0]) {
                        var address= response.results[0].formatted_address;
                        setMapPosition();
                        $('.map-marker-label').html(address);
                        //$('#visiting-address').val(address);

                        var ac= response.results[0].address_components;
                        if(ac.length<=0){
                            $('.map-marker-label').html('Unknown address');
                            $('#country')
                                .removeClass('selected')
                                .attr('value', '')
                                .find('.text')
                                .html('');
                            clearCity();
                        }

                    } else {
                        $('.map-marker-label').html("Unknown Address");
                    }
                })
                .catch((e) => infoWindow.setContent('<span class="p-10 text-white display-block"><strong>Unknown Address</strong><br>Move the map to another location.</span>'));
        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(
                browserHasGeolocation
                    ? '<span class="p-10 text-white display-block"><strong>Unknown Location</strong><br>Enable your location to know your location on map.</span>'
                    : "Error: Your browser doesn't support location."
            );
            infoWindow.open(map);
        }

        function setMapAddress(address) {  // "London, UK" for example 
            if (geocoder) {
                geocoder.geocode({ 'address': address }, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        var loc = results[0].geometry.location;
                        latlng = loc;
                        // Test address_components
                        var ac_length = results[0].address_components.length;

                        if (ac_length == 1) {
                            // Assume country
                            map.setCenter(new google.maps.LatLng(loc.lat(), loc.lng(), 3));
                            map.setZoom(5);

                        } else if (ac_length >= 2) {
                            // Assume city
                            map.setCenter(new google.maps.LatLng(loc.lat(), loc.lng(), 7));
                            map.setZoom(13);
                        }
                        geocodeLatLng(geocoder, map);
                        marker.setPosition(latlng);
                        //setMapPosition();
                    }
                });
            }
        }


    </script>

@endsection
