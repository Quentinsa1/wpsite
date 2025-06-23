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
                            <a href="#contact" class="btn btn-outline-light">Contactez-nous</a>
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
                        <p class="hero-text">Développez l'expertise de vos équipes avec les programmes sur-mesure de WP Academy</p>
                        <div class="hero-buttons">
                            <a href="#formations" class="btn btn-primary me-3">Découvrir</a>
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
                        <p class="hero-text">Optimisez votre capital humain grâce à notre expertise en gestion des talents</p>
                        <div class="hero-buttons">
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
                <a href="#valeurs" class="btn btn-primary mt-4">Nos valeurs</a>
            </div>
        </div>
    </div>
</section>

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
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="service-title">Ingénierie Financière</h3>
                    <p class="service-text">Diagnostics financiers, plans d'affaires, levée de fonds et pilotage de performance par nos experts certifiés.</p>
                    <ul class="service-features">
                        <li>Audits financiers</li>
                        <li>Stratégies de financement</li>
                        <li>Contrôle de gestion</li>
                    </ul>
                    <a href="#finance" class="service-link">Expertise détaillée <i class="fas fa-arrow-right"></i></a>
                    <div class="hover-effect"></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="service-title">Transformation Digitale</h3>
                    <p class="service-text">Stratégies IT, développement sur-mesure et cybersécurité pour votre croissance numérique.</p>
                    <ul class="service-features">
                        <li>Audits SI</li>
                        <li>Développement d'applications</li>
                        <li>Infrastructures cloud</li>
                    </ul>
                    <a href="#digital" class="service-link">Solutions IT <i class="fas fa-arrow-right"></i></a>
                    <div class="hover-effect"></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3 class="service-title">Conformité Juridique</h3>
                    <p class="service-text">Sécurisation juridique des opérations et protection des intérêts de votre entreprise.</p>
                    <ul class="service-features">
                        <li>Audits contractuels</li>
                        <li>Droit des affaires</li>
                        <li>Conformité OHADA</li>
                    </ul>
                    <a href="#juridique" class="service-link">Protection juridique <i class="fas fa-arrow-right"></i></a>
                    <div class="hover-effect"></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="service-title">Stratégie RH</h3>
                    <p class="service-text">Optimisation de votre gestion des talents et développement organisationnel.</p>
                    <ul class="service-features">
                        <li>GPEC</li>
                        <li>Politiques salariales</li>
                        <li>Transformation organisationnelle</li>
                    </ul>
                    <a href="#rh" class="service-link">Solutions RH <i class="fas fa-arrow-right"></i></a>
                    <div class="hover-effect"></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="service-title">WP Academy</h3>
                    <p class="service-text">Formations certifiantes adaptées aux besoins des professionnels africains.</p>
                    <ul class="service-features">
                        <li>Programmes sur-mesure</li>
                        <li>Certifications internationales</li>
                        <li>Digital Learning</li>
                    </ul>
                    <a href="#formations" class="service-link">Catalogue 2025 <i class="fas fa-arrow-right"></i></a>
                    <div class="hover-effect"></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <h3 class="service-title">Marketing Stratégique</h3>
                    <p class="service-text">Stratégies de croissance et déploiement de marque sur les marchés africains.</p>
                    <ul class="service-features">
                        <li>Études de marché</li>
                        <li>Stratégie digitale</li>
                        <li>Brand positioning</li>
                    </ul>
                    <a href="#marketing" class="service-link">Accroître votre influence <i class="fas fa-arrow-right"></i></a>
                    <div class="hover-effect"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section" data-aos="fade-up">
    <div class="container">
        <div class="cta-content text-center">
            <h2 class="cta-title">Audit stratégique gratuit</h2>
            <p class="cta-text">Bénéficiez d'un diagnostic initial sans engagement pour identifier vos leviers de performance.</p>
            <a href="#contact" class="btn btn-light">Demander mon audit</a>
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
                <div class="col-md-4 text-md-end">
                    <a href="#blog" class="btn btn-link">Tous nos insights <i class="fas fa-arrow-right"></i></a>
                </div>
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
                        <a href="#article1" class="blog-link">Lire l'analyse <i class="fas fa-arrow-right"></i></a>
                    </div>
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
                        <a href="#article2" class="blog-link">Lire l'étude <i class="fas fa-arrow-right"></i></a>
                    </div>
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
                        <a href="#article3" class="blog-link">Découvrir <i class="fas fa-arrow-right"></i></a>
                    </div>
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
                    <a href="#emplois" class="btn btn-link">Toutes nos offres <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="section-divider"></div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="job-card">
                    <div class="job-badge">Nouveau</div>
                    <div class="job-header">
                        <h3 class="job-title">Consultant Senior en Finance</h3>
                        <div class="job-meta">
                            <span><i class="fas fa-map-marker-alt"></i> Cotonou, Bénin</span>
                            <span><i class="fas fa-clock"></i> CDI</span>
                            <span><i class="fas fa-certificate"></i> Expert-comptable requis</span>
                        </div>
                    </div>
                    <div class="job-description">
                        <p>Pilotez des missions de conseil financier stratégique pour des clients internationaux et accompagnez les PME dans leur croissance.</p>
                    </div>
                    <div class="job-footer">
                        <div class="job-tags">
                            <span>Analyse financière</span>
                            <span>Levée de fonds</span>
                            <span>Stratégie</span>
                        </div>
                        <a href="#postuler1" class="btn btn-sm btn-primary">Postuler</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="job-card">
                    <div class="job-header">
                        <h3 class="job-title">Formateur en Management</h3>
                        <div class="job-meta">
                            <span><i class="fas fa-map-marker-alt"></i> Remote/Hybride</span>
                            <span><i class="fas fa-clock"></i> Consultant freelance</span>
                            <span><i class="fas fa-certificate"></i> Certification internationale</span>
                        </div>
                    </div>
                    <div class="job-description">
                        <p>Animation de formations certifiantes pour cadres dirigeants dans le cadre de notre WP Academy.</p>
                    </div>
                    <div class="job-footer">
                        <div class="job-tags">
                            <span>Leadership</span>
                            <span>Pédagogie</span>
                            <span>Management</span>
                        </div>
                        <a href="#postuler2" class="btn btn-sm btn-primary">Postuler</a>
                    </div>
                </div>
            </div>
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
                <a href="#rdv" class="btn btn-primary btn-lg">Prendre rendez-vous</a>
            </div>
        </div>
    </div>
</section>

@endsection