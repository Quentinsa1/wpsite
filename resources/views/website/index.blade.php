@extends('partials.templates')
@section('content')
  <!-- Hero Section -->
  <section class="hero-section">
    <div class="hero-slider">
        <div class="hero-slide active" style="background-image: url('https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80')">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <h1 class="hero-title animate__animated animate__fadeInUp" data-aos="fade-up" data-aos-delay="100">Expertise en Conseil & Formation</h1>
                        <p class="hero-text animate__animated animate__fadeInUp" data-aos="fade-up" data-aos-delay="200">Cabinet béninois innovant spécialisé dans l'accompagnement des entreprises grâce à des solutions sur-mesure et un engagement total envers l'excellence. Reconnu pour son approche moderne et son soutien client personnalisé.</p>
                        <div class="hero-buttons animate__animated animate__fadeInUp" data-aos="fade-up" data-aos-delay="300">
                            <a href="#services" class="btn btn-primary me-3">Nos Services</a>
                            <a href="{{ route('website.contact')}}" class="btn btn-outline-light">Contactez-nous</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80')">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <h1 class="hero-title">Formations Professionnelles Certifiantes</h1>
                        <p class="hero-text animate__animated animate__fadeInUp" data-aos="fade-up" data-aos-delay="200">Développez l'expertise de vos équipes avec les programmes sur-mesure de WP Academy</p>
                        <div class="hero-buttons animate__animated animate__fadeInUp" data-aos="fade-up" data-aos-delay="300">
                            <a href="#formations" class="btn btn-primary me-3">Découvrir</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80')">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <h1 class="hero-title">Solutions RH Stratégiques</h1>
                        <p class="hero-text animate__animated animate__fadeInUp" data-aos="fade-up" data-aos-delay="200">Optimisez votre capital humain grâce à notre expertise en gestion des talents</p>
                        <div class="hero-buttons animate__animated animate__fadeInUp" data-aos="fade-up" data-aos-delay="300">
                            <a href="#rh" class="btn btn-primary me-3">Expertise RH</a>
                            <a href="#contact" class="btn btn-outline-light">Diagnostic gratuit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-slider-controls">
        <button class="slider-prev"><i class="fas fa-chevron-left"></i></button>
        <button class="slider-next"><i class="fas fa-chevron-right"></i></button>
    </div>
    <div class="hero-slider-dots"></div>
</section>

<!-- About Section -->
<section class="about-section section-padding" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                <div class="about-image">
                    <div class="image-wrapper">
                        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80"
                             alt="Équipe WorldPerformance"
                             class="img-fluid main-img">
                        <!-- Suppression du badge d'expérience -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="section-header">
                    <span class="section-subtitle">Notre identité</span>
                    <h2 class="section-title">WorldPerformance Sarl</h2>
                    <div class="section-divider"></div>
                </div>
                <p class="about-text">Fondé en 2025 au Bénin, WorldPerformance (WP) est un cabinet de conseil dynamique spécialisé en ingénierie de formation et accompagnement stratégique. Nous soutenons les entreprises africaines grâce à l'expertise pointue de nos consultants et à nos partenariats innovants.</p>
                <div class="about-features">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Mission</h4>
                            <p>Apporter des solutions agiles et sur-mesure pour booster la performance des entreprises africaines.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Vision</h4>
                            <p>Devenir le partenaire de référence de la transformation organisationnelle en Afrique francophone.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Engagement</h4>
                            <p>Fournir un accompagnement personnalisé fondé sur l'innovation et l'éthique professionnelle.</p>
                        </div>
                    </div>
                </div>
<!--                 <a href="#valeurs" class="btn btn-primary mt-4">Nos valeurs</a>
 -->            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<!-- Services Section -->
<section class="services-section section-padding bg-light" id="services">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-subtitle">Domaines d'excellence</span>
            <h2 class="section-title">Expertises Conseil</h2>
            <div class="section-divider mx-auto"></div>
            <p class="mt-3">Solutions professionnelles adaptées aux défis des entreprises africaines</p>
        </div>
        <div class="row g-4">
            @foreach ($services as $index => $service)
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ 100 + ($index * 100) }}">
                <div class="service-card">
                    <div class="service-icon">
                        @if ($service->icon)
                            <img src="{{ asset('storage/' . $service->icon) }}" alt="Icône {{ $service->titre }}" style="width: 40px; height: 40px;">
                        @else
                            {{-- Si tu préfères une icône par défaut : --}}
                            <i class="fas fa-cogs"></i>
                        @endif
                    </div>
                    <h3 class="service-title">{{ $service->titre }}</h3>
<p class="service-text">
    <span class="short-desc">{{ Str::limit($service->description, 100) }}</span>
    <span class="full-desc d-none">{{ $service->description }}</span>
</p>
<button class="btn btn-link btn-sm see-more-btn">Voir plus</button>
                   
                    {{-- <a href="#" class="service-link">En savoir plus <i class="fas fa-arrow-right"></i></a> --}}
                    <div class="hover-effect"></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section premium-section section-padding">
<div class="container">
    <div class="section-header text-center" data-aos="fade-up">
        <span class="section-subtitle">Ils nous font confiance</span>
        <h2 class="section-title">Premières réussites</h2>
        <div class="section-divider mx-auto"></div>
        <p class="section-description mt-4">Découvrez nos premières transformations réussies</p>
    </div>

    <div class="testimonials-carousel swiper-container" data-aos="fade-up">
        <div class="swiper-wrapper">
            <!-- Testimonial Slide 1 -->
            <!-- <div class="testimonial-slide swiper-slide">
                <div class="testimonial-card">
                    <div class="testimonial-quote-icon">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-content">
                        <p class="testimonial-text">"Dès notre collaboration début 2025, WorldPerformance a redéfini notre approche financière avec des solutions innovantes adaptées à notre marché."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="https://randomuser.me/api/portraits/men/42.jpg" alt="Olivier Dossou" class="img-fluid">
                            <div class="author-verified">
                                <i class="fas fa-check-circle"></i>
                            </div>
                        </div>
                        <div class="author-info">
                            <h4 class="author-name">Olivier Dossou</h4>
                            <span class="author-position">Directeur Général, AgroTech SA</span>
                        </div>
                    </div>
                    <div class="testimonial-logo">
                        <img src="https://via.placeholder.com/80x30?text=AgroTech" alt="Company Logo">
                    </div>
                </div>
            </div> -->

            <!-- Testimonial Slide 2 -->
            <!-- <div class="testimonial-slide swiper-slide">
                <div class="testimonial-card">
                    <div class="testimonial-quote-icon">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-content">
                        <p class="testimonial-text">"Les formations WP Academy 2025 ont équipé nos équipes de compétences concrètes immédiatement applicables dans nos opérations quotidiennes."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="https://randomuser.me/api/portraits/women/63.jpg" alt="Aïchatou Bello" class="img-fluid">
                            <div class="author-verified">
                                <i class="fas fa-check-circle"></i>
                            </div>
                        </div>
                        <div class="author-info">
                            <h4 class="author-name">Aïchatou Bello</h4>
                            <span class="author-position">DRH, Finances & Partners</span>
                        </div>
                    </div>
                    <div class="testimonial-logo">
                        <img src="https://via.placeholder.com/80x30?text=FnP" alt="Company Logo">
                    </div>
                </div>
            </div> -->

            <!-- Testimonial Slide 3 -->
            <!-- <div class="testimonial-slide swiper-slide">
                <div class="testimonial-card">
                    <div class="testimonial-quote-icon">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-content">
                        <p class="testimonial-text">"L'audit juridique de WorldPerformance en 2025 a sécurisé nos investissements régionaux. Leur maîtrise du droit OHADA nous a évité des risques majeurs."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Kévin Adékambi" class="img-fluid">
                            <div class="author-verified">
                                <i class="fas fa-check-circle"></i>
                            </div>
                        </div>
                        <div class="author-info">
                            <h4 class="author-name">Kévin Adékambi</h4>
                            <span class="author-position">Directeur Juridique, Groupe TransAfrik</span>
                        </div>
                    </div>
                    <div class="testimonial-logo">
                        <img src="https://via.placeholder.com/80x30?text=TransAfrik" alt="Company Logo">
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>

<!-- Blog Section -->
<section class="blog-section section-padding" id="insights">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <div class="row align-items-end">
                <div class="col-md-8">
                    <span class="section-subtitle">Expertises 2025</span>
                    <h2 class="section-title">Insights Stratégiques</h2>
                </div>
               <!--  <div class="col-md-4 text-md-end">
                    <a href="#blog" class="btn btn-link">Tous nos insights <i class="fas fa-arrow-right"></i></a>
                </div> -->
            </div>
            <div class="section-divider"></div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="blog-card">
                    <div class="blog-image">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Optimisation fiscale" class="img-fluid">
                        <div class="blog-date">
                            <span class="date-day">15</span>
                            <span class="date-month">Octobre</span>
                            <span class="date-year">2025</span>
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="meta-category">Finance</span>
                        </div>
                        <h3 class="blog-title">Optimisation fiscale en Afrique francophone</h3>
                        <p class="blog-excerpt">Stratégies conformes aux nouvelles réglementations UEMOA pour les entreprises locales et internationales.</p>
<!--                         <a href="#article1" class="blog-link">Lire l'analyse <i class="fas fa-arrow-right"></i></a>
 -->                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="blog-card">
                    <div class="blog-image">
                        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80" alt="Gestion des talents" class="img-fluid">
                        <div class="blog-date">
                            <span class="date-day">28</span>
                            <span class="date-month">Décembre</span>
                            <span class="date-year">2025</span>
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="meta-category">RH</span>
                        </div>
                        <h3 class="blog-title">Rétention des talents en contexte africain</h3>
                        <p class="blog-excerpt">Stratégies innovantes adaptées aux spécificités des marchés de l'emploi en Afrique de l'Ouest.</p>
<!--                         <a href="#article2" class="blog-link">Lire l'étude <i class="fas fa-arrow-right"></i></a>
 -->                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="blog-card">
                    <div class="blog-image">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Transformation digitale" class="img-fluid">
                        <div class="blog-date">
                            <span class="date-day">10</span>
                            <span class="date-month">Mai</span>
                            <span class="date-year">2025</span>
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="meta-category">Technologie</span>
                        </div>
                        <h3 class="blog-title">Transformation digitale des PME béninoises</h3>
                        <p class="blog-excerpt">Roadmap opérationnelle pour une transition technologique réussie dans un contexte africain.</p>
<!--                         <a href="#article3" class="blog-link">Découvrir <i class="fas fa-arrow-right"></i></a>
 -->                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Job Offers Section -->
<section class="jobs-section bg-light section-padding" id="carrieres">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <div class="row align-items-end">
                <div class="col-md-8">
                    <span class="section-subtitle">Rejoignez notre équipe</span>
                    <h2 class="section-title">Carrières chez WP</h2>
                </div>
                <div class="col-md-4 text-md-end">
                    <a href="{{ route('website.jobs.index') }}" class="btn btn-link">Toutes nos offres <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="section-divider"></div>
        </div>
        <div class="row">
            @forelse($jobs as $job)
                <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="{{ 100 * $loop->iteration }}">
                    <div class="job-card">
                        @if($loop->first)
                            <div class="job-badge">Nouveau</div>
                        @endif
                        <div class="job-header">
                            <h3 class="job-title">{{ $job->title }}</h3>
                            <div class="job-meta">
                                <span><i class="fas fa-map-marker-alt"></i> {{ $job->location }}</span>
                                <span><i class="fas fa-clock"></i> {{ $job->type }}</span>
                                {{-- Optionnel : ici tu peux afficher une compétence importante ou autre --}}
                            </div>
                        </div>
                        <div class="job-description">
                            <p>{{ Str::limit($job->description, 150) }}</p>
                        </div>
                        <div class="job-footer">
                            <div class="job-tags">
                                @if($job->skills)
                                    @foreach(explode(',', $job->skills) as $skill)
                                        <span>{{ trim($skill) }}</span>
                                    @endforeach
                                @endif
                            </div>
                            <a href="#" class="btn btn-sm btn-primary">Postuler</a>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center">Aucune offre d'emploi disponible pour le moment.</p>
            @endforelse
        </div>
    </div>
</section>


<!-- Contact CTA Section -->
<section class="contact-cta-section section-padding" id="contact">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0" data-aos="fade-right">
                <h2 class="cta-title">Prêt à transformer votre entreprise en 2025 ?</h2>
                <p class="cta-text">Nos experts vous accompagnent dans la nouvelle ère des affaires.</p>
                <div class="contact-info mt-4">
                    <div class="info-item">
                        <i class="fas fa-envelope me-3"></i>
                        <span>contact@wpconseils.net</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt me-3"></i>
                        <span>Cotonou, Bénin</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-calendar me-3"></i>
                        <span>Fondé en 2025</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-lg-end" data-aos="fade-left">
                <a href="https://wa.me/+2290143105555" class="btn btn-primary btn-lg">Prendre rendez-vous</a>
            </div>
        </div>
    </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.see-more-btn').forEach(function(button) {
        button.addEventListener('click', function() {
            const serviceCard = this.closest('.service-card');
            const shortDesc = serviceCard.querySelector('.short-desc');
            const fullDesc = serviceCard.querySelector('.full-desc');
            if (fullDesc.classList.contains('d-none')) {
                fullDesc.classList.remove('d-none');
                shortDesc.classList.add('d-none');
                this.textContent = 'Voir moins';
            } else {
                fullDesc.classList.add('d-none');
                shortDesc.classList.remove('d-none');
                this.textContent = 'Voir plus';
            }
        });
    });
});
</script>

@endsection