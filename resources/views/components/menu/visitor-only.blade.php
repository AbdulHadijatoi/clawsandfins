<li class="{{ (request()->is('become-distributor*')) ? 'active' : '' }}">
    <a href="{{url('become-distributor')}}">Become a distributor</a>
</li>
<li class="{{ (request()->is('become-investor*')) ? 'active' : '' }}">
    <a href="{{url('become-investor')}}">Become an investor</a>
</li>
