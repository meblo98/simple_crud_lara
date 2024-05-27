@extends('include.principal')

@section('content')

<div class="container">
    <h3 align="center" class="mt-5">Gestion des articles</h3>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="form-area">
                <form method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Titre</label>
                            <input type="text" class="form-control" name="nom">
                        </div>
                        <div class="col-md-6">
                            <label>Image</label>
                            <input type="text" placeholder="mettez l'url de l'image" class="form-control" name="image">
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-12">
                            <label>Catégorie</label>
                            <input type="text" class="form-control" name="categorie">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Description</label>
                            {{-- <input type="text" class="form-control" name="description"> --}}
                            <textarea name="description" class="form-control" id="description"  cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-info mb-3" value="Register">
                        </div>
                    </div>
                </form>
            </div>
            <div class="row d-flex">
            <div class="col-md-8">
                @foreach ($articles as $article)
                <div class="card" style="width: 18rem;">
                    <img src="{{ $article->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Titre: {{ $article->nom }}</h5>
                      <h5 class="card-title">Categorie: {{ $article->categorie }}</h5>
                      <p class="card-text">{{ $article->description }}</p>
                      <a href="{{ route('articles.edit', $article->id) }}">
                        <button class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                        </button>
                    </a>
                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    </div>
                  </div>
                  @endforeach
            </div>
        </div>
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
