<nav class="navbar navbarCustom navbar-expand-sm navbar-dark bgNavbar p-3">
    <div class="container-fluid ms-md-0">
        <a class="navbar-brand textMyWhite" href="{{route('welcome')}}">
        <img src="https://uc05fcb856dc8d6e45d45791b774.previews.dropboxusercontent.com/p/thumb/ACFMmY5CTYJ60X87zm-IkyqnTuCEWCegxd4pdu8AtfVWn1tDXMnLAMJYhN9AIrd4OnBLUf5VD7vDVHMOBwUmA8Ae-umlw5NtktwfsJtTBWVCr3BF9H-0Ce8j41DQGUwhGYA5FGUp0BVDt1Q2ClSFmhrITrqxV7wRdZW6ycxLXg5bKaBdPzvXTcl7TRHA2YI8wIecWOko9js2VVPhxv8tqIo0y2ixV5rX-gBP0waKIe3pJqYuQgl6Au6O1Idte3UucTmq5B8nkDyXNCt1gwFhzTmmYmN8gu1pn7_XSVSYLT9fn5-E_tL3Cgsoa-Ej0wBQkI4zogsFdubVE6UYjXyqNa5SkrsrZ-QCI4aeRfs0c_Ddpw/p.png" alt="Logo" class="logoNavbar">
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