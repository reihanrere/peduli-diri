<nav class="navbar navbar-expand-lg navbar-light foi-navbar">
    @if (Route::getCurrentRoute()->uri() == '/' || Route::getCurrentRoute()->uri() == 'login' || Route::getCurrentRoute()->uri() == 'register')
    <a class="navbar-brand" href="/">
        {{-- <img src="{{asset('assets/images/logo.svg')}}" alt="FOI"> --}}
        <h4 style="color: #6206a7;">PeduliDiri.com</h4>
    </a>
    @else
    <a class="navbar-brand" href="/home">
        {{-- <img src="{{asset('assets/images/logo.svg')}}" alt="FOI"> --}}
        <h4 style="color: #6206a7;">PeduliDiri.com</h4>
    </a>
    @endif
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
        aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            @if (Route::getCurrentRoute()->uri() == '/' || Route::getCurrentRoute()->uri() == 'login' || Route::getCurrentRoute()->uri() == 'register')
                {{-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li> --}}
            @else
                <li class="nav-item">
                    <a href="/home" class="nav-link">Perjalanan</a>
                </li>
                <li class="nav-item">
                    <a href="/profile" class="nav-link">Profile</a>
                </li>
                @if (auth()->user()->role == 'admin')
                    <li class="nav-item">
                        <a href="/admin/index" class="nav-link">Tables</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link">Logout</a>
                </li>
            @endif
        </ul>
        <ul class="navbar-nav mt-2 mt-lg-0">

            <?php if(!Auth::user()):?>
            @if (Route::getCurrentRoute()->uri() == 'login' || Route::getCurrentRoute()->uri() == 'register')
                <li class="nav-item mr-4">
                    <a class="nav-link active" aria-current="page" href="/" style="font-size: 16px">Home</a>
                </li>
            @endif
            @if (Route::getCurrentRoute()->uri() == 'login')
                <li class="nav-item">
                    <a class="btn {{ Route::getCurrentRoute()->uri() == '/' ? 'btn-secondary' : 'btn-primary' }} btn-sm"
                        href="{{ route('register') }}">Register</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="btn {{ Route::getCurrentRoute()->uri() == '/' ? 'btn-secondary' : 'btn-primary' }} btn-sm"
                        href="{{ route('login') }}">Log in</a>
                </li>
            @endif
            <?php endif;?>

        </ul>
    </div>
</nav>
