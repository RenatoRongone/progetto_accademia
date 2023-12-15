<div class="col-6 d-flex justify-content-center">
    <form wire:submit.prevent='store' class="createAnnouncementsForm shadow">
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" wire:model='title'>
            @error('title')
            {{$message}}
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo <span>€</span></label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" wire:model='price'>
            @error('price')
            {{$message}}
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" wire:model='description'>
            @error('description')
            {{$message}}
            @enderror
        </div>
        <div class='mb-3'>
            <label for="category" class="mb-2" >Categoria</label>
            <select id="category" wire:model.defer='category' class='form-control @error('category') is-invalid @enderror'>
                <option value="">Scegli la Categoria</option>
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            @error('record')
            {{$message}}
            @enderror
        </div>
        <div class="mb-3">
            <label for="images" class="form-label">Immagini</label>
            <input multiple type="file" class="form-control @error('temporary_images.*') is-invalid @enderror" id="images" wire:model='temporary_images' name="images">
            @error('temporary_images.*')
            {{$message}}
            @enderror
        </div>
        @if(!empty($images))
            <div class="row">
                <div class="col-12">
                    <p>foto preview:</p>
                    <div class="row" >
                        @foreach($images as $key => $image)
                        <div class="col-4 imgpreview" style="background-image: url({{$image->temporaryUrl()}}); background-size:cover; background-repeat: no-repeat;">
                             <button type="button" class="btn btn-danger" wire:click='removeImage({{$key}})'>
                                Elimina Immagine
                            </button>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btnLogin bgMyPurple textMyWhite mt-3 px-4">Crea Annuncio</button>
        </div>
    </form>
</div>
