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
                            <h1 class="h1 text-yellow sm_font-size-35 sm_mt-60 text-center">Edit Account Info</h1>
                            <h3 class="text-yellow text-center">({{$editOption}})</h3>
                            <div class="form-container">
                                <livewire:user.edit.investor :option="$option" />
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

    input[type=checkbox]{
        display: block;
        width: 15px;
        height: 15px;
        margin: 5px;
    }

</style>
@endsection

@section('script_extra')
    <script>

        setCountries();

        window.addEventListener('initRender', event => {
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

    </script>


@endsection
