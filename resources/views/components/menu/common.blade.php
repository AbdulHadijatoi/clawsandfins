<li class="{{ (request()->is('hard-shelled-mudcrabs*')) ? 'active' : '' }}">
    <a href="{{url('hard-shelled-mudcrabs/')}}">Hard-shelled mudcrabs</a>
</li>
<li class="{{ (request()->is('information*')) ? 'active' : '' }}">
    <a href="{{url('information/')}}">Information</a>
</li>
<li class="{{ (request()->is('where-to-buy*')) ? 'active' : '' }}">
    <a href="{{url('where-to-buy/')}}">Where to buy</a>
</li>
<li class="{{ (request()->is('contact-us*')) ? 'active' : '' }}">
    <a href="{{url('contact-us')}}">Contact us</a>
</li>