@extends('admin.layout.template') {{-- Adapter selon ton layout --}}

@section('content')
<div class="container">
    <h1>Créer un nouveau service</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oups !</strong> Problèmes avec les données fournies :<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" name="titre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label for="categorie" class="form-label">Catégorie</label>
            <input type="text" name="categorie" class="form-control">
        </div>

        <div class="mb-3">
            <label for="icon" class="form-label">Icône (facultatif)</label>
            <input type="file" name="icon" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>
@endsection
