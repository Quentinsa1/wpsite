@extends('partials.templates')

@section('content')
<section class="blog-single-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <article class="single-post" data-aos="fade-up">
                    <!-- Image principale -->
                    @if ($post->image)
                    <div class="post-thumbnail mb-4">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid rounded">
                    </div>
                    @endif

                    <!-- Meta infos -->
                    <div class="post-meta mb-3">
                        <span class="me-3"><i class="far fa-calendar-alt"></i> {{ $post->created_at->format('d M Y') }}</span>
                        <span class="me-3"><i class="far fa-user"></i> {{ $post->author ?? 'Auteur inconnu' }}</span>
                        <span><i class="far fa-comments"></i> {{ $post->comments_count ?? 0 }} commentaires</span>
                    </div>

                    <!-- Titre -->
                    <h1 class="post-title mb-4">{{ $post->title }}</h1>

                    <!-- Contenu -->
                    <div class="post-content mb-5">
                        {!! nl2br(e($post->content)) !!}
                    </div>

                    <!-- Catégorie -->
                    @if ($post->category)
                    <div class="post-categories">
                        <span class="badge bg-secondary">{{ $post->category }}</span>
                    </div>
                    @endif

                    <!-- Bouton retour -->
                    <div class="mt-5">
                        <a href="{{ route('website.blogs.index') }}" class="btn btn-outline-primary">
                            <i class="fas fa-arrow-left"></i> Retour au blog
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
@endsection
