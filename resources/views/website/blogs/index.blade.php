@extends('partials.templates')
@section('content')
  <!-- Hero Section -->

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
                                <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-overlay"></div>
    </section>

 <!--    <section class="blog-hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="hero-title" data-aos="fade-up">Le Blog WorldPerformance</h1>
                    <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="100">Conseils, analyses et tendances par nos experts</p>
                    <div class="hero-breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-overlay"></div>
    </section> -->

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

                    <!-- Featured Post -->
                    <article class="featured-blog-post mb-5" data-aos="fade-up">
                        <div class="post-image">
                            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                                 alt="Featured Post"
                                 class="img-fluid rounded">
                            <div class="post-badge">À la une</div>
                        </div>
                        <div class="post-meta">
                            <span class="post-date"><i class="far fa-calendar-alt"></i> 15 juin 2023</span>
                            <span class="post-author"><i class="far fa-user"></i> Par Jean Akplogan</span>
                            <span class="post-comments"><i class="far fa-comment"></i> 8 commentaires</span>
                        </div>
                        <h2 class="post-title"><a href="blog-single.html">Optimisation fiscale en 2023 : les nouvelles stratégies</a></h2>
                        <div class="post-excerpt">
                            <p>L'année 2023 apporte son lot de modifications réglementaires et opportunités fiscales pour les entreprises africaines. Dans cet article, nous analysons les stratégies les plus efficaces pour optimiser votre fiscalité tout en restant conforme à la législation en vigueur...</p>
                        </div>
                        <div class="post-footer">
                            <a href="blog-single.html" class="btn btn-primary">Lire l'article</a>
                            <div class="post-categories">
                                <span class="badge bg-secondary">Fiscalité</span>
                                <span class="badge bg-secondary">Finance</span>
                            </div>
                        </div>
                    </article>

                    <!-- Blog Posts Grid -->
                    <div class="row">
                        <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                            <article class="blog-post-card">
                                <div class="post-image">
                                    <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80"
                                         alt="Post 1"
                                         class="img-fluid">
                                    <div class="post-date">
                                        <span class="date-day">10</span>
                                        <span class="date-month">Juin</span>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="post-meta">
                                        <span><i class="far fa-user"></i> Amina Diallo</span>
                                        <span><i class="far fa-comment"></i> 5</span>
                                    </div>
                                    <h3 class="post-title"><a href="blog-single.html">Gestion des talents post-pandémie : les nouvelles attentes</a></h3>
                                    <p class="post-excerpt">Comment adapter vos stratégies RH aux évolutions du marché du travail après la crise sanitaire...</p>
                                    <a href="blog-single.html" class="post-link">Lire plus <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </article>
                        </div>

                        <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                            <article class="blog-post-card">
                                <div class="post-image">
                                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                                         alt="Post 2"
                                         class="img-fluid">
                                    <div class="post-date">
                                        <span class="date-day">28</span>
                                        <span class="date-month">Mai</span>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="post-meta">
                                        <span><i class="far fa-user"></i> Koffi Mensah</span>
                                        <span><i class="far fa-comment"></i> 12</span>
                                    </div>
                                    <h3 class="post-title"><a href="blog-single.html">Transformation digitale des PME : par où commencer ?</a></h3>
                                    <p class="post-excerpt">Les étapes clés pour réussir votre transition numérique sans perturber vos opérations quotidiennes...</p>
                                    <a href="blog-single.html" class="post-link">Lire plus <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </article>
                        </div>

                        <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                            <article class="blog-post-card">
                                <div class="post-image">
                                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                                         alt="Post 3"
                                         class="img-fluid">
                                    <div class="post-date">
                                        <span class="date-day">15</span>
                                        <span class="date-month">Mai</span>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="post-meta">
                                        <span><i class="far fa-user"></i> Fatou N'Diaye</span>
                                        <span><i class="far fa-comment"></i> 7</span>
                                    </div>
                                    <h3 class="post-title"><a href="blog-single.html">Les 5 compétences clés des leaders de demain</a></h3>
                                    <p class="post-excerpt">Dans un monde en constante évolution, quelles compétences développer pour rester un leader efficace...</p>
                                    <a href="blog-single.html" class="post-link">Lire plus <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </article>
                        </div>

                        <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                            <article class="blog-post-card">
                                <div class="post-image">
                                    <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                                         alt="Post 4"
                                         class="img-fluid">
                                    <div class="post-date">
                                        <span class="date-day">05</span>
                                        <span class="date-month">Mai</span>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="post-meta">
                                        <span><i class="far fa-user"></i> Jean Akplogan</span>
                                        <span><i class="far fa-comment"></i> 3</span>
                                    </div>
                                    <h3 class="post-title"><a href="blog-single.html">Audit financier : préparez-vous efficacement</a></h3>
                                    <p class="post-excerpt">Check-list complète pour préparer votre entreprise à un audit financier en toute sérénité...</p>
                                    <a href="blog-single.html" class="post-link">Lire plus <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </article>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <nav aria-label="Blog pagination" class="mt-5" data-aos="fade-up">
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

                <!-- Sidebar -->
                <div class="col-lg-4" data-aos="fade-left">
                    <div class="blog-sidebar">
                        <!-- Search Widget -->
                        <div class="sidebar-widget search-widget mb-4">
                            <h3 class="widget-title">Rechercher</h3>
                            <form class="search-form">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Rechercher...">
                                    <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div>

                        <!-- Categories Widget -->
                        <div class="sidebar-widget categories-widget mb-4">
                            <h3 class="widget-title">Catégories</h3>
                            <ul class="categories-list">
                                <li><a href="#">Gestion & Finance <span class="count">12</span></a></li>
                                <li><a href="#">Ressources Humaines <span class="count">8</span></a></li>
                                <li><a href="#">Informatique & Digital <span class="count">15</span></a></li>
                                <li><a href="#">Marketing & Communication <span class="count">6</span></a></li>
                                <li><a href="#">Juridique & Fiscal <span class="count">9</span></a></li>
                                <li><a href="#">Stratégie d'entreprise <span class="count">7</span></a></li>
                            </ul>
                        </div>

                        <!-- Popular Posts Widget -->
                        <div class="sidebar-widget popular-posts-widget mb-4">
                            <h3 class="widget-title">Articles populaires</h3>
                            <div class="popular-post">
                                <div class="post-image">
                                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                                         alt="Popular Post"
                                         class="img-fluid">
                                </div>
                                <div class="post-content">
                                    <h4><a href="blog-single.html">Les clés pour une gestion de trésorerie efficace</a></h4>
                                    <span class="post-date">10 mai 2023</span>
                                </div>
                            </div>
                            <div class="popular-post">
                                <div class="post-image">
                                    <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80"
                                         alt="Popular Post"
                                         class="img-fluid">
                                </div>
                                <div class="post-content">
                                    <h4><a href="blog-single.html">Comment motiver ses équipes en période de crise</a></h4>
                                    <span class="post-date">25 avril 2023</span>
                                </div>
                            </div>
                            <div class="popular-post">
                                <div class="post-image">
                                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                                         alt="Popular Post"
                                         class="img-fluid">
                                </div>
                                <div class="post-content">
                                    <h4><a href="blog-single.html">SEO pour les PME : les bases à maîtriser</a></h4>
                                    <span class="post-date">15 avril 2023</span>
                                </div>
                            </div>
                        </div>

                        <!-- Tags Widget -->
                        <div class="sidebar-widget tags-widget mb-4">
                            <h3 class="widget-title">Mots-clés</h3>
                            <div class="tags-list">
                                <a href="#" class="tag">Finance</a>
                                <a href="#" class="tag">RH</a>
                                <a href="#" class="tag">Digital</a>
                                <a href="#" class="tag">Stratégie</a>
                                <a href="#" class="tag">Management</a>
                                <a href="#" class="tag">Fiscalité</a>
                                <a href="#" class="tag">Marketing</a>
                                <a href="#" class="tag">Innovation</a>
                                <a href="#" class="tag">Productivité</a>
                            </div>
                        </div>

                        <!-- Newsletter Widget -->
                        <div class="sidebar-widget newsletter-widget">
                            <h3 class="widget-title">Newsletter</h3>
                            <p>Abonnez-vous pour recevoir nos derniers articles directement dans votre boîte mail.</p>
                            <form class="newsletter-form">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Votre email" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">S'abonner</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="blog-cta-section section-padding bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 mb-lg-0" data-aos="fade-right">
                    <h2 class="cta-title">Vous souhaitez contribuer à notre blog ?</h2>
                    <p class="cta-text">Nous publions régulièrement des articles d'experts. Si vous avez une expertise à partager, contactez-nous !</p>
                </div>
                <div class="col-lg-4 text-lg-end" data-aos="fade-left">
                    <a href="contact.html" class="btn btn-light">Proposer un article</a>
                </div>
            </div>
        </div>
    </section>
  @endsection