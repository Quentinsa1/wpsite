@extends('partials.templates')

@section('content')

<!-- Hero Section -->
<section class="about-hero-section">
    <div class="container text-center">
        <h1 class="hero-title">Nos dernières actualités</h1>
        <p class="hero-subtitle">Découvrez l'ADN de WorldPerformance</p>
    </div>
</section>

<!-- News Section -->
<section class="news-section section-padding">
    <div class="container">

        <!-- Vedette -->
        @if($vedette)
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="featured-news-card">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <img src="{{ asset('storage/' . $vedette->image) }}" class="img-fluid" alt="{{ $vedette->titre }}">
                            <div class="news-date-badge">
                                <span class="date-day">{{ \Carbon\Carbon::parse($vedette->date)->format('d') }}</span>
                                <span class="date-month">{{ \Carbon\Carbon::parse($vedette->date)->translatedFormat('M') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6 p-4">
                            <div class="news-meta">
                                <span class="meta-category">{{ $vedette->categorie }}</span>
                            </div>
                            <h3 class="news-title">{{ $vedette->titre }}</h3>
                            <p class="news-excerpt">{{ Str::limit(strip_tags($vedette->contenu), 200) }}</p>
                            <a href="#" class="btn btn-primary">Lire la suite</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <!-- Grille des autres actualités -->
        <div class="row">
            @foreach($actualites as $actualite)
                @if($actualite->id !== $vedette->id) {{-- éviter doublon vedette --}}
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="news-card">
                        <div class="news-image">
                            <img src="{{ asset('storage/' . $actualite->image) }}" class="img-fluid" alt="{{ $actualite->titre }}">
                            <div class="news-date">
                                <span class="date-day">{{ \Carbon\Carbon::parse($actualite->date)->format('d') }}</span>
                                <span class="date-month">{{ \Carbon\Carbon::parse($actualite->date)->translatedFormat('M') }}</span>
                            </div>
                        </div>
                        <div class="news-content">
                            <div class="news-meta">
                                <span class="meta-category">{{ $actualite->categorie }}</span>
                            </div>
                            <h3 class="news-title">{{ $actualite->titre }}</h3>
                            <p class="news-excerpt">{{ Str::limit(strip_tags($actualite->contenu), 100) }}</p>
                            <a href="#" class="news-link">Lire plus <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="text-center mt-4">
            {{ $actualites->links() }}
        </div>

    </div>
</section>

@endsection
