@extends('partials.templates')
@section('content')

<section class="news-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $actualite->titre }}</h1>
                <p class="text-muted">{{ \Carbon\Carbon::parse($actualite->date)->translatedFormat('d F Y') }} | Catégorie : {{ $actualite->categorie }}</p>

                @if($actualite->image)
                    <img src="{{ asset('storage/' . $actualite->image) }}" class="img-fluid mb-3" alt="{{ $actualite->titre }}">
                @endif

                <div class="news-body">
                    {!! nl2br(e($actualite->contenu)) !!}
                </div>

                <a href="{{ route('actualites.index') }}" class="btn btn-secondary mt-3">← Retour à la liste</a>
            </div>
        </div>
    </div>
</section>

@endsection
