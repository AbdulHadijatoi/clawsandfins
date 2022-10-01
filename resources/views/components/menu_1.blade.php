<li class="{{ (request()->is('soft-shelled-mudcrabs*')) ? 'active' : '' }}"><a href="{{url('soft-shelled-mudcrabs/')}}">Soft-shelled mudcrabs</a></li>
<li class="{{ (request()->is('hard-shelled-mudcrabs*')) ? 'active' : '' }}"><a href="{{url('hard-shelled-mudcrabs/')}}">Hard-shelled mudcrabs</a></li>
<li class="{{ (request()->is('information*')) ? 'active' : '' }}"><a href="{{url('information/')}}">Information</a></li>
<li class="{{ (request()->is('where-to-buy*')) ? 'active' : '' }}"><a href="{{url('where-to-buy/')}}">Where to buy</a></li>
<li class="{{ (request()->is('contact-us*')) ? 'active' : '' }}"><a href="{{url('contact-us')}}">Contact us</a></li>
<li class="distributor-investor-menu display-none {{ (request()->is('updates*')) ? 'active' : '' }}"><a href="{{url('updates')}}">Updates</a></li>
<li class="distributor-investor-menu display-none {{ (request()->is('picture-gallery*')) ? 'active' : '' }}"><a href="{{url('picture-gallery')}}">Picture Gallery</a></li>
<li class="distributor-investor-menu display-none {{ (request()->is('future-ideas*')) ? 'active' : '' }}"><a href="{{url('future-ideas')}}">Future Ideas</a></li>
<li class="distributor-investor-menu display-none {{ (request()->is('financial-updates*')) ? 'active' : '' }}"><a href="{{url('financial-updates')}}">Financial Updates</a></li>
@if(!Auth::check())
    <li class="{{ (request()->is('become-distributor*')) ? 'active' : '' }}"><a href="{{url('become-distributor')}}">Become a distributor</a></li>
    <li class="{{ (request()->is('become-investor*')) ? 'active' : '' }}"><a href="{{url('become-investor')}}">Become an investor</a></li>
@endif