<x-layout>
    <div class="container-fluid">
        <div class="row pt-4">
            <div class="col-12">
                <h3 class="text-center">{{__('ui.immagine-profilo')}}</h3>
            </div>
        </div>
        
        <div class="row my-3">
            <div class="col-12">
                <h1 class="text-center">
                    @if(session('locale') == 'en')
                        {{$user->name}} {{$user->surname}}{{__('ui.vetrina-di')}}
                    @else
                        {{__('ui.vetrina-di')}}  {{$user->name}} {{$user->surname}}
                    @endif
                </h1>
            </div>
        </div>
        
        <section class=" container-fluid ">
            <div class="row p-md-5 justify-content-center">
                @foreach ($groupedAnnouncements as $categoryName => $announcementsInCategory)
                
                @php
                $category = $announcementsInCategory->first()->category;
                @endphp
                
                <div class="col-12">
                    <h5 class="py-2 border textMyBlack text-center">
                        <a href="{{ route('user.category.announcements', ['user' => $user->id, 'categoryName' => $categoryName]) }}" class="text-decoration-none textMyBlack">{{__("ui.$categoryName")}}</a>
                    </h5>
                </div>
                
                @foreach ($announcementsInCategory as $announcement)
                <div class="col-12 col-md-6 col-lg-4 mb-5 d-flex justify-content-center">
                    <div class="card border-0" style="width: 25rem;">
                        <a href=" {{route('show_announcements', compact('announcement'))}}">
                            <img src="{{$announcement->images()->first()->getUrl(327 , 327)}}"
                            class="card-img-top" alt="...">
                        </a>
                        <div class="card-body d-flex justify-content-between p-1 mt-1">
                            <h5 class="card-title">{{Str::limit($announcement->title, 15)}}</h5>
                            <p class="card-text">{{__('ui.€')}} {{$announcement->price}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                @endforeach
            </div>
        </section>
    </div>
    <x-footer/>
</x-layout>