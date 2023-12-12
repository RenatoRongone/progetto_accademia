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
            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" wire:model='price'>
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
        {{-- aggiungere input immagine --}}
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btnLogin bgMyPurple textMyWhite mt-3 px-4">Crea Annuncio</button>
        </div>
    </form>
</div>
