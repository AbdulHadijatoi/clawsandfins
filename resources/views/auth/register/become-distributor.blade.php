@php
    use App\CentralLogics\Helpers;
    $countries = Helpers::getCountries();
@endphp

@extends('layouts.master')

@section('head_extra')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
@endsection

@section('body_class')
page-no-arc
@endsection

@section('content')
    {{-- @livewire('become-distributor.index') --}}
    <div class="content-wrapper">
        <section class="section" data-clip-id="1" style="background-image: url('{{asset('bg/grey4.jpg')}}');">
            <div class="content">
                <div class="full-width align-in-center pb-120">
                    <div class="_75-width md_90-width md_align-center flex-column justify-center max-w700">
                        <h1 class="h1 text-yellow sm_font-size-35 sm_mt-60 text-center">Become a Distributor</h1>
                        <span class="h4 text-white text-center mb-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna</span>
                        <form action="{{route('become-distributor.post')}}" method="POST" onsubmit="return inputValidation(this)" enctype="multipart/form-data">
                            @csrf
                            <div class="form-container">
                                <div class="full-width text-center">
                                    <div class="logo-container align-in-center flex-column mt-20">
                                        <label>Your Logo (Optional)</label>
                                        <div class="logo d-flex align-in-center">
                                            <img id="logo-img" alt="logo-img">
                                            <span class="material-icons">
                                                image
                                            </span>
                                            <button id="remove-logo" type="button">Remove Logo</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex full-width form-responsive">
                                    <div class="input-text" required>
                                        <label label="(Must be filled in)">Company Name</label>
                                        <input type="text" id="company-name" placeholder="Company Name" name="company_name" value="{{old('company_name')}}">
                                    </div>
                                    <div class="input-text" required>
                                        <label label="(Must be filled in)">Contact Name</label>
                                        <input type="text" id="contact-name" placeholder="Contact Name" name="contact_name" value="{{old('contact_name')}}">
                                    </div>
                                </div>
                                
                                <div class="d-flex full-width form-responsive">
                                    <div class="input-text" required>
                                        <label label="(Must be filled in)">Country</label>
                                        <select id="country-dropdown" name="country" style="outline:none">
                                            <option value="0">--Select Country--</option>
                                            @if($countries)
                                                @foreach ($countries as $country)
                                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="input-text relative" required>
                                        <label label="(Must be filled in)">City</label>
                                        <div id="loading" class="absolute top-0 mt-40 ml-5" style="display:none;">
                                            <div class="lds-dual-ring"></div>
                                        </div>
                                        <select id="city-dropdown" name="city" style="outline:none">
                                            
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="d-flex full-width form-responsive">
                                    <div class="input-textarea" required>
                                        <label style="font-size: 14px" label="(Must be filled in)">Postal Address</label>
                                        <textarea id="postal-address" placeholder="Postal Address" name="postal_address">{{old('postal_address')}}</textarea>
                                    </div>
                                </div>
                                <div class="d-flex full-width form-responsive">
                                    <div class="input-text" required>
                                        <label label="(Must be filled in)">Phone Number</label>
                                        <div class="input-group d-flex-important align-center full-width relative">
                                            {{-- <div id="phone-code" class="dropdown equal-width" value="1"> --}}
                                                <select id="dial_code" name="dial_code" style="outline:none; width: 100px; margin-right:3px;">
                                                    <option value="0" selected disabled>+1</option>
                                                </select>
                                            {{-- </div> --}}
                                            <input type="text" class="number-format" id="phone-number" parent=".input-text" placeholder="Phone Number" name="phone_number" value="{{old('phone_number')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex full-width form-responsive">
                                    <div class="input-text">
                                        <label>Website URL</label>
                                        <input type="text" id="website-url" placeholder="Website URL" name="website_url" value="{{old('website_url')}}">
                                    </div>
                                </div>
                                <div class="d-flex full-width form-responsive">
                                    <div class="input-text" required>
                                        <label label="(Must be filled in)">Administration Email</label>
                                        <input type="email" id="administration-email" placeholder="Administration Email" name="email" value="{{old('email')}}">
                                    </div>
                                    
                                    <div class="input-text">
                                        <label>Order Email</label>
                                        <input type="email" id="order-email" placeholder="Order Email" name="order_email" value="{{old('order_email')}}">
                                    </div>
                                </div>
                                <div class="d-flex full-width form-responsive">
                                    <div class="input-text" required>
                                        <label label="(Must be filled in)">Password</label>
                                        <div class="input-group d-flex-important align-center full-width relative">
                                            <input type="password" id="password" placeholder="Password" name="password">
                                            <!-- <div class="d-flex align-center equal-width">
                                                <span class="material-icons password-visibility">visibility_off</span>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="input-text" required>
                                        <label label="(Must be filled in)">Confirm Password</label>
                                        <input type="password" id="confirm-password" placeholder="Confirm Password" name="password_confirmation">
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
                                                    <input type="checkbox" id="same-address" name="same_address">
                                                    <span class="material-icons">check</span>
                                                </span>
                                                <label label="(Must be filled in)">Visiting address (for customers) is same as postal address?</label>
                                            </div>
                                        </div>
                                        <div class="input-textarea p-0 input-fly-button" required>
                                            <textarea id="visiting-address" placeholder="Visiting Address" name="visiting_address">{{old('visiting_address')}}</textarea>
                                            <button type="button" id="update-map">Update Map</button>
                                        </div>
                                        
                                        <div class="mt-10">
                                            <div class="d-flex-important align-center">
                                                <span class="checkbox align-in-center">
                                                    <input type="checkbox" id="no-disclose" name="location_disclose">
                                                    <span class="material-icons">check</span>
                                                </span>
                                                <label>We don't want to disclose our location on the map</label>
                                            </div>
                                        </div>
                                        <div class="visiting-address">
                                            <div id="map" tabindex="-1"></div>
                                            <!-- <span title="Drive Direction" onclick="driveDirection()" class="material-icons drive-direction-button">directions_car</span> -->
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
                                                    <input type="radio" name="location_is_correct" value="no" name="location_is_correct">
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
                                    <div class="info primary-info d-flex-important">
                                        <span class="material-icons">help</span>
                                        <label>If you encounters any problems, please tick the <span>I need some support</span> box, and we will contact
                                            you on your
                                            Administration email address registered here.</label>
                                    </div>
                                    <div>
                                        <div class="d-flex-important align-center">
                                            <span class="checkbox align-in-center">
                                                <input type="checkbox" id="need-support" name="need_support">
                                                <span class="material-icons">check</span>
                                            </span>
                                            <label>I need some support</label>
                                        </div>
                                    </div>
                                </div>
                               
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="info primary-warning d-flex-important">
                                            <label>{{$error}}</label>
                                        </div>
                                    @endforeach
                                @endif

                                <div class="d-flex full-width justify-center">
                                    <div class="button-secondary">
                                        <button type="submit">SUBMIT</button>
                                    </div>
                                </div>
                            </div>
                            <input id="logo-file" class="display-none" type="file" accept="image/*" onchange="loadFile(event)" name="image">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


@section('script_extra')
    <script>
        $('#country-dropdown').on('change', function () {
                var idCountry = this.value;
                $("#state-dropdown").html('');
                $('#loading').show();
                $.ajax({
                    url: "{{url('api/fetch-cities')}}",
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#city-dropdown').html('<option value="">-- Select City --</option>');
                        $.each(result.cities, function (key, city) {
                            // console.log(city.name);
                            $("#city-dropdown").append('<option value="' + city
                                        .id + '">' + city.name + '</option>');
                        });
                        // document.getElementById('dial_code').innerHTML = '<option>' + result.dial_code + '</option>';
                        $("#dial_code").html('<option>' + result.dial_code + '</option>');    
                    },
                    complete: function(){
                        $('#loading').hide();
                    }
                });
            });
    </script>
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

        function driveDirection(){
            if(curLatlng==null){
                openDialog('Unknown Location', 'Enable your location to know your location on map or reload page');
                return;
            }
            var origin = curLatlng.lat + "%2C" + curLatlng.lng;
            var destination = (latlng.lat()??latlng.lat) + "%2C" + (latlng.lng() ?? latlng.lng);
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
    </script>

    <script>
        function inputValidation(form){
            var errMsgCount=0;
            $(form).find('.input-text[required] input, .input-textarea[required] textarea, .input-text[required] .country-city-dropdown, .input-radio[required] .radio-value').each(function () {
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
        
        $.getJSON('{{asset('library/country-city/countries+cities.json')}}', function (data) {
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
                        getCities();
                        var prn=$(this).parents('.country-city-dropdown');
                            prn.removeClass('expanded').addClass('selected').attr('value', $(this).attr('value'));
                            prn.find('.text').html( $(this).attr('value') );
                        $('body').removeClass('dropdown-expanded');
                    })
                $('#country-box').append(item);

                var phoneCode = $('<li value="' + val.phone_code.replace('-','') + '">' + val.name + ' (+'+ val.phone_code.replace('-', '') + ')' + '</li>');
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

            //getCurrentLocation();

        });

        function getCities(){
            $.getJSON('{{asset('library/country-city/countries+cities.json')}}', function (data) {
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

            });
        }

        function setPhoneCode(){
            var index = countryKeyData.findIndexBy('key', countrySelectedKey);
            var pc = countryKeyData[index].phone_code;
            $('#phone-code')
                .attr('value', pc.replace('-',''))
                .find('.text').html('+' + pc.replace('-', ''));
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
                        .removeClass('search-mode');
                    $(this).prev().html('');
                    if(parent.is('#country')){
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
                marker.setMap(null);
                marker=null;
            } else if(val == 1) {
                addMarker();
                setMapPosition();
                geocodeLatLng(geocoder, map);
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
                geocodeLatLng(geocoder, map);
            });

            getCurrentLocation();

            /*
            map.addListener('center_changed', () => {
                marker.setPosition(map.getCenter())
            })
            /*
            google.maps.event.addListener(map, 'drag', function () {
                if (lockMap) { return; }
                //infoWindow.close();
                marker.setPosition(map.getCenter());
            });
            
            /*
            google.maps.event.addListener(map, 'dragend', function () {
                if (lockMap) { return; }
                latlng = map.getCenter();
                setMapPosition();
                marker.setPosition(map.getCenter());
                geocodeLatLng(geocoder, map);
            });
            /*
            google.maps.event.addListener(map, 'click', function (event) {
                if(lockMap || isMobile){ return; }
                latlng= event.latLng;
                marker.setPosition(latlng);
                geocodeLatLng(geocoder, map);
            });
            */

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
                            geocodeLatLng(geocoder, map);
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

                        var ac= response.results[0].address_components;
                        if(ac.length>1){
                            var d=ac.filter(
                                function (data) { return data.types[0] == 'country' }
                            );

                            var countryName= d[0].long_name;
                            $('#country')
                                .addClass('selected')
                                .attr('value', countryName)
                                .find('.text')
                                .html(countryName);

                            /*var index= countryKeyData.map(function(obj){
                                return obj.name;
                            }).indexOf(countryName);*/
                            if(currentCountryName!= countryName){

                                var index=countryKeyData.findIndexBy('name', countryName);
                                if(index >= 0){
                                    countrySelectedKey= countryKeyData[index].key;
                                    setPhoneCode();
                                    clearCity();
                                    $('#city-box').addClass('loading').html('');
                                    getCities();
                                }
                            }

                            currentCountryName= countryName;
                        }else{
                            $('.map-marker-label').html('Unknown address');
                            $('#country')
                                .removeClass('selected')
                                .attr('value', '')
                                .find('.text')
                                .html('');
                            clearCity();
                        }

                    } else {
                        //$('.map-marker-label').html("Unknown Address");
                    }
                })
                .catch((e) => {});
        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            /*
            infoWindow.setPosition(pos);
            infoWindow.setContent(
                browserHasGeolocation
                    ? '<span class="p-10 text-white display-block"><strong>Unknown Location</strong><br>Enable your location to know your location on map.</span>'
                    : "Error: Your browser doesn't support location."
            );
            infoWindow.open(map);
            */
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
                        //marker.setPosition(latlng);
                        //setMapPosition();
                    }
                });
            }
        }

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
</style>
@endsection