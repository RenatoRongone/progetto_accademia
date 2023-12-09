<nav class="navbar navbarCustom navbar-expand-sm navbar-dark bgNavbar p-3">
    <div class="container-fluid ms-md-0">
        <a class="navbar-brand textMyWhite" href="{{route('welcome')}}">LOGO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#prestoNavbar" aria-controls="prestoNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse position-relative" id="prestoNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-sm-0 me-md-0 linkContainer">
                <li class="nav-item">
                    <a class="nav-link mx-md-3" href="{{route('welcome')}}">
                        <i class="fa-solid fa-house"></i>
                    </a>
                </li>

                @if(Auth::user() && Auth::user()->isAdmin === 1)
                <li class="nav-item">
                    <a class="nav-link mx-md-3" href="#">
                        <i class="fa-solid fa-database"></i>
                    </a>
                </li>
                @endif

                @guest
                <li class="nav-item">
                    <a class="nav-link mx-md-3" href="{{route('register')}}">REGISTRATI</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link mx-md-3" href="{{route('login')}}">ACCEDI</a>
                </li>
                @endguest

                @auth
                <li class="nav-item">
                    <a class="nav-link mx-md-3" href="#">
                        <i class="fa-solid fa-user"></i>
                    </a>
                </li>

                <li>
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="nav-link mx-md-3">
                            <i class="fa-solid fa-right-from-bracket"></i>
                        </button>
                    </form>
                </li>
                @endauth
            </ul>
        </li>

    </ul>
</div>
</div>
</nav>
{{-- Spacer Divisore --}}
{{-- <section class="container-fluid spacer">
    <div class="row">
        <div class="col-12">
        </div>
    </div>
</section> --}}