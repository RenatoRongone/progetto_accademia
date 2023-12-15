<x-layout>
    {{-- Sezione del BackGround Header --}}
    <header class="container-fluid bgHeader d-flex flex-column align-items-center justify-content-center position-relative ">
        
        {{-- Messaggio creazione annuncio --}}
        @if (session()->has('message'))
        
        <div class="alert textMyWhite text-center bgMyOrange position-absolute top-0 " id="successMessage">
            {{ session('message') }}
        </div>
        
        @endif
        
        
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
        
        <main>
            
            {{-- Sezione della Categorie --}}
            <section class="container-fluid p-3">
                <div class="row textMyBlack fw-medium">
                    <div class="col-12 col-md-6 d-flex text-center">
                        <p class="d-block" id="allCategories">Tutte le categorie</p>
                    </div>
                    @foreach ($categoriesByPop as $category)
                    <div class="col-12 col-md-2 d-block topCategories">
                        <a class="textMyBlack text-decoration-none" href="{{route('show_category', compact('category'))}}">
                            {{$category->name}}
                        </a>
                    </div>
                    @endforeach
                </div>
                
                <div class="row d-none" id="categories">
                    @foreach ($categories as $category)
                    <div class="col-12 col-md-3 ">
                        <a class="textMyBlack text-decoration-none" href="{{route('show_category', compact('category'))}}">
                            {{$category->name}}
                        </a>
                    </div>
                    @endforeach
                </div>
            </section>            
            
            <section class=" container-fluid ">
                <div class="row p-md-5 justify-content-center">
                    @foreach ($announcements as $announcement)
                    <div class="col-12 col-md-6 col-lg-4 mb-5 d-flex justify-content-center">
                        <div class="card border-0" style="width: 25rem;">
                            <a href=" {{route('show_announcements', compact('announcement'))}}">
                                <img src="{{$announcement->images()->first()->getUrl(327 , 327)}}"
                                class="card-img-top" alt="...">
                            </a>
                            <div class="card-body d-flex justify-content-between p-1 mt-1">
                                <h5 class="card-title">{{$announcement->title}}</h5>
                                {{-- <p class="card-text">{{$announcement->category->name}}</p> --}}
                                <p class="card-text">€ {{$announcement->price}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>
        </main>
        <x-footer></x-footer>
    </x-layout>