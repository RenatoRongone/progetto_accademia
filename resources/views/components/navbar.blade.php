<nav class="navbar navbarCustom navbar-expand-sm navbar-dark bgNavbar p-3">
    <div class="container-fluid ms-md-0">
        <a class="navbar-brand textMyWhite" href="{{route('welcome')}}">logo</a>
        <form role="search" class="formNavbar">
            <input class="form-control rounded-5 " type="search" placeholder="Cerca Prodotti..." aria-label="Search">
        </form>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#prestoNavbar" aria-controls="prestoNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse position-relative" id="prestoNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-sm-0 me-md-0 linkContainer">
                <li class="nav-item">
                    <a class="nav-link mx-md-3" aria-current="page" href="{{route('welcome')}}">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mx-md-2" href="#" data-bs-toggle="dropdown" aria-expanded="false">@if (Auth::user()) Benvenuto {{Auth::user()->name}} @else User @endif</a>
                    <ul class="dropdown-menu">
                        @auth
                        <li><a class="dropdown-item" href="#">Profilo</a></li>
                        <li>
                            <form method="POST" action="/logout">
                                @csrf
                                <button type="submit" class="dropdown-item">Esci</button>
                            </form>
                        </li>
                        @endauth
                        @guest
                        <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                        <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
                        @endguest
                    </ul>
                </li>
                @if(Auth::user() && Auth::user()->isAdmin === 1)
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mx-md-2" href="#" data-bs-toggle="dropdown" aria-expanded="false">Admin</a>
                    <ul class="dropdown-menu ">
                        <li><a class="dropdown-item" href="#">Utenti</a></li>
                        <li><a class="dropdown-item" href="#">Annunci</a></li>
                    </ul>
                </li>
                @endif


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle ms-md-2" href="#" data-bs-toggle="dropdown" aria-expanded="false">IT</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item itemLang" href="#">EN</a></li>
                        <li><a class="dropdown-item itemLang" href="#">FR</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
{{-- Spacer Divisore --}}
<section class="container-fluid spacer">
    <div class="row">
        <div class="col-12">
        </div>
    </div>
</section>