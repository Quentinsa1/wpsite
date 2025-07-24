@extends('admin.layout.template')

@section('content')
<div class="container py-5">
    <h1 class="mb-4 text-center">Créer un nouveau post</h1>

    <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data" class="card p-4 shadow-sm">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titre <span class="text-danger">*</span></label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" name="slug" id="slug" class="form-control">
        </div>

        <div class="mb-3">
            <label for="excerpt" class="form-label">Résumé</label>
            <textarea name="excerpt" id="excerpt" class="form-control" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Contenu <span class="text-danger">*</span></label>
            <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Auteur</label>
            <input type="text" name="author" id="author" class="form-control">
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Catégorie</label>
            <input type="text" name="category" id="category" class="form-control">
        </div>

        <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" name="is_featured" id="is_featured" value="1">
            <label class="form-check-label" for="is_featured">
                Mettre en vedette
            </label>
        </div>

        <button type="submit" class="btn btn-primary w-100">
            <i class="bi bi-plus-circle me-2"></i>Créer le post
        </button>
    </form>
</div>
@endsection
