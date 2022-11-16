@php
$order = $sort_column[1]=='' ? 'ASC' : ($sort_column[1]== 'ASC' ? 'DESC' :  '' ) ;
$sort_icon = ($order=='ASC' || $order=='DESC') ? 'fa-caret-down' : 'fa-caret-up' ;
@endphp
<div>
    <form wire:submit.prevent="updateAll">
        <table class="table" wire:ignore  wire:key="edit-investor-{{ $iteration }}">
            <thead>
                <tr>
                    <th></th>
                    <th>
                        <div class="d-flex justify-between align-center @if($sort_column[0]=='first_name') sort-active @endif">
                            First Name
                            <span class="fa @if($sort_column[0]!='first_name') fa-caret-down @else {{$sort_icon}} @endif sort-order" wire:click="sort('first_name','{{$order}}')">
                        </div>
                    </th>
                    <th>
                        <div class="d-flex justify-between align-center @if($sort_column[0]=='last_name') sort-active @endif">
                            Last Name
                            <span class="fa @if($sort_column[0]!='last_name') fa-caret-down @else {{$sort_icon}} @endif sort-order" wire:click="sort('last_name','{{$order}}')">
                        </div>
                    </th>
                    <th>
                        <div class="d-flex justify-between align-center @if($sort_column[0]=='address') sort-active @endif">
                            Address
                            <span class="fa @if($sort_column[0]!='address') fa-caret-down @else {{$sort_icon}} @endif sort-order" wire:click="sort('address','{{$order}}')">
                        </div>
                    </th>
                    <th>
                        <div class="d-flex justify-between align-center @if($sort_column[0]=='size_of_investment') sort-active @endif">
                            Size of Investment
                            <span class="fa @if($sort_column[0]!='size_of_investment') fa-caret-down @else {{$sort_icon}} @endif sort-order" wire:click="sort('size_of_investment','{{$order}}')">
                        </div>
                    </th>
                    <th>
                        <div class="d-flex justify-between align-center @if($sort_column[0]=='special_skills') sort-active @endif">
                            Special Skills
                            <span class="fa @if($sort_column[0]!='special_skills') fa-caret-down @else {{$sort_icon}} @endif sort-order" wire:click="sort('special_skills','{{$order}}')">
                        </div>
                    </th>
                    <th></th>
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
                                <input type="text" wire:model.lazy="first_name.{{$user->id}}" placeholder="First Name">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <div class="input-text">
                                <input type="text" wire:model.lazy="last_name.{{$user->id}}" placeholder="Last Name">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <div class="input-text">
                                <input type="text" wire:model.lazy="address.{{$user->id}}" placeholder="Address" style="min-width: 300px">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <div class="input-text">
                                <input class="format-currency" type="text" wire:model.lazy="size_of_investment.{{$user->id}}" placeholder="Size of Investment">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <div class="input-text">
                                <input type="text" wire:model.lazy="special_skills.{{$user->id}}" placeholder="Special Skills">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="button-secondary px-5">
                            <button type="button" wire:click="update('{{$user->id}}');" onclick="showLoader()">UPDATE</button>
                        </div>
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
