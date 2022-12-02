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
                            <div class="form-container align-center justify-center flex-column">
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
                                                <input id="files" type="file" multiple="" name="picture[]" data-filename="multiple_file_selection">
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

                                <div id="preview" class="d-flex flex-wrap justify-center"></div>

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
    .form-container{
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

    .thumbnail-preview{
    width: 19%;
    min-width: 200px;
    }

    .thumbnail-preview img{
    width: 100% !important;
    height: 100% !important;
    object-fit: cover;
    }

    #preview:not(:empty){
    margin-bottom: 30px;
    }

    .thumbnail-preview .file-delete{
    width: 24px;
    height: 24px;
    border-radius: 50%;
    background-color: rgba(0, 0, 0, 0.5);
    position: absolute;
    top: 10px;
    right: 10px;
    text-align: center;
    line-height: 24px;
    z-index: 1;
    cursor: pointer;
    color: #FFF;
    }

    .thumbnail-preview .file-delete span{
    display: block;
    transform: rotate(45deg);

    }
</style>
@endsection

@section('script_extra')
<script>
    const dt = new DataTransfer();

    $("#files").on('change', function(e){
        for(var i = 0; i < this.files.length; i++){
            const file = this.files.item(i);
            const fr = new FileReader();
                fr.onload = (ev) => {
                    let fileBloc=$('<div class="thumbnail-preview"></div>').append($("<img>", {src: fr.result, alt: file.name, style: 'height: 150px;width: auto'})),
                        fileName = $('<span />', {class: 'name', text: file.name});
                        fileBloc.append('<span class="file-delete"><span>+</span></span>').append(fileName);
                    $("#preview").append(fileBloc);
                };
            fr.readAsDataURL(file);
        };
        for (let file of this.files) {
            dt.items.add(file);
        }
        this.files = dt.files;
    });

    $('body').on('click', 'span.file-delete', function(){
        let name = $(this).next('span.name').text();
        $(this).parent().remove();
        for(let i = 0; i < dt.items.length; i++){
            if(name===dt.items[i].getAsFile().name){
                dt.items.remove(i);
                continue;
            }
        }
        document.getElementById('files').files=dt.files;
    });
</script>
@endsection
