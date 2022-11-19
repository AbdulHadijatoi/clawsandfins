@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Page Permissions</h2>
        <div class="lead">
            Manage page permissions by role here.
        </div>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>
        <form action="{{route('permissions.savePagePermissions')}}" method="POST">
            @csrf
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Slug</th> 
                    <th scope="col">Investor</th> 
                    <th scope="col">Investor<br>Candidate</th> 
                    <th scope="col">Distributor</th> 
                    <th scope="col">Distributor<br>Candidate</th> 
                </tr>
                </thead>
                <tbody>
                    
                    @foreach($pages as $page)
                        <tr>
                            <td>{{ $page->name }}</td>
                            <td>{{ $page->slug }}</td>
                            <td>
                                <input type="checkbox" name="" value=""/>
                            </td>
                            <td>
                                <input type="checkbox" name="" value=""/>
                            </td>
                            <td>
                                <input type="checkbox" name="" value=""/>
                            </td>
                            <td>
                                <input type="checkbox" name="" value=""/>
                            </td>
                            {{-- <td>
                                {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', $permission->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                {!! Form::close() !!}
                            </td> --}}
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
            <button type="submit">Save</button>
        </form>
    </div>
@endsection