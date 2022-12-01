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
                                <h1 class="h1 text-yellow sm_font-size-35 sm_mt-60 text-center">Page Permissions</h1>
                                <span class="h4 text-white text-center mb-30">Use (tick) mark to restrict page access by role.</span>
                            </div>
                            <div class="form-container">

                                <div class="mt-2">
                                    @include('layouts.partials.messages')
                                </div>
                                <form action="{{route('permissions.savePagePermissions')}}" method="POST">
                                    @csrf
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            {{-- <th scope="col">Slug</th>  --}}
                                            @if($roles)
                                                @foreach ($roles as $role)
                                                    @if($role->name == 'admin')
                                                        @continue
                                                    @endif
                                                    <th scope="col" style="max-width: 120px;">{{ucwords(strtolower($role->name))}}</th>
                                                @endforeach
                                            @endif
                                        </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($pages as $page)
                                                <tr>
                                                    <td>{{ $page->name }}</td>
                                                    {{-- <td>{{ $page->slug }}</td> --}}
                                                    @foreach ($roles as $role)
                                                        @if($role->name == 'admin')
                                                            @continue
                                                        @endif
                                                        <td style="text-align: center">
                                                            <div class="inline-block">
                                                                <span class="checkbox align-in-center">
                                                                    <input type="checkbox" name="{{$page->slug .'_'. $role->name}}" @if(!$role->hasPermissionTo($page->slug)) checked @endif/>
                                                                    <span class="material-icons">check</span>
                                                                </span>
                                                            </div>
                                                        </td>
                                                    @endforeach
                                                </tr>

                                            @endforeach

                                        </tbody>
                                    </table>
                                    <div class="d-flex full-width justify-center">
                                        <div class="button-secondary">
                                            <button type="submit">Save</button>
                                        </div>
                                    </div>
                                </form>
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
    .table{
    min-width: 100%;
    border-collapse: collapse;
    color: #FFF;
    font-size: 12px;
    }
    .table thead tr th{
    border-bottom: 1px solid #6f6f6f;
    font-weight: 400;
    padding: 8px;
    }

    .table tbody tr td{
    border-bottom: 1px solid #6f6f6f;
    font-weight: 400;
    padding: 8px;
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
</style>
@endsection

@section('script_extra')
<script>
    $('.checkbox').click(function(){
        $(this).find('input[type=checkbox]').prop('checked', !$(this).find('input[type=checkbox]').prop('checked')).change();
    })
</script>
@endsection
