<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center pt-5">
                @if ($announcement_to_check)
                <h1>Annunci da Revisionare</h1>
                @else
                <h3>Nessun Annuncio da Revisionare</h3>
                @endif
            </div>
        </div>

        @if ($announcement_to_check)

        <div class="container-fluid mb-6">
            <div class="row border-bottom">

                <div class="col-12 col-md-6 p-5 d-flex flex-column justify-content-center order-md-last">
                    <div class="swiperRevisorContainer">
                        <div class="swiper mySwiper py-0">
                            <div class="swiper-wrapper">
                                @foreach ($announcement_to_check->images as $image)
                                <div class="swiper-slide swiperRevisorSlide">
                                    <img src="{{$image->getUrl(327 , 327)}}" alt="">
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 p-0 px-3 p-md-5">
                    <h1 class="pb-2">{{$announcement_to_check->title}}</h1>
                    <p class="fs-5">{{$announcement_to_check->description}}</p>
                    <p class="fs-6">{{$announcement_to_check->category->name}}</p>
                    <h6 class="pb-5">€ {{$announcement_to_check->price}}</h6>

                    <h5 class="d-inline">{{$announcement_to_check->user->name}}</h5>
                    <h5 class="d-inline">{{$announcement_to_check->user->surname}}</h5>
                    <p class="pt-3">{{$announcement_to_check->user->email}}</p>
                    <p class="fs-7">Pubblicato il {{$announcement_to_check->created_at->format('d/m/Y')}}</p>

                    <div class="d-flex py-5">
                        <form method="POST" action="{{route('accepted_announcement', compact('announcement_to_check'))}}">
                            @csrf
                            @method('PATCH')
                            <button  type='submit' class="btn btnApprove bgMyPurple textMyWhite me-3">
                                Accetta Annuncio
                            </button>
                        </form>
                        <form method="POST" action="{{route('reject_announcement', compact('announcement_to_check'))}}">
                            @csrf
                            @method('PATCH')
                            <button type='submit' class="btn btnReject bgMyOrange textMyWhite">
                                Rifiuta Annuncio
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <x-footer></x-footer>
</x-layout>