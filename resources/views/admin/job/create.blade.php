@extends('admin.layout.template')
@section('content')
<div class="container mt-5">
    <h2>Ajouter une offre d'emploi</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Erreurs :</strong>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.emplois.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Intitulé du poste</label>
            <input type="text" name="title" id="title" class="form-control" required value="{{ old('title') }}">
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Lieu</label>
            <input type="text" name="location" id="location" class="form-control" required value="{{ old('location') }}">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type de contrat</label>
            <select name="type" id="type" class="form-select" required>
                <option value="">-- Sélectionnez --</option>
                <option value="CDI">CDI</option>
                <option value="CDD">CDD</option>
                <option value="Stage">Stage</option>
                <option value="Freelance">Freelance</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="deadline" class="form-label">Date limite de candidature</label>
            <input type="date" name="deadline" id="deadline" class="form-control" required value="{{ old('deadline') }}">
        </div>

        <div class="mb-3">
            <label for="skills" class="form-label">Compétences (séparées par des virgules)</label>
            <input type="text" name="skills_input" class="form-control" value="{{ old('skills_input') }}">
            <small class="form-text text-muted">Exemple : Finance, Analyse, Leadership</small>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description du poste</label>
            <textarea name="description" id="description" class="form-control" rows="5" required>{{ old('description') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Créer l'offre</button>
    </form>
</div>
@endsection
