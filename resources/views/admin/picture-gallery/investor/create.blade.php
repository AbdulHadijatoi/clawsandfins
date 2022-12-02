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
                                <h1 class="h1 text-yellow sm_font-size-35 sm_mt-60 text-center">Add new pictures</h1>
                                <span class="h4 text-white text-center mb-30">Upload new pictures to investor
                                    gallery.</span>
                            </div>
                            <div class="form-container align-center justify-center">
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

                                    <form method="POST" action="{{ route('investor-picture-gallery.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="justify-center align-center">
                                            <div class="justify-center align-center">
                                                <label for="picture" class="form-label">Upload Images</label>
                                                {{-- <input type="file" name="pictures[]" accept="image/*" multiple> --}}
                                                <input type="file" multiple="" name="picture[]" data-filename="multiple_file_selection">
                                            </div>

                                            <div class="justify-center align-center">
                                                <div class="button-secondary">
                                                    <button type="submit" class="btn btn-primary">Upload</button>
                                                </div>
                                                <a href="{{ route('investor-picture-gallery.index') }}" class="btn btn-default">Back</a>
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
