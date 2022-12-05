@extends('layouts.master')

@section('body_class')
page-no-arc
@endsection

@php
if(isset($option)){
    $sendOption=ucfirst(str_replace('-',' ',$option));
}
$userType=(request()->userType??null);
$selectedUserType=(isset($option) && $option=='selected' && $userType)??null;
@endphp

@section('content')
        <!-- Content -->
        <div class="content-wrapper">
            <section class="section" data-clip-id="1" style="background-image: url('{{asset('bg/grey4.jpg')}}');">
                <div class="content">
                    <div class="full-width align-in-center pb-120">
                        <div class="_75-width md_90-width md_align-center flex-column justify-center max-w700">
                            <div class="full-width">
                                <div class="form-container mail-form">
                                    <div class="d-flex full-width justify-between align-center">
                                        <h3 class="text-light">Send Email</h3>
                                        <div class="d-flex align-center">
                                        @if(session()->has('userchecked') && count(session()->get('userchecked',[])) > 0 )
                                            @if(isset($option))
                                            <a href="{{ route('email.send') }}">Edit</a>
                                            @else
                                            <a href="Javascript:Livewire.emit('clearChecked',true);$('.uc-item').hide()">Clear</a>
                                            @endif
                                        @else
                                            @if(isset($option))
                                            <a href="{{ route('email.send') }}">New</a>
                                            @endif
                                        @endif
                                        <span onclick="$('body').toggleClass('form-container-fullscreen')" class="fa fa-arrows-alt text-light cursor-pointer ml-10"></span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="full-width form-responsive relative">
                                            <div class="{{!isset($option)?'to-recipients':''}} input-text d-flex @if($selectedUserType) flex-column @endif">
                                                <label class="mr-10 mb-0 text-white">
                                                    To
                                                    @if($selectedUserType)
                                                    selected {{$userType}}s
                                                    @endif

                                                </label>
                                                @if(isset($option))
                                                    @if($option=='selected')
                                                        <livewire:user.index :userchecked="true" :draftId="$draftId" :userType="$userType"/>
                                                    @else
                                                    <span class="fixed-recipients">{{$sendOption}}</span>
                                                    @endif
                                                @else
                                                <div class="content-text" contenteditable="true" id="recipients" placeholder="To" name="recipients" value="">
                                                @if(session()->has('userchecked') && count(session()->get('userchecked',[])) > 0 )
                                                    @foreach(session()->get('userchecked') as $email)
                                                    <span class="uc-item" data-email="{{$email}}" contenteditable="false">{{$email}} <i class="fa fa-times" onclick="$(this).parent().hide();Livewire.emit('removeChecked','{{$email}}')"></i></span>
                                                    @endforeach
                                                @endif
                                                &nbsp;
                                                </div>
                                                {{-- <div contenteditable="false" class="multi-value mr-10">a</div> --}}
                                                @endif
                                            </div>
                                            @if(!isset($option))
                                            <livewire:user.index :findUser="true"/>
                                            @endif
                                        </div>
                                        <livewire:email :option="$option" :draftId="$draftId" :userType="$userType"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

@endsection

@section('style_extra')
<style>
    .tox svg{
        position: relative;
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

        .user-checked-container{
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

        .no-user-selected{
            background: #646464;
            padding: 5px 8px;
            border-radius: 10px;
            font-size: 12px;
            font-style: italic;
        }

        .input-text .content-text{
            width: 100%;
            color: #FECC2E;
            /* background-color: #181818; */
            background-color: #292929;
            border: 0px;
            border-bottom: 1px solid #999999;
            border-radius: 5px;
            box-shadow: 0 0 10px rgb(129 129 129 / 30%);
            padding: 10px;
            font-size: 12px;
            outline: none;
        }

        .input-text .content-text .multi-value{
            display: inline-block;
        }

        .fixed-recipients{
            color: #FFF;
            background-color: #383838;
            border: 1px solid #FFF;
            padding: 3px 15px;
            border-radius: 20px;
            font-size: 14px;
        }

        /*Find Users*/
        .user-list-container{
            display: none;
            width: 100%;
            max-height: 300px;
            background: #FFF;
            position: absolute;
            z-index: 99999;
            overflow: hidden;
            overflow-y: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
            border-radius: 10px;
            font-size: 14px;
        }

        .user-item{
            align-items: flex-start;
            border-bottom: 1px solid #e0e0e0;
            cursor: pointer;
        }

        .user-item:hover{
            background: #f5f5f5;
        }

        .user-item .info{
            flex-grow: 1;
            margin: 0;
            padding: 5px 10px;
        }

        .user-item .info span{
            font-size: 12px;
            display: block;
        }

        .user-item .role{
            padding: 3px 10px;
            font-size: 12px;
            background: #dbdbdb;
            border-bottom-left-radius: 10px;
            color: #585858;
        }

        .show-user-list + .user-list-container:has(.user-item){
            display: block;
        }

        .to-recipients > label{
            position: absolute;
            padding: 10px;
            font-size: 12px;
        }

        .content-text{
            padding-left: 30px !important;
        }

        .content-text .uc-item{
            margin: 2px 3px;
        }

        /*fullscreen*/
        body.form-container-fullscreen .mail-form{
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            height: 100vh;
            border-radius: 0;
            margin: 0;
            z-index: 99999;
            overflow-y: auto;
        }

        body.form-container-fullscreen .main-menu-container,
        body.form-container-fullscreen .nav-top,
        body.form-container-fullscreen .nav-top,
        body.form-container-fullscreen header,
        body.form-container-fullscreen footer,
        body.form-container-fullscreen .copyright-text
        {
            display: none !important;
        }

        .is-draft{
            background: #FFF;
            padding: 10px;
            border-radius: 10px;
            color: #F14A18;
            line-height: 20px;
        }

        .is-draft .fa{
            vertical-align: middle;
            font-size: 20px;
        }

</style>
@endsection

{{-- @section('head_extra')
<script src="https://cdn.tiny.cloud/1/r9a5eqnpeueslw19rsf5ks22sfrzthxxjeikv8mclszcl7s6/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://cdn.tiny.cloud/1/r9a5eqnpeueslw19rsf5ks22sfrzthxxjeikv8mclszcl7s6/tinymce/6/plugins.min.js" referrerpolicy="origin"></script>
@endsection --}}
@section('script_extra')

    {{-- tinymce.init({
        selector:'textarea#message',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tableofcontents footnotes mergetags autocorrect',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        width: '100%',
        height: 300,
        forced_root_block: false,
        setup: function (editor) {
            editor.on('init change', function () {
                editor.save();
            });
            editor.on('change', function (e) {
                Livewire.set('message', editor.getContent());
            });
        }
    }); --}}
<script>
    let draft;
    $(function(){
        $('.send-email-button, .draft-email-button').click(function(){
            let elm=$(this);
            if(elm.hasClass('draft-email-button')){
                if(draft) return;
                draft=$('<input type="hidden" name="draft" value="true">');
                elm.parents('form').append(draft);
            }else{
                if(draft) draft.remove(); draft=null;
            }
        })

        $('.content-text').on('input',function(){
            let ct=$(this).clone().children().remove().end().text();
            let val=ct.trim();
            let ns=this.childNodes[this.childNodes.length-1];
            if(ns.nodeType!=3){
                $(this).append("&nbsp;");
                set_mouse();
            }
            console.log(ns.length);
            if(ns.textContent.trim().length>0 && (ns.length>(ns.textContent.trim().length+1)) && ns.nodeType==3){
                let newVal=ns.textContent.trim();
                ns.remove();
                console.log('ns removed');
                $(this).append("&nbsp;"+newVal);
                set_mouse();
            }
            Livewire.emit('findUsers',val);
        })

        $('.content-text').on('focus',function(){
            $(this).parents('.to-recipients').addClass('show-user-list');
        })

        $('.content-text').on('click',function(){
            set_mouse();
        })

        $('body').on('click','.user-item',function(){
            let elm=$(this);
            let email=elm.attr('data-email');
            let exist = $('.content-text .uc-item').filter(function(){
                return $(this).attr('data-email') == email && $(this).css('display') != 'none'
            });
            if(exist.length>0){
                return;
            }
            let emit="Livewire.emit('removeChecked','"+email+"')";
            let uc='<span class="uc-item" data-email="'+email+'" contenteditable="false">'+email+'<i class="fa fa-times" onclick="$(this).parent().hide();'+emit+'"></i></span>';
            if($('.content-text').children('.uc-item').length){
                $('.content-text').children().last().after(uc);
            }else{
                $('.content-text').prepend(uc);
            }
            //$('.to-recipients').removeClass('show-user-list');
            Livewire.emit('addChecked',[1,email]);
            elm.hide();
        })


    })

    $(document).bind("DOMNodeRemoved", function(e)
    {
        if($(e.target).hasClass('uc-item')){
            Livewire.emit('removeChecked',$(e.target).attr('data-email'));
            $('.to-recipients').addClass('show-user-list');
        }
    });

    function set_mouse() {
        var as = $('.content-text')[0];
        el=as.childNodes[as.childNodes.length-1];//goal is to get ('we') id to write (object Text)
        var range = document.createRange();
        var sel = window.getSelection();
        range.setStart(el, el.length);
        range.collapse(true);
        sel.removeAllRanges();
        sel.addRange(range);
    }

    function openContextMenu(elm){
        elm.addClass('open-context-menu').attr('tabindex','-1').focus();
        elm.find('.context-menu .context-menu-item').click(function(e){
            e.stopPropagation();
            elm.removeClass('open-context-menu');
        })
    }
    window.onload = function(){
        document.onclick = function(e){
            if($(e.target).parents('.user-list-container').length==0 && !$(e.target).hasClass('content-text') && $(e.target).parents('.content-text').length==0 ){
                $('.to-recipients').removeClass('show-user-list');
            }else{
            }
        };
    };
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
