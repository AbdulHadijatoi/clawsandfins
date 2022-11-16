@php
    use App\CentralLogics\Helpers;
    $countries = Helpers::getCountries();
    $countriesArr=array();
    if($countries){
        foreach($countries as $country){
            $countriesArr[]=[
                'id' => $country->id,
                'name' => $country->name,
                'phone_code' => $country->dial_code
            ];
        }
    }
@endphp

@extends('layouts.master')

@section('menu')
    @include('components.menu_1')
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
                            <h1 class="h1 text-yellow sm_font-size-35 sm_mt-60 text-center">Account Info</h1>
                            <form action="{{route('edit-distributor.post')}}" method="POST" onsubmit="setInputForm(this);return inputValidation(this);" enctype="multipart/form-data">
                                @csrf
                                <div class="form-container">
                                    <div class="full-width text-center mb-30">
                                        @if(isset($adminView))
                                        <div class="tile tile-info tile-no-border p-0">
                                            <livewire:user.index :userID="$id" :userStatus="true" :user="$user" :userRole="$userRole"/>
                                        </div>
                                        @endif
                                        <div class="logo-container align-in-center flex-column mt-20">
                                            <div class="logo d-flex align-in-center image-opened">
                                                <img id="logo-img" alt="logo-img" src="{{ url('storage/'.$user->image) }}">
                                                <span class="material-icons">
                                                    image
                                                </span>
                                                <button id="remove-logo" type="button">Remove Logo</button>
                                            </div>
                                            <div class="button-secondary button-md px-5 display-none button-update-photo">
                                                <button class="update-info" type="submit">Update</button>
                                            </div>
                                            <input id="logo-file" class="display-none" type="file" accept="image/*" onchange="loadFile(event)" name="image">
                                        </div>
                                        <div class="tile tile-info tile-no-border p-0">
                                            <div class="d-flex full-width form-responsive tile-show align-start justify-center">
                                                <h3 class="text-yellow text-center mr-10" id="company-name-info">{{$userData->company_name}}</h3>
                                                <div class="text-right"><button type="button" class="button-sm btn-edit">Edit</button></div>
                                            </div>
                                            <div class="tile-hide px-10">
                                                <div class="d-flex full-width form-responsive">
                                                    <div class="input-text" required>
                                                        <label label="(Must be filled in)">Company Name</label>
                                                        <input type="text" id="company-name" data-name="company_name" placeholder="Company Name" valuefor="company-name-info" value="{{$userData->company_name}}">
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
                                        <div class="tile tile-info tile-no-border p-0">
                                            <div class="d-flex full-width form-responsive tile-show align-start justify-center">
                                                <div class="text-light text-center mr-10" id="email-info">{{$user->email}}</div>
                                                <div class="text-right"><button type="button" class="button-sm btn-edit">Edit</button></div>
                                            </div>
                                            <div class="tile-hide px-10">
                                                <div class="d-flex full-width form-responsive">
                                                    <div class="input-text" required>
                                                        <label label="(Must be filled in)">Email</label>
                                                        <input type="text" id="email" data-name="email" placeholder="Email" valuefor="email-info" value="{{$user->email}}">
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
                                                    <input type="text" id="contact-name" data-name="contact_name" placeholder="Contact Name" valuefor="contact-name-info" value="{{$userData->contact_name}}">
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
                                                    <div id="country" class="country-city-dropdown equal-width selected" data-name="country" value="{{$other->country->name}}" valuefor="country-info" >
                                                        <span class="align-center justify-between">
                                                            <span class="text" contenteditable="true">{{$other->country->name}}</span>
                                                            <i class="material-icons expand-more">expand_more</i>
                                                        </span>
                                                        <div id="country-box"></div>
                                                    </div>
                                                </div>
                                                <div class="input-text" required>
                                                    <label label="(Must be filled in)">City</label>
                                                    <div id="city" class="country-city-dropdown equal-width selected" data-name="city" value="{{$other->city->name}}" valuefor="city-info" vf-prefix=", ">
                                                        <span class="align-center justify-between">
                                                            <span class="text" contenteditable="true">{{$other->city->name}}</span>
                                                            <i class="material-icons expand-more">expand_more</i>
                                                        </span>
                                                        <div id="city-box"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex full-width form-responsive">
                                                <div class="input-textarea" required>
                                                    <label style="font-size: 14px" label="(Must be filled in)">Postal Address</label>
                                                    <textarea id="postal-address" placeholder="Postal Address" valuefor="postal-address-info" data-name="postal_address">{{$userData->postal_address}}</textarea>
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
                                                        <div id="phone-code" class="dropdown equal-width" value="{{$other->country->dial_code}}" valuefor="phone-number-prefix" vf-prefix="">
                                                            <span class="align-center justify-between">
                                                                <span class="text">{{$other->country->dial_code}}</span>
                                                                {{-- <i class="material-icons expand-more">expand_more</i> --}}
                                                            </span>
                                                            <ul class="dropdown-item"></ul>
                                                        </div>
                                                        <input type="text" class="number-format" id="phone-number" parent=".input-text" placeholder="Phone Number" data-name="phone_number" value="{{$userData->phone_number}}" valuefor="phone-number-info">
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
                                                    <input type="text" id="website-url" placeholder="Website URL" data-name="website_url" value="{{$userData->website_url}}" valuefor="wesite-url-info">
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
                                                    <input type="email" id="order-email" placeholder="Order Email" data-name="order_email" value="{{$userData->order_email}}" valuefor="order-mail-info">
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
                                                    <input type="password" id="password" placeholder="Password" data-name="password">
                                                </div>
                                                <div class="input-text" required>
                                                    <label label="(Must be filled in)">Confirm Password</label>
                                                    <input type="password" id="confirm-password" placeholder="Confirm Password" data-name="password_confirmation">
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
                                <div class="form-container {{$userData->location_disclose=='on'?'no-disclose':null}}">
                                    <div class="d-flex full-width form-responsive">
                                        <div class="input-text">
                                            <!-- <label style="font-size: 14px">Visiting Address</label> -->
                                            <div class="_mt_10">
                                                <div class="d-flex-important align-center">
                                                    <span class="checkbox align-in-center">
                                                        <input type="checkbox" id="same-address" {{$userData->postal_address==$userData->visiting_address?'checked':null}}>
                                                        <span class="material-icons">check</span>
                                                    </span>
                                                    <label label="(Must be filled in)">Visiting address (for customers) is same as postal address?</label>
                                                </div>
                                            </div>
                                            <div class="input-textarea p-0 input-fly-button" required>
                                                <textarea id="visiting-address" placeholder="Visiting Address" name="visiting_address">{{$userData->visiting_address}}</textarea>
                                                <button type="button" id="update-map">Update Map</button>
                                            </div>
                                            <div class="mt-10">
                                                <div class="d-flex-important align-center">
                                                    <span class="checkbox align-in-center">
                                                        <input type="checkbox" id="no-disclose" {{$userData->location_disclose=='on'?'checked':null}} name="location_disclose">
                                                        <span class="material-icons">check</span>
                                                    </span>
                                                    <label>We don't want to disclose our location on the map</label>
                                                </div>
                                            </div>
                                            <div class="visiting-address">
                                                <div id="map" tabindex="-1" latitude="{{$userData->latitude}}" longitude="{{$userData->longitude}}"></div>
                                                <span title="Drive Direction" onclick="driveDirection()" class="material-icons drive-direction-button">directions_car</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex full-width flex-column px-5 form-responsive">
                                        <div class="location-correct">
                                            <span class="text-white font-size-14" label="(Must be filled in)">Are you 100% sure your map location is correct? <font class="font-size-12">(Adjust the map manually so it better matches your location)</font></span>
                                            <div class="input-radio" required>
                                                <div class="radio-value" value="{{$userData->location_disclose=='on'?'0':$userData->location_is_correct}}"></div>
                                                <div class="d-flex-important align-center">
                                                    <span class="radio align-in-center">
                                                        <input type="radio" name="location_is_correct" value="yes" {{$userData->location_is_correct=='yes'?'checked':null}}>
                                                        <span class="material-icons">check</span>
                                                    </span>
                                                    <label class="font-size-12 opacity-8">YES, i am (Position will be locked)</label>
                                                </div>
                                                <div class="d-flex-important align-center">
                                                    <span class="radio align-in-center">
                                                        <input type="radio" name="location_is_correct" value="no" {{$userData->location_is_correct=='no'?'checked':null}}>
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
                                                <button class="update-info" parent=".form-container" type="submit">Update</button>
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

@endsection


@section('style_extra')
<style>
    .button-primary,
    .button-secondary
    {
        margin: 0px;
    }
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

        #map .centerMarker{
            position:absolute;
            background:url('{{asset('icons/marker.png')}}') no-repeat;
            background-size: auto 30px;
            background-position: center;
            top:50%;left:50%;
            z-index:1;
            margin-left:-15px;
            margin-top:-30px;
            height:30px;
            width:30px;
            cursor:pointer;
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
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1;
            cursor: not-allowed;
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
            background: #1b1b1b;
            color: #FFF;
            position: absolute;
            bottom: 10px;
            left: 10px;
            border-radius: 20px;
            text-align: center;
            z-index: 2;
            border: 1px solid #FFF;
            font-size: 14px;
            padding: 5px 10px;
            padding-left: 40px;
            box-shadow:  0 0 10px rgba(0,0,0,0.3);
        }

        .lock-map:after{
            content: "\e897";
            font-family: 'Material Icons';
            font-weight: normal;
            font-style: normal;
            font-size: 12px;
            color: #FFF;
            position: absolute;
            bottom: 15px;
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

        #update-map[disabled]{
            background: #404040;
            border: 1px solid #fff;
            opacity: 0.2;
            cursor: not-allowed;
        }

        .small-popup {
            background: #FFF;
        }
</style>
@endsection

@section('head_extra')
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
@endsection

@section('script_extra')

    @if(session('success'))
    <script>openDialog('Success', "{{session('success')}}");</script>
    @endif

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
        function getLat(latlng){
            var lat=0;
            try{
                lat = latlng.lat();
            }catch(e){
                lat = latlng.lat;
            }
            return lat;
        }
        function getLng(latlng){
            var lat=0;
            try{
                lat = latlng.lng();
            }catch(e){
                lat = latlng.lng;
            }
            return lat;
        }
        function driveDirection(){
            if(getCurrentLocation()==null && curLatlng==null){
                openDialog('Unknown Location', 'Enable your location to know your location on map or reload page');
                return;
            }
            var origin = getLat(curLatlng) + "%2C" + getLng(curLatlng);
            var destination = getLat(latlng) + "%2C" + getLng(latlng);
            var driveDirectionLink="https://www.google.com/maps/dir/?api=1&" + origin + "&destination=" + destination;
            $('<a href="' + driveDirectionLink + '" target="blank"></a>')[0].click();
        }
        var loadFile = function (event) {
            var output = $('#logo-img');
            var reader = new FileReader();
            reader.onload = function(){
                output.attr('src', reader.result ).parent().addClass('image-opened');
            }
            reader.readAsDataURL(event.target.files[0]);
        };

        /*function setInfoValue(){
            $('[valuefor]').each(function(){
                var infoId=$(this).attr('valuefor');
                var elm= $(this);
                var prefix=elm.attr('vf-prefix');
                var val=elm.attr('value')? elm.attr('value') : elm.val();
                console.log(val);
                $('#'+infoId).html((prefix? prefix:'')+val);
            })
        }*/
        var multiValue={};
        
        function setInfoValue(){
            $('.tile-info').each(function(){
                $(this).attr('id', 'ti'+Math.floor((Math.random()*1000) + 1));
            })
            $('[valuefor]').each(function(){
                var infoId=$(this).attr('valuefor');
                var elm= $(this);
                var prefix=elm.attr('vf-prefix');
                var val=elm.attr('value')? elm.attr('value') : elm.val();
                if(prefix){
                    val=prefix+val;
                }
                var valnum=elm.attr('valuenum');
                if(valnum){
                    var key=infoId;
                    if(!multiValue[key]){
                        multiValue[key]=[];
                    }
                    var mv=multiValue[key];
                    mv[parseInt(elm.attr('valuenum'))-1]=val;
                }else{
                    $('#'+infoId).html(val);
                }
            })
            for (var key of Object.keys(multiValue)) {
                $('#'+key).html(multiValue[key].join(''));
            }
        }

        var countries=@php echo json_encode($countriesArr); @endphp;
    </script>

    <script>
        var formChildElm;
        function inputValidation(form){
            var errMsgCount=0;
            $(formChildElm?formChildElm:form).find('.input-text[required] input, .input-textarea[required] textarea, .input-text[required] .country-city-dropdown, .input-radio[required] .radio-value').each(function () {
                var elm=$(this);
                var parentElm = elm.attr('parent') ? elm.parents(elm.attr('parent')) : elm.parent();
                var val= (elm.is('input') || elm.is('textarea'))? elm.val() : elm.attr('value');
                if( val == ''){
                    errMsgCount++;
                    parentElm.addClass('input-error');
                    if(parentElm.find('.err-msg').length==0){
                        var inpErr=document.createElement('span');
                            $(inpErr).addClass('err-msg').html('Required');
                        parentElm.append(inpErr);
                    }
                    if(parentElm.find('.text').length>0){
                        parentElm.find('.text').focus();
                    }else{
                        elm.focus();
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

        function setInputForm(form){
            if(countrySelectedID && $('#country').attr('name')){ $(form).append('<input type="hidden" name="country" value="'+countrySelectedID+'">'); }
            if(citySelectedID && $('#city').attr('name')){ $(form).append('<input type="hidden" name="city" value="'+citySelectedID+'">'); }
            if(locationIsCorrect=='yes' && latlng){ 
                $(form).append('<input type="hidden" name="latitude" value="'+getLat(latlng)+'">');
                $(form).append('<input type="hidden" name="longitude" value="'+getLng(latlng)+'">');
            }
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
        
        var getCountries= function (data) {
            $.each(data, function (key, val) {
                countryKeyData.push({
                    "id": val.id,
                    "name": val.name,
                    "key": key,
                    "phone_code" : val.phone_code
                });
                var item=$('<div class="country-item" value="' + val.name +'">' + val.name +'</div>');
                    item.click(function(e){
                        e.stopPropagation();
                        clearCity();
                        $('#city-box').addClass('loading').html('').parents('#city').attr('value','');
                        countrySelectedKey=key;
                        countrySelectedID=val.id;
                        setPhoneCode();
                        setMapAddress(val.name);
                        //loader = showLoader();
                        getCities(val.id);
                        var prn=$(this).parents('.country-city-dropdown');
                            prn.removeClass('expanded').addClass('selected').attr('value', $(this).attr('value'));
                            prn.find('.text').html( $(this).attr('value') );
                        $('body').removeClass('dropdown-expanded');
                    })
                $('#country-box').append(item);

                /*var phoneCode = $('<li value="' + val.phone_code.replace('-') + '">' + val.name + ' ('+ val.phone_code + ')' + '</li>');
                    phoneCode.click(function(e){
                        e.stopPropagation();
                        var val=$(this).attr('value').replace('-');
                        $(this).parents('.dropdown')
                            .removeClass('expanded')
                            .attr('value', val)
                            .find('.text').html(val);
                        $('body').removeClass('dropdown-expanded');
                    })
                $('#phone-code .dropdown-item').append(phoneCode);*/
            });

            //Set city
            var index = countryKeyData.findIndexBy('name', $('#country').attr('value'));
            if (index >= 0) {
                countrySelectedKey = countryKeyData[index].key;
                getCities(countryKeyData[index].id);
                //loader=showLoader();
            }


        };

        getCountries(countries);

        function getCities(idCountry){
            if(!idCountry) return;
            $('#city-box').html('');
            $.ajax({
                url: "{{url('api/fetch-cities')}}",
                type: "POST",
                data: {
                    country_id: idCountry,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    $('#city-box').html('').removeClass('loading');
                    $.each(result.cities, function (key, val) {
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
                    $('#city-box').removeClass('loading');
                }
            });

            /*
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
            */
        }


        function setPhoneCode(){
            var index = countryKeyData.findIndexBy('key', countrySelectedKey);
            var pc = countryKeyData[index].phone_code;
            $('#phone-code')
                .attr('value', pc.replace('-'))
                .find('.text').html(pc);
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
                var ti=[];
                var prnt=$(this).attr('parent');
                if(prnt){
                    formChildElm=$(this).parents(prnt);
                    return;
                }
                $('.tile-info.edit-mode').each(function(){
                    ti.push('#'+$(this).attr('id'));
                })
                formChildElm=ti.join(',');
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
                        .attr('value','')
                        .addClass('expanded')
                        .removeClass('search-mode selected')
                        .find('.text').html('');
                    if(parent.attr('id')=='country'){
                        clearCity();
                    }
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
                var prnt=$(this).parents('.form-container');
                if (this.checked) {
                    lockMap = true;
                    addRemoveMarker(0);
                    prnt.addClass('no-disclose');
                    resetLocationCorrect(false);
                    $('input[name=location_is_correct]').prop('checked',false);
                    $('.location-correct .radio-value').attr('value',0);
                } else {
                    lockMap = false;
                    addRemoveMarker(1);
                    prnt.removeClass('no-disclose');
                    $('.location-correct .radio-value').attr('value','');
                }
            })
            
            
            $('input[type=radio][name=location_is_correct]').on('change', function () {
                var prn= $(this).parents('.input-radio').find('.radio-value');
                var errMsg= $(this).parents('.input-radio').find('.err-msg');
                var val= $(this).val();
                if(val == 'yes' && locationIsCorrect != 'yes'){
                    setLocationIsCorrect(true);
                    prn.attr('value', 'yes');
                }else if (val == 'no' && locationIsCorrect != 'no') {
                    setLocationIsCorrect(false);
                    prn.attr('value', 'no');
                }else{
                    resetLocationCorrect();
                }
                errMsg.remove();
            })

            function resetLocationCorrect(marker=true){
                $('#map').removeClass('lock-map');
                lockMap = false;
                if(marker){
                    addRemoveMarker(1);
                }
                lockMapControl(false);
                locationIsCorrect='';
                $('.radio-value').attr('value', '');
            }
            
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
            
            /*$('#remove-logo').click(function(e){
                e.stopPropagation();
                $('#logo-img').attr('src','').parent().removeClass('image-opened');
            })*/
            $('#remove-logo').click(function(e){
                e.stopPropagation();
                var logoImg=$('#logo-img');
                logoImg.parents('.logo-container').find('.button-update-photo').removeClass('display-none');
                if(logoImg.is('[src*=http]')){
                    logoImg.after('<input type="hidden" name="remove_image" value="1">');
                }
                logoImg.attr('src','').parent().removeClass('image-opened');
            })

            $('#country .text').keyup(function () {
                var parent=$(this).parents('#country');
                if(parent.attr('value')!=$(this).html()){
                    if($('#city #city-box .city-item').length>0){ clearCity(); }
                    parent.find('.country-item').removeClass('not-match');
                    if ($(this).html() != '') {
                        parent.addClass('search-mode');
                        $('#country-box').find('.country-item:not([value*="' + $(this).html().toLowerCase() + '"i])').addClass('not-match');
                    } else {
                        parent.removeClass('search-mode');
                    }
                    parent.attr('value','');
                }
            })
            
            $('#city .text').keyup(function () {
                var parent=$(this).parents('#city');
                    parent.attr('value','').find('.city-item').removeClass('not-match');
                if ($(this).html() != '') {
                    parent.addClass('search-mode');
                    $('#city-box').find('.city-item:not([value*="' + $(this).html().toLowerCase() + '"i])').addClass('not-match');
                } else {
                    parent.removeClass('search-mode');
                }
            })
            
            /*$('.btn-edit').click(function () {
                var parent=$(this).parents('.tile-info');
                    parent.toggleClass('edit-mode');
            })*/
            $('.btn-edit').click(function () {
                var elm=$(this);
                var parent=elm.parents('.tile-info');
                    parent.toggleClass('edit-mode');
                    parent.find('.tile-hide [data-name]').each(function(){
                        if(!elm.is(':contains(Cancel)')){
                            $(this).attr('name', $(this).attr('data-name'))
                        }else{
                            $(this).removeAttr('name')
                        }
                    })
            })
        })

        function setLocationIsCorrect(val=true){
            if(val){
                $('#map').addClass('lock-map');
            }else{
                $('#map').removeClass('lock-map');
            }
            lockMap=true;
            if(!marker){
                addRemoveMarker(val?1:0);
            }
            lockMapControl(val);
            locationIsCorrect=val?'yes':'no';
        }

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
        let map, curLatlng, latlng, marker, infoWindow, geocoder;
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
                //marker.setMap(null);
                //marker=null;
                $('.drive-direction-button, .centerMarker').hide();
                $('#update-map').prop('disabled',true);
            } else if(val == 1) {
                //addMarker();
                setMapPosition();
                //geocodeLatLng(geocoder, map);
                $('.drive-direction-button, .centerMarker').show();
                $('#update-map').prop('disabled',false);
            }
        }

        function setMapPosition() {
            /*infoWindow.setPosition(latlng);
            infoWindow.setContent(infoWindowContent);
            infoWindow.open(map, marker);*/
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

            $('<div/>').addClass('centerMarker').appendTo(map.getDiv());
            
            geocoder = new google.maps.Geocoder();

            
            infoWindow = new google.maps.InfoWindow({content: infoWindowContent });

            //addMarker();

            google.maps.event.addListener(map, 'dragend', function () {
                if (lockMap) { return; }
                latlng = map.getCenter();
                //geocodeLatLng(geocoder, map);
            });

            if(getMapLocation()){
                setMapPosition();
                map.setZoom(15);
            }else{ 
                getCurrentLocation();
            }

            /*
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
            */

            lockMap=@php echo ($userData->location_disclose=='on')?'true':'false'; @endphp;
            @if($userData->location_disclose=='on')
            addRemoveMarker(0);
            @endif

            @if($userData->location_is_correct=='yes')
            setLocationIsCorrect(true);
            @endif
            
            @if($userData->location_is_correct=='no')
            setLocationIsCorrect(false);
            @endif


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

        function getCurrentLocation(value=false){
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    (position) => {
                        var coordinate={
                            lat: position.coords.latitude,
                            lng: position.coords.longitude,
                        };
                        curLatlng = coordinate;

                        if(value){
                            return coordinate;
                        }else{
                            latlng = coordinate;
                            //marker.setPosition(latlng);
                            setMapPosition();
                            map.setZoom(15);
                            //geocodeLatLng(geocoder, map);
                        }
                    },
                    () => {
                        return null;
                    }
                );
            } else {
                return null;
            }
        }

        function lockMapControl(lock=true){
            map.setOptions({
                draggable: lock ? false : true
            });
            if(marker){
                //marker.setDraggable(lock ? false : true);
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
                //draggable: true
            });

            /*
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
            */
            
        }

        function geocodeLatLng(geocoder, map) {
            geocoder
                .geocode({ location: latlng })
                .then((response) => {
                    if (response.results[0]) {
                        var address= response.results[0].formatted_address;
                        setMapPosition();
                        //$('.map-marker-label').html(address);
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
                        //geocodeLatLng(geocoder, map);
                        //marker.setPosition(latlng);
                        //setMapPosition();
                    }else{
                        openDialog('Map Info', "Can't find address on map");
                    }
                });
            }
        }


    </script>

@endsection
