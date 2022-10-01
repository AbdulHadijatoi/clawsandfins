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

    .card-highlight{
        background-color: #FFFFFF;
        /*-webkit-animation: colorhighlight 1s linear infinite;
        animation: colorhighlight 1s linear infinite;*/
    }

    @-webkit-keyframes colorhighlight {
        0% {
            background-color: #dbdbdb;
        }

        100% {
            background-color: #FFD4AB;
        }
    }

    @keyframes colorhighlight {
        0% {
            background-color: #dbdbdb;
        }

        100% {
            background-color: #FFD4AB;
        }
    }
</style>
@endsection



@section('content')
        <!-- Content -->
        <div class="content-wrapper">
            <section class="section" data-clip-id="1" style="background-image: url('{{asset('bg/grey9.jpg')}}');">
                <div class="content">
                    <div class="full-width align-in-center pb-120">
                        <div class="_75-width md_90-width flex-column justify-center max-w700">
                            <div>
                                <h1 class="h1 text-yellow sm_font-size-35 text-center mt-60">Distributors in United States</h1>
                                @if(!Auth::check())
                                    <div class="banner-info justify-between align-center mt-40">
                                        <div>Do you want to be our distributor in United States?</div>
                                        <a href="{{url('become-distributor')}}">Become a Distributor</a>
                                    </div>
                                @endif
                                <div class="mt-20">
                                    <div id="map" style="height: 400px;"></div>
                                </div>
                                <div id="distributor-list" class="mt-20">
                                    
                                    <div class="distributor-item d-flex full-width" id="distributor1">
                                        <div class="company-logo" tooltip="Find on map">
                                            <img src="{{asset('images/logo.png')}}">
                                        </div>
                                        <div class="company-info equal-width">
                                            <div class="info-header justify-between">
                                                <div class="info-name">
                                                    <span>Nevada</span>
                                                    <h2 tooltip="Find on map">Company Name 1</h2>
                                                    <h4>Contact Name</h4>
                                                </div>
                                                <div class="contact-button align-center">
                                                    <div class="call-button">
                                                        <a href="tel:+1234567890987" tooltip="Call">
                                                            <span class="material-icons">
                                                                call
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="map-button">
                                                        <a href="https://maps.google.com/?q=36.144542,-115.192973" tooltip="Find Direction" target="_blank" class="map">
                                                            <span class="material-icons">
                                                                map
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="contact-info align-center">
                                                <a href="mailto:company@gmail.com" tooltip="Send Email" class="email align-center">
                                                    <span class="material-icons">
                                                        email
                                                    </span>
                                                    <div>
                                                        company@gmail.com
                                                    </div>
                                                </a>
                                                <a href="tel:+123456789087" tooltip="Call" class="phone align-center">
                                                    <span class="material-icons">
                                                        phone
                                                    </span>
                                                    <div>
                                                        +1 2345 6789 0987
                                                    </div>
                                                </a>
                                                <a href="https://www.clawsandfins.com" tooltip="Visit Website" class="website align-center" target="_blank">
                                                    <span class="material-icons">
                                                        public
                                                    </span>
                                                    <div>
                                                        www.clawsandfins.com
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="address d-flex">
                                                <span>Address:</span>
                                                4300 Central Ave SW, Albuquerque, NM 87105, United States
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="distributor-item d-flex full-width" id="distributor2">
                                        <div class="company-logo">
                                            <img src="{{asset('images/logo.png')}}">
                                        </div>
                                        <div class="company-info equal-width">
                                            <div class="info-header justify-between">
                                                <div class="info-name">
                                                    <span>Wyoming</span>
                                                    <h2>Company Name 2</h2>
                                                    <h4>Contact Name</h4>
                                                </div>
                                                <div class="contact-button align-center">
                                                    <div class="call-button">
                                                        <a href="tel:+1234567890987">
                                                            <span class="material-icons">
                                                                call
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="map-button">
                                                        <a href="https://maps.google.com/?q=43.034326,-108.376604" target="_blank" class="map">
                                                            <span class="material-icons">
                                                                map
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="contact-info align-center">
                                                <a href="mailto:company@gmail.com" class="email align-center">
                                                    <span class="material-icons">
                                                        email
                                                    </span>
                                                    <div>
                                                        company@gmail.com
                                                    </div>
                                                </a>
                                                <a href="tel:+123456789087" class="phone align-center">
                                                    <span class="material-icons">
                                                        phone
                                                    </span>
                                                    <div>
                                                        +1 2345 6789 0987
                                                    </div>
                                                </a>
                                                <a href="https://www.clawsandfins.com" class="website align-center" target="_blank">
                                                    <span class="material-icons">
                                                        public
                                                    </span>
                                                    <div>
                                                        www.clawsandfins.com
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="address d-flex">
                                                <span>Address:</span>
                                                4300 Central Ave SW, Albuquerque, NM 87105, United States
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="distributor-item d-flex full-width" id="distributor3">
                                        <div class="company-logo">
                                            <img src="{{asset('images/logo.png')}}">
                                        </div>
                                        <div class="company-info equal-width">
                                            <div class="info-header justify-between">
                                                <div class="info-name">
                                                    <span>Oregon</span>
                                                    <h2>Company Name 3</h2>
                                                    <h4>Contact Name</h4>
                                                </div>
                                                <div class="contact-button align-center">
                                                    <div class="call-button">
                                                        <a href="tel:+1234567890987">
                                                            <span class="material-icons">
                                                                call
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="map-button">
                                                        <a href="https://maps.google.com/?q=44.056177,-121.301805" target="_blank" class="map">
                                                            <span class="material-icons">
                                                                map
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="contact-info align-center">
                                                <a href="mailto:company@gmail.com" class="email align-center">
                                                    <span class="material-icons">
                                                        email
                                                    </span>
                                                    <div>
                                                        company@gmail.com
                                                    </div>
                                                </a>
                                                <a href="tel:+123456789087" class="phone align-center">
                                                    <span class="material-icons">
                                                        phone
                                                    </span>
                                                    <div>
                                                        +1 2345 6789 0987
                                                    </div>
                                                </a>
                                                <a href="https://www.clawsandfins.com" class="website align-center" target="_blank">
                                                    <span class="material-icons">
                                                        public
                                                    </span>
                                                    <div>
                                                        www.clawsandfins.com
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="address d-flex">
                                                <span>Address:</span>
                                                4300 Central Ave SW, Albuquerque, NM 87105, United States
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="distributor-item d-flex full-width" id="distributor4">
                                        <div class="company-logo">
                                            <img src="{{asset('images/logo.png')}}">
                                        </div>
                                        <div class="company-info equal-width">
                                            <div class="info-header justify-between">
                                                <div class="info-name">
                                                    <span>New Mexico</span>
                                                    <h2>Company Name 4</h2>
                                                    <h4>Contact Name</h4>
                                                </div>
                                                <div class="contact-button align-center">
                                                    <div class="call-button">
                                                        <a href="tel:+1234567890987">
                                                            <span class="material-icons">
                                                                call
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="map-button">
                                                        <a href="https://maps.google.com/?q=33.557719,-105.601885" target="_blank" class="map">
                                                            <span class="material-icons">
                                                                map
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="contact-info align-center">
                                                <a href="mailto:company@gmail.com" class="email align-center">
                                                    <span class="material-icons">
                                                        email
                                                    </span>
                                                    <div>
                                                        company@gmail.com
                                                    </div>
                                                </a>
                                                <a href="tel:+123456789087" class="phone align-center">
                                                    <span class="material-icons">
                                                        phone
                                                    </span>
                                                    <div>
                                                        +1 2345 6789 0987
                                                    </div>
                                                </a>
                                                <a href="https://www.clawsandfins.com" class="website align-center" target="_blank">
                                                    <span class="material-icons">
                                                        public
                                                    </span>
                                                    <div>
                                                        www.clawsandfins.com
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="address d-flex">
                                                <span>Address:</span>
                                                4300 Central Ave SW, Albuquerque, NM 87105, United States
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="distributor-item d-flex full-width" id="distributor5">
                                        <div class="company-logo">
                                            <img src="{{asset('images/logo.png')}}">
                                        </div>
                                        <div class="company-info equal-width">
                                            <div class="info-header justify-between">
                                                <div class="info-name">
                                                    <span>Texas</span>
                                                    <h2>Company Name 5</h2>
                                                    <h4>Contact Name</h4>
                                                </div>
                                                <div class="contact-button align-center">
                                                    <div class="call-button">
                                                        <a href="tel:+1234567890987">
                                                            <span class="material-icons">
                                                                call
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="map-button">
                                                        <a href="https://maps.google.com/?q=31.453586,-100.458361" target="_blank" class="map">
                                                            <span class="material-icons">
                                                                map
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="contact-info align-center">
                                                <a href="mailto:company@gmail.com" class="email align-center">
                                                    <span class="material-icons">
                                                        email
                                                    </span>
                                                    <div>
                                                        company@gmail.com
                                                    </div>
                                                </a>
                                                <a href="tel:+123456789087" class="phone align-center">
                                                    <span class="material-icons">
                                                        phone
                                                    </span>
                                                    <div>
                                                        +1 2345 6789 0987
                                                    </div>
                                                </a>
                                                <a href="https://www.clawsandfins.com" class="website align-center" target="_blank">
                                                    <span class="material-icons">
                                                        public
                                                    </span>
                                                    <div>
                                                        www.clawsandfins.com
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="address d-flex">
                                                <span>Address:</span>
                                                4300 Central Ave SW, Albuquerque, NM 87105, United States
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
    @section('head_extra')
        <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    @endsection
        
    @section('script_extra')
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
        

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVckSdSfsjC7N1xkOULLyq38PbDiu9WvU&callback=initMap"
            defer></script>

        <script>

            function isElementInViewport(el) {

                if (typeof jQuery === "function" && el instanceof jQuery) {
                    el = el[0];
                }

                var rect = el.getBoundingClientRect();

                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && /* or $(window).height() */
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth) /* or $(window).width() */
                );
            }

            function onVisibilityChange(el, callback) {
                var old_visible;
                return function () {
                    var visible = isElementInViewport(el);
                    if (visible != old_visible) {
                        old_visible = visible;
                        if (typeof callback == 'function') {
                            callback();
                        }
                    }
                }
            }

            var handler = onVisibilityChange($('#map'), function () {
                /* Your code go here */
            });


            $(window).on('DOMContentLoaded load resize scroll', handler);

            let map, latlng, marker, infoWindow, geocoder;

            $(function(){
                $('.distributor-item .company-logo img, .distributor-item .company-info .info-name h2').click(function(){
                    var prn = $(this).parents('.distributor-item');
                    var id= prn.attr('id');
                    var cn= prn.find('.info-header h2').html();
                    var index = markers.findIndexBy('id', id);
                    $('.distributor-item').removeClass('card-highlight');
                    prn.addClass('card-highlight');
                    infoWindow.setContent(cn);
                    infoWindow.open(map, markers[index].marker);
                    map.setCenter(markers[index].marker.position);
                    map.setZoom(13);
                    if(!isElementInViewport($('#map'))){
                        window.location.href = '#map';
                        $(document).scrollTop($(document).scrollTop() - 100);
                    }
                })

                $('.distributor-item .company-logo img, .distributor-item .company-info .info-name h2')
                    .on("mouseenter", function () {
                        $(this).parents('.distributor-item').addClass('logo-name-hover');
                    })
                    .on("mouseleave", function () {
                        $(this).parents('.distributor-item').removeClass('logo-name-hover');
                    });

                getCurrentLocation();
            })
            
            function initMap() {
                latlng = { lat: 0, lng: 0 };

                map = new google.maps.Map(document.getElementById("map"), {
                    center: latlng,
                    zoom: 3,
                    mapTypeControl: false,
                    streetViewControl: false,
                });
                geocoder = new google.maps.Geocoder();

                var content = '';
                infoWindow = new google.maps.InfoWindow({ content: content });

                //addMarker();
                setMapAddress('United States');
                setMarkers(map);
            }

            function geocodeLatLng(geocoder, map) {
                geocoder
                    .geocode({ location: latlng })
                    .then((response) => {
                        if (response.results[0]) {
                            var address = response.results[0].formatted_address;
                            $('.map-marker-label').html(address);
                            $('#visiting-address').val(address);

                            var ac = response.results[0].address_components;
                            if (ac.length > 1) {
                                var d = ac.filter(
                                    function (data) { return data.types[0] == 'country' }
                                );
                                $('#country')
                                    .addClass('selected')
                                    .find('.text')
                                    .html(d[0].long_name);
                            }

                        } else {
                            $('.map-marker-label').html("Unknown Address");
                        }
                    })
                    .catch((e) => window.alert("Geocoder failed due to: " + e));
            }

            function setMapAddress(address) { 
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
                                map.setZoom(4);

                            } else if (ac_length >= 2) {
                                // Assume city
                                map.setCenter(new google.maps.LatLng(loc.lat(), loc.lng(), 7));
                                map.setZoom(13);
                            }
                            
                            //setMapPosition();
                        }
                    });
                }
            }

            function getCurrentLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(
                        (position) => {
                            $('.map-button a').each(function(){
                                var origin = position.coords.latitude + "%2C" + position.coords.longitude;
                                var dest = encodeURIComponent(/q=([^&]+)/.exec($(this).attr('href'))[1]);
                                var driveDirectionLink = "https://www.google.com/maps/dir/?api=1&" + origin + "&destination=" + dest;
                                $(this).attr('href', driveDirectionLink);
                            })
                        },
                        () => {
                        }
                    );
                } else {
                }
            }

            const distributorMaps = [
                ["Company Name 1", 36.144542, -115.192973, 1],
                ["Company Name 2", 43.034326, -108.376604, 2],
                ["Company Name 3", 44.056177, -121.301805, 3],
                ["Company Name 4", 33.557719, -105.601885, 4],
                ["Company Name 5", 31.453586, -100.458361, 5],
            ];

            var markers=[];

            function setMarkers(map) {
                const svgMarker = {
                    path: "M0-48c-9.8 0-17.7 7.8-17.7 17.4 0 15.5 17.7 30.6 17.7 30.6s17.7-15.4 17.7-30.6c0-9.6-7.9-17.4-17.7-17.4z",
                    fillColor: "#FF7F06",
                    fillOpacity: 1,
                    strokeWeight: 0,
                    rotation: 0,
                    scale: 0.5,
                    anchor: new google.maps.Point(0, 5),
                };

                for (let i = 0; i < distributorMaps.length; i++) {
                    const distributor = distributorMaps[i];

                    const marker = new google.maps.Marker({
                        position: { lat: distributor[1], lng: distributor[2] },
                        map,
                        icon: svgMarker,
                        title: distributor[0],
                        zIndex: distributor[3],
                    });

                    markers.push({
                        'id': 'distributor'+distributor[3],
                        'title': distributor[0],
                        'marker': marker
                    });

                    marker.addListener("click", () => {
                        map.panTo(marker.position);
                        map.setZoom(13);
                        var dID= '#distributor' + marker.getZIndex();
                        //window.location.href= dID;
                        $('.distributor-item').removeClass('card-highlight');
                        var elm= $(dID);
                            elm.addClass('card-highlight');
                        /*
                            setTimeout(function(){
                                elm.removeClass('card-highlight');
                            },5000);
                        $(document).scrollTop($(document).scrollTop() - 100);
                        infoWindow.close();
                        */
                    });
                }
            }

            /*
            $('.distributor-item').on('mouseover',function(){
                $('.distributor-item').removeClass('card-highlight');
            })
            */
            
            
        </script>
    @endsection