@extends('partials.templates')
@section('content')
  <!-- Hero Section -->
 <!-- Hero Banner -->
 <section class="about-hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="hero-title" data-aos="fade-up">Nos dernières actualités</h1>
                <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="100">Découvrez l'ADN de WorldPerformance et ce qui nous rend uniques</p>
                <div class="hero-breadcrumb" data-aos="fade-up" data-aos-delay="200">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Nos Actualités</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-overlay"></div>
</section>

<!-- News Section -->
<section class="news-section section-padding">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-subtitle">Nos dernières actualités</span>
            <h2 class="section-title">Nouvelles de WorldPerformance</h2>
            <div class="section-divider mx-auto"></div>
        </div>

        <div class="row">
            <!-- Featured News -->
            <div class="col-lg-12 mb-5" data-aos="fade-up">
                <div class="featured-news-card">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <div class="featured-news-image">
                                <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80"
                                     alt="Featured News"
                                     class="img-fluid">
                                <div class="news-date-badge">
                                    <span class="date-day">15</span>
                                    <span class="date-month">Juin</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" style="padding: 20px;">
                            <div class="featured-news-content">
                                <div class="news-meta">
                                    <span class="meta-category">Événement</span>
                                    <span class="meta-comments"><i class="far fa-comment"></i> 8 commentaires</span>
                                </div>
                                <h3 class="news-title">WorldPerformance célèbre 10 ans d'excellence en conseil</h3>
                                <p class="news-excerpt">Nous avons marqué notre décennie d'existence par une soirée de gala réunissant clients, partenaires et collaborateurs. Retour sur cet événement marquant qui a souligné notre engagement continu envers l'excellence.</p>
                                <a href="news-single.html" class="btn btn-primary">Lire la suite</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- News Grid -->
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="news-card">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                             alt="News 1"
                             class="img-fluid">
                        <div class="news-date">
                            <span class="date-day">10</span>
                            <span class="date-month">Juin</span>
                        </div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="meta-category">Annonce</span>
                            <span class="meta-comments"><i class="far fa-comment"></i> 3</span>
                        </div>
                        <h3 class="news-title">Lancement de notre nouveau programme de formation digitale</h3>
                        <p class="news-excerpt">WP-Academy élargit son offre avec des formations 100% en ligne adaptées aux professionnels en mobilité.</p>
                        <a href="news-single.html" class="news-link">Lire plus <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="news-card">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                             alt="News 2"
                             class="img-fluid">
                        <div class="news-date">
                            <span class="date-day">28</span>
                            <span class="date-month">Mai</span>
                        </div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="meta-category">Partenariat</span>
                            <span class="meta-comments"><i class="far fa-comment"></i> 5</span>
                        </div>
                        <h3 class="news-title">Nouveau partenariat avec la Chambre de Commerce</h3>
                        <p class="news-excerpt">WorldPerformance s'associe à la CCB pour offrir des formations subventionnées aux PME locales.</p>
                        <a href="news-single.html" class="news-link">Lire plus <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="news-card">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                             alt="News 3"
                             class="img-fluid">
                        <div class="news-date">
                            <span class="date-day">15</span>
                            <span class="date-month">Mai</span>
                        </div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="meta-category">Récompense</span>
                            <span class="meta-comments"><i class="far fa-comment"></i> 12</span>
                        </div>
                        <h3 class="news-title">WorldPerformance reçoit le prix de l'Excellence en Conseil</h3>
                        <p class="news-excerpt">Notre cabinet a été distingué lors des Trophées de l'Entreprise Africaine pour notre approche innovante.</p>
                        <a href="news-single.html" class="news-link">Lire plus <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="news-card">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80"
                             alt="News 4"
                             class="img-fluid">
                        <div class="news-date">
                            <span class="date-day">05</span>
                            <span class="date-month">Mai</span>
                        </div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="meta-category">Événement</span>
                            <span class="meta-comments"><i class="far fa-comment"></i> 7</span>
                        </div>
                        <h3 class="news-title">Forum sur la Transformation Digitale des PME</h3>
                        <p class="news-excerpt">Retour sur notre forum annuel qui a réuni plus de 200 entrepreneurs autour des enjeux du numérique.</p>
                        <a href="news-single.html" class="news-link">Lire plus <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="news-card">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                             alt="News 5"
                             class="img-fluid">
                        <div class="news-date">
                            <span class="date-day">22</span>
                            <span class="date-month">Avr</span>
                        </div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="meta-category">Publication</span>
                            <span class="meta-comments"><i class="far fa-comment"></i> 4</span>
                        </div>
                        <h3 class="news-title">Sortie de notre Livre Blanc sur la Gestion des Risques</h3>
                        <p class="news-excerpt">Découvrez notre dernier rapport sur les meilleures pratiques de gestion des risques en contexte africain.</p>
                        <a href="news-single.html" class="news-link">Lire plus <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="news-card">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                             alt="News 6"
                             class="img-fluid">
                        <div class="news-date">
                            <span class="date-day">10</span>
                            <span class="date-month">Avr</span>
                        </div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="meta-category">Recrutement</span>
                            <span class="meta-comments"><i class="far fa-comment"></i> 9</span>
                        </div>
                        <h3 class="news-title">WorldPerformance renforce son équipe de consultants</h3>
                        <p class="news-excerpt">Cinq nouveaux experts rejoignent nos rangs pour élargir notre offre de services en ingénierie financière.</p>
                        <a href="news-single.html" class="news-link">Lire plus <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <nav aria-label="News pagination" class="mt-5" data-aos="fade-up">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Précédent</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Suivant</a>
                </li>
            </ul>
        </nav>
    </div>
</section>

<!-- Events Section -->
<section class="events-section section-padding bg-light">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-subtitle">Agenda</span>
            <h2 class="section-title">Nos prochains événements</h2>
            <div class="section-divider mx-auto"></div>
        </div>

        <div class="row">
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="event-card">
                    <div class="event-date">
                        <span class="date-day">25</span>
                        <span class="date-month">Juin</span>
                    </div>
                    <div class="event-content">
                        <div class="event-meta">
                            <span><i class="fas fa-map-marker-alt"></i> Hôtel Golden Tulip, Cotonou</span>
                            <span><i class="fas fa-clock"></i> 09:00 - 17:00</span>
                        </div>
                        <h3 class="event-title">Atelier : Gestion financière pour les PME</h3>
                        <p class="event-excerpt">Formation intensive d'une journée sur les fondamentaux de la gestion financière adaptée aux petites et moyennes entreprises.</p>
                        <div class="event-footer">
                            <a href="#" class="btn btn-outline-primary btn-sm">S'inscrire</a>
                            <a href="#" class="event-link">Plus de détails <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="event-card">
                    <div class="event-date">
                        <span class="date-day">05</span>
                        <span class="date-month">Juil</span>
                    </div>
                    <div class="event-content">
                        <div class="event-meta">
                            <span><i class="fas fa-map-marker-alt"></i> En ligne</span>
                            <span><i class="fas fa-clock"></i> 15:00 - 17:00</span>
                        </div>
                        <h3 class="event-title">Webinaire : Nouveautés fiscales 2023</h3>
                        <p class="event-excerpt">Tour d'horizon des principales modifications réglementaires et leurs implications pour les entreprises.</p>
                        <div class="event-footer">
                            <a href="#" class="btn btn-outline-primary btn-sm">S'inscrire</a>
                            <a href="#" class="event-link">Plus de détails <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="event-card">
                    <div class="event-date">
                        <span class="date-day">15</span>
                        <span class="date-month">Juil</span>
                    </div>
                    <div class="event-content">
                        <div class="event-meta">
                            <span><i class="fas fa-map-marker-alt"></i> Siège WorldPerformance</span>
                            <span><i class="fas fa-clock"></i> 08:30 - 12:30</span>
                        </div>
                        <h3 class="event-title">Matinée Portes Ouvertes WP-Academy</h3>
                        <p class="event-excerpt">Découvrez nos locaux, rencontrez nos formateurs et explorez notre catalogue de formations professionnelles.</p>
                        <div class="event-footer">
                            <a href="#" class="btn btn-outline-primary btn-sm">S'inscrire</a>
                            <a href="#" class="event-link">Plus de détails <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="event-card">
                    <div class="event-date">
                        <span class="date-day">28</span>
                        <span class="date-month">Juil</span>
                    </div>
                    <div class="event-content">
                        <div class="event-meta">
                            <span><i class="fas fa-map-marker-alt"></i> Chambre de Commerce, Cotonou</span>
                            <span><i class="fas fa-clock"></i> 09:00 - 13:00</span>
                        </div>
                        <h3 class="event-title">Conférence : Transformation digitale en Afrique</h3>
                        <p class="event-excerpt">Table ronde avec des experts internationaux sur les défis et opportunités du numérique pour les entreprises africaines.</p>
                        <div class="event-footer">
                            <a href="#" class="btn btn-outline-primary btn-sm">S'inscrire</a>
                            <a href="#" class="event-link">Plus de détails <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-4" data-aos="fade-up">
            <a href="#" class="btn btn-primary">Voir tous les événements</a>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="newsletter-section section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                <h2 class="newsletter-title">Restez informés</h2>
                <p class="newsletter-text">Abonnez-vous à notre newsletter pour recevoir nos dernières actualités, événements et conseils professionnels directement dans votre boîte mail.</p>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <form class="newsletter-form">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Votre adresse email" required>
                        <button class="btn btn-primary" type="submit">S'abonner</button>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" id="newsletterConsent" required>
                        <label class="form-check-label" for="newsletterConsent">
                            J'accepte de recevoir les communications de WorldPerformance
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection