@extends('layouts.master')

@section('body_class')
page-no-arc
@endsection

@section('content')
    <div class="content-wrapper">
        <section class="section" data-clip-id="1" style="background-image: url('{{asset('bg/grey4.jpg')}}');">
            <div class="content">
                <div class="full-width align-in-center pb-120">
                    <div class="_75-width md_90-width md_align-center flex-column justify-center max-w700">
                        <div class="full-width">
                            <div class="text-center">
                                <h1 class="h1 text-yellow sm_font-size-35 sm_mt-60 text-center">Investor Picture Gallery</h1>
                                <span class="h4 text-white text-center mb-30">Manage picture gallery for investor.</span>
                                <div class="justify-center">
                                    <div class="button-primary">
                                        <a href="{{ route('investor-picture-gallery.create') }}"><button>Add picture</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-container">
                                <div class="mt-2">
                                    @include('layouts.partials.messages')
                                </div>

                                <div class="d-flex flex-wrap justify-center">
                                    @if($pictures)
                                    @foreach ($pictures as $index => $pic)
                                    <div class="thumbnail-preview">

                                        <img style="height: 150px;width: auto" src="{{url('storage/'.$pic->name)}}">

                                        <div class="btn-delete">
                                            {!! Form::open(['method' => 'DELETE','route' => ['investor-picture-gallery.destroy',
                                            $pic->id],'style'=>'display:inline']) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                </div>

                                <div class="d-flex">
                                    {{-- {!! $roles->links() !!} --}}
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
    .btn {
        border: 0;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
    }

    .table {
        min-width: 100%;
        border-collapse: collapse;
        color: #FFF;
        font-size: 12px;
    }

    .table thead tr th {
        border-bottom: 1px solid #6f6f6f;
        font-weight: 400;
        padding: 8px;
    }

    .table tbody tr td {
        border-bottom: 1px solid #6f6f6f;
        font-weight: 400;
        padding: 8px;
    }

    .table tbody tr.tr-bottom-border td {
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

    .tr-detail {
        background: #e0e0e0;
        color: #4e4e4e;
        border-radius: 5px;
        padding: 0 5px;
    }

    .content form label {
        color: #4e4e4e;
    }

    .tr-detail .input-textarea textarea,
    .tr-detail .checkbox {
        background-color: #FFF;
        color: #000;
    }

    .table thead tr th:hover .sort-order {
        opacity: 1;
    }

    .thumbnail-preview{
    position: relative;
    margin: 5px;
    border-radius: 10px;
    overflow: hidden;
    }

    .thumbnail-preview img{
    display: block;
    }

    .thumbnail-preview .btn-delete{
    position: absolute;
    top: 10px;
    right: 10px;
    box-shadow: 0 0 5px 0 rgba(0,0,0,0.3);
    }
</style>
@endsection
