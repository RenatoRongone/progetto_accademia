<x-layout>
    {{-- Sezione della SubNavbar --}}
    <section class="container-fluid p-3">
        <div class="row text-center textMyBlack fw-medium ">
            <div class="col-12 col-md-3 d-flex">
                <div class="dropdown">
                    <a class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Mostra Categorie
                    </a>
                    <ul class="dropdown-menu bg-light">
                        <li>
                            <a class="textMyBlack text-decoration-none" href="{{route('index_category')}}">
                                Tutte le categorie
                            </a>
                        </li>
                        @foreach($categories as $category)
                        <li>
                            <a class="textMyBlack text-decoration-none " href="{{route('show_category', compact('category'))}}">{{$category->name}}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    
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
                            <a href="{{route('create_announcements')}}" class="btn myBtnWelcome rounded-0 ">Crea Annunci</a>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Main -->
            
            {{-- Messaggio creazione annuncio --}}
            <div class="row py-3">
                <div class="col-12">
                    @if (session()->has('message'))
                    <div class="alert textMyWhite text-center bgMyOrange" id="successMessage">
                        {{ session('message') }}
                    </div>
                    @endif
                </div>
            </div>
            
            <main>
                <section class=" container-fluid ">
                    <div class="row p-md-5 justify-content-center">
                        @foreach ($announcements as $announcement)
                        <div class="col-12 col-md-4 mb-5 d-flex justify-content-center">
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