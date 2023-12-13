<x-layout>

    <main>
        <section class=" container-fluid ">
            <div class="row">
                @forelse ($category->announcements as $announcement)
                <div class="col-12 col-md-3 bg-info ">
                    <div class="card" style="width: 18rem;">
                        <img src="http://picsum.photos/200" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">{{$announcement->title}}</h6>
                            <p class="card-text">{{$announcement->description}}</p>
                            <p class="card-text">{{$announcement->category->name}}</p>
                            <p class="card-text">€ {{$announcement->price}}</p>
                            <p class="card-text">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}}</p>
                            <a href="{{route('show_announcements', compact('announcement'))}}" class="btn btn-primary">Dettaglio Prodotto</a>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="col-12 bg-success">
                        <h3 class="text-center">
                            Nessun annuncio trovato
                        </h3>
                        <a href="{{route('create_announcements')}}" class="btn bgMyPurple">Crea Annuncio</a>
                    </div>
                @endforelse
            </div>
        </section>
    </main>

    <x-footer/>
</x-layout>