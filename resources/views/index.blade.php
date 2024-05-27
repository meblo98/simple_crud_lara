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
                            <input type="file" class="form-control" id="inputGroupFile02" name="image">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Catégorie</label>
                            <input type="text" class="form-control" name="categorie">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Description</label>
                            <input type="text" class="form-control" name="description">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-info" value="Register">
                        </div>
                    </div>
                </form>
            </div>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titre de l'article</th>
                        <th scope="col">Image</th>
                        <th scope="col">Catégorie</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $key => $article)
                        <tr>
                            <td scope="col">{{ ++$key }}</td>
                            <td scope="col">{{ $article->nom }}</td>
                            <td scope="col">{{ $article->image }}</td>
                            <td scope="col">{{ $article->categorie }}</td>
                            <td scope="col">{{ $article->description }}</td>
                            <td scope="col">
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
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
