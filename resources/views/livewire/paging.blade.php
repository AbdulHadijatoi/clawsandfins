<div class="d-flex justify-between page-navigation">
    {{-- @if($users) --}}
        {!! $users[0]->links() !!}
        <p class="text-light">Showing out of {{count($users[0])}} users</p>
    {{-- @endif --}}
</div>
