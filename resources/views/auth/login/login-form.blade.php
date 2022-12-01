<form action="{{route('login.post')}}" method="post">
    @csrf
    <div class="d-flex full-width">
        <div class="input-text">
            <input type="email" id="email" placeholder="Email" style="box-shadow: unset;" name="email"
                value="{{old('email')}}">
        </div>
    </div>
    <div class="d-flex full-width">
        <div class="input-text">
            <input type="password" id="password" placeholder="Password" style="box-shadow: unset;" name="password">
        </div>
    </div>
    @if(count($errors))
    @foreach($errors->all() as $error)
    <div class="info primary-warning d-flex-important">
        <label>{{ $error }}</label>
    </div>
    @endforeach
    @endif
    @if(session('error'))
    <div class="info primary-warning d-flex-important">
        <label>{{session('error')}}</label>
    </div>
    @endif
    @if(session('success'))
    <div class="info primary-info d-flex-important">
        <label>{{session('success')}}</label>
    </div>
    @endif
    <div class="d-flex full-width flex-column px-5">
        <div>
            <div class="d-flex-important align-center">
                <a href="{{route('forgot-password')}}">Forgot password?</a>
            </div>
        </div>
    </div>
    <div class="d-flex full-width justify-center">
        <div class="button-primary mb-10">
            <button type="submit">LOGIN</button>
        </div>
    </div>
</form>
