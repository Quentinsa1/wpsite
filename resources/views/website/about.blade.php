@extends('partials.templates')
@section('content')
<style>
        :root {
            --primary-color: #1a56db;
            --secondary-color: #0e2a53;
            --accent-color:rgb(66, 53, 49);
            --light-color: #f8f9fa;
            --dark-color: #212529;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            line-height: 1.6;
        }
        
        .section-padding {
            padding: 80px 0;
        }
        
        /* Section Partenaires */
        .partners-section {
            background-color: #f8fafc;
            position: relative;
            overflow: hidden;
        }
        
        .section-header {
            margin-bottom: 50px;
        }
        
        .section-subtitle {
            display: block;
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--accent-color);
            margin-bottom: 10px;
            font-weight: 600;
        }
        
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: var(--secondary-color);
        }
        
        .section-divider {
            width: 80px;
            height: 4px;
            background-color: var(--accent-color);
            margin: 15px 0;
        }
        
        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }
        
        .partners-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin: 0 auto;
            max-width: 1200px;
        }
        
        .partner-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            padding: 30px;
            text-align: center;
            transition: all 0.3s ease;
            flex: 1;
            min-width: 300px;
            max-width: 400px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
        }
        
        .partner-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }
        
        .partner-logo {
            max-height: 120px;
            max-width: 100%;
            margin-bottom: 20px;
            object-fit: contain;
        }
        
        .partner-info {
            width: 100%;
        }
        
        .partner-name {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--secondary-color);
            margin-bottom: 8px;
        }
        
        .partner-desc {
            color: #555;
            font-size: 1rem;
            margin-bottom: 0;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .section-title {
                font-size: 2rem;
            }
            
            .partners-container {
                flex-direction: column;
                align-items: center;
            }
            
            .partner-card {
                width: 100%;
                max-width: 100%;
            }
        }
        
        /* Design elements */
        .bg-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect width="100" height="100" fill="none" stroke="%230e2a53" stroke-width="0.5" opacity="0.05"/></svg>');
            opacity: 0.15;
            z-index: 0;
        }
        
        .section-header {
            position: relative;
            z-index: 1;
        }
    </style>
  <!-- Hero Section -->
  <section class="about-hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="hero-title" data-aos="fade-up">Notre ADN & Ambitions</h1>
                <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="100">Découvrez la vision fondatrice de WorldPerformance et notre approche innovante</p>
                <div class="hero-breadcrumb" data-aos="fade-up" data-aos-delay="200">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('website.index') }}">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">À propos</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-overlay"></div>
</section>

<!-- About Intro -->
<section class="about-intro-section section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                <div class="about-image-stack">
                    <div class="image-wrapper main-image">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Équipe WorldPerformance" class="img-fluid rounded">
                    </div>
                    <div class="image-wrapper secondary-image" data-aos="fade-up" data-aos-delay="300">
                        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80" alt="Réunion d'équipe" class="img-fluid rounded">
                    </div>
                    <!-- Suppression du badge d'expérience -->
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="section-header">
                    <span class="section-subtitle">Notre fondation</span>
                    <h2 class="section-title">WorldPerformance : Une vision nouvelle</h2>
                    <div class="section-divider"></div>
                </div>
                <p class="about-text">Fondée en 2025, WorldPerformance Sarl (WP) émerge comme un cabinet novateur de conseil et formation au Bénin, portée par une ambition claire : révolutionner l'accompagnement des entreprises africaines.</p>
                <p class="about-text">Notre approche combine innovation technologique et expertise sectorielle pour offrir des solutions adaptées aux défis contemporains des entreprises en Afrique francophone.</p>

                <div class="about-stats row mt-4">
                    <div class="col-6 col-md-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="stat-card">
                            <div class="stat-value" data-count="50">0</div>
                            <div class="stat-label">Premiers clients</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="stat-card">
                            <div class="stat-value" data-count="15">0</div>
                            <div class="stat-label">Experts fondateurs</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="stat-card">
                            <div class="stat-value" data-count="20">0</div>
                            <div class="stat-label">Programmes innovants</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="stat-card">
                            <div class="stat-value" data-count="5">0</div>
                            <div class="stat-label">Pays cibles</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Values -->
<section class="values-section section-padding bg-light">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-subtitle">Notre raison d'être</span>
            <h2 class="section-title">Ambition, Vision & Principes</h2>
            <div class="section-divider mx-auto"></div>
        </div>

        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3 class="value-title">Ambition</h3>
                    <p class="value-text">Réinventer l'accompagnement des entreprises africaines grâce à des solutions de conseil et formation innovantes, combinant expertise technique et approches disruptives.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3 class="value-title">Vision 2030</h3>
                    <p class="value-text">Devenir le catalyseur de la transformation digitale et organisationnelle des entreprises en Afrique de l'Ouest, en contribuant à l'émergence d'un écosystème entrepreneurial dynamique.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-gem"></i>
                    </div>
                    <h3 class="value-title">Principes fondateurs</h3>
                    <ul class="value-list">
                        <li><i class="fas fa-check-circle"></i> Innovation permanente</li>
                        <li><i class="fas fa-check-circle"></i> Excellence opérationnelle</li>
                        <li><i class="fas fa-check-circle"></i> Impact mesurable</li>
                        <li><i class="fas fa-check-circle"></i> Agilité stratégique</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Roadmap Section -->
<section class="timeline-section section-padding">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-subtitle">Notre trajectoire</span>
            <h2 class="section-title">L'avenir en construction</h2>
            <div class="section-divider mx-auto"></div>
        </div>

        <div class="timeline-wrapper">
            <div class="timeline-line"></div>

            <div class="timeline-item left" data-aos="fade-right">
                <div class="timeline-content">
                    <div class="timeline-year">2025</div>
                    <h3 class="timeline-title">Année fondatrice</h3>
                    <p class="timeline-text">Lancement officiel de WorldPerformance avec une offre innovante de conseil stratégique et digital.</p>
                </div>
            </div>

            <div class="timeline-item right" data-aos="fade-left" data-aos-delay="100">
                <div class="timeline-content">
                    <div class="timeline-year">2026</div>
                    <h3 class="timeline-title">Déploiement régional</h3>
                    <p class="timeline-text">Établissement de partenariats stratégiques dans 3 pays d'Afrique de l'Ouest.</p>
                </div>
            </div>

            <div class="timeline-item left" data-aos="fade-right" data-aos-delay="200">
                <div class="timeline-content">
                    <div class="timeline-year">2027</div>
                    <h3 class="timeline-title">Innovation pédagogique</h3>
                    <p class="timeline-text">Lancement de notre plateforme d'apprentissage hybride et programmes certifiants nouvelle génération.</p>
                </div>
            </div>

            <div class="timeline-item right" data-aos="fade-left" data-aos-delay="300">
                <div class="timeline-content">
                    <div class="timeline-year">2028</div>
                    <h3 class="timeline-title">Expansion sectorielle</h3>
                    <p class="timeline-text">Développement de solutions spécialisées pour les secteurs agricole et technologique.</p>
                </div>
            </div>

            <div class="timeline-item left" data-aos="fade-right" data-aos-delay="400">
                <div class="timeline-content">
                    <div class="timeline-year">2029</div>
                    <h3 class="timeline-title">Hub d'innovation</h3>
                    <p class="timeline-text">Ouverture de notre centre d'excellence pour l'entrepreneuriat et la transformation digitale.</p>
                </div>
            </div>

            <div class="timeline-item right" data-aos="fade-left" data-aos-delay="500">
                <div class="timeline-content">
                    <div class="timeline-year">2030</div>
                    <h3 class="timeline-title">Leadership régional</h3>
                    <p class="timeline-text">Consolidation de notre position de référence en conseil stratégique en Afrique francophone.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<!-- <section class="team-section section-padding bg-light">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-subtitle">L'équipe fondatrice</span>
            <h2 class="section-title">Nos leaders visionnaires</h2>
            <div class="section-divider mx-auto"></div>
            <p class="section-description mx-auto mt-3">Une équipe d'experts engagés dans la transformation des entreprises africaines.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="team-card">
                    <div class="team-image">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Directeur Général" class="img-fluid">
                        <div class="team-social">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="team-info">
                        <h3 class="team-name">Jean Akplogan</h3>
                        <p class="team-position">Directeur Général</p>
                        <p class="team-bio">Expert en stratégie d'entreprise et transformation digitale, ancien dirigeant de startups technologiques.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="team-card">
                    <div class="team-image">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Directrice des Opérations" class="img-fluid">
                        <div class="team-social">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="team-info">
                        <h3 class="team-name">Amina Diallo</h3>
                        <p class="team-position">Directrice Innovation</p>
                        <p class="team-bio">Spécialiste en intelligence artificielle appliquée au conseil stratégique.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="team-card">
                    <div class="team-image">
                        <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Directeur Financier" class="img-fluid">
                        <div class="team-social">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="team-info">
                        <h3 class="team-name">Koffi Mensah</h3>
                        <p class="team-position">Directeur des Partenariats</p>
                        <p class="team-bio">Expert en écosystèmes entrepreneuriaux et financement innovant.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="team-card">
                    <div class="team-image">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Directrice RH" class="img-fluid">
                        <div class="team-social">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="team-info">
                        <h3 class="team-name">Fatou N'Diaye</h3>
                        <p class="team-position">Directrice Académique</p>
                        <p class="team-bio">Architecte de programmes de formation nouvelle génération pour professionnels africains.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5" data-aos="fade-up">
            <a href="team.html" class="btn btn-outline-primary">Découvrir notre équipe</a>
        </div>
    </div>
</section> -->

<!-- Partners Section -->
<section class="partners-section section-padding">
        <div class="bg-pattern"></div>
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-subtitle">Nos alliances stratégiques</span>
                <h2 class="section-title">Partenaires</h2>
                <div class="section-divider mx-auto"></div>
            </div>

            <div class="partners-container" data-aos="fade-up" data-aos-delay="100">
                <!-- EIGB -->
                <div class="partner-card" data-aos="fade-right" data-aos-delay="200">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTL5EVPWY9szhgx0yqhJ4EoTxf5I9rRu8jS9A&s" alt="EIGB - École Internationale de Gestion du Bénin" class="partner-logo">
                    <div class="partner-info">
                        <h4 class="partner-name">EIGB</h4>
                        <p class="partner-desc">École Internationale de Gestion du Bénin</p>
                    </div>
                </div>

                <!-- ESDAM -->
                <div class="partner-card" data-aos="fade-left" data-aos-delay="300">
                    <img src="https://esdam.bj/images/logo-esdam.png" alt="ESDAM - École Supérieure de Design et des Arts Modernes" class="partner-logo">
                    <div class="partner-info">
                        <h4 class="partner-name">ESDAM</h4>
                        <p class="partner-desc">École Supérieure de Design et des Arts Modernes</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- CTA Section -->
<section class="about-cta-section section-padding bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0" data-aos="fade-right">
                <h2 class="cta-title">Prêt à écrire l'avenir avec nous ?</h2>
                <p class="cta-text">Découvrez comment WorldPerformance peut accélérer votre transformation avec des solutions innovantes.</p>
            </div>
            <div class="col-lg-4 text-lg-end" data-aos="fade-left">
                <a href="{{route('website.contact')}}" class="btn btn-light me-2">Nous contacter</a>
                <a href="{{route('website.contact')}}" class="btn btn-outline-light">Découvrir nos solutions</a>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialiser les animations
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                once: true,
                easing: 'ease-out'
            });
        });
    </script>
@endsection