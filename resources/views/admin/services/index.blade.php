@extends('admin.layout.template') {{-- Adapter selon ton layout --}}

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Liste des services</h1>
        <a href="{{ route('admin.services.create') }}" class="btn btn-success">+ Nouveau service</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($services->isEmpty())
        <div class="alert alert-info">Aucun service enregistré pour le moment.</div>
    @else
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Icône</th>
                    <th>Titre</th>
                    <th>Catégorie</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            @if ($service->icon)
                                <img src="{{ asset('storage/' . $service->icon) }}" alt="Icon" style="width: 50px; height: 50px;">
                            @else
                                <span class="text-muted">Aucune</span>
                            @endif
                        </td>
                        <td>{{ $service->titre }}</td>
                        <td>{{ $service->categorie ?? '—' }}</td>
                        <td>{{ Str::limit($service->description, 80) }}</td>
                        <td>
                            <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-sm btn-warning">Modifier</a>

                            <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Confirmer la suppression ?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
