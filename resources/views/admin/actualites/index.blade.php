<div class="row">
    @foreach($actualites as $actualite)
        <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up">
            <div class="news-card">
                <div class="news-image">
                    <img src="{{ asset('storage/' . $actualite->image) }}" alt="{{ $actualite->titre }}" class="img-fluid">
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
                    <p class="news-excerpt">{{ Str::limit(strip_tags($actualite->contenu), 120) }}</p>
                    <a href="{{ route('admin.actualites.show', $actualite->id) }}" class="news-link">
                        Lire plus <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>

<!-- Pagination -->
<div class="d-flex justify-content-center mt-4">
    {{ $actualites->links() }}
</div>
