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
                                <h1 class="h1 text-yellow sm_font-size-35 sm_mt-60 text-center">Admin Login Credentials</h1>
                            </div>
                            <div class="form-container align-center justify-center flex-column">
                                <div class="container mt-4">

                                    <form method="POST" action="{{ route('admin.changeCredentials.update') }}">
                                        @csrf
                                        <div class="justify-center align-center flex-column">
                                            <div class="justify-center flex-column">

                                                <label for="name" class="form-label ml-5">Email</label>
                                                <div class="input-text">
                                                    <input style="min-width: 400px" value="{{ $admin->email }}" type="email" class="form-control" name="email" placeholder="admin@clawsandfins.com" required>
                                                </div>

                                                <label for="current_password" class="form-label ml-5">Current Password</label>
                                                <div class="input-text">
                                                    <input style="min-width: 400px" type="password" value="1234567890123456789012345678901234567890" class="form-control" name="current_password" placeholder="password" required>
                                                </div>

                                                <label for="password" class="form-label ml-5">New Password</label>
                                                <div class="input-text">
                                                    <input style="min-width: 400px" type="password" class="form-control" name="password" placeholder="New password" required>
                                                </div>

                                                <label for="password_confirmation" class="form-label ml-5">Confirm New Password</label>
                                                <div class="input-text">
                                                    <input style="min-width: 400px" type="password" class="form-control" name="password_confirmation" placeholder="Confirm new password" required>
                                                </div>
                                                
                                                @if ($errors->any())
                                                    @foreach ($errors->all() as $error)
                                                        <div class="info primary-warning d-flex-important">
                                                            <label class="d-flex align-center"><span class="fa fa-times-circle mr-10" style="font-size: 20px"></span>{{$error}}</label>
                                                        </div>
                                                    @endforeach
                                                @endif
                                                        
                                                @if(session()->has('success'))
                                                    <div class="info primary-info d-flex-important">
                                                        <label class="d-flex align-center"><span class="fa fa-times-circle mr-10" style="font-size: 20px"></span>{{Session::get('success')}}</label>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="justify-right align-center">
                                                <div class="button-secondary">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                                <a href="{{ route('admin.home') }}" class="btn btn-default">Back</a>
                                            </div>
                                            
                                            
                                        </div>
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
    .form-container {
        padding: 0px 30px;
    }

    .container {
        /* max-width: 500px; */
        border: 1px solid var(--star-gold);
        margin: 30px;
        padding: 20px;
        border-radius: 10px;
    }

    input[type=file] {
        padding: 10px;
        border: 1px solid #aaaaaa;
        color: white;
        margin-left: 10px;
        border-radius: 5px;
        background: #5c5b5b;
    }

</style>
@endsection
