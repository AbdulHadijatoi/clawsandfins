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
                                <h1 class="h1 text-yellow sm_font-size-35 sm_mt-60 text-center">Update role</h1>
                                <span class="h4 text-white text-center mb-30">Edit role and manage permissions.</span>
                            </div>
                            <div class="form-container">
                                <div class="container mt-4">

                                    @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                            <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <form method="POST" action="{{ route('roles.update', $role->id) }}">
                                        @method('patch')
                                        @csrf
                                        <div class="form-header justify-between align-center">
                                            <div class="d-flex align-center">
                                                <label for="name" class="form-label ml-5 text-white-50">Name</label>
                                                <div class="input-text">
                                                    <input value="{{ $role->name }}"
                                                        type="text"
                                                        class="form-control"
                                                        name="name"
                                                        placeholder="Name" required>
                                                </div>
                                            </div>
                                            <div class="align-center">
                                                <div class="d-flex">
                                                    <div class="button-primary">
                                                        <a href="{{ route('roles.index') }}"><button>Back</button></a>
                                                    </div>
                                                    <div class="button-secondary">
                                                        <button type="submit">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="text-left" scope="col" width="1%">
                                                        <div class="inline-block">
                                                            <span class="checkbox align-in-center">
                                                                <input type="checkbox" name="all_permission">
                                                                <span class="material-icons">check</span>
                                                            </span>
                                                        </div>
                                                    </th>
                                                    <th class="text-left" scope="col" width="20%">Name</th>
                                                    <th class="text-left" scope="col" width="1%">Guard</th>
                                                </tr>
                                            </thead>

                                            @foreach($permissions as $permission)
                                                <tr>
                                                    <td>
                                                        <div class="inline-block">
                                                            <span class="checkbox align-in-center">
                                                                <input type="checkbox"
                                                                name="permission[{{ $permission->name }}]"
                                                                value="{{ $permission->name }}"
                                                                class='permission'
                                                                {{ in_array($permission->name, $rolePermissions)
                                                                    ? 'checked'
                                                                    : '' }}>
                                                                <span class="material-icons">check</span>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>{{ $permission->name }}</td>
                                                    <td>{{ $permission->guard_name }}</td>
                                                </tr>
                                            @endforeach
                                        </table>

                                    </form>
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
    .container{
        max-width: 100%;
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

    .tr-detail .input-textarea textarea,
    .tr-detail .checkbox {
        background-color: #FFF;
        color: #000;
    }

    .table thead tr th:hover .sort-order {
        opacity: 1;
    }

    .button-primary,
    .button-secondary{
    margin: 0 5px;
    }

    .form-header{
    background: #3c3c3c;
    border-radius: 10px;
    margin: 5px;
    padding: 5px;
    }
</style>
@endsection

@section('script_extra')
<script>
    $(document).ready(function() {
        $('[name="all_permission"]').on('change', function() {

            if($(this).is(':checked')) {
                $.each($('.permission'), function() {
                    $(this).prop('checked',true);
                });
            } else {
                $.each($('.permission'), function() {
                    $(this).prop('checked',false);
                });
            }

        });
    });
    $('.checkbox').click(function(){
        $(this).find('input[type=checkbox]').prop('checked', !$(this).find('input[type=checkbox]').prop('checked')).change();
    })
</script>
@endsection
