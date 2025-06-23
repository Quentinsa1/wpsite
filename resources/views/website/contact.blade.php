@extends('partials.templates')
@section('content')
  <!-- Hero Section -->

  <section class="about-hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="hero-title" data-aos="fade-up">Contactez-nous</h1>
                <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="100">Nous sommes à votre écoute pour répondre à toutes vos questions</p>
                <div class="hero-breadcrumb" data-aos="fade-up" data-aos-delay="200">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-overlay"></div>
</section>
<!-- Contact Info -->
<section class="contact-info-section section-padding">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-subtitle">Comment nous joindre</span>
            <h2 class="section-title">Nos coordonnées</h2>
            <div class="section-divider mx-auto"></div>
        </div>

        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-info-card">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3 class="contact-info-title">Adresse</h3>
                    <p class="contact-info-text">Rue 123, Immeuble Les Palmiers<br>3ème étage, Cotonou<br>Bénin</p>
                    <a href="https://maps.google.com" target="_blank" class="contact-link">Voir sur la carte <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="contact-info-card">
                    <div class="contact-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <h3 class="contact-info-title">Téléphone</h3>
                    <p class="contact-info-text">
                        <span class="d-block">Standard : +2290143105555
                        </span>
                        <span class="d-block">Commercial : +2290143105555
                        </span>
                    </p>
                    <a href="tel:+22912345678" class="contact-link">Appeler maintenant <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="contact-info-card">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3 class="contact-info-title">Email</h3>
                    <p class="contact-info-text">
                        <span class="d-block">Informations : info@worldperformance.bj</span>
                        <span class="d-block">Commercial : commercial@worldperformance.bj</span>
                    </p>
                    <a href="mailto:info@worldperformance.bj" class="contact-link">Envoyer un email <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form -->
<section class="contact-form-section section-padding bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                <div class="contact-form-image">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                         alt="Équipe WorldPerformance"
                         class="img-fluid rounded">
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="section-header">
                    <span class="section-subtitle">Envoyez-nous un message</span>
                    <h2 class="section-title">Formulaire de contact</h2>
                    <div class="section-divider"></div>
                </div>

                <form id="contactForm" class="contact-form">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name" class="form-label">Nom complet *</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="company" class="form-label">Entreprise</label>
                                <input type="text" class="form-control" id="company" name="company">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email" class="form-label">Email *</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone" class="form-label">Téléphone</label>
                                <input type="tel" class="form-control" id="phone" name="phone">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="subject" class="form-label">Sujet *</label>
                                <select class="form-select" id="subject" name="subject" required>
                                    <option value="" selected disabled>Choisir un sujet</option>
                                    <option value="Demande d'information">Demande d'information</option>
                                    <option value="Devis">Demande de devis</option>
                                    <option value="Formation">Inscription à une formation</option>
                                    <option value="Recrutement">Candidature spontanée</option>
                                    <option value="Autre">Autre</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="message" class="form-label">Message *</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="consent" required>
                                <label class="form-check-label" for="consent">
                                    J'accepte que mes données soient utilisées pour répondre à ma demande *
                                </label>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <button type="submit" class="btn btn-primary">Envoyer le message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Branches Section -->
<!-- <section class="branches-section section-padding">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-subtitle">Nos implantations</span>
            <h2 class="section-title">Nos bureaux en Afrique de l'Ouest</h2>
            <div class="section-divider mx-auto"></div>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="branch-card">
                    <div class="branch-image">
                        <img src="https://images.unsplash.com/photo-1581434682223-9d69c7a9d78b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                             alt="Bureau de Cotonou"
                             class="img-fluid">
                        <div class="branch-country">Bénin</div>
                    </div>
                    <div class="branch-info">
                        <h3 class="branch-city">Cotonou</h3>
                        <p class="branch-address">Rue 123, Immeuble Les Palmiers<br>3ème étage</p>
                        <div class="branch-contact">
                            <span><i class="fas fa-phone-alt"></i> +229 12 34 56 78</span>
                            <span><i class="fas fa-envelope"></i> cotonou@worldperformance.bj</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="branch-card">
                    <div class="branch-image">
                        <img src="https://images.unsplash.com/photo-1527631746610-bca00a040d60?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                             alt="Bureau d'Abidjan"
                             class="img-fluid">
                        <div class="branch-country">Côte d'Ivoire</div>
                    </div>
                    <div class="branch-info">
                        <h3 class="branch-city">Abidjan</h3>
                        <p class="branch-address">Plateau, Tour D, 12ème étage<br>Angle Boulevard Lagunaire</p>
                        <div class="branch-contact">
                            <span><i class="fas fa-phone-alt"></i> +225 01 23 45 67</span>
                            <span><i class="fas fa-envelope"></i> abidjan@worldperformance.bj</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="branch-card">
                    <div class="branch-image">
                        <img src="https://images.unsplash.com/photo-1566576912321-d58ddd7a6088?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                             alt="Bureau de Lomé"
                             class="img-fluid">
                        <div class="branch-country">Togo</div>
                    </div>
                    <div class="branch-info">
                        <h3 class="branch-city">Lomé</h3>
                        <p class="branch-address">Avenue de la Libération<br>Immeuble Le Général, 5ème étage</p>
                        <div class="branch-contact">
                            <span><i class="fas fa-phone-alt"></i> +228 22 21 20 19</span>
                            <span><i class="fas fa-envelope"></i> lome@worldperformance.bj</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="branch-card">
                    <div class="branch-image">
                        <img src="https://images.unsplash.com/photo-1564501049412-61c2a3083791?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2089&q=80"
                             alt="Bureau de Dakar"
                             class="img-fluid">
                        <div class="branch-country">Sénégal</div>
                    </div>
                    <div class="branch-info">
                        <h3 class="branch-city">Dakar</h3>
                        <p class="branch-address">Rue de la Corniche, Immeuble Saphir<br>2ème étage, Bureau 204</p>
                        <div class="branch-contact">
                            <span><i class="fas fa-phone-alt"></i> +221 33 821 45 67</span>
                            <span><i class="fas fa-envelope"></i> dakar@worldperformance.bj</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- FAQ Section -->
<section class="faq-section section-padding bg-light">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-subtitle">Questions fréquentes</span>
            <h2 class="section-title">FAQ</h2>
            <div class="section-divider mx-auto"></div>
            <p class="section-description mx-auto mt-3">Trouvez rapidement des réponses à vos questions les plus courantes.</p>
        </div>

        <div class="row">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="accordion" id="faqAccordion1">
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Comment puis-je obtenir un devis pour vos services ?
                            </button>
                        </h3>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion1">
                            <div class="accordion-body">
                                Vous pouvez remplir notre formulaire de contact en sélectionnant "Demande de devis" comme sujet. Notre équipe commerciale vous contactera sous 48 heures pour discuter de vos besoins et vous fournir une proposition détaillée.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Quels sont vos horaires d'ouverture ?
                            </button>
                        </h3>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion1">
                            <div class="accordion-body">
                                Nos bureaux sont ouverts du lundi au vendredi de 8h00 à 18h00. Vous pouvez nous contacter par téléphone durant ces horaires ou nous envoyer un email à tout moment - nous nous engageons à répondre dans les 24 heures ouvrées.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Proposez-vous des formations à distance ?
                            </button>
                        </h3>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion1">
                            <div class="accordion-body">
                                Oui, notre centre de formation WP-Academy propose plusieurs programmes en ligne via notre plateforme e-learning. Ces formations peuvent être suivies en direct avec un formateur ou en autonomie selon votre préférence.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="accordion" id="faqAccordion2">
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Comment puis-je postuler à une offre d'emploi ?
                            </button>
                        </h3>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion2">
                            <div class="accordion-body">
                                Vous pouvez consulter nos offres d'emploi sur la page "Emploi" de notre site et postuler directement en ligne. Pour une candidature spontanée, utilisez notre formulaire de contact en sélectionnant "Candidature spontanée" comme sujet.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Quels moyens de paiement acceptez-vous ?
                            </button>
                        </h3>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion2">
                            <div class="accordion-body">
                                Nous acceptons les virements bancaires, les paiements par carte via notre plateforme sécurisée, ainsi que les chèques pour les clients locaux. Des facilités de paiement peuvent être accordées pour les formations et certains services.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Puis-je rencontrer un consultant avant de m'engager ?
                            </button>
                        </h3>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion2">
                            <div class="accordion-body">
                                Bien sûr ! Nous proposons une première consultation gratuite pour discuter de vos besoins et vous présenter notre approche. Contactez-nous pour prendre rendez-vous avec l'un de nos experts.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="contact-cta-section section-padding bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0" data-aos="fade-right">
                <h2 class="cta-title">Prêt à discuter de votre projet ?</h2>
                <p class="cta-text">Notre équipe est disponible pour échanger avec vous et trouver la meilleure solution à vos besoins.</p>
            </div>
            <div class="col-lg-4 text-lg-end" data-aos="fade-left">
                <a href="tel:+22912345678" class="btn btn-light me-2">Nous appeler</a>
                <a href="#contact-form" class="btn btn-outline-light">Envoyer un message</a>
            </div>
        </div>
    </div>
</section>
@endsection