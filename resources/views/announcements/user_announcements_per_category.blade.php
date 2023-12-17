<x-layout>
    <div class="container-fluid">
        <div class="row pt-4">
            <div class="col-12 bg-danger">
                <h3 class="text-center">immagine profilo</h3>
            </div>
        </div>
        
        <div class="row my-3">
            <div class="col-12">
                <h1 class="text-center pb-5">Vetrina di {{$user->name}} {{$user->surname}}</h1>
                <h2 class="text-center"> {{$category->name}}</h2>
            </div>
        </div>
        
        <section class="container-fluid">
            <div class="row p-md-5 justify-content-center">

                {{-- Se l'utente specifico non ha pubblicato alcun annuncio per una determinata categoria --}}
                @if ($announcements->isEmpty())
                <div class="col-12">
                    <h1 class="text-center">Nessun annuncio per questa categoria</h1>
                </div>
                @else

                {{-- Altrimenti, parte un'iterazione che restituisce le cards relative agli annunci dell'utente X per la categoria Y --}}
                @foreach ($announcements as $announcement)
                <div class="col-12 col-md-6 col-lg-4 mb-5 d-flex justify-content-center">
                    <div class="card border-0" style="width: 25rem;">
                        <a href="{{ route('show_announcements', ['announcement' => $announcement->id]) }}">
                            <img src="{{$announcement->images()->first()->getUrl(327, 327)}}"
                            class="card-img-top" alt="...">
                        </a>
                        <div class="card-body d-flex justify-content-between p-1 mt-1">
                            <h5 class="card-title">{{$announcement->title}}</h5>
                            <p class="card-text">€ {{$announcement->price}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </section>
    </div>
    <x-footer/>
</x-layout>
