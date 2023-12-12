<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 bg-info ">
                {{$announcement_to_check ? 'Annunci da revisionare: ': 'Nessun annuncio da revisionare'}} 
            </div>
        </div>
        @if ($announcement_to_check)
        <section class="row">
            <div class="col-12 bg-warning ">
                <h3>{{$announcement_to_check->title}}</h3>
                <h3>{{$announcement_to_check->description}}</h3>
                <h3>€ {{$announcement_to_check->price}}</h3>
                <h3>Pubblicato il: {{$announcement_to_check->created_at->format('d/m/Y')}}</h3>
                <div>
                    <form method="POST" action="{{route('accepted_announcement', compact('announcement_to_check'))}}">
                        @csrf
                        @method('PATCH')
                        <button  type='submit' class="btn btn-success">
                            Accetta Annuncio
                        </button>
                    </form> 
                    <form method="POST" action="{{route('reject_announcement', compact('announcement_to_check'))}}">
                        @csrf
                        @method('PATCH')
                        <button type='submit' class="btn btn-danger">
                            Rifiuta Annuncio
                        </button>
                    </form>
                </div>
            </div>
        </section>
        @endif
    </div>
</x-layout>