<footer class="container-fluid">
    <div class="row px-md-5">
        <div class="col-12 px-4 py-5 col-md-4 px-md-4 py-md-4 d-flex flex-column justify-content-center">
            <img src="/media/logo/logo_black.png" height="40" width="40">
            <h6 class="mt-2">Presto.it</h6>
        </div>
        <div class="col-12 d-flex flex-column justify-content-center px-4 col-md-4 p-md-4">
            <div>
                <h6 class="textMyBlack px-md-0">Presto</h6>
                <ul class="px-0">
                    @if(Auth::user() && Auth::user()->is_revisor)
                    <li class="px-md-2">
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
                </ul>
            </div>
            
        </div>
        
        <div class="col-12 px-4 col-md-4 p-md-4">
            <h6 class="textMyBlack">{{__('ui.azienda-cert')}}</h6>
            <p class="textMyBlack">{{__('ui.questa-az')}}</p>
            <p class="textMyBlack">Copyright • DevelQuack 2023</p>
        </div>
    </div>
</footer>