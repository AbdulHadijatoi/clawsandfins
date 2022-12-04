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
                                <h1 class="h1 text-yellow sm_font-size-35 sm_mt-60 text-center">Roles</h1>
                                <span class="h4 text-white text-center mb-30">Manage your roles here.</span>
                                <div class="justify-center">
                                    <div class="button-primary">
                                        <a href="{{ route('roles.create') }}"><button>Add role</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-container">
                                <div class="mt-2">
                                    @include('layouts.partials.messages')
                                </div>

                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th width="1%">No</th>
                                            <th class="text-left">Name</th>
                                            <th width="3%" colspan="3">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($roles as $key => $role)
                                        <tr>
                                            <td>{{ $role->id }}</td>
                                            <td>{{ $role->name }}</td>
                                            <td>
                                                <div class="button-primary">
                                                    <a href="{{ route('roles.show', $role->id) }}"><button>Show</button></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="button-secondary">
                                                    <a href="{{ route('roles.edit', $role->id) }}"><button>Edit</button></a>
                                                </div>
                                            </td>
                                            <td>
                                                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <div class="d-flex justify-between page-navigation p-10">
                                    {!! $roles->links() !!}
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

    .table .button-primary,
    .table .button-secondary
    {
    margin: 0;
    }

    .table .button-primary button,
    .table .button-secondary button
    {
    padding: 3px 8px;
    font-size: 14px;
    border: 1px solid #fff;
    min-width: 60px;
    }

    .table {
        min-width: 100%;
        border-collapse: collapse;
        color: #FFF;
        font-size: 12px;
    }

    .table thead tr th {
        border-bottom: 1px solid #6f6f6f;
        font-weight: bold;
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
</style>
@endsection
