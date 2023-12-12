<x-layout>
    <main class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex flex-column justify-content-center py-2">
                <h1 class="text-center">Lavora con Noi</h1>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <form method="post" action="{{route('richiesta_lavoro')}}" class="lavoraConNoiForm shadow">
                    @csrf
                    <div class="mb-3">
                        <label for="inquiry" class="form-label">Perché vuoi lavorare con noi?</label>
                        <textarea name="inquiry" id="inquiry" cols="30" rows="10" class="d-block"></textarea>
                    </div>
                    {{-- aggiungere input immagine --}}
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btnLogin bgMyPurple textMyWhite mt-3 px-4">Invia Richiesta</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</x-layout>