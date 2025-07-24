@extends('partials.templates')
@section('content')
  <!-- Hero Section -->
<section class="about-hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="hero-title" data-aos="fade-up">Rejoignez notre équipe</h1>
                <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="100">Découvrez les opportunités de carrière chez WorldPerformance</p>
                <div class="hero-breadcrumb" data-aos="fade-up" data-aos-delay="200">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Offres d'Emploi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-overlay"></div>
</section>

 <!-- Jobs Intro -->
    <section class="jobs-intro-section section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                    <div class="jobs-intro-image">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                             alt="Équipe WorldPerformance"
                             class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="section-header">
                        <span class="section-subtitle">Carrière chez WP</span>
                        <h2 class="section-title">Faites partie de notre aventure</h2>
                        <div class="section-divider"></div>
                    </div>
                    <p class="jobs-intro-text">Chez WorldPerformance, nous croyons que notre succès repose sur la qualité de nos collaborateurs. Nous offrons un environnement de travail dynamique, des opportunités de développement professionnel et une culture d'entreprise basée sur l'excellence et l'innovation.</p>

                    <div class="jobs-benefits">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="benefit-item">
                                    <div class="benefit-icon">
                                        <i class="fas fa-graduation-cap"></i>
                                    </div>
                                    <div class="benefit-content">
                                        <h4>Formation continue</h4>
                                        <p>Accès à des programmes de formation internes et externes</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="benefit-item">
                                    <div class="benefit-icon">
                                        <i class="fas fa-globe-africa"></i>
                                    </div>
                                    <div class="benefit-content">
                                        <h4>Opportunités internationales</h4>
                                        <p>Possibilité de missions dans plusieurs pays africains</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="benefit-item">
                                    <div class="benefit-icon">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div class="benefit-content">
                                        <h4>Évolution de carrière</h4>
                                        <p>Plan de développement individuel et promotions internes</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="benefit-item">
                                    <div class="benefit-icon">
                                        <i class="fas fa-heart"></i>
                                    </div>
                                    <div class="benefit-content">
                                        <h4>Environnement stimulant</h4>
                                        <p>Équipe jeune, dynamique et multiculturelle</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="text-center mt-4">
        <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#recruiterModal">
            Je suis un recruteur
        </button>
    </div>

    <!-- Current Openings -->
    <section class="jobs-openings-section section-padding bg-light">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-subtitle">Opportunités</span>
                <h2 class="section-title">Nos offres d'emploi</h2>
                <div class="section-divider mx-auto"></div>
                <p class="section-description mx-auto mt-3">Découvrez les postes actuellement disponibles au sein de notre cabinet.</p>
            </div>

          <div class="row g-4">
    @foreach ($jobs as $index => $job)
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
            <div class="job-card">
                <div class="job-header">
                    <h3 class="job-title">{{ $job->title }}</h3>
                    <div class="job-meta">
                        <span class="job-location">
                            <i class="fas fa-map-marker-alt"></i> {{ $job->location }}
                        </span>
                        <span class="job-type">
                            <i class="fas fa-briefcase"></i> {{ $job->type }}
                        </span>
                    </div>
                </div>
                <div class="job-body">
                    <p class="job-description">
                        {{ \Illuminate\Support\Str::limit($job->description, 160) }}
                    </p>
                    <div class="job-skills">
                        @foreach (explode(',', $job->skills) as $skill)
                            <span class="skill-tag">{{ trim($skill) }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="job-footer">
                    <div class="job-deadline">
                        <i class="far fa-clock"></i> Date limite : {{ \Carbon\Carbon::parse($job->deadline)->format('d/m/Y') }}
                    </div>
                    <a href="#" class="btn btn-primary">Postuler</a>
                </div>
            </div>
        </div>
    @endforeach
</div>


            <div class="text-center mt-5" data-aos="fade-up">
                <a href="#" class="btn btn-outline-primary">Voir toutes nos offres</a>
            </div>
        </div>
    </section>

    <!-- Recruitment Process -->
    <section class="process-section section-padding">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-subtitle">Notre processus</span>
                <h2 class="section-title">Comment postuler chez nous</h2>
                <div class="section-divider mx-auto"></div>
                <p class="section-description mx-auto mt-3">Découvrez les étapes de notre processus de recrutement.</p>
            </div>

            <div class="process-steps">
                <div class="process-step" data-aos="fade-up" data-aos-delay="100">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3 class="step-title">Dépôt de candidature</h3>
                        <p class="step-text">Postulez en ligne en joignant votre CV et lettre de motivation.</p>
                    </div>
                </div>

                <div class="process-step" data-aos="fade-up" data-aos-delay="200">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3 class="step-title">Évaluation initiale</h3>
                        <p class="step-text">Notre équipe RH examine votre profil sous 7 jours ouvrés.</p>
                    </div>
                </div>

                <div class="process-step" data-aos="fade-up" data-aos-delay="300">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3 class="step-title">Entretien téléphonique</h3>
                        <p class="step-text">Un premier échange pour valider la cohérence de votre profil.</p>
                    </div>
                </div>

                <div class="process-step" data-aos="fade-up" data-aos-delay="400">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3 class="step-title">Tests techniques</h3>
                        <p class="step-text">Évaluation de vos compétences via des tests ou études de cas.</p>
                    </div>
                </div>

                <div class="process-step" data-aos="fade-up" data-aos-delay="500">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3 class="step-title">Entretien final</h3>
                        <p class="step-text">Rencontre avec le responsable du service et les futurs collègues.</p>
                    </div>
                </div>

                <div class="process-step" data-aos="fade-up" data-aos-delay="600">
                    <div class="step-number">6</div>
                    <div class="step-content">
                        <h3 class="step-title">Intégration</h3>
                        <p class="step-text">Accueil et formation pour un démarrage en douceur.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="text-center mt-4">
        <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#recruiterModal">
            Je suis un recruteur
        </button>
    </div>

    <!-- Testimonials Section -->
    <section class="jobs-testimonials-section section-padding bg-light">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-subtitle">Témoignages</span>
                <h2 class="section-title">Ce que disent nos collaborateurs</h2>
                <div class="section-divider mx-auto"></div>
            </div>

            <div class="testimonials-slider" data-aos="fade-up">
                <div class="testimonial-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <p class="testimonial-text">"Rejoindre WorldPerformance a été un tournant dans ma carrière. J'ai trouvé un environnement stimulant qui m'a permis de développer mes compétences tout en travaillant sur des projets ambitieux avec des clients variés."</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-image">
                                <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Fatimata Diallo">
                            </div>
                            <div class="author-info">
                                <h4>Fatimata Diallo</h4>
                                <span>Consultante Senior, WP Côte d'Ivoire</span>
                                <div class="author-tenure">
                                    <i class="far fa-calendar-alt"></i> 3 ans chez WP
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <p class="testimonial-text">"Ce que j'apprécie chez WP, c'est la confiance qu'on nous accorde dès le départ et les opportunités d'évolution. En 2 ans, j'ai pu passer de consultant junior à manager d'une équipe de 5 personnes."</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-image">
                                <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Koffi Gbediga">
                            </div>
                            <div class="author-info">
                                <h4>Koffi Gbediga</h4>
                                <span>Manager Conseil, WP Togo</span>
                                <div class="author-tenure">
                                    <i class="far fa-calendar-alt"></i> 2 ans chez WP
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <p class="testimonial-text">"Mon stage chez WP a été une expérience extrêmement formatrice. J'ai été immédiatement intégrée à des projets concrets et encadrée par des professionnels bienveillants. Aujourd'hui, j'ai la chance d'y travailler en CDI."</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-image">
                                <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Amina Traoré">
                            </div>
                            <div class="author-info">
                                <h4>Amina Traoré</h4>
                                <span>Consultante Junior, WP Bénin</span>
                                <div class="author-tenure">
                                    <i class="far fa-calendar-alt"></i> 1 an chez WP (dont 6 mois de stage)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Spontaneous Application -->
   <!--  <section class="spontaneous-section section-padding bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 mb-lg-0" data-aos="fade-right">
                    <h2 class="section-title">Candidature spontanée</h2>
                    <p class="section-description">Vous ne trouvez pas d'offre correspondant à votre profil mais souhaitez rejoindre notre équipe ? Envoyez-nous votre candidature et nous vous contacterons dès qu'une opportunité correspondante se présentera.</p>
                </div>
                <div class="col-lg-4 text-lg-end" data-aos="fade-left">
                    <a href="contact.html" class="btn btn-light">Postuler spontanément</a>
                </div>
            </div>
        </div>
    </section> -->

<!-- Recruiter Modal - Chic Version -->
<div class="modal fade" id="recruiterModal" tabindex="-1" aria-labelledby="recruiterModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-header bg-gradient-primary text-white">
                <h5 class="modal-title fs-4 fw-light" id="recruiterModalLabel">
                    <i class="fas fa-handshake me-2"></i>Contact Professionnel
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <form action="" method="POST">
                @csrf
                <div class="modal-body px-4 py-4">
                    <div class="mb-4">
                        <label for="name" class="form-label small text-uppercase text-muted fw-bold">Nom complet</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light"><i class="fas fa-user text-primary"></i></span>
                            <input type="text" class="form-control border-start-0 ps-1 py-2" id="name" name="name" required placeholder="Votre nom">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="form-label small text-uppercase text-muted fw-bold">Adresse Email</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light"><i class="fas fa-envelope text-primary"></i></span>
                            <input type="email" class="form-control border-start-0 ps-1 py-2" id="email" name="email" required placeholder="email@exemple.com">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="company" class="form-label small text-uppercase text-muted fw-bold">Société</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light"><i class="fas fa-building text-primary"></i></span>
                            <input type="text" class="form-control border-start-0 ps-1 py-2" id="company" name="company" required placeholder="Nom de votre entreprise">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label small text-uppercase text-muted fw-bold">Message</label>
                        <textarea class="form-control p-3 border" id="message" name="message" rows="4" style="resize: none;" placeholder="Décrivez votre proposition ou besoin..."></textarea>
                    </div>
                </div>
                <div class="modal-footer border-0 px-4 pb-4 pt-0">
                    <button type="button" class="btn btn-outline-secondary px-4 rounded-pill" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary px-4 rounded-pill shadow-sm">
                        <i class="fas fa-paper-plane me-2"></i>Envoyer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .bg-gradient-primary {
        background: linear-gradient(135deg, #3a7bd5 0%, #00d2ff 100%);
    }

    .modal-content {
        border-radius: 12px;
        overflow: hidden;
        transition: transform 0.3s ease;
    }

    .modal-content:hover {
        transform: translateY(-2px);
    }

    .form-control {
        border-radius: 8px;
        transition: all 0.3s;
    }

    .form-control:focus {
        border-color: #3a7bd5;
        box-shadow: 0 0 0 0.25rem rgba(58, 123, 213, 0.25);
    }

    textarea {
        min-height: 120px;
    }

    .rounded-pill {
        padding: 0.5rem 1.5rem;
    }

    .input-group-text {
        border-right: none;
        background-color: #f8f9fa !important;
    }

    .border-start-0 {
        border-left: none !important;
    }
</style>

    @endsection