<x-layout>
    
    <main class="mt-5">
        <section class=" container-fluid">
            <div class="row align-items-center pt-3">
                @forelse ($category->announcements as $announcement)
                <div class="col-12 col-md-6 col-lg-4 mb-5 d-flex justify-content-center align-items-center py-4">
                    <div class="card border-0" style="width: 18rem;">
                        <a href=" {{route('show_announcements', compact('announcement'))}}">
                            <img src="{{$announcement->images()->first()->getUrl(327 , 327)}}"
                            class="card-img-top" alt="...">
                        </a>
                        <div class="card-body d-flex justify-content-between p-1 mt-1">
                            <h5 class="card-title">{{Str::limit($announcement->title, 15)}}</h5>
                            <p class="card-text">€ {{$announcement->price}}</p>
                        </div>
                    </div>
                </div>
                @empty
                <div class="row vh-100">
                    <div class="col-12 d-flex flex-column align-items-center">
                        <h3 class="text-center">
                            {{__('ui.nessun-annuncio-trovato')}}
                        </h3>
                        <a href="{{route('create_announcements')}}" class="btn btnNessunAnn bgMyPurple mt-3 ">{{__('ui.crea-annuncio')}}</a>
                    </div>
                </div>
                @endforelse
            </div>
        </section>
    </main>
    <x-footer/>
</x-layout>