<div class="user-list-container {{($users==null || count(($users??0))==0)?'display-none':''}}">
@if($users)
    @foreach($users as $key => $value )
    <div class="user-item d-flex" data-email="{{$value->email}}">
        <div class="info">
            {{$value->name}}
            <span>{{$value->email}}</span>
        </div>
        <div class="role">{{$value->roles[0]->name}}</div>
    </div>
    @endforeach
@endif
</div>