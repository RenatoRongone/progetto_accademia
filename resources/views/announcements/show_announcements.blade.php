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
    <div class="container-fluid mb-5 px-md-5">
        <div class="row flex-column">
            <div class="col-12 col-md-6 px-4 p-md-5 p-sm-3 mb-4 mb-md-0 ">
                <h1>{{$announcement->title}}</h1>
                <p class="fs-5">{{$announcement->description}}</p>
                <a href="{{route('show_category', $announcement->category->id)}}" class="text-decoration-none textMyBlack">
                    <p class="fs-6">{{$announcement->category->name}}</p>
                </a>
                <p>€ {{$announcement->price}}</p>
            </div>
            <div class="col-12 col-md-6 px-4 px-md-5 pb-2 px-sm-3">
                <a href="{{-- {{route('user_announcements', $announcement->user->id)}} --}}" class="text-decoration-none textMyBlack">
                    <h5 class="d-inline">{{$announcement->user->name}}</h5>
                </a>
                <a href="{{-- {{route('user_announcements', $announcement->user->id)}} --}}" class="text-decoration-none textMyBlack">
                    <h5 class="d-inline">{{$announcement->user->surname}}</h5>
                </a>
                <p>{{$announcement->user->email}}</p>
                <p class="fs-7">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}}</p>
            </div>
        </div>
    </div>
    <x-footer/>
</x-layout>