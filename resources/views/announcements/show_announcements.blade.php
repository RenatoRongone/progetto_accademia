<x-layout>
    <div class="swiper mySwiper py-5 mt-sm-3">
        <div class="swiper-wrapper">
            @foreach ($announcement->images as $image)
            <div class="swiper-slide">
                <img src="{{$image->getUrl(327 , 327)}}" alt="">
            </div>
            @endforeach
        </div>
    </div>
    <div class="container-fluid mb-6">
        <div class="row flex-column">
            <div class="col-12 col-md-6 p-5 p-sm-3 ">
                <h1>{{$announcement->title}}</h1>
                <p class="fs-5">{{$announcement->description}}</p>
                <p class="fs-6">{{$announcement->category->name}}</p>
                <p>€ {{$announcement->price}}</p>
            </div>
            <div class="col-12 col-md-6 px-5 pb-5 px-sm-3">
                <h5 class="d-inline">{{$announcement->user->name}}</h5>
                <h5 class="d-inline">{{$announcement->user->surname}}</h5>
                <p>{{$announcement->user->email}}</p>
                <p class="fs-7">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}}</p>
            </div>
        </div>
    </div>
    <x-footer/>
</x-layout>