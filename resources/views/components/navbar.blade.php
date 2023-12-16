<nav class="navbar navbarCustom navbar-expand-sm navbar-dark bgNavbar p-3 mb-5 fixed-top">
    <div class="container-fluid ms-md-0">
        <a class="navbar-brand textMyWhite" href="{{route('welcome')}}">
            <img src="/media/logo/logo_purple.png" alt="Logo" class="logoNavbar">
        </a>
        
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
                
                <form method="GET" action="{{route('ricerca')}}" class="nav-item d-flex" role="search">
                    @csrf
                    <button class="nav-link btn p-md-2 p-0 my-2 my-md-0" type="button" id="searchBotton">
                        <i class="fa-solid fa-magnifying-glass textMyWhite" id="iconSearch"></i>
                    </button>
                    <input class="form-control me-2 searchInput d-none" type="search" placeholder="Cerca" aria-label="Search" name='searched' id="searchBar">
                </form>
                
                @if(Auth::user() && Auth::user()->is_revisor)
                <li class="nav-item">
                    <a class="nav-link ms-md-3 position-relative counterRevisionWrapper " href="{{route('show_revisor')}}">
                        <i class="fa-solid fa-newspaper"></i>
                        @if(App\Models\Announcement::toBeRevisionedCount() > 0)
                        <span class=" position-absolute top-0 start-100 countRevision translate-middle badge rounded-pill bgMyOrange">
                            {{App\Models\Announcement::toBeRevisionedCount()}}
                        </span>
                        @endif
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
                    <a class="nav-link ms-md-3" href="#">
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
