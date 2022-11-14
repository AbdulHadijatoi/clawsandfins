@if(Auth::check() && Auth::user()->getRoleNames()[0] == 'admin')
        @include('components.menu.admin')
@else
        @include('components.menu.popup-links')
        
        @include('components.menu.common')
        
        @if(!Auth::check())
                @include('components.menu.visitor-only')
        @endif

        @if(Auth::check() && auth()->user()->hasVerifiedEmail())
                {{-- @if(Auth::user()->hasPermissionTo('view more-about-soft-shell')) --}}
                        <li class="distributor-investor-menu {{ (request()->is('more-about-soft-shell*')) ? 'active' : '' }}">
                                <a href="{{url('more-about-soft-shell')}}">More About Soft-shell</a>
                        </li>
                {{-- @endif --}}
                <li class="distributor-investor-menu {{ (request()->is('updates*')) ? 'active' : '' }}">
                        <a href="{{url('updates')}}">Updates</a>
                </li>
                <li class="distributor-investor-menu {{ (request()->is('supply-and-auction*')) ? 'active' : '' }}">
                        <a href="{{url('supply-and-auction')}}">Supply & Auction</a>
                </li>
                <li class="distributor-investor-menu {{ (request()->is('picture-gallery*')) ? 'active' : '' }}">
                        <a href="{{url('picture-gallery')}}">Picture Gallery</a>
                </li>
                {{-- @if(Auth::user()->getRoleNames()[0] == 'investor') --}}
                        <li class="distributor-investor-menu {{ (request()->is('future-ideas*')) ? 'active' : '' }}">
                                <a href="{{url('future-ideas')}}">Future Ideas</a>
                        </li>
                        <li class="distributor-investor-menu {{ (request()->is('financial-updates*')) ? 'active' : '' }}">
                                <a href="{{url('financial-updates')}}">Financial Updates</a>
                        </li>
                {{-- @endif --}}
        @endif
@endif