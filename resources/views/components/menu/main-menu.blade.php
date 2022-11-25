@if(Auth::check() && Auth::user()->getRoleNames()[0] == 'admin')
        @include('components.menu.admin')
@else
        @if(Auth::check() && auth()->user()->hasVerifiedEmail())

                @include('components.menu.popup-links')

                @can('hard-shelled-mudcrabs')
                        <li class="{{ (request()->is('hard-shelled-mudcrabs*')) ? 'active' : '' }}">
                                <a href="{{url('hard-shelled-mudcrabs/')}}">Hard-shelled mudcrabs</a>
                        </li>
                @endcan

                @can('information')
                        <li class="{{ (request()->is('information*')) ? 'active' : '' }}">
                                <a href="{{url('information/')}}">Information</a>
                        </li>
                @endcan

                @can('where-to-buy')
                        <li class="{{ (request()->is('where-to-buy*')) ? 'active' : '' }}">
                                <a href="{{url('where-to-buy/')}}">Where to buy</a>
                        </li>
                @endcan

                @can('contact-us')
                        <li class="{{ (request()->is('contact-us*')) ? 'active' : '' }}">
                                <a href="{{url('contact-us')}}">Contact us</a>
                        </li>
                @endcan
                
                @can('become-distributor')
                        <li class="{{ (request()->is('become-distributor*')) ? 'active' : '' }}">
                                <a href="{{url('become-distributor')}}">Become a distributor</a>
                        </li>
                @endcan

                @can('become-investor')
                        <li class="{{ (request()->is('become-investor*')) ? 'active' : '' }}">
                                <a href="{{url('become-investor')}}">Become an investor</a>
                        </li>
                @endcan

                @can('more-about-soft-shell')
                        <li class="distributor-investor-menu {{ (request()->is('more-about-soft-shell*')) ? 'active' : '' }}">
                                <a href="{{url('more-about-soft-shell')}}">More About Soft-shell</a>
                        </li>
                @endcan

                @can('updates')
                        <li class="distributor-investor-menu {{ (request()->is('updates*')) ? 'active' : '' }}">
                                <a href="{{url('updates')}}">Updates</a>
                        </li>
                @endcan

                @can('supply-and-auction')
                        <li class="distributor-investor-menu {{ (request()->is('supply-and-auction*')) ? 'active' : '' }}">
                                <a href="{{url('supply-and-auction')}}">Supply & Auction</a>
                        </li>
                @endcan

                @can('distributor-picture-gallery')
                        <li class="distributor-investor-menu {{ (request()->is('distributor-picture-gallery*')) ? 'active' : '' }}">
                                <a href="{{url('distributor-picture-gallery')}}">Distributor Picture Gallery</a>
                        </li>
                @endcan
                @can('investor-picture-gallery')
                        <li class="distributor-investor-menu {{ (request()->is('investor-picture-gallery*')) ? 'active' : '' }}">
                                <a href="{{url('investor-picture-gallery')}}">Investor Picture Gallery</a>
                        </li>
                @endcan
                @can('future-ideas')
                        <li class="distributor-investor-menu {{ (request()->is('future-ideas*')) ? 'active' : '' }}">
                                <a href="{{url('more-about-soft-shell')}}">Future Ideas</a>
                        </li>
                @endcan

                @can('financial-updates')
                        <li class="distributor-investor-menu {{ (request()->is('financial-updates*')) ? 'active' : '' }}">
                                <a href="{{url('financial-updates')}}">Financial Updates</a>
                        </li>
                @endcan
        @endif
@endif