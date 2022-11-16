@extends('layouts.master')

@section('menu')
    @include('components.menu_1')
@endsection

@section('head_extra')
<link rel="stylesheet" href="{{asset('css/style.css')}}">
@endsection

@section('body_class')
page-no-arc
@endsection

@section('content')
        <!-- Content -->
        <div class="content-wrapper">
            <section class="section" data-clip-id="1" style="background-image: url('{{asset('bg/grey1.jpg')}}');">
                <div class="content">
                    <div class="full-width align-in-center pb-120">
                        <div class="_75-width md_90-width flex-column justify-center max-w700">
                            <div>
                                <h1 class="h1 text-yellow sm_font-size-35 text-center mt-60">Where to buy our products</h1>
                                <div class="search">
                                    <input type="text" placeholder="Type the first letters to highlight your country below">
                                    <span class="material-icons">
                                        search
                                    </span>
                                </div>
                                <div id="country-list" class="spinner" style="min-height: 150px">
                                    @if($countries)
                                        @foreach ($countries as $country)
                                            <a href="{{route('home.distributors', [$country->id])}}" class="country-item" value="{{strtolower($country->name)}}">{{$country->name}}
                                                @if($country->distributors_count>0)
                                                <span title="{{$country->distributors_count}} {{$country->distributors_count==1?'distributor':'distributors'}}">{{$country->distributors_count}}</span>
                                                @endif
                                            </a>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
@endsection
    


@section('script_extra')
    <script>
        $(function(){
            removeSpinner();

            $('.search input').keyup(function(){
                $('#country-list').find('.country-item').removeClass('not-found');
                if($(this).val() != ''){
                    $(this)
                        .parent()
                        .addClass('search-found')
                        .attr('item-found', $('#country-list').find('.country-item[value*="' + $(this).val().toLowerCase() + '"]').length );
                    $('#country-list').find('.country-item:not([value*="' + $(this).val().toLowerCase() +'"])').addClass('not-found');
                }else{
                    $(this).parent().removeClass('search-found');
                }
            })
        })
    </script>
@endsection


@section('style_extra')
    <style>
        #country-list{
            display: flex;
            flex-wrap: wrap;
            align-items: stretch;
        }
        #country-list .country-item{
            background: #cacaca;
            margin: 5px;
            color: #181818;
            flex-grow: 1;
            padding: 8px 15px;
            text-align: center;
            border-radius: 5px;
            box-shadow: 0 0 2px rgba(0,0,0,0.5);
        }

        #country-list .country-item span{
            display: inline-block;
            margin: 0 10px;
            background: #181818;
            min-width: 20px;
            height: 20px;
            color: #FECC2E;
            border-radius: 10px;
            font-size: 12px;
            line-height: 20px;
        }

        #country-list .country-item:hover{
            background-color: #FF8506;
        }

        .search{
            position: relative;
            padding: 5px;
            margin: 30px 0;
        }

        .search input{
            width: 100%;
            padding: 10px 10px;
            background: #181818;
            border: 0;
            border-radius: 5px;
            color: white;
            padding-right: 30px;
        }

        .search span{
            position: absolute;
            right: 10px;
            top: calc(50% - 13px);
            color: #FECC2E;
        }

        .not-found{
            background: #181818 !important;
            color: #444444 !important;
        }

        .not-found span{
            background: #141313 !important;
            color: #444444 !important;
        }

        .search-found:after {
            content: attr(item-found) " countries found";
            position: absolute;
            top: 100%;
            left: 5px;
            font-size: 12px;
            color: #adadad;
            padding: 0 10px;
        }
    </style>
@endsection