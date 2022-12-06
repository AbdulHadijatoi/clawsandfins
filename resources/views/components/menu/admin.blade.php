{{-- <li class="{{ (request()->is('admin/users*')) ? 'active' : '' }}">
    <a href="{{url('admin/users/')}}">Users</a>
</li> --}}
<li class="{{ (request()->is('admin/users/distributors*')) ? 'active' : '' }}">
    <a href="{{url('admin/users/distributors')}}">Distributors</a>
</li>
<li class="{{ (request()->is('admin/users/investors*')) ? 'active' : '' }}">
    <a href="{{url('admin/users/investors')}}">Investors</a>
</li>
<li class="{{ (request()->is('admin/distributor-picture-gallery*')) ? 'active' : '' }}">
    <a href="{{url('admin/distributor-picture-gallery')}}">Picture Gallery Distributor</a>
</li>
<li class="{{ (request()->is('admin/investor-picture-gallery*')) ? 'active' : '' }}">
    <a href="{{url('admin/investor-picture-gallery')}}">Picture Gallery Investor</a>
</li>
<li class="{{ (request()->is('admin/permissions*')) ? 'active' : '' }}">
    <a href="{{url('admin/permissions/')}}">Permissions</a>
</li>
<li class="{{ (request()->is('admin/pages-permission*')) ? 'active' : '' }}">
    <a href="{{url('admin/pages-permission')}}">Pages Permission</a>
</li>
<li class="{{ (request()->is('admin/roles*')) ? 'active' : '' }}">
    <a href="{{url('admin/roles/')}}">Roles</a>
</li>
<li class="{{ (request()->is('admin/send-email*')) ? 'active' : '' }}">
    <a href="{{url('admin/send-email')}}">Send Email</a>
</li>
<li class="{{ (request()->is('admin/change-credentials*')) ? 'active' : '' }}">
    <a href="{{url('admin/change-credentials')}}">Update Credentials</a>
</li>