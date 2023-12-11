<x-layout>
    {{-- Sezione della SubNavbar --}}
    <section class="container-fluid p-3">
        <div class="row text-center textMyBlack fw-medium ">
            <div class="col-12 col-md-3">
                <a class="textMyBlack categorie text-decoration-none" href="#">
                    tutte le categorie
                </a>
            </div>
            <div class="col-12 col-md-3">
                <a class="textMyBlack categorie text-decoration-none" href="#">
                    auto e moto
                </a>
            </div>
            <div class="col-12 col-md-3">
                <a class="textMyBlack categorie text-decoration-none" href="#">
                    cinema e libri
                </a>
            </div>
            <div class="col-12 col-md-3">
                <a class="textMyBlack categorie text-decoration-none" href="#">
                    wellness
                </a>
            </div>
        </div>
    </section>
    
    
    {{-- Sezione del BackGround Header --}}
    <header class="container-fluid bgHeader d-flex justify-content-center ">
        <div class="row align-items-center">
            <div class="col-12">
                <h1 class="display-1 text-center textMyWhite fw-bold">Presto.it</h1>
                <h2 class="fs-4 text-uppercase  text-center textMyWhite  fw-normal">Compra, a casa tua, presto.</h1>
                    <div class="col-12 d-flex justify-content-center mt-4">
                        <a href="{{route('create_announcements')}}" class="btn myBtn rounded-0 ">Crea Annunci</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main -->
        
        <main>
            <section class=" container-fluid ">
                <div class="row">
                    @foreach ($announcements as $announcement)
                    <div class="col-12 col-md-3 bg-info ">
                        <div class="card" style="width: 18rem;">
                            <img src="http://picsum.photos/200" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$announcement->title}}</h5>
                                <p class="card-text">{{$announcement->description}}</p>
                                <p class="card-text">{{$announcement->category->name}}</p>
                                <p class="card-text">$ {{$announcement->price}}</p>
                                <p class="card-text">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}}</p>
                                <a href="{{route('show_announcements', compact('announcement'))}}" class="btn btn-primary">Dettaglio Prodotto</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>
        </main>
        
        
        
        <x-footer></x-footer>
    </x-layout>