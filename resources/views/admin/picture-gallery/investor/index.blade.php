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
             <th width="1%">No</th>
             <th>Preview</th>
             <th width="3%" colspan="3">Action</th>
          </tr>
            {{-- @foreach ($roles as $key => $role) --}}
            <tr>
                <td>1</td>
                <td>picture/directory.jpg</td>

                <td>
                    {!! Form::open(['method' => 'GET','route' => ['investor-picture-gallery.show', 9999],'style'=>'display:inline']) !!}
                    {!! Form::submit('Show', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                    {!! Form::open(['method' => 'DELETE','route' => ['investor-picture-gallery.destroy', 9999],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            {{-- @endforeach --}}
        </table>

        <div class="d-flex">
            {{-- {!! $roles->links() !!} --}}
        </div>

    </div>
@endsection