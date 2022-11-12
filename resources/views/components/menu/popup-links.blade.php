@if(request()->is('soft-shelled-mudcrabs*'))
        <li class="sub-menu display-block">
                <ul>
                        <li id="frozen-whole">
                                <a class="popup-page-url" parent-id="frozen-whole"
                                href="{{url('soft-shelled-mudcrabs/pages/frozen-whole')}} #content">Frozen - Whole</a>
                        </li>
                        <li id="frozen-cleaned">
                                <a class="popup-page-url" parent-id="frozen-cleaned"
                                href="{{url('soft-shelled-mudcrabs/pages/frozen-cleaned')}} #content">Frozen - Cleaned</a>
                        </li>
                        <li id="alive">
                                <a class="popup-page-url" parent-id="alive"
                                href="{{url('soft-shelled-mudcrabs/pages/alive')}} #content">Alive</a>
                        </li>
                        <li id="frozen-deepfried"><a class="popup-page-url" parent-id="frozen-deepfried"
                                href="{{url('soft-shelled-mudcrabs/pages/frozen-deepfried')}} #content">Frozen - Deep Fried</a>
                        </li>
                </ul>
        </li>
@endif