@if(Session::get('success', false))
    <?php $data = Session::get('success'); ?>
    @if (is_array($data))
        @foreach ($data as $msg)
            <div class="info primary-info d-flex-important">
                <label>
                    <i class="fa fa-check"></i>
                    {{ $msg }}
                </label>
            </div>
        @endforeach
    @else
        <div class="info primary-info d-flex-important">
            <label>
                <i class="fa fa-check"></i>
                {{ $data }}
            </label>
        </div>
    @endif
@endif
