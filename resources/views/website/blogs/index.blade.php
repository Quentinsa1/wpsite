@extends('partials.templates')

@section('content')
<!-- Hero Banner -->
<section class="about-hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="hero-title" data-aos="fade-up">Blog WorldPerformance</h1>
                <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="100">Conseils, analyses et tendances par nos experts</p>
                <div class="hero-breadcrumb" data-aos="fade-up" data-aos-delay="200">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('website.index') }}">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-overlay"></div>
</section>

<!-- Blog Section -->
<section class="blog-main-section section-padding">
    <div class="container">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <div class="section-header" data-aos="fade-up">
                    <h2 class="section-title">Derniers articles</h2>
                    <div class="section-divider"></div>
                </div>

                <!-- Article à la une -->
                @if($vedette)
                <article class="featured-blog-post mb-5" data-aos="fade-up">
                    <div class="post-image">
                        <img src="{{ $vedette->image ?? 'https://via.placeholder.com/800x400' }}" alt="Featured Post" class="img-fluid rounded">
                        <div class="post-badge">À la une</div>
                    </div>
                    <div class="post-meta">
                        <span class="post-date"><i class="far fa-calendar-alt"></i> {{ $vedette->created_at->format('d M Y') }}</span>
                        <span class="post-author"><i class="far fa-user"></i> Par {{ $vedette->author ?? 'Admin' }}</span>
                    </div>
                    <h2 class="post-title"><a href="{{ route('website.blogs.show', $vedette->slug) }}">{{ $vedette->title }}</a></h2>
                    <div class="post-excerpt">
                        <p>{{ Str::limit(strip_tags($vedette->excerpt), 200) }}</p>
                    </div>
                    <div class="post-footer">
                        <a href="{{ route('website.blogs.show', $vedette->slug) }}" class="btn btn-primary">Lire l'article</a>
                        <div class="post-categories">
                            @foreach($vedette->categories ?? [] as $cat)
                                <span class="badge bg-secondary">{{ $cat->name }}</span>
                            @endforeach
                        </div>
                    </div>
                </article>
                @endif

                <!-- Articles en grille -->
                <div class="row">
                    @forelse($posts as $post)
                        <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                            <article class="blog-post-card">
                                <div class="post-image">
                                    <img src="{{ $post->image ?? 'https://via.placeholder.com/600x300' }}" alt="{{ $post->title }}" class="img-fluid">
                                    <div class="post-date">
                                        <span class="date-day">{{ $post->created_at->format('d') }}</span>
                                        <span class="date-month">{{ $post->created_at->translatedFormat('M') }}</span>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="post-meta">
                                        <span><i class="far fa-user"></i> {{ $post->author ?? 'Admin' }}</span>
                                    </div>
                                    <h3 class="post-title">
                                        <a href="{{ route('website.blogs.show', $post->slug) }}">{{ $post->title }}</a>
                                    </h3>
                                    <p class="post-excerpt">{{ Str::limit(strip_tags($post->excerpt), 120) }}</p>
                                    <a href="" class="post-link">Lire plus <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </article>
                        </div>
                    @empty
                        <div class="col-12">
                            <p>Aucun article disponible pour le moment.</p>
                        </div>
                    @endforelse
                </div>

                <!-- Pagination -->
                <div class="mt-5" data-aos="fade-up">
                    {{ $posts->links('pagination::bootstrap-4') }}
                </div>
            </div>

            
        </div>
    </div>
</section>

<!-- CTA -->
<section class="blog-cta-section section-padding bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0" data-aos="fade-right">
                <h2 class="cta-title">Vous souhaitez contribuer à notre blog ?</h2>
                <p class="cta-text">Nous publions régulièrement des articles d'experts. Si vous avez une expertise à partager, contactez-nous !</p>
            </div>
            <div class="col-lg-4 text-lg-end" data-aos="fade-left">
                <a href="{{ route('website.contact') }}" class="btn btn-light">Proposer un article</a>
            </div>
        </div>
    </div>
</section>
@endsection
