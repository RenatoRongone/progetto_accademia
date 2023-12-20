<footer class="container-fluid">
    <div class="row px-md-5">
        <div class="col-12 px-4 py-5 col-md-4 px-md-4 py-md-4 mt-md-5">
            <img src="/media/logo/logo_black.png" class="logoFooter">
            <h6 class="mt-2">Presto.it</h6>
        </div>
        <div class="col-12 px-4 col-md-4 p-md-4">
            <h6 class="textMyBlack">Presto</h6>
            <ul class="px-0">
                @if(Auth::user() && Auth::user()->is_revisor)
                <li>
                    <a class="text-decoration-none textMyBlack" href="{{route('show_revisor')}}">
                        {{__('ui.vedi_revisor')}}
                    </a>
                </li>
                @else
                <li>
                    <a class="text-decoration-none textMyBlack" href="{{route('lavora_con_noi')}}">
                        {{__('ui.lavora-con-noi')}}
                    </a>
                </li>
                @endif
                <li>
                    <div class="mt-4">
                        <h6 class="pb-2">{{__('ui.lingua')}}</h6>
                        <div class="d-flex justify-content-start">
                            <x-_locale lang="it"/>
                            <x-_locale lang="en"/>
                            <x-_locale lang="fr"/>
                            <x-_locale lang="de"/>
                            <x-_locale lang="es"/>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        
        <div class="col-12 px-4 col-md-4 p-md-4">
            <h6 class="textMyBlack">{{__('ui.azienda-cert')}}</h6>
            <p class="textMyBlack">{{__('ui.questa-az')}}</p>
            <p class="textMyBlack">Copyright • DevelQuack 2023</p>
        </div>
    </div>
</footer>