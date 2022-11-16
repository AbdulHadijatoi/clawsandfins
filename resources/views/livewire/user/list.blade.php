<div class="user-list-container {{($users==null || count(($users??0))==0)?'display-none':''}}">
@if($users)
    @foreach($users as $key => $value )
    <div class="user-item d-flex" data-email="{{$value->email}}">
        <div class="info">
            {{$value->name}}
            <span>{{$value->email}}</span>
        </div>
        <div class="role">{{ucwords($value->roles[0]->name)}} {{$value->status==0?'candidate':null}}</div>
    </div>
    @endforeach
@endif
</div>