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
                            <div class="full-width">
                                <h1 class="h1 text-yellow sm_font-size-35 sm_mt-60 text-center">Manage Investors</h1>
                                <div class="form-container">
                                    <div class="d-flex full-width justify-between align-center">
                                        <div class="d-flex align-center">
                                            <div class="button-secondary">
                                                <a href="{{ route('users.create') }}"><button class="no-wrap">Add</button></a>
                                            </div>
                                            <div class="input-text">
                                                <select id="investor-dropdown" name="country" style="outline:none">
                                                    <option value="">--All--</option>
                                                    <option value="1">Investors</option>
                                                    <option value="2">Investor candidate</option>
                                                </select>
                                            </div>
                                            <div class="button-secondary">
                                                <a id="edit-button" href="{{ route('users.investors.edit',['all']) }}"><button class="no-wrap">Edit All</button></a>
                                            </div>
                                            <div class="button-secondary">
                                                <a id="edit-selected-button" href="{{ route('users.investors.edit',['selected']) }}"><button class="no-wrap">Edit Selected</button></a>
                                            </div>
                                            <div class="button-secondary">
                                                <a id="edit-selected-button" href="{{ route('email.send',['selected']) }}"><button class="no-wrap">Email Selected</button></a>
                                            </div>
                                        </div>
                                        <div class="equal-width mr-10">
                                            <div class="input-text">
                                                <input id="investor-search" type="text" placeholder="Search">
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            {{-- <a href="{{ route('email.send') }}" class="mr-10">Send Email</a> --}}
                                            {{-- <div class="dropdown-button-group d-flex">
                                                <div class="button-primary">
                                                    <a href="{{ route('email.send',['selected']) }}"><button>Send Email</button></a>
                                                </div>
                                                <div class="button-primary dropdown-button">
                                                    <button><span class="fa fa-caret-down"></span></button>
                                                    <ul tabindex="-1">
                                                        <li><a href="{{ route('email.send',['investors']) }}">Investors</a></li>
                                                        <li><a href="{{ route('email.send',['investor-candidate']) }}">Investor candidate</a></li>
                                                    </ul>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="table-header d-flex">
                                        <div class="pr-10" style="min-width: 30px">#</div>
                                        <div class="equal-width min-max-width-250">User</div>
                                        <div class="equal-width">Address</div>
                                        <div class="px-10 min-max-width-200">Size of investment</div>
                                        <div class="px-10 min-max-width-200">Special Skills</div>
                                        <div class="px-10 min-max-width-100">Status</div>
                                    </div>

                                    <div><livewire:user.index :userType="$userType"/></div>

                                </div>
                                {{-- <div class="d-flex justify-between page-navigation">
                                    {!! $users->links() !!}
                                    <p class="text-light">Showing out of {{count($users)}} users</p>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

@endsection

@section('style_extra')
<style>
    /* Custom Page Navigation */
    .page-navigation{
        margin: 10px 0;
        font-size: 12px;
    }

    .page-navigation nav>div{
        align-items: center;
    }
    .page-navigation nav>div:nth-child(1) span > span {
        background: #696969;
        padding: 5px 10px;
        color: #FFF;
        margin: 0 5px;
        border-radius: 5px;
        font-size: 14px;
    }

    .page-navigation nav>div:nth-child(1) span > button {
        background: #F85405;
        padding: 5px 10px;
        color: #FFF;
        margin: 0 5px;
        border-radius: 5px;
        font-size: 14px;
        border: 0;
        cursor: pointer;
    }

    .button-primary, .button-secondary {
        margin: 10px 10px;
    }
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
            color: #FFF !important;
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
            right: 0;
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
            white-space: nowrap;
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

        .context-menu ul li.url {
            padding: 0;
        }

        .context-menu ul li.url a{
            display: block;
            padding: 5px 20px;
            color: #2d2d2d;
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
        }

        .dropdown-button-group > *:last-child,
        .dropdown-button-group > *:last-child button
        {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
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
            right: 0;
            z-index: 1000;
            font-size: 14px;
            padding: 10px 0;
            overflow: hidden;
            height: auto;
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

        .user-checked{
            background: #6b6969;
            padding: 5px 10px;
            margin: 5px 0;
            border-radius: 10px;
            font-size: 14px;
            cursor: pointer;
        }

        .user-checked:hover{
            background: #7e7c7c;
        }

        .user-checked.expand-uc + .user-checked-container{
            display: block;
        }

        .user-checked-container{
            display: none;
            overflow: auto;
            max-height: 200px;
        }

        .uc-item{
            display: inline-block;
            font-size: 12px;
            color: rgb(224,224,224);
            border: 1px solid #d5d5d5;
            padding: 2px 8px;
            border-radius: 20px;
        }

        .uc-item:hover{
            background: rgba(0,0,0,0.2);
        }

        .uc-item i{
            cursor: pointer;
            margin-left: 5px;
        }
        /*Table Row Detail*/
        .table-row-hover:hover{
            cursor: pointer;
            background-color: #444444;
        }

.table-row-detail{
        display: none;
        position: absolute;
        background: #FFF;
        z-index: 1;
        padding: 10px;
        border-radius: 10px;
        box-shadow: 0 3px 5px rgba(0,0,0,0.2);
        cursor: default;
        max-width: 500px;
        }

        .table-row-detail .table-header{
        background: #cecccc;
        color: #3c3c3c;
        }
        .table-row-detail .table-row{
        color: #3c3c3c;
        }

        .table-row-detail .fa-check-circle{
        color: #0cb431 !important;
        font-size: 20px;
        }

        .table-row-detail .fa-times-circle{
        color: #E50B00 !important;
        font-size: 20px;
        }

        .show-table-row-detail.table-row *{
        /* color: #3c3c3c; */
        }

        .show-table-row-detail.table-row .checkbox{
        /* display: none; */
        }

        .show-table-row-detail{
        position: relative;
        background: #686868 !important;
        /* background: #FFF !important;
        border-radius: 10px 10px 0 0;
        box-shadow: 0 3px 5px rgba(0,0,0,0.2); */
        }
        .show-table-row-detail .table-row-detail{
        display: block;
        top: 50%;
        width: 100%;
        left: 50%;
        transform: translatex(-50%);
        }
        /* Approved/Rejected*/
        .approved,
        .rejected
        {
        display: inline-block;
        padding: 3px 10px;
        border-radius: 10px;
        color: #FFF;
        }
        .switch-button{
        position: relative;
        background: #e4e4e4;
        padding: 0px 2.5px;
        border-radius: 20px;
        cursor: pointer;
        box-shadow: 0 0 5px 0 rgba(0,0,0,0.2);
        width: 100px;
        }

        .switch-button > span{
        padding: 5px;
        cursor: pointer;
        color: #535353;
        }

        .switch-button label{
        cursor: pointer;
        }

        .switch-button.candidate{
        padding-left: 25px;
        }

        .switch-button.candidate::after{
        content: "";
        position: absolute;
        left: 3px;
        top: 50%;
        transform: translatey(-50%);
        width: 19px;
        height: 19px;
        background: #b1afaf;
        border-radius: 50%;
        border: 2px solid #6d6d6d;
        transition: left .1s ease;
        }

        .switch-button.distributor{
        padding-right: 25px;
        background: #F85405;
        }

        .switch-button.distributor span{
        color: #FFF;
        }

        .switch-button.distributor::after{
        content: "";
        position: absolute;
        right: 3px;
        top: 50%;
        transform: translatey(-50%);
        width: 19px;
        height: 19px;
        background: #ff7e34;
        border-radius: 50%;
        border: 2px solid #FFF;
        transition: right .1s ease;
        }


        .switch-button > span span{
        display: block;
        font-size: 15px;
        }
        .approve-btn:hover{
        background: #F85405 !important;
        }
        .reject-btn:hover{
        background: #EF280E !important;
        }
        .approved{
        background: #F85405 !important;
        }
        .rejected{
        background: #EF280E !important;
        }
        .min-max-width-70{
        max-width: 70px;
        min-width: 70px;
        }
        .min-max-width-100{
        max-width: 100px;
        min-width: 100px;
        }
        .min-max-width-150{
        max-width: 150px;
        min-width: 150px;
        }
        .min-max-width-200{
        max-width: 200px;
        min-width: 200px;
        }
        .min-max-width-250{
        max-width: 250px;
        min-width: 250px;
        }
        .button-secondary button{
        font-size: 14px;
        }
</style>
@endsection

@section('script_extra')
<script>
    $(function(){
        $('body').on('click', '.checkbox', function(e){
            e.stopPropagation();
            $(this).find('input[type=checkbox]').prop('checked', !$(this).find('input[type=checkbox]').prop('checked')).change();
        })

        $('#investor-dropdown').change(function(){
            let val = $(this).val();
            let baseUrl = "{{ route('users.investors.edit') }}";
            let textVal = ( val=='1' ) ? 'Investors' : ( val == '2' ) ? 'Investor Candidate' : 'All';
                val  = ( val=='1' ) ? 'investors' : ( val == '2' ) ? 'investor-candidate' : 'all';
            $('#edit-button').attr( 'href', baseUrl + '/' + val ).find('button').html('Edit ' + textVal);
            Livewire.emit('setFilter', $(this).val());
        })

        var autosearch;
        $('#investor-search').keyup(function(){
            let val= $(this).val();
            clearTimeout(autosearch);
            autosearch = setTimeout(function() {
                Livewire.emit('setSearch', val);
            }, 2000);
        })

        $('#edit-selected-button').click(function(e){
            if($('.user-checked').length == 0){
                e.preventDefault();
                openDialog('Select Investor', 'No investor selected');
            }
        })
    })

    function scrollBody(){

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
