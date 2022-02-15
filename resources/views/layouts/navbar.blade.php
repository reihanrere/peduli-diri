        <!-- Navigation -->
        <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
            <div class="container">

                <!-- Image Logo -->
                {{-- <img src="{{asset('assets/images/logo.svg')}}" alt="alternative"> --}}
                <a class="navbar-brand logo-image" href="index.html">PeduliDiri.com</a> 

                <!-- Text Logo - Use this if you don't have a graphic logo -->
                <!-- <a class="navbar-brand logo-text" href="index.html">Ioniq</a> -->

                <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav ms-auto navbar-nav-scroll">
                        
                        @if (Route::getCurrentRoute()->uri() == "/" || Route::getCurrentRoute()->uri() == "login" || Route::getCurrentRoute()->uri() == "register")
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        @else
                        <li class="nav-item dropdown nav-item-drop">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">{{auth()->user()->name}}</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown01">
                                <li><a class="dropdown-item" href="/profile">Profile</a></li>
                                <li><div class="dropdown-divider"></div></li>
                                <li><a class="dropdown-item" href="/home">Perjalanan</a></li>
                                <li><div class="dropdown-divider"></div></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}">Log Out</a></li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                    <span class="nav-item">

                        <?php if(!Auth::user()):?>
                        @if (Route::getCurrentRoute()->uri() == "login")
                            <a class="btn-outline-sm" href="{{ route('register')}}">Register</a>
                        @else
                            <a class="btn-outline-sm" href="{{ route('login')}}">Log in</a>
                        @endif
                        <?php endif;?>
                    </span>
                </div> <!-- end of navbar-collapse -->
            </div> <!-- end of container -->
        </nav> <!-- end of navbar -->
        <!-- end of navigation -->