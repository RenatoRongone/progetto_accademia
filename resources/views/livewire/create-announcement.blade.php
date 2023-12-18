<div class="col-6 d-flex justify-content-center">
    <form wire:submit.prevent='store' class="createAnnouncementsForm shadow">
        <div class="mb-3">
            <label for="title" class="form-label">{{__('ui.titolo')}}</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" wire:model='title'>
            @error('title')
            {{$message}}
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">{{__('ui.prezzo')}} <span>{{__('ui.€')}}</span></label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" wire:model='price'>
            @error('price')
            {{$message}}
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">{{__('ui.descrizione')}}</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" wire:model='description'>
            @error('description')
            {{$message}}
            @enderror
        </div>
        <div class='mb-3'>
            <label for="category" class="mb-2" >{{__('ui.categoria')}}</label>
            <select id="category" wire:model.defer='category' class='form-control @error('category') is-invalid @enderror'>
                <option value="">{{__('ui.scegli-categoria')}}</option>
                @foreach ($categories as $category)
                <option value="{{$category->id}}">
                    {{$category->name}}
                    {{__("ui.$category->name")}}
                </option>
                @endforeach
            </select>
            @error('record')
            {{$message}}
            @enderror
        </div>
        <div class="mb-3 d-flex flex-column">
            <label for="images" class="form-label">{{__('ui.carica-immagini')}}</label>
            <input multiple type="file" class="d-none @error('temporary_images.*') is-invalid @enderror" id="images" wire:model='temporary_images' name="images">
            <label for="images" class="customFileUpload textMyBlack">
                <i class="fa-solid fa-file-arrow-up fs-4 pt-3 me-3"></i>
            </label>
            @error('temporary_images.*')
            {{$message}}
            @enderror
        </div>
        @if(!empty($images))
        <div class="row mb-5 pt-3">
            <div class="col-12">
                {{-- <p>preview:</p> --}}
                <div class="row" >
                    @foreach($images as $key => $image)
                    <div class="col-4" > 
                        <div class="imgpreview" style="background-image: url({{$image->temporaryUrl()}}); background-size:cover; background-repeat: no-repeat;">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btnEliminaPreview bgMyOrange textMyWhite px-2 py-1 mt-2" wire:click='removeImage({{$key}})'>
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btnLogin bgMyPurple textMyWhite mt-3 px-4">{{__('ui.crea-annuncio')}}</button>
        </div>
    </form>
</div>
