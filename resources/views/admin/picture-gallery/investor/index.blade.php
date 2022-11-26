@extends('layouts.app-master')

@section('content')

    <div class="bg-light p-4 rounded">
        <h1>Investor Picture Gallery</h1>
        <div class="lead">
            Manage picture gallery for investor.
            <a href="{{ route('investor-picture-gallery.create') }}" class="btn btn-primary btn-sm float-right">Add picture</a>
        </div>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-bordered">
          <tr>
             <th>No</th>
             <th>Preview</th>
             <th>Action</th>
          </tr>
            {{-- @foreach ($roles as $key => $role) --}}
            @if($pictures)
                @foreach ($pictures as $pic)
                    <tr>
                        <td>{{$pic->id}}</td>
                        <td>{{$pic->name}}</td>

                        <td>
                            {{-- {!! Form::open(['method' => 'GET','route' => ['investor-picture-gallery.show', 9999],'style'=>'display:inline']) !!}
                            {!! Form::submit('Show', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!} --}}
                            {!! Form::open(['method' => 'DELETE','route' => ['investor-picture-gallery.destroy', $pic->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            @endif
            {{-- @endforeach --}}
        </table>

        <div class="d-flex">
            {{-- {!! $roles->links() !!} --}}
        </div>

    </div>
@endsection