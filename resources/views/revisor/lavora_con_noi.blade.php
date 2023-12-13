<x-layout>
    <main class="container-fluid d-flex flex-column justify-content-center lavoraConNoiHeight">
        
        <div class="row">
            <div class="col-12 d-flex flex-column justify-content-center py-5">
                <h1 class="text-center">Lavora con Noi</h1>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <form method="post" action="{{route('richiesta_lavoro')}}" class="lavoraConNoiForm">
                    @csrf
                    <div class="mb-3 text-center">
                        <label for="inquiry" class="form-label fw-semibold textMyPurple pb-2">Perché vuoi lavorare con noi?</label>
                        <textarea name="inquiry" id="inquiry" cols="45" rows="16" class="d-block textareaBorder  textareaLavoraConNoi"></textarea>
                    </div>
                    {{-- aggiungere input immagine --}}
                    <div class="d-flex justify-content-center py-4 bg">
                        <button type="submit" class="btn btnLogin bgMyPurple textMyWhite px-4">Invia Richiesta</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</x-layout>