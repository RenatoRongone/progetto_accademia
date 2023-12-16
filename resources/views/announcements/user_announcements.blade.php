<x-layout>
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-12 bg-danger">
                <h3 class="text-center">immagine profilo</h3>
            </div>
        </div>
        
        <div class="row mt-3">
            <div class="col-12 bg-warning">
                <h1 class="text-center">Vetrina di  {{$user->name}} {{$user->surname}}</h1>
            </div>
        </div>
        
        <section class=" container-fluid ">
            <div class="row p-md-5 justify-content-center">
                @foreach ($announcements as $announcement)
                
                @if ($loop->iteration)
                <div class="col-12 text-center">
                    <h3>{{$announcement->category->name}}</h3>
                </div>
                @endif
                
                <div class="col-12 col-md-6 col-lg-4 mb-5 d-flex justify-content-center border-bottom">
                    <div class="card border-0" style="width: 25rem;">
                        <a href=" {{route('show_announcements', compact('announcement'))}}">
                            <img src="{{$announcement->images()->first()->getUrl(327 , 327)}}"
                            class="card-img-top" alt="...">
                        </a>
                        <div class="card-body d-flex justify-content-between p-1 mt-1">
                            <h5 class="card-title">{{$announcement->title}}</h5>
                            <p class="card-text">€ {{$announcement->price}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        
    </div>
    
    <x-footer/>
</x-layout>