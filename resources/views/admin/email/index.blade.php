@inject('settings', 'App\Http\Controllers\SettingsController')

@extends('layouts.master')

@section('menu')
    @include('components.admin-menu')
@endsection

@section('body_class')
page-no-arc
@endsection

@php
function smlData($recipient){
    
    $recipient=json_decode($recipient) ?? $recipient;
    $rc_more=null;
    if(is_array($recipient)){
        $rc_count=count($recipient);
        $recipient=array_slice($recipient, 0, 3);
        $rc_more=(($rc_count-3) ?? null);
        $rc_more=$rc_more > 0?'<label>+'.$rc_more.'</label>':'';
    }
    return [$recipient, $rc_more];
}
@endphp

@section('content')
        <!-- Content -->
        <div class="content-wrapper">
            <section class="section" data-clip-id="1" style="background-image: url('{{asset('bg/grey4.jpg')}}');">
                <div class="content">
                    <div class="full-width align-in-center pb-120">
                        <div class="_75-width md_90-width md_align-center flex-column justify-center max-w700">
                            <div class="full-width">
                                @if(!isset($id) && !isset($showAll))
                                <h1 class="h1 text-yellow sm_font-size-35 sm_mt-60 text-center">Send Email</h1>
                                @endif
                                <div class="form-container" style="min-height: 500px">
                                    @if(isset($id))
                                        @php $recipient=json_decode($mailItem->recipient) ?? [$mailItem->recipient]; @endphp
                                        <div class="mail-view">
                                            <div class="d-flex full-width justify-between align-center">
                                                <div class="button-primary">
                                                    <a href="{{ url()->previous() }}"><button>Back</button></a>
                                                </div>
                                                <h3 class="text-white">Mail View</h3>
                                                <div class="button-secondary">
                                                    <a href="{{ route('email.action',['copy',$id]) }}"><button>Copy</button></a>
                                                </div>
                                            </div>
                                            <div class="to d-flex align-top" {{count($recipient)==1?'style=flex-direction:row;align-items:center':null}}>
                                                <label>To</label>
                                                <div class="recipient-view">{!! '<span>'.join('</span><span>',$recipient).'</span>' !!}</div>
                                            </div>
                                            <div class="subject d-flex align-top">
                                                <label>Subject</label>
                                                <h4>{{$mailItem->subject}}</h4>
                                            </div>
                                            <div class="message-view">
                                            {!!$mailItem->message!!}
                                            </div>
                                        </div>
                                    @else
                                        <div class="d-flex full-width justify-center">
                                            @if(isset($showAll))
                                            <div class="d-flex full-width align-center pt-10">
                                                <div class="button-primary mt-0 mb-0">
                                                    <a href="{{ route('email.index') }}"><button>Back</button></a>
                                                </div>
                                                <h3 class="text-white">Mail List</h3>
                                                <div class="equal-width"></div>
                                            </div>
                                            @else
                                            <div class="dropdown-button-group d-flex full-width">
                                                <div class="button-secondary equal-width">
                                                    <a href="{{ route('email.send') }}"><button>Send</button></a>
                                                </div>
                                                <div class="button-secondary">
                                                    <a href="{{ route('email.send',['distributor']) }}"><button>Distributors</button></a>
                                                </div>
                                                <div class="button-secondary">
                                                    <a href="{{ route('email.send',['distributor-candidate']) }}"><button>Distributor Candidate</button></a>
                                                </div>
                                                <div class="button-secondary">
                                                    <a href="{{ route('email.send',['investor']) }}"><button>Investors</button></a>
                                                </div>
                                                <div class="button-secondary">
                                                    <a href="{{ route('email.send',['investor-candidate']) }}"><button>Investor Candidate</button></a>
                                                </div>
                                                <div class="button-secondary">
                                                    <a href="{{ route('email.send',['all']) }}"><button>All Users</button></a>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                        <div class="recent-mail">
                                            @if(!isset($showAll))
                                            <div class="d-flex align-center justify-between">
                                                <h4 class="text-white">Recent</h4>
                                                <a class="text-yellow" href="{{ route('email.view',['show-all']) }}">See all</a>
                                            </div>
                                            @endif
                                            @if(count($recent)>0)
                                            <div class="send-mail-list" {{(isset($showAll)?'style=height:auto':null)}}>
                                                @foreach($recent as $item)
                                                @php [$recipient,$rc_more]=smlData($item->recipient); @endphp
                                                <a href="{{ route('email.view',['show',$item->id]) }}" class="sml-item d-flex align-top">
                                                    <div class="d-flex flex-column equal-width">
                                                        <h4>{!! !empty($item->subject)?$item->subject:'<em>No Subject</em>' !!}</h4>
                                                        <span class="to">{!! is_array($recipient)?join(',',$recipient).$rc_more:ucfirst(str_replace('-',' ',$recipient)) !!}</span>
                                                    </div>
                                                </a>
                                                @endforeach
                                            </div>
                                            @else
                                            <div class="empty"></div>
                                            @endif
                                        </div>
                                        @if(!isset($showAll))
                                        <div class="draft-mail">
                                            <div class="d-flex align-center justify-between">
                                                <h4 class="text-white">Draft</h4>
                                                <a class="text-yellow" href="{{ route('email.action',['clear-draft']) }}">Clear Draft</a>
                                            </div>
                                            @if(count($draft)>0)
                                            <div class="send-mail-list">
                                                @foreach($draft as $item)
                                                @php [$recipient,$rc_more]=smlData($item->recipient); @endphp
                                                <a href="{{ route('email.send',[ (is_array($recipient)?'selected':$recipient), $item->id]) }}" class="sml-item d-flex align-top">
                                                    <div class="d-flex flex-column equal-width">
                                                        <h4>{!! !empty($item->subject)?$item->subject:'<em>No Subject</em>' !!}</h4>
                                                        <span class="to">{!! is_array($recipient)?join(',',$recipient).$rc_more:ucfirst(str_replace('-',' ',$recipient)) !!}</span>
                                                    </div>
                                                    <span data-route="{{ route('email.action',['delete-draft',$item->id]) }}" class="delete-draft fa fa-trash text-light cursor-pointer ml-10"></span>
                                                </a>
                                                @endforeach
                                            </div>
                                            @else
                                            <div class="empty"></div>
                                            @endif
                                        </div>
                                        @endif
                                    @endif
                                </div>
                                @if(isset($showAll))
                                <div class="d-flex justify-between page-navigation">
                                    {!! $recent->links() !!}
                                    <p class="text-light">Showing out of {{count($recent)}} mails</p>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <iframe class="display-none" name="framesubmit" src=""></iframe>

@endsection

@section('style_extra')
<style>
    .button-secondary button{
        border: 0;
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

        .recent-mail,
        .draft-mail{
            padding: 10px;
        }

        .empty{
            height: 200px;
            background: #3e3e3e;
            margin: 10px 0;
            border-radius: 10px;
        }

        .empty:before{
            content: "Empty";
            height: 100%;
            color: #bbbbbb;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 14px;
        }

         /*Dropdown Button*/
        .dropdown-button-group{
        }

        .dropdown-button-group button {
            font-size: 14px;
        }

        .dropdown-button-group > *{
            margin: 10px 0;
        }

        .dropdown-button-group > div button
        {
            border-radius: 0;
        }

        .dropdown-button-group > *:first-child,
        .dropdown-button-group > *:first-child button
        {
            border-top-left-radius: 10px !important;
            border-bottom-left-radius: 10px !important;
        }

        .dropdown-button-group > *:last-child,
        .dropdown-button-group > *:last-child button
        {
            border-top-right-radius: 10px !important;
            border-bottom-right-radius: 10px !important;
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

        /*List*/
        .send-mail-list{
            background: #3e3e3e;
            padding: 10px;
            margin: 10px 0;
            border-radius: 10px;
            height: 300px;
            overflow-y: auto;
        }

        .sml-item{
            color: #c6c6c6;
            border: 1px solid #c6c6c6;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 12px;
            margin: 5px 0;
        }

        .sml-item:first-child{
            margin-top: 0px !important;
        }
        
        .sml-item:last-child{
            margin-bottom: 0px !important;
        }

        .sml-item:hover{
            background: #494848;
        }

        .sml-item .to{
            font-size: 10px;
        }

        .sml-item .to:before{
            content: "To:";
            margin-right: 5px;
        }

        .sml-item .to label{
            display: inline-block;
            margin-left: 5px;
            background: #2b2b2b;
            padding: 0px 5px;
            border-radius: 5px;
        }

        .sml-item *{
            word-break: break-all;
        }

        .sml-item > span{
            font-size: 14px;
        }

        /*Mail View*/
        .mail-view .button-primary,
        .mail-view .button-secondary
        {
            margin: 0px;
        }

        .mail-view > *{
            margin: 10px 0;
            border-bottom: 1px solid #696969;
            padding-bottom: 5px;
        }

        .mail-view > * > *{
            word-break: break-all;
        }

        .mail-view .to,
        .mail-view .subject
        {
            color: #FFF;
            flex-direction: column;
        }

        .mail-view .to label,
        .mail-view .subject label
        {
            color: #c6c6c6;
            font-size: 12px;
        }

        .recipient-view{
        }

        .recipient-view span{
            display: inline-block;
            border: 1px solid #FFF;
            padding: 0px 10px;
            border-radius: 20px;
            font-size: 12px;
            margin: 3px;
        }

        .message-view{
            background: #FFF;
            min-height: 300px;
            font-size: 14px;
            padding: 10px;
        }

</style>
@endsection

@section('script_extra')

<script>
    var loader;
    function openContextMenu(elm){
        elm.addClass('open-context-menu').attr('tabindex','-1').focus();
        elm.find('.context-menu .context-menu-item').click(function(e){
            e.stopPropagation();
            elm.removeClass('open-context-menu');
        })
    }

    @if(session()->has('success'))
    openDialog('Success','{{session()->get('success')}}');
    @endif
</script>
<script>
$(function(){
    $('.input-text input, .input-textarea textarea').on('input',function(){
        $('#button-update').prop('disabled',false);
    })
    $('.delete-draft').click(function(e){
        e.stopPropagation();
        var elm=$(this);
        var prnt=$(this).parents('.sml-item');
        $.ajax({
            url: elm.attr('data-route'),
            type: "GET",
            data: {
                _token: '{{csrf_token()}}'
            },
            dataType: 'json',
            success: function (result) {
                if(result.success){
                    openDialog('Success', result.success);
                    prnt.remove();
                }else{
                    openDialog('Error', result.error);
                }
            }
        })
        return false;
    })
})
function disableButton(){
    $('#button-update').prop('disabled',true);
}
function inputValidation(form, callback) {
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

    })

    if (errMsgCount > 0) {
        return false;
    }

    callback();

    return true;
}
</script>
<!-- >>> End -->
@endsection