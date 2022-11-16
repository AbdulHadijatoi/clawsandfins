@extends('layouts.master')

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
                            <form action="{{route('edit-investor.post')}}" method="POST" onsubmit="return inputValidation(this)" enctype="multipart/form-data">
                                @csrf
                                <div class="form-container">
                                    <div class="full-width text-center mb-30">
                                        <div class="tile tile-info tile-no-border p-0">
                                            <livewire:user.index :userID="$id" :userStatus="true" :user="$user" :userRole="$userRole"/>
                                        </div>
                                    </div>
                                    <div class="full-width text-center mb-30">
                                        <div class="logo-container align-in-center flex-column mt-20">
                                            <div class="logo d-flex align-in-center image-opened">
                                                <img id="logo-img" alt="logo-img" src="{{ url('storage/'.$user->image) }}">
                                                <span class="material-icons">
                                                    image
                                                </span>
                                                <button id="remove-logo" type="button">Remove Photo</button>
                                            </div>
                                            <div class="button-secondary button-md px-5 display-none button-update-photo">
                                                <button class="update-info" type="submit">Update</button>
                                            </div>
                                            <input id="logo-file" class="display-none" type="file" accept="image/*" onchange="loadFile(event)" name="image">
                                        </div>
                                    </div>
                                    <div class="tile tile-info">
                                        <div class="d-flex full-width form-responsive tile-show align-start">
                                            <div class="tli-label text-white font-size-14 px-10">Name</div>
                                            <div id="name-info" class="tli-detail text-light font-size-14 px-10"></div>
                                            <div class="text-right"><button type="button" class="button-sm btn-edit">Edit</button></div>
                                        </div>
                                        <div class="tile-hide px-10">
                                            <div class="d-flex full-width form-responsive">
                                                <div class="input-text" required>
                                                    <label label="(Must be filled in)">Name</label>
                                                    <input type="text" id="first-name" placeholder="First Name" data-name="first_name" valuefor="name-info" valuenum="1" value="{{$userData->first_name}}">
                                                </div>
                                                <div class="input-text" required>
                                                    <label label="(Must be filled in)">Last Name</label>
                                                    <input type="text" id="last-name" placeholder="Last Name" data-name="last_name" valuefor="name-info" valuenum="2" value="{{$userData->last_name}}" vf-prefix=" ">
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
                                            <div class="tli-label text-white font-size-14 px-10">Email</div>
                                            <div class="tli-detail text-light font-size-14 px-10"><span id="mail-info"></span><span class="italic display-none">none</span></div>
                                            <div class="text-right"><button type="button" class="button-sm btn-edit">Edit</button></div>
                                        </div>
                                        <div class="tile-hide px-10">
                                            <div class="d-flex full-width form-responsive">
                                                <div class="input-text">
                                                    <label>Email</label>
                                                    <input type="email" id="email" placeholder="Email" value="{{$user->email}}" data-name="email" valuefor="mail-info">
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
                                            <div class="tli-label text-white font-size-14 px-10">Address</div>
                                            <div class="tli-detail text-light font-size-14 px-10"><span id="address-info"></span><span class="italic display-none">none</span></div>
                                            <div class="text-right"><button type="button" class="button-sm btn-edit">Edit</button></div>
                                        </div>
                                        <div class="tile-hide px-10">
                                            <div class="d-flex full-width form-responsive">
                                                <div class="input-textarea" required>
                                                    <label style="font-size: 14px" label="(Must be filled in)">Address</label>
                                                    <textarea id="address" placeholder="Address" data-name="address" valuefor="address-info">{{$userData->address}}</textarea>
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
                                            <div class="tli-label text-white font-size-14 px-10">Size of possible investment (USD)</div>
                                            <div class="tli-detail text-light font-size-14 px-10"><span id="size-possible-investment"></span></div>
                                            <div class="text-right"><button type="button" class="button-sm btn-edit">Edit</button></div>
                                        </div>
                                        <div class="tile-hide px-10">
                                            <div class="d-flex full-width form-responsive">
                                                <div class="input-text" required>
                                                    <label label="(Must be filled in) This is just suggestion, and not binding in any way">Size of possible investment</label>
                                                    <div class="currency-field" prefix="US$">
                                                        <input class="format-currency" type="text" id="investment" parent=".input-text" placeholder="0" data-name="size_of_investment" value="{{$userData->size_of_investment}}" valuefor="size-possible-investment">
                                                    </div>
                                                    <!-- <div class="input-group d-flex-important align-center full-width">
                                                        <div class="label">US$</div>
                                                        <input class="number-format" type="text" id="investment" placeholder="0">
                                                    </div> -->
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
                                            <div class="tli-label text-white font-size-14 px-10">Special skills</div>
                                            <div class="tli-detail text-light font-size-14 px-10"><span id="special-skills-info"></span><span class="italic display-none">none</span></div>
                                            <div class="text-right"><button type="button" class="button-sm btn-edit">Edit</button></div>
                                        </div>
                                        <div class="tile-hide px-10">
                                            <div class="d-flex full-width form-responsive">
                                                <div class="input-textarea" required>
                                                    <label style="font-size: 14px" label="(Must be filled in)">Special skills</label>
                                                    <textarea id="special-skills" placeholder="Special skills" data-name="special_skills" valuefor="special-skills-info">{{$userData->special_skills}}</textarea>
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
                                                    <input type="password" id="password" data-name="password" placeholder="Password">
                                                </div>
                                                <div class="input-text" required>
                                                    <label label="(Must be filled in)">Confirm Password</label>
                                                    <input type="password" id="confirm-password" data-name="password_confirmation" placeholder="Confirm Password">
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
                                    @if ($errors->any())
                                        @foreach ($errors->all() as $error)
                                            <div class="info primary-warning d-flex-important">
                                                <label>{{$error}}</label>
                                            </div>
                                        @endforeach
                                    @endif
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
        var loadFile = function (event) {
            var output = $('#logo-img');
            var reader = new FileReader();
            reader.onload = function(){
                output.attr('src', reader.result ).parent().addClass('image-opened');
            }
            reader.readAsDataURL(event.target.files[0]);
        };

        var multiValue={};

        function setInfoValue(){
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

    <script>
        var loader;

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

    </script>

@endsection
