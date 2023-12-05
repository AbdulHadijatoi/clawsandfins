@if (request()->is('boxpromo*') || request()->is('timeline*') || request()->is('cv*') || request()->is('customer-letter-of-intent*'))
        <li class="{{ (request()->is('boxpromo*')) ? 'active' : '' }}">
                <a href="{{url('boxpromo/')}}">Introduction</a>
                <li class="sub-menu display-block">
                        <ul>
                                <li class="{{ (request()->is('boxpromo/long-version*')) ? 'active' : '' }}">
                                        <a href="{{url('boxpromo/long-version')}}"></a>
                                </li>
                                <li class="{{ (request()->is('boxpromo/offerings*')) ? 'active' : '' }}">
                                        <a href="{{url('boxpromo/offerings')}}">Get your own boxes</a>
                               </li>
                                
                               <li class="{{ (request()->is('timeline*')) ? 'active' : '' }}">
                                <a href="{{url('timeline/')}}">Timeline with photos</a>
                                 </li>
                                 
                                <li class="{{ (request()->is('boxpromo/important-notes*')) ? 'active' : '' }}">
                                        <a href="{{url('boxpromo/important-notes')}}">Important notes</a>
                                </li>
                               
                            <!--<li class="{{ (request()->is('boxpromo/time-plan*')) ? 'active' : '' }}">
                                        <a href="{{url('boxpromo/time-plan')}}">Time plan</a>
                                </li>-->
                                <li class="{{ (request()->is('boxpromo/crab-box-promo-video*')) ? 'active' : '' }}">
                                        <a href="{{url('boxpromo/crab-box-promo-video')}}">Explanatory video</a>
                                </li>
                                <li class="{{ (request()->is('boxpromo/video-for-distributers*')) ? 'active' : '' }}">
                                        <a href="{{url('boxpromo/video-for-distributers')}}">Video for distributors</a>
                                </li>
                               
                                <li class="{{ (request()->is('boxpromo/who-am-i*')) ? 'active' : '' }}">
                                        <a href="{{url('boxpromo/who-am-i')}}">Who is Peter?</a>
                                </li>
                              
                                <li class="{{ (request()->is('boxpromo/QA*')) ? 'active' : '' }}">
                                        <a href="{{url('boxpromo/QA')}}">Q&A</a>
                                </li>
                        </ul>
                </li>
        </li>
        
        <li class="{{ (request()->is('customer-letter-of-intent*')) ? 'active' : '' }}">
                <a href="{{url('customer-letter-of-intent')}}">Distributor request (PDF)</a>
        </li>
        {{-- cv_portfolio_peter_persson_2023.pdf --}}
        <li class="{{ (request()->is('cv*')) ? 'active' : '' }}">
                <a href="{{url('cv/')}}">Peter’s CV (PDF)</a>
        </li>
        <li>
                <a href="{{url('storage/docs/box_rental_calculator_and_very_simple_project_budget.xlsx')}}" target="_blank">Calculate your earnings (Excel)</a>
        </li>
        <li>
                <a href="{{url('storage/docs/market_size_reseach_1_ssc.xlsx')}}" target="_blank">Market research notes and links (Excel)</a>
        </li>

@elseif(Auth::check() && Auth::user()->getRoleNames()[0] == 'admin')
        @include('components.menu.admin')
@else
        @if(Auth::check())

                @can('soft-shelled-mudcrabs')
                        <li class="{{ (request()->is('soft-shelled-mudcrabs*')) ? 'active' : '' }}">
                                <a href="{{url('soft-shelled-mudcrabs/')}}">Soft-shelled mud crabs</a>
                        </li>
                @endcan
                @include('components.menu.popup-links')
                @can('hard-shelled-mudcrabs')
                        <li class="{{ (request()->is('hard-shelled-mudcrabs*')) ? 'active' : '' }}">
                                <a href="{{url('hard-shelled-mudcrabs/')}}">Hard-shelled mud crabs</a>
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
                                <a href="{{url('more-about-soft-shell')}}">More about soft-shell</a>
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
                                <a href="{{url('distributor-picture-gallery')}}">Distributor picture gallery</a>
                        </li>
                @endcan
                @can('investor-picture-gallery')
                        <li class="distributor-investor-menu {{ (request()->is('investor-picture-gallery*')) ? 'active' : '' }}">
                                <a href="{{url('investor-picture-gallery')}}">Investor picture gallery</a>
                        </li>
                @endcan
                @can('future-ideas')
                        <li class="distributor-investor-menu {{ (request()->is('future-ideas*')) ? 'active' : '' }}">
                                <a href="{{url('future-ideas')}}">Future ideas</a>
                        </li>
                @endcan

                @can('financial-updates')
                        <li class="distributor-investor-menu {{ (request()->is('financial-updates*')) ? 'active' : '' }}">
                                <a href="{{url('financial-updates')}}">Financial updates</a>
                        </li>
                @endcan
        @endif
@endif