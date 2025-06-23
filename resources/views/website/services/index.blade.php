@extends('partials.templates')
@section('content')
  <!-- Hero Section -->
  <!-- Hero Banner -->
  <section class="about-hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="hero-title" data-aos="fade-up">Nos Services</h1>
                <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="100">Découvrez l'ADN de WorldPerformance et ce qui nous rend uniques</p>
                <div class="hero-breadcrumb" data-aos="fade-up" data-aos-delay="200">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Nos Services</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-overlay"></div>
</section>


<!-- Services Overview -->
<section class="services-overview-section section-padding">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-subtitle">Nos domaines d'expertise</span>
            <h2 class="section-title">Solutions Professionnelles</h2>
            <div class="section-divider mx-auto"></div>
            <p class="section-description mx-auto mt-3">WorldPerformance offre une gamme complète de services pour accompagner votre entreprise à chaque étape de son développement.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card-alt">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="service-title">Ingénierie financière & des risques</h3>
                    <p class="service-text">Solutions avancées pour la gestion financière et l'analyse des risques. Elaboration de plans d'affaires, formation, conseil en financement, audit financier et pilotage de la performance.</p>
                    <a href="" class="service-link">En savoir plus <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card-alt">
                    <div class="service-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="service-title">Conseils et Ingénierie informatique</h3>
                    <p class="service-text">Stratégies IT et solutions technologiques pour votre entreprise. Audit des systèmes, gestion de projets SI, développement d'applications et sites web, accompagnement technologique.</p>
                    <a href="" class="service-link">En savoir plus <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card-alt">
                    <div class="service-icon">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <h3 class="service-title">Conseil comptable et fiscalité</h3>
                    <p class="service-text">Optimisation fiscale et gestion comptable conforme aux normes. Organisation comptable, audit fiscal, gestion des déclarations et défense lors des contrôles fiscaux.</p>
                    <a href="" class="service-link">En savoir plus <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card-alt">
                    <div class="service-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3 class="service-title">Assistance juridique</h3>
                    <p class="service-text">Accompagnement juridique complet pour protéger vos intérêts. Création et restructuration de sociétés, rédaction d'actes, audits juridiques et formalités administratives.</p>
                    <a href="" class="service-link">En savoir plus <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card-alt">
                    <div class="service-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="service-title">Assistance RH</h3>
                    <p class="service-text">Gestion optimale des ressources humaines et développement des talents. Conseil en stratégie RH, gestion des carrières, formation et développement des compétences.</p>
                    <a href="" class="service-link">En savoir plus <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card-alt">
                    <div class="service-icon">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <h3 class="service-title">Marketing & Communication</h3>
                    <p class="service-text">Stratégies marketing innovantes pour développer votre marque. Solutions digitales et traditionnelles, création graphique, rédaction, photographie et production vidéo.</p>
                    <a href="" class="service-link">En savoir plus <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Process -->
<section class="process-section section-padding bg-light">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-subtitle">Notre approche</span>
            <h2 class="section-title">Comment nous travaillons</h2>
            <div class="section-divider mx-auto"></div>
            <p class="section-description mx-auto mt-3">Une méthodologie éprouvée pour garantir des résultats tangibles à nos clients.</p>
        </div>

        <div class="process-steps">
            <div class="process-step" data-aos="fade-up" data-aos-delay="100">
                <div class="step-number">1</div>
                <div class="step-content">
                    <h3 class="step-title">Analyse des besoins</h3>
                    <p class="step-text">Rencontre initiale pour comprendre vos objectifs, défis et contraintes spécifiques.</p>
                </div>
            </div>

            <div class="process-step" data-aos="fade-up" data-aos-delay="200">
                <div class="step-number">2</div>
                <div class="step-content">
                    <h3 class="step-title">Élaboration de la solution</h3>
                    <p class="step-text">Conception d'une stratégie sur mesure adaptée à votre contexte et à vos ressources.</p>
                </div>
            </div>

            <div class="process-step" data-aos="fade-up" data-aos-delay="300">
                <div class="step-number">3</div>
                <div class="step-content">
                    <h3 class="step-title">Validation conjointe</h3>
                    <p class="step-text">Présentation et ajustement de la solution pour s'assurer qu'elle répond parfaitement à vos attentes.</p>
                </div>
            </div>

            <div class="process-step" data-aos="fade-up" data-aos-delay="400">
                <div class="step-number">4</div>
                <div class="step-content">
                    <h3 class="step-title">Mise en œuvre</h3>
                    <p class="step-text">Déploiement de la solution avec un accompagnement personnalisé tout au long du processus.</p>
                </div>
            </div>

            <div class="process-step" data-aos="fade-up" data-aos-delay="500">
                <div class="step-number">5</div>
                <div class="step-content">
                    <h3 class="step-title">Suivi & Évaluation</h3>
                    <p class="step-text">Mesure des résultats et ajustements si nécessaire pour garantir l'atteinte des objectifs.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Service -->
<section class="featured-service-section section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                <div class="featured-service-image">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                         alt="Formation professionnelle"
                         class="img-fluid rounded">
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="section-header">
                    <span class="section-subtitle">Service vedette</span>
                    <h2 class="section-title">WP-Academy : Nos Formations Professionnelles</h2>
                    <div class="section-divider"></div>
                </div>
                <p class="service-description">Notre centre de formation WP-Academy propose des programmes certifiants conçus pour développer les compétences clés de vos collaborateurs et accélérer la croissance de votre entreprise.</p>

                <div class="service-features">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Formations sur mesure</h4>
                            <p>Programmes adaptés à vos besoins spécifiques et à votre secteur d'activité.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Formateurs experts</h4>
                            <p>Intervenants professionnels avec une expérience terrain significative.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Modalités flexibles</h4>
                            <p>En présentiel, en entreprise ou à distance via notre plateforme e-learning.</p>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <a href="#" class="btn btn-primary me-3">Découvrir nos formations</a>
                    <a href="#" class="btn btn-outline-primary">Demander un programme</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Training Categories -->
<section class="training-section section-padding bg-light">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-subtitle">Domaines de formation</span>
            <h2 class="section-title">Nos Catégories de Formation</h2>
            <div class="section-divider mx-auto"></div>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="training-category">
                    <div class="category-icon">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h3 class="category-title">Gestion & Finance</h3>
                    <ul class="category-topics">
                        <li>Comptabilité analytique</li>
                        <li>Contrôle de gestion</li>
                        <li>Gestion des risques</li>
                        <li>Analyse financière</li>
                    </ul>
                    <a href="#" class="category-link">Voir les formations <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="training-category">
                    <div class="category-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="category-title">Informatique & Digital</h3>
                    <ul class="category-topics">
                        <li>Développement web</li>
                        <li>Cybersécurité</li>
                        <li>Gestion de projet IT</li>
                        <li>Transformation digitale</li>
                    </ul>
                    <a href="#" class="category-link">Voir les formations <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="training-category">
                    <div class="category-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="category-title">Ressources Humaines</h3>
                    <ul class="category-topics">
                        <li>Gestion des talents</li>
                        <li>Droit du travail</li>
                        <li>Leadership</li>
                        <li>Communication interne</li>
                    </ul>
                    <a href="#" class="category-link">Voir les formations <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="training-category">
                    <div class="category-icon">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <h3 class="category-title">Marketing & Vente</h3>
                    <ul class="category-topics">
                        <li>Stratégie digitale</li>
                        <li>Branding</li>
                        <li>Négociation</li>
                        <li>Relation client</li>
                    </ul>
                    <a href="#" class="category-link">Voir les formations <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="text-center mt-5" data-aos="fade-up">
            <a href="#" class="btn btn-outline-primary">Voir toutes nos formations</a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section section-padding">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-subtitle">Témoignages</span>
            <h2 class="section-title">Ce que disent nos clients</h2>
            <div class="section-divider mx-auto"></div>
        </div>

        <div class="testimonials-slider" data-aos="fade-up">
            <div class="testimonial-slide">
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-content">
                        <p class="testimonial-text">"L'accompagnement de WorldPerformance dans notre transformation digitale a été déterminant. Leurs consultants ont su comprendre nos besoins spécifiques et proposer des solutions adaptées à notre contexte."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="https://randomuser.me/api/portraits/men/42.jpg" alt="Olivier Dossou">
                        </div>
                        <div class="author-info">
                            <h4>Olivier Dossou</h4>
                            <span>Directeur Général, AgroTech SA</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimonial-slide">
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="testimonial-content">
                        <p class="testimonial-text">"Les formations de WP-Academy ont permis à nos équipes d'acquérir des compétences essentielles en gestion financière. La qualité des intervenants et le suivi personnalisé ont fait toute la différence."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="https://randomuser.me/api/portraits/women/63.jpg" alt="Aïchatou Bello">
                        </div>
                        <div class="author-info">
                            <h4>Aïchatou Bello</h4>
                            <span>DRH, Finances & Partners</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimonial-slide">
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-content">
                        <p class="testimonial-text">"L'audit juridique réalisé par WorldPerformance nous a permis d'identifier et de corriger plusieurs faiblesses dans nos contrats. Leur expertise a été précieuse pour sécuriser nos opérations."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Kévin Adékambi">
                        </div>
                        <div class="author-info">
                            <h4>Kévin Adékambi</h4>
                            <span>Directeur Juridique, Groupe TransAfrik</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- CTA Section -->
<section class="services-cta-section section-padding bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0" data-aos="fade-right">
                <h2 class="cta-title">Prêt à transformer votre entreprise ?</h2>
                <p class="cta-text">Discutons de vos besoins et trouvons ensemble la solution la plus adaptée à vos objectifs.</p>
            </div>
            <div class="col-lg-4 text-lg-end" data-aos="fade-left">
                <a href="contact.html" class="btn btn-light me-2">Nous contacter</a>
                <a href="#" class="btn btn-outline-light">Demander un devis</a>
            </div>
        </div>
    </div>
</section>

@endsection