<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center pt-5">
                @if ($announcement_to_check)
                <h3>Articoli da Revisionare</h3>                    
                @else 
                <h3>Nessun Articolo da Revisionare</h3>
                @endif
            </div>
        </div>
        
        @if ($announcement_to_check)
        
        <div class="container-fluid mb-6">
            <div class="row">
                <div class="col-12 col-md-6 p-5">
                    <h1>{{$announcement_to_check->title}}</h1>
                    <p>{{$announcement_to_check->description}}</p>
                    <p>{{$announcement_to_check->category->name}}</p>
                    <p class="pb-5">€ {{$announcement_to_check->price}}</p>
                    
                    <h5 class="d-inline">{{$announcement_to_check->user->name}}</h5>
                    <h5 class="d-inline">{{$announcement_to_check->user->surname}}</h5>
                    <p>{{$announcement_to_check->user->email}}</p>
                    <p>Pubblicato il: {{$announcement_to_check->created_at->format('d/m/Y')}}</p>
                    
                    <div class="d-flex py-5">
                        <form method="POST" action="{{route('accepted_announcement', compact('announcement_to_check'))}}">
                            @csrf
                            @method('PATCH')
                            <button  type='submit' class="btn bgMyPurple textMyWhite me-3">
                                Accetta Annuncio
                            </button>
                        </form> 
                        <form method="POST" action="{{route('reject_announcement', compact('announcement_to_check'))}}">
                            @csrf
                            @method('PATCH')
                            <button type='submit' class="btn bgMyOrange textMyWhite">
                                Rifiuta Annuncio
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-md-6 px-5">
                    <div class="swiper mySwiper py-5">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="https://picsum.photos/1000" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="https://picsum.photos/1001" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="https://picsum.photos/1002" alt="">
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</x-layout>