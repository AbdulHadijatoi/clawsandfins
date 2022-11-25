@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Page Permissions</h2>
        <div class="lead">
            Manage page permissions by role.
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
                    {{-- <th scope="col">Slug</th>  --}}
                    @if($roles)
                        @foreach ($roles as $role)
                            @if($role->name == 'admin')
                                @continue
                            @endif
                            <th scope="col" style="max-width: 120px;">{{ucwords(strtolower($role->name))}}</th> 
                        @endforeach
                    @endif
                </tr>
                </thead>
                <tbody>
                    
                    @foreach($pages as $page)
                        <tr>
                            <td>{{ $page->name }}</td>
                            {{-- <td>{{ $page->slug }}</td> --}}
                            @foreach ($roles as $role)    
                                @if($role->name == 'admin')
                                    @continue
                                @endif
                                <td style="text-align: center">
                                    <input type="checkbox" name="{{$page->slug .'_'. $role->name}}" @if($role->hasPermissionTo($page->slug)) checked @endif/>
                                </td>
                            @endforeach
                        </tr>
                        
                    @endforeach
                    
                </tbody>
            </table>
            <button type="submit">Save</button>
        </form>
    </div>
@endsection