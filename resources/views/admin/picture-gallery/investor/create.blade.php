@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h1>Add new pictures</h1>
        <div class="lead">
            Upload new pictures to investor gallery.
        </div>

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
                <div class="mb-3">
                    <label for="picture" class="form-label">Upload Images</label>
                    {{-- <input type="file" name="pictures[]" accept="image/*" multiple> --}}
                    <input type="file" multiple="" name="picture[]" data-filename="multiple_file_selection">
                </div>

                <button type="submit" class="btn btn-primary">Upload</button>
                <a href="{{ route('investor-picture-gallery.index') }}" class="btn btn-default">Back</a>
            </form>
        </div>

    </div>
@endsection
