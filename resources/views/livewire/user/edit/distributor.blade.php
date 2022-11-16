@php
$order = $sort_column[1]=='' ? 'ASC' : ($sort_column[1]== 'ASC' ? 'DESC' :  '' ) ;
$sort_icon = ($order=='ASC' || $order=='DESC') ? 'fa-caret-down' : 'fa-caret-up' ;
@endphp
<div>
    <form wire:submit.prevent="updateAll">
        <table class="table" wire:ignore  wire:key="edit-distributor-{{ $iteration }}">
            <thead>
                <tr>
                    <th></th>
                    <th>
                        <div class="d-flex justify-between align-center @if($sort_column[0]=='company_name') sort-active @endif">
                            Company Name
                            <span class="fa @if($sort_column[0]!='company_name') fa-caret-down @else {{$sort_icon}} @endif sort-order" wire:click="sort('company_name','{{$order}}')">
                        </div>
                    </th>
                    <th>
                        <div class="d-flex justify-between align-center @if($sort_column[0]=='contact_name') sort-active @endif">
                            Contact Name
                            <span class="fa @if($sort_column[0]!='contact_name') fa-caret-down @else {{$sort_icon}} @endif sort-order" wire:click="sort('contact_name','{{$order}}')">
                        </div>
                    </th>
                    <th>
                        <div class="d-flex justify-between align-center @if($sort_column[0]=='phone_number') sort-active @endif">
                            Phone
                            <span class="fa @if($sort_column[0]!='phone_number') fa-caret-down @else {{$sort_icon}} @endif sort-order" wire:click="sort('phone_number','{{$order}}')">
                        </div>
                    </th>
                    <th>
                        <div class="d-flex justify-between align-center @if($sort_column[0]=='website_url') sort-active @endif">
                            Website
                            <span class="fa @if($sort_column[0]!='website_url') fa-caret-down @else {{$sort_icon}} @endif sort-order" wire:click="sort('website_url','{{$order}}')">
                        </div>
                    </th>
                    <th>
                        <div class="d-flex justify-between align-center @if($sort_column[0]=='order_email') sort-active @endif">
                            Order Email
                            <span class="fa @if($sort_column[0]!='order_email') fa-caret-down @else {{$sort_icon}} @endif sort-order" wire:click="sort('order_email','{{$order}}')">
                        </div>
                    </th>
                    <th>
                        <div class="d-flex justify-between align-center @if($sort_column[0]=='country') sort-active @endif">
                            Country
                            <span class="fa @if($sort_column[0]!='country') fa-caret-down @else {{$sort_icon}} @endif sort-order" wire:click="sort('country','{{$order}}')">
                        </div>
                    </th>
                    <th>
                        <div class="d-flex justify-between align-center @if($sort_column[0]=='city') sort-active @endif">
                            City
                            <span class="fa @if($sort_column[0]!='city') fa-caret-down @else {{$sort_icon}} @endif sort-order" wire:click="sort('city','{{$order}}')">
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody >
                @foreach($users as $user)
                <tr id="tr-primary-{{$user->id}}">
                    <td style="width: 45px; max-width: 45px">
                        <div><span class="user-avatar">{{Str::upper(substr($user->name, 0, 1))}}</span></div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <div class="input-text">
                                <input type="text" wire:model.lazy="company_name.{{$user->id}}" placeholder="Company Name">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <div class="input-text">
                                <input type="text" wire:model.lazy="contact_name.{{$user->id}}" placeholder="Contact Name">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <div class="input-text d-flex align-center">
                                <span id="phone-code-{{$user->id}}" class="text-light phone-code">{{$dial_code[$user->id]}}</span>
                                <input type="text" wire:model.lazy="phone_number.{{$user->id}}" placeholder="Phone Number">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <div class="input-text">
                                <input type="text" wire:model.lazy="website_url.{{$user->id}}" placeholder="Website">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <div class="input-text">
                                <input type="text" wire:model.lazy="order_email.{{$user->id}}" placeholder="Order Email">
                            </div>
                        </div>
                    </td>
                    <td style="width: 150px; max-width: 150px">
                        <div class="d-flex">
                            <div class="input-text">
                                <select id="country-dropdown-{{$user->id}}" data-id="{{$user->id}}" class="countries"  style="outline:none">
                                    <option hidden value="{{$country[$user->id]}}">{{$country_name[$user->id]}}</option>
                                    
                                </select>
                            </div>
                        </div>
                    </td>
                    <td style="width: 150px; max-width: 150px">
                        <div class="d-flex">
                            <div class="input-text relative">
                                <select id="city-dropdown-{{$user->id}}" data-id="{{$user->id}}" class="cities" wire:model.lazy="city.{{$user->id}}" style="outline:none">
                                    <option value="{{$city[$user->id]}}">{{$city_name[$user->id] ?? '-- City --'}}</option>
                                    
                                </select>
                                <div id="loading-{{$user->id}}" class="absolute top-0 mt-10 ml-5" style="display: none">
                                    <div class="lds-dual-ring"></div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr id="tr-detail-{{$user->id}}" class="tr-bottom-border">
                    <td></td>
                    <td colspan="7">
                        <div class="tr-detail mb-10">
                            <div class="d-flex full-width">
                                <div class="d-flex equal-width flex-column">
                                    <div class="px-10 pt-10">
                                        <label class="no-wrap">Postal Address</label>
                                    </div>
                                    <div class="input-textarea">
                                        <textarea wire:model.lazy="postal_address.{{$user->id}}" placeholder="Postal Address" ></textarea>
                                    </div>
                                </div>
                                <div class="d-flex equal-width flex-column">
                                    <div class="px-10 pt-10">
                                        <label class="no-wrap">Visiting Address</label>
                                    </div>
                                    <div class="input-textarea">
                                        <textarea wire:model.lazy="visiting_address.{{$user->id}}" placeholder="Visiting Address" ></textarea>
                                    </div>
                                </div>
                            {{-- </div>
                            <div class="d-flex full-width"> --}}
                                <div class="d-flex flex-column">
                                    <div class="px-10 pt-10">
                                        <label class="no-wrap">Location Disclose</label>
                                    </div>
                                    <div class="d-flex-important align-center justify-center">
                                        <input wire:model.lazy="location_disclose.{{$user->id}}" type="checkbox" value="on">
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="px-10 pt-10">
                                        <label class="no-wrap">Location is Correct</label>
                                    </div>
                                    <div class="d-flex-important align-center justify-center">
                                        <input wire:model.lazy="location_is_correct.{{$user->id}}" type="checkbox" value="yes">
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="px-10 pt-10">
                                        <label class="no-wrap">Need Support</label>
                                    </div>
                                    <div class="d-flex-important align-center justify-center">
                                        <input wire:model.lazy="need_support.{{$user->id}}" type="checkbox">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex full-width justify-center align-center justify-between">
                            <div class="dropdown-button-group d-flex" @if($need_support[$user->id]=='') disabled @endif>
                                <div class="button-primary">
                                    <button class="d-flex"><span class="material-icons">support_agent</span>&nbsp;Need Support</button>
                                </div>
                                <div class="button-primary dropdown-button">
                                    <button><span class="fa fa-caret-down"></span></button>
                                    <ul tabindex="-1">
                                        <li><a href="tel:{{$user->distributor->getCountry->dial_code}}{{$user->distributor->phone_number}}">Call</a></li>
                                        <li><a href="mailto:{{$user->email}}">Send Email</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex align-center">
                                <div id="location-set-{{$user->id}}" class="d-flex @if($latitude[$user->id] != 0 && $longitude[$user->id]) location-set @endif">
                                    <span id="location-message-{{$user->id}}" class="location-message text-light"><em>Location not set</em></span>
                                    <div class="button-primary px-5 remove-map-location" style="display: none">
                                        <button type="button" data-id="{{$user->id}}">Remove Location</button>
                                    </div>
                                </div>
                                <div class="button-primary px-5">
                                    <button class="map-location" type="button" data-id="{{$user->id}}">Map Location</button>
                                </div>
                                <div class="button-secondary px-5">
                                    <button type="button" wire:click="update('{{$user->id}}');" onclick="showLoader()">UPDATE</button>
                                </div>
                            </div>
                            <input type="hidden" id="latitude-{{$user->id}}" wire:model.lazy="latitude.{{$user->id}}">
                            <input type="hidden" id="longitude-{{$user->id}}" wire:model.lazy="longitude.{{$user->id}}">
                        </div>
                        @if($user->distributor->created_at != $updated_at[$user->id])
                        <div class="text-right mb-10 p-5">
                            <span class="last-updated text-light">Last updated {{$updated_at[$user->id]}}</span>
                        </div>
                        @else
                        <div class="mb-20"></div>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex p-20 justify-center">
            <div class="button-secondary px-5">
                <button onclick="showLoader()">UPDATE ALL</button>
            </div>
        </div>
    </form>
</div>
