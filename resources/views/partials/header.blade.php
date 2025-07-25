 <!-- Preloader -->
 <div class="preloader">
    <div class="loader">
        <div class="loader-square"></div>
        <div class="loader-square"></div>
        <div class="loader-square"></div>
        <div class="loader-square"></div>
        <div class="loader-square"></div>
        <div class="loader-square"></div>
        <div class="loader-square"></div>
    </div>
</div>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('website.index') }}">
<!--                 <span class="logo-text">WP</span>
-->                <span style="width: 180px; height: 80px;"><img src="wplogosbg.png" alt=""></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('website.index') }}">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('website.about') }}">À propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('website.services.index') }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('website.actualites.index') }}">Actualités</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('website.blogs.index') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('website.jobs.index') }}">Emploi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('website.contact') }}">Contact</a>
                </li>
            </ul>
            <div class="ms-lg-3 mt-3 mt-lg-0">
                <a href="#" class="btn btn-outline-light btn-sm" data-bs-toggle="modal" data-bs-target="#loginModal">Espace Client</a>
            </div>
        </div>
    </div>
</nav>
