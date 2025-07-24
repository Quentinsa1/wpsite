@extends('admin.layout.template')

@section('content')
<div class="container mt-5">
    <h2>Liste des offres d'emploi</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('admin.emplois.create') }}" class="btn btn-primary mb-3">Ajouter une nouvelle offre</a>

    @if($emplois->isEmpty())
        <p>Aucune offre disponible.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Intitulé</th>
                    <th>Lieu</th>
                    <th>Type</th>
                    <th>Date limite</th>
                    <th>Compétences</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($emplois as $emploi)
                    <tr>
                        <td>{{ $emploi->title }}</td>
                        <td>{{ $emploi->location }}</td>
                        <td>{{ $emploi->type }}</td>
                        <td>{{ \Carbon\Carbon::parse($emploi->deadline)->format('d/m/Y') }}</td>
                        <td>{{ $emploi->skills }}</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-info">Voir</a>
                            <a href="#" class="btn btn-sm btn-warning">Modifier</a>
                            <form action="#" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
