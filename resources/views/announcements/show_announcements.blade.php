<x-layout>    
    <div class="swiper mySwiper">
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

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 bg-info">
                <h3>{{$announcement->title}}</h3>
                <h3>{{$announcement->description}}</h3>
                <h3>€ {{$announcement->price}}</h3>
                <h3>Pubblicato il: {{$announcement->created_at->format('d/m/Y')}}</h3>
            </div>
        </div>
    </div>
    
    <x-footer/>
</x-layout>