@extends('include.principal')

@section('content')

<div class="container">
    <h3 align="center" class="mt-5">Liste des articles</h3>
    <a class="btn btn-primary" href="{{ route('articles.create')}}">Ajouter un article</a>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            
              <div class="row mb-2">
                @foreach ($articles as $article)
            <div class="col-md-6">
               
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-500 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success-emphasis">{{ $article->categorie }}</strong>
                <h3 class="mb-0">{{ $article->nom }}</h3>
                <div class="mb-1 text-body-secondary">{{ $article->created_at }}</div>
                {{-- <p class="mb-auto">{{ $article->description }}</p> --}}
                <a href="{{ route('articles.show', $article->id) }}" class="icon-link gap-1 icon-link-hover stretched-link">
                    Lire l'article
                    <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                </a>
                </div>
                <div class="col-auto d-flex d-lg-block">
                    <img src="{{ $article->image }}" class="card-img-top" alt="...">
                </div>
            </div>
          
            </div>
            @endforeach
        </div>

            {{-- <div class="grid d-flex">
                <div class="g-col-4">
                    @foreach ($articles as $article)
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $article->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Titre: {{ $article->nom }}</h5>
                          <h5 class="card-title">Categorie: {{ $article->categorie }}</h5>
                          <p class="card-text">{{ $article->description }}</p>
                          <a href="{{ route('articles.edit', $article->id) }}">
                            <button class="btn btn-primary btn-sm">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier
                            </button>
                        </a>
                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                        </div>
                      </div>
                      @endforeach
                </div>
              </div> --}}
        </div>
    </div>
</div>

@endsection

@push('css')
<style>
    .form-area {
        padding: 20px;
        margin-top: 20px;
        background-color: #FFFF00;
    }

    .bi-trash-fill {
        color: red;
        font-size: 18px;
    }

    .bi-pencil {
        color: green;
        font-size: 18px;
        margin-left: 20px;
    }
</style>
@endpush
