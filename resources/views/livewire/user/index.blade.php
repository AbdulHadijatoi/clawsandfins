<div>
    @if(session()->has('userchecked') && count(session()->get('userchecked',[])) > 0 )
    @if(!isset($userchecked))
        <div class="user-checked {{$userCheckedExpand?'expand-uc':''}}" onclick="$('.user-checked').toggleClass('expand-uc')" wire:click="$toggle('userCheckedExpand')">
            <div class="d-flex justify-between">
                <span class="text-white">{{count(session()->get('userchecked'))}} Selected</span>
                <a href="javascript:Livewire.emit('clearChecked');">Clear</a>
            </div>
        </div>
    @endif
    <div class="user-checked-container">
        @foreach(session()->get('userchecked') as $email)
        <span class="uc-item">{{$email}} <i class="fa fa-times" onclick="$(this).parent().remove()" wire:click="$emit('removeChecked','{{$email}}')"></i></span>
        @endforeach
    </div>
    @else
        @if(isset($userchecked))
        <span class="text-light no-user-selected">No user selected</span>
        @endif
    @endif

@if(!isset($userchecked))
    @foreach($users as $key => $value )
    @php
    $user=((object) $value);
    @endphp
        <div class="table-row d-flex">
            <div class="pr-10">
                <span class="checkbox align-in-center">
                    <input type="checkbox" class="checkbox-row" onchange="addChecked(this,'{{$user->email}}')" {{in_array($user->email, session()->get('userchecked',[]))?'checked':null}}>
                    <span class="material-icons">check</span>
                </span>
            </div>
            <div class="equal-width">
                <div class="d-flex">
                    <div><span class="user-avatar">{{Str::upper(substr($user->name, 0, 1))}}</span></div>
                    <div class="flex-column">
                        <span>{{$user->name}}</span>
                        <span class="font-size-12 text-light">{{$user->email}}</span>
                    </div>
                </div>
            </div>
            <div style="min-width: 100px">
                @foreach($user->roles as $role)
                    <span class="font-size-12 text-light">{{((object)$role)->name}}</span>
                @endforeach
            </div>
            <div class="d-flex" style="min-width: 100px">
                <div class="equal-width">
                    @if ($user->status == 1)
                        <span class="font-size-12 text-light">Approved</span>
                    @else
                        <span class="font-size-12 text-light">Pending</span>
                    @endif
                </div>
                <div class="more-menu">
                    <button onclick="openContextMenu($(this).parent())">
                        <span class="material-icons">
                            more_vert
                        </span>
                    </button>
                    <div class="context-menu">
                        <ul>
                            <li class="context-menu-item">Approved</li>
                            <li class="context-menu-item">Reject</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif
</div>

@if(!isset($userchecked))
<script>
    function addChecked(elm,email){
        Livewire.emit('addChecked',[
            (elm.checked?1:0),
            email
        ]);
    }
</script>
@endif