<li class="{{ (request()->is('admin/users*')) ? 'active' : '' }}"><a href="{{url('admin/users/')}}">Users</a></li>
<li class="{{ (request()->is('admin/permissions*')) ? 'active' : '' }}"><a href="{{url('admin/permissions/')}}">Permissions</a></li>
<li class="{{ (request()->is('admin/roles*')) ? 'active' : '' }}"><a href="{{url('admin/roles/')}}">Roles</a></li>
<li class="{{ (request()->is('admin/send-notification*')) ? 'active' : '' }}"><a href="{{url('admin/send-notification')}}">Send notification</a></li>
<li class="{{ (request()->is('contact-us*')) ? 'active' : '' }}"><a href="{{url('contact-us')}}">Contact us</a></li>