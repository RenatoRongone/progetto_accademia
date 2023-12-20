<x-layout>

    <div class="container-fluid vh-100 d-flex flex-column justify-content-center">
        <div class="row mb-2">
            <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                <img src="media/logo/logo_black.png" alt="logo presto.it" width="100" height="100">
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                @auth
                    <h3 class="text-center textMyBlack">{{ __('ui.spiacente') }}, {{ Auth::user()->name }}: {{ __('ui.error404_message') }}</h3>
                    <h4 class="text-center textMyPurple">Error 404</h4>
                @endauth
                @guest
                    {{-- richiamare anche qui sotto i parametri relativi al file ui.php per il multilingua --}}
                    <h3 class="text-center textMyBlack">Spiacente, pagina non trovata</h3>
                    <h4 class="text-center textMyPurple">Error 404</h4>
                @endguest
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                <a href="{{ route('welcome') }}">
                    <i class="fa-solid fa-house textMyPurple"></i>
                </a>
            </div>
        </div>
    </div>

</x-layout>