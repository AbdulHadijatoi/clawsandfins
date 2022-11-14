<li class="{{ (request()->is('admin/users*')) ? 'active' : '' }}">
    <a href="{{url('admin/users/')}}">Users</a>
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