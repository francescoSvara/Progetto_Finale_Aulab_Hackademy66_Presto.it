<x-layout>

    <div class="container-fluid">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h2>I nostri articoli</h2>
            </div>
        </div>
        {{-- CARD ARTICOLO --}}
        <div class="row py-5">
            @if(count($articles))
            @foreach ($articles as $article)
                <div class="col-12 col-md-3 mx-auto">
                    <div class="card shadow">
                        @if (!$article->cover)
                            <img src="/media/ImmagineSalvaposto.jpg" class="img-fluid card-img-top" alt="immagine non trovata">
                        @else
                            <img src="{{Storage::url($article->cover)}}" class="img-fluid card-img-top" alt="{{$article->name}}">
                        @endif
                        <div class="card-body">
                          <h5 class="card-title">{{$article->title}}</h5>
                          <p class="card-text">{{$article->price}} €</p>
                          <p class="card-text text-muted">{{Str::limit($article->description,30)}}</p>
                          <a href="{{route('article.show', compact('article'))}}" class="btn btn-secondary">Dettagli</a>
                        </div>
                      </div>
                </div>
            @endforeach
            @else
            <div class="col-12 text-center mt-5">
                <p>Non ci sono articoli!</p>
            </div>
            @endif
        </div>
    </div>

</x-layout>