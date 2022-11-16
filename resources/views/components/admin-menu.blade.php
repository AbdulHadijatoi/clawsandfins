<li class="{{ (request()->is('admin/users/distributors*')) ? 'active' : '' }}"><a href="{{url('admin/users/distributors')}}">Distributors</a></li>
<li class="{{ (request()->is('admin/users/investors*')) ? 'active' : '' }}"><a href="{{url('admin/users/investors')}}">Investors</a></li>
<li class="{{ (request()->is('admin/permissions*')) ? 'active' : '' }}"><a href="{{url('admin/permissions/')}}">Permissions</a></li>
<li class="{{ (request()->is('admin/roles*')) ? 'active' : '' }}"><a href="{{url('admin/roles/')}}">Roles</a></li>
<li class="{{ (request()->is('admin/send-email*')) ? 'active' : '' }}"><a href="{{url('admin/send-email')}}">Send Email</a></li>