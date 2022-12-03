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
                                <h1 class="h1 text-yellow sm_font-size-35 sm_mt-60 text-center">Add new permission</h1>
                            </div>
                            <div class="form-container align-center justify-center flex-column">
                                <div class="container mt-4">

                                    <form method="POST" action="{{ route('permissions.store') }}">
                                        @csrf
                                        <div class="justify-center align-center">
                                            <div class="justify-center align-center">
                                                <label for="name" class="form-label">Name</label>
                                                <div class="input-text">
                                                    <input style="min-width: 400px" value="{{ old('name') }}" type="text" class="form-control" name="name" placeholder="Name" required>
                                                </div>

                                                @if ($errors->has('name'))
                                                <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                                @endif
                                            </div>
                                            <div class="justify-center align-center">
                                                <div class="button-secondary">
                                                    <button type="submit" class="btn btn-primary">Save permission</button>
                                                </div>
                                                <a href="{{ route('permissions.index') }}" class="btn btn-default">Back</a>
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
