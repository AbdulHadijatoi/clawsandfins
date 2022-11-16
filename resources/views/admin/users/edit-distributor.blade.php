@php
    use App\CentralLogics\Helpers;
    $countries = Helpers::getCountries();
    $countriesArr=array();
    if($countries){
        foreach($countries as $country){
            $countriesArr[]=[
                'id' => $country->id,
                'name' => $country->name,
                'dial_code' => $country->dial_code
            ];
        }
    }
@endphp

@extends('layouts.master')

@section('menu')
    @include('components.admin-menu')
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
                            <h1 class="h1 text-yellow sm_font-size-35 sm_mt-60 text-center">Edit Account Info</h1>
                            <h3 class="text-yellow text-center">({{$editOption}})</h3>
                            <div class="form-container">
                                <livewire:user.edit.distributor :option="$option" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <iframe class="display-none" name="framesubmit" src=""></iframe>

        <div class="map-overlay">
                <div id="map" tabindex="-1"></div>
        </div>
@endsection


@section('style_extra')
<style>
    .button-primary,
    .button-secondary
    {
        margin: 0px;
    }
    
    .button-primary button,
    .button-secondary button
    {
        border: 1px solid #FFF;
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

        .table{
            min-width: 100%;
            border-collapse: collapse;
            color: #FFF;
            font-size: 12px;
        }
        .table thead tr th{
            border-bottom: 1px solid #6f6f6f;
            font-weight: 400;
            padding: 5px;
        }

        .table tbody tr.tr-bottom-border td{
            border-bottom: 1px solid #6f6f6f;
            font-weight: 400;
        }

        .user-avatar {
            display: block;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #312f2b;
            text-align: center;
            line-height: 40px;
            margin-right: 5px;
            color: #FFF !important;
        }

        .tr-detail{
            background: #e0e0e0;
            color: #4e4e4e;
            border-radius: 5px;
            padding: 0 5px;
        }

        .content form label {
            color: #4e4e4e;
        }

        .tr-detail .input-textarea textarea,
        .tr-detail .checkbox 
        {
            background-color: #FFF;
            color: #000;
        }

        .table thead tr th:hover .sort-order{
            opacity: 1;
        }

        .sort-order{
            opacity: 0;
            cursor: pointer;
        }

        .sort-active .sort-order{
            opacity: 1;
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

        .show-map-location .map-overlay {
            visibility: visible;
            opacity: 1;
        }

        .show-map-location .section,
        .show-map-location .content
        {
            position: initial !important;
        }

        .show-map-location .copyright-text
        {
            z-index: 1;
        }

        .map-overlay{
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.7);
            transition: opacity 500ms;
            visibility: hidden;
            opacity: 0;
            z-index: 999999;
        }

        .map-overlay #map{
        /*     max-width: 700px; */
            height: 100vh;
            margin: auto;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .show-map-location .header-map{
            position: fixed;
            left: 0;
            top: 0px;
            width: 100%;
            z-index: 1000000;
            padding: 5px 10px;
            background: #4B4B4B;
            display: flex;
            align-items: center;
            box-shadow: 0 2px 5px #00000080;
        }

        .show-map-location .header-map td{
            flex-grow: 1;
        }

        .show-map-location .footer-map{
            position: fixed;
            left: 0;
            bottom: 0px;
            z-index: 1000000;
            width: calc(100% - 60px);
            padding: 10px;
        }

        .show-map-location .footer-map > td:nth-child(2){
            display: flex;
            flex-direction: column-reverse;
            width: 100%;
            border-bottom: 0;
        }

        .show-map-location .tr-detail{
            box-shadow: 0 0 5px #00000080;
        }

        .show-map-location .tr-detail + div{
            margin-bottom: 10px;
        }

        .show-map-location .footer-map .map-location{
            display: none;
        }

        .show-map-location .location-message{
            background: #181818;
            padding: 3px 10px;
            border-radius: 10px;
            margin-right: 5px;
        }

        .remove-map-location{
            visibility: hidden;
        }

        .show-map-location .remove-map-location{
            visibility: visible;
        }
        
        .show-map-location .last-updated{
            display: none;
        }

         /*Dropdown Button*/
        .dropdown-button-group{
    
        }

        .dropdown-button-group > *{
            margin-left: 0px; 
            margin-right: 0px; 
        }

        .dropdown-button-group > *:first-child,
        .dropdown-button-group > *:first-child button
        {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            border-right: 0px;
        }

        .dropdown-button-group > *:last-child,
        .dropdown-button-group > *:last-child button
        {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
            border-left: 0px;
        }

        .dropdown-button{
            position: relative;
        }

        .dropdown-button button{
            padding-left: 10px;
            padding-right: 10px;
        }

        .dropdown-button button:focus + ul{
            visibility: visible;
        }

        .dropdown-button ul{
            visibility: hidden;
            position: absolute;
            background: #FFF;
            border-radius: 10px;
            top: 100%;
            z-index: 1000;
            font-size: 14px;
            padding: 10px 0;
            overflow: hidden;
            height: auto;
                box-shadow: 0 2px 5px #00000040;
        }

        .dropdown-button ul:hover{
            visibility: visible;
        }

        .dropdown-button ul:focus{
            padding: 0px;
            background: transparent;
            transition: all 0.5s 0.2s ease;
        }
        .dropdown-button ul:focus li{
            margin-top: -100%;
            transition: all 0.5s 0.2s ease;
        }

        .dropdown-button ul li{
            cursor: pointer;
        }

        .dropdown-button ul li a{
            padding: 3px 20px;
            display: block;
            color: #363636;
            white-space: nowrap;
        }

        .dropdown-button ul li:hover{
            background: #eae8e8;
        }

        .dropdown-button-group[disabled] {
            cursor: not-allowed;
        }

        .dropdown-button-group[disabled] 
        button{
            background: #323232;
            border-color: #FFFFFF30;
            color: #FFFFFF30;
            pointer-events: none;
        }

        .map-location{
            background: #b02109 !important;
        }

        .phone-code{
            display: inline-block;
            height: 100%;
            padding: 10px 5px;
            background: #b8b6b6;
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            color: #3f3e3e;
            font-size: 14px;
        }

        .phone-code + input{
            border-top-left-radius: 0px;
            border-bottom-left-radius: 0px;
        }

        input[type=checkbox]{
            display: block;
            width: 15px;
            height: 15px;
            margin: 5px;
        }

        .location-set .location-message{
            display: none;
        }

        .location-set .remove-map-location{
            display: block !important;
        }

</style>
@endsection

@section('script_extra')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVckSdSfsjC7N1xkOULLyq38PbDiu9WvU&callback=initMap" defer></script>

    <script>
        let map, curLatlng, latlng, marker, infoWindow, geocoder;

        var countries=@php echo json_encode($countriesArr); @endphp;

        function setCountries(){
            $.each(countries, function (key, country) {
                $('.countries').append('<option value="' + country.id + '">' + country.name + '</option>');
            })
        }

        setCountries();

        window.addEventListener('initRender', event => {
            setCountries();
        })

        document.addEventListener("DOMContentLoaded", () => {
            Livewire.hook('message.received', (message,component) => {
            if (message.updateQueue[0].method === 'update') {
                console.log('updated');
            }
            });
        });

        Livewire.on('update', function() {

        });


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

            google.maps.event.addListener(map, 'dragend', function () {
                latlng = map.getCenter();
                setInputLocation(latlng.lat(), latlng.lng());
                let loc = getInputLocation(uid);
                $('#location-set-' + uid).addClass('location-set');
                Livewire.emit('emitAll', [
                    {
                        event: 'setLocation', 
                        params: [uid, loc.lat, loc.lng]
                    }
                ]);
                //geocodeLatLng(geocoder, map);
            });

        }

        function setMapAddress(address, callback) {
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
                        setInputLocation(loc.lat(), loc.lng());

                        if(callback){
                            callback();
                        }
                        //geocodeLatLng(geocoder, map);
                        //marker.setPosition(latlng);
                        //setMapPosition();
                    }
                });
            }
        }

        function mapLocation(){
            let latInput = $('#latitude-' + uid );
            let lngInput = $('#longitude-' + uid );
            if(latInput.val() == '0' && lngInput.val() == '0'){
                return false;
            }
            map.setCenter(
                { lat: parseFloat(latInput.val()), lng: parseFloat(lngInput.val()) }
            );
            map.setZoom(13);
            return true;
        }

        function setInputLocation(lat, lng){
            $('#latitude-' + uid ).val(lat);
            $('#longitude-' + uid ).val(lng);

        }
        
        function getInputLocation(uid){
            return {
                lat: $('#latitude-' + uid ).val(),
                lng: $('#longitude-' + uid ).val()
            }
        }

        let uid;

        $('body').on('click', '.map-location', function(){
            let id=$(this).attr('data-id');
                uid = id;
            let country = $('#country-dropdown-' + id + ' option:selected').text();
            let city = $('#city-dropdown-' + id ).val().length > 0 ? ( $('#city-dropdown-' + id + ' option:selected').text() + ', ' ) : '';
            $('body').addClass('show-map-location');
            let prnt= $(this).parents('.tr-bottom-border');
                prnt.addClass('footer-map');
            let row= prnt.prev();
                row.addClass('header-map');
            let closeBtn = document.createElement('button');
                $(closeBtn).attr('type', 'button').html('Close');
                $(closeBtn).click(function(){
                    $('body').removeClass('show-map-location');
                    prnt.removeClass('footer-map');
                    row.removeClass('header-map');
                    $(this).remove();
                })
            $(this).after(closeBtn);
            if(!mapLocation()){
                setMapAddress(city + country);
            }
        })

        $('body').on('click', '.remove-map-location button', function(){
            let id=$(this).attr('data-id');
            Livewire.emit('removeLocation', id);
            $('#location-set-' + id).removeClass('location-set');
        })
    </script>
    
    <script>
        var loadFile = function (event) {
            var output = $('#logo-img');
            var reader = new FileReader();
            reader.onload = function(){
                output.attr('src', reader.result ).parent().addClass('image-opened');
            }
            reader.readAsDataURL(event.target.files[0]);
        };

        function getPhoneCode(countryId){
            var index = countries.findIndexBy('id', parseInt(countryId) );
            return index ? countries[index].dial_code : null;
        }

        $('.cities').click(function(){
            let id=$(this).attr('data-id');
            if($(this).children().length == 1 && !$(this).attr('loaded')){
                $( $(this).children()[0] ).prop('hidden', true);
                getCities( id, $('#country-dropdown-'+ id).val(), $( $(this).children()[0] ).attr('value'));
            }
        })
        
        $('.cities').change(function(){
            let id=$(this).attr('data-id');
            let cityName = $('#city-dropdown-' + id + ' option:selected').text();
            Livewire.emit('set', 'city_name.' + id, cityName);
            if($('body').hasClass('show-map-location')){
                setMapAddress( cityName + ', ' + $('#country-dropdown-' + id + ' option:selected').text() );
            }
        })
        
        $('body').on('change', '.countries', function(){
            let id=$(this).attr('data-id');
            let dial_code = getPhoneCode($(this).val()) ?? '+';
            let countryName=$('#country-dropdown-' + id + ' option:selected').text();
            if($('body').hasClass('show-map-location')){
                setMapAddress( countryName , function(){
                    let loc = getInputLocation(id);
                    $('#location-set-' + id).addClass('location-set');
                    Livewire.emit('emitAll', [
                        {
                            event: 'setCountry', 
                            params: [id, dial_code, countryName]
                        },
                        {
                            event: 'setLocation', 
                            params: [id, loc.lat, loc.lng]
                        }
                    ]);
                });
            }else{
                Livewire.emit('setCountry', id, dial_code, countryName);
            }
            $('#phone-code-' + id).html( dial_code );
            $('#city-dropdown-' + id).html('');
            getCities(id, $(this).val() );
        })

        function getCities(uid, idCountry, selectId = ''){
            $('#loading-' + uid).show();
            $.ajax({
                url: "{{url('api/fetch-cities')}}",
                type: "POST",
                data: {
                    country_id: idCountry,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    $('#city-dropdown-' + uid).append('<option hidden value=""> -- City --</option>');
                    $.each(result.cities, function (key, city) {
                        $('#city-dropdown-' + uid).append('<option value="' + city
                                    .id + '" ' + (selectId == city.id ? 'selected' : '') +'>' + city.name + '</option>').attr('loaded', true);
                    });
                },
                complete: function(){
                    $('#loading-' + uid).hide();
                }
            });
        }
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

    </script>

    <script>
        

        $(function(){

            $('body').on('click','.checkbox', function(){
                $(this).find('input[type=checkbox]').prop('checked', !$(this).find('input[type=checkbox]').prop('checked')).change();
            })
            
            $('.logo').click(function(){
                $('#logo-file').click();
            })
            
            $('#remove-logo').click(function(e){
                e.stopPropagation();
                var logoImg=$('#logo-img');
                logoImg.parents('.logo-container').find('.button-update-photo').removeClass('display-none');
                if(logoImg.is('[src*=http]')){
                    logoImg.after('<input type="hidden" name="remove_image" value="1">');
                }
                logoImg.attr('src','').parent().removeClass('image-opened');
            })

        })


    </script>

@endsection
