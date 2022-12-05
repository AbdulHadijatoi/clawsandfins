<div>
    @if(session()->has('userchecked') && count($usercheckedValue) > 0 )
    @if(!isset($userchecked))
        <div class="user-checked {{$userCheckedExpand?'expand-uc':''}}" onclick="$('.user-checked').toggleClass('expand-uc')" wire:click="$toggle('userCheckedExpand')">
            <div class="d-flex justify-between">
                <span class="text-white">{{count($usercheckedValue)}} Selected</span>
                <a href="javascript:Livewire.emit('clearChecked');event.stopPropagation()">Clear</a>
            </div>
        </div>
    @endif
    <div class="user-checked-container">
        @foreach($usercheckedValue as $email)
        <span class="uc-item">{{$email}} <i class="fa fa-times" onclick="$(this).parent().remove()" wire:click="$emit('removeChecked','{{$email}}')"></i></span>
        @endforeach
    </div>
    @else
        @if(isset($userchecked))
        <span class="text-light no-user-selected">No user selected</span>
        @endif
    @endif

@if(!isset($userchecked))
    <div id="scroll-body" class="overflow-x-auto">
    @foreach($users as $key => $value )
    @php
    $user=((object) $value);
    //$isDistributor=((object) $user->roles[0])->name =='distributor';
    $distributor= $user->distributor ? ((object) $user->distributor) : null;
    $investor= $user->investor ? ((object) $user->investor) : null;
    @endphp
        <div data-instance="{{ $iteration }}">
            {{-- <div class="table-row table-row-hover d-flex" wire:ignore wire:key="distributor{{$user->id}}"> --}}
            <div class="table-row d-flex" wire:key="distributor{{$user->id}}">
                <div class="fixed-left pr-10" style="min-width: 30px">
                    <span class="checkbox align-in-center">
                        <input type="checkbox" class="checkbox-row" onchange="addChecked(this,'{{$user->email}}')" {{in_array($user->email, $usercheckedValue)?'checked':null}}>
                        <span class="material-icons">check</span>
                    </span>
                </div>
                <div class="equal-width min-max-width-250">
                    <div class="d-flex">
                        <div><span class="user-avatar">{{Str::upper(substr($user->name, 0, 1))}}</span></div>
                        <div class="flex-column">
                            <span>{{$user->name}}</span>
                            <span class="font-size-12 text-light">{{ $user->email }}</span>
                        </div>
                    </div>
                </div>
                @if($distributor)
                @php
                $country=$distributor->getCountry ?? ((object)$distributor->get_country);
                $city=$distributor->getCity ?? ((object)$distributor->get_city);
                @endphp
                <div class="px-10 min-max-width-150">
                    <span class="font-size-12 text-light">{{$distributor->contact_name}}</span>
                </div>
                <div class="px-10 min-max-width-150">
                    <span class="font-size-12 text-light">{{($country->dial_code??''). ($distributor->phone_number??'')}}</span>
                </div>
                <div class="px-10 min-max-width-200">
                    <a href="mailto:{{$distributor->order_email}}"><span class="font-size-12 text-gold">{{$distributor->order_email}}</span></a>
                </div>
                <div class="px-10 min-max-width-100">
                    <span class="font-size-12 text-light">{{$country->name??''}}</span>
                </div>
                <div class="px-10 min-max-width-100">
                    <span class="font-size-12 text-light">{{$city->name??''}}</span>
                </div>
                <div class="px-10 min-max-width-100">
                    @if($distributor->latitude && $distributor->longitude)
                    <a href="https://maps.google.com/?q={{$distributor->latitude}},{{$distributor->longitude}}" tooltip="Location" target="_blank">
                        <span class="material-icons text-gold">
                            map
                        </span>
                    </a>
                    @else
                    <span class="font-size-12 text-light"><em>Not set</em></span>
                    @endif
                </div>
                <div class="px-10 min-max-width-200">
                    @php
                    $website_url = $distributor->website_url;
                    $url = parse_url($website_url);
                    if(!isset($url['scheme'])){
                        $website_url = 'http://' . $url['path'];
                    }
                    @endphp
                    <a href="{{$website_url}}" target="blank"><span class="font-size-12 text-gold">{{$distributor->website_url}}</span></a>
                </div>
                <div class="px-10 min-max-width-150">
                    <span class="font-size-12 text-light">{{$distributor->postal_address}}</span>
                </div>
                <div class="px-10 min-max-width-150">
                    <span class="font-size-12 text-light">{{$distributor->visiting_address}}</span>
                </div>
                <div class="px-10 min-max-width-150">
                    <div class="equal-width"><span class="fa fa-{{$distributor->location_disclose=='on'?'check-circle':'times-circle'}}"></span></div>
                </div>
                <div class="px-10 min-max-width-150">
                    <div class="equal-width"><span class="fa fa-{{$distributor->location_is_correct=='yes'?'check-circle':'times-circle'}}"></span></div>
                </div>
                <div class="px-10 min-max-width-150">
                    @if ($distributor->need_support==1 || $distributor->need_support=='on')
                    <div class="dropdown-button-group d-flex">
                        <div class="button-primary">
                            <button class="d-flex">Yes</button>
                        </div>
                        <div class="button-primary dropdown-button">
                            <button><span class="fa fa-caret-down"></span></button>
                            <ul class="d-flex" tabindex="-1">
                                <li><a href="tel:{{($country->dial_code??'').($distributor->phone_number??'')}}">Call</a>
                                </li>
                                <li><a href="mailto:{{$distributor->order_email}}">Send Email</a></li>
                            </ul>
                        </div>
                    </div>
                    @else
                    <span class="font-size-12 text-light">No</span>
                    @endif
                </div>
                @endif
                @if($investor)
                <div class="equal-width">
                    <span class="font-size-12 text-light">{{$investor->address}}</span>
                </div>
                <div class="px-10 min-max-width-200">
                    <span class="font-size-12 text-light full-width inline-block font-weight-bold">{{ str_replace(' ',',',$investor->size_of_investment).' USD'}}</span>
                </div>
                <div class="px-10 min-max-width-200">
                    <span class="font-size-12 text-light">{{$investor->special_skills}}</span>
                </div>
                @endif
                <div class="d-flex min-max-width-100">
                    <div class="fixed-right d-flex">
                        <div class="equal-width">
                            <div class="inline-block">
                                <div class="switch-button @if ($user->status == 0) candidate @else distributor @endif d-flex" onclick="event.stopPropagation()">
                                    <span class="font-size-12 text-light" wire:click="$emit('{{(($user->status == 0)?'approve':'candidate')}}','{{$user->id}}')">{{(($user->status == 1)?(($investor)?'Investor':'Distributor'):'Candidate')}}</span>
                                    {{-- <span class="font-size-12 text-light approve-btn @if ($user->status == 1) approved @endif" wire:click="$emit('approve','{{$user->id}}')">Distributor</span> --}}
                                </div>
                            </div>
                            {{-- @if ($user->status == 1)
                                <span class="font-size-12 text-light approved">Approved</span>
                            @elseif ($user->status == 2)
                                <span class="font-size-12 text-light rejected">Rejected</span>
                            @else
                                <span class="font-size-12 text-light">Candidate</span>
                            @endif --}}
                        </div>
                        {{-- <div class="more-menu">
                            <button onclick="event.stopPropagation();openContextMenu($(this).parent())">
                                <span class="material-icons">
                                    more_vert
                                </span>
                            </button>
                            <div class="context-menu">
                                <ul>
                                    @if ($user->status != 1 || $user->status == 2)
                                    <li class="context-menu-item" wire:click="$emit('approve','{{$user->id}}')">Approve</li>
                                    @endif
                                    @if ($user->status != 2 || $user->status == 1)
                                    <li class="context-menu-item" wire:click="$emit('reject','{{$user->id}}')">Reject</li>
                                    @endif
                                    <li class="context-menu-item" wire:click="$emit('sendEmail','{{$user->id}}')">Send Email</li>
                                    <li class="context-menu-item" onclick="location.href='{{url('account/'.$user->id)}}'">Edit</li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                </div>
                {{-- @if($distributor)
                <div class="table-row-detail" onclick="event.stopPropagation()">
                    <div>
                        <div class="table-header d-flex">
                            <div class="equal-width">Postal Address</div>
                            <div class="equal-width">Website Url</div>
                            <div class="equal-width">Order Email</div>
                        </div>
                        <div class="table-row d-flex">
                            <div class="equal-width"><span class="font-size-12">{{$distributor->postal_address}}</span></div>
                            <div class="equal-width"><span class="font-size-12">{{$distributor->website_url}}</span></div>
                            <div class="equal-width"><span class="font-size-12">{{$distributor->order_email}}</span></div>
                        </div>
                    </div>
                    <div>
                        <div class="table-header d-flex">
                            <div class="equal-width">Location Disclose</div>
                            <div class="equal-width">Location is Correct</div>
                            <div class="equal-width">Need Support</div>
                        </div>
                        <div class="table-row d-flex">
                            <div class="equal-width"><span class="fa fa-{{$distributor->location_disclose=='on'?'check-circle':'times-circle'}}"></span></div>
                            <div class="equal-width"><span class="fa fa-{{$distributor->location_is_correct=='yes'?'check-circle':'times-circle'}}"></span></div>
                            <div class="equal-width"><span class="fa fa-{{$distributor->need_support==1?'check-circle':'times-circle'}}"></span></div>
                        </div>
                    </div>
                </div>
                @endif --}}
            </div>
        </div>
    @endforeach
    </div>
    <div class="d-flex justify-between align-center page-navigation">
        {!! $userPaginate->links() !!}
        <p class="text-light">Showing out of {{count($users)}} users</p>
    </div>
@endif
</div>

@push('scripts')
@if(!isset($userchecked))
<script>
    function addChecked(elm,email){
        Livewire.emit('addChecked',[
            (elm.checked?1:0),
            email
        ]);
    }

    // $('body').on('click','.table-row-hover',function(){
    //     if(!$(this).hasClass('show-table-row-detail')){
    //         $('.table-row-hover').removeClass('show-table-row-detail');
    //     }
    //     $(this).toggleClass('show-table-row-detail');
    // })
</script>
@endif
@endpush
