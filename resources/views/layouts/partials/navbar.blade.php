<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img src="{{asset('images/logo.png')}}" width="150" alt="logo"/>
        </a>
  
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          {{-- <li><a href="{{ url('/') }}" class="nav-link px-2 text-white">Home</a></li> --}}
          @auth
            @role('admin')
            @include('components.menu.admin')
            @endrole
          @endauth
        </ul>
  
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>
  
        @auth
          {{auth()->user()->name}}&nbsp;
          <div class="text-end">
            <a href="{{ route('logout') }}" class="btn btn-outline-light me-2">Logout</a>
          </div>
        @endauth
  
        @guest
          <div class="text-end">
            <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a>
          </div>
        @endguest
      </div>
    </div>
  </header>