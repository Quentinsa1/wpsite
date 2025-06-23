<!DOCTYPE html>
<html lang="fr" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | World Performance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        :root {
            --wp-primary: #2c3e50;
            --wp-secondary: #3498db;
            --wp-accent: #e74c3c;
            --wp-light: #f8f9fa;
            --wp-dark: #212529;
        }

        body {
            background-color: #f5f7fa;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .wp-navbar {
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 0.5rem 1rem;
        }

        .wp-sidebar {
            background: var(--wp-primary);
            color: white;
            min-height: calc(100vh - 56px);
            width: 250px;
            transition: all 0.3s;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
        }

        .wp-sidebar .nav-link {
            color: rgba(255, 255, 255, 0.8);
            padding: 0.75rem 1.5rem;
            margin: 0.25rem 0;
            border-radius: 0;
            transition: all 0.3s;
        }

        .wp-sidebar .nav-link:hover,
        .wp-sidebar .nav-link.active {
            color: white;
            background-color: rgba(255, 255, 255, 0.1);
        }

        .wp-sidebar .nav-link i {
            width: 24px;
            text-align: center;
            margin-right: 10px;
        }

        .wp-content {
            flex: 1;
            padding: 2rem;
            background-color: #f5f7fa;
        }

        .wp-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            border: none;
            transition: all 0.3s;
            margin-bottom: 1.5rem;
        }

        .wp-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .wp-card-header {
            background-color: transparent;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            padding: 1.25rem 1.5rem;
            font-weight: 600;
        }

        .wp-card-body {
            padding: 1.5rem;
        }

        .wp-welcome {
            background: linear-gradient(135deg, var(--wp-secondary), var(--wp-primary));
            color: white;
            border-radius: 10px;
            padding: 2rem;
            margin-bottom: 2rem;
        }

        .wp-stats-card {
            text-align: center;
            padding: 1.5rem;
            border-radius: 10px;
        }

        .wp-stats-card i {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: var(--wp-secondary);
        }

        .wp-stats-card .count {
            font-size: 2rem;
            font-weight: 700;
        }

        .wp-stats-card .label {
            color: #6c757d;
            font-size: 0.9rem;
        }

        .user-dropdown .dropdown-toggle::after {
            display: none;
        }

        .user-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            object-fit: cover;
        }

        @media (max-width: 992px) {
            .wp-sidebar {
                width: 0;
                overflow: hidden;
                position: fixed;
                z-index: 1000;
                height: 100vh;
                left: 0;
                top: 56px;
            }

            .wp-sidebar.show {
                width: 250px;
            }

            .wp-content {
                margin-left: 0 !important;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar wp-navbar navbar-expand-lg">
        <div class="container-fluid">
            <button class="btn btn-link d-lg-none" type="button" id="sidebarToggle">
                <i class="fas fa-bars"></i>
            </button>

            <a class="navbar-brand fw-bold ms-2" href="#">
                <img src="https://via.placeholder.com/120x40?text=WORLD+PERFORMANCE" alt="Logo" height="30">
            </a>

            <div class="d-flex align-items-center ms-auto">
                <div class="dropdown user-dropdown">
                    <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}&background=3498db&color=fff" alt="User" class="user-avatar me-2">
                        <span class="d-none d-sm-inline">{{ auth()->user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="{{ route('profile.edit') }}"><i class="fas fa-user-cog me-2"></i> Mon profil</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt me-2"></i> Déconnexion</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="d-flex">
        <!-- Sidebar -->
        <div class="wp-sidebar" id="sidebar">
            <div class="pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('dashboard') }}">
                            <i class="fas fa-tachometer-alt"></i> Tableau de bord
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('website.services.index') }}">
                            <i class="fas fa-cogs"></i> Services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('website.actualites.index') }}">
                            <i class="fas fa-newspaper"></i> Actualités
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('website.blogs.index') }}">
                            <i class="fas fa-blog"></i> Blog
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('website.jobs.index') }}">
                            <i class="fas fa-briefcase"></i> Emplois
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile.edit') }}">
                            <i class="fas fa-user-cog"></i> Mon compte
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <main class="wp-content animate__animated animate__fadeIn" id="mainContent">
            <div class="container-fluid">
                <!-- Welcome Card -->
                <div class="wp-welcome">
                    <h1 class="fw-bold">Bonjour, {{ auth()->user()->name }} !</h1>
                    <p class="mb-0">Bienvenue sur votre tableau de bord World Performance</p>
                </div>

                <!-- Quick Actions -->
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="wp-card">
                            <div class="wp-card-header">
                                <i class="fas fa-plus-circle me-2"></i> Actions rapides
                            </div>
                            <div class="wp-card-body">
                                <div class="d-flex flex-wrap gap-2">
                                    <a href="{{ route('admin.services.create') }}" class="btn btn-primary">
                                        <i class="fas fa-plus me-2"></i> Ajouter un service
                                    </a>
                                    <a href="{{ route('admin.actualites.create') }}" class="btn btn-success">
                                        <i class="fas fa-plus me-2"></i> Ajouter une actualité
                                    </a>
                                    <a href="{{ route('admin.blogs.create') }}" class="btn btn-info">
                                        <i class="fas fa-plus me-2"></i> Ajouter un article
                                    </a>
                                    <a href="{{ route('admin.emplois.create') }}" class="btn btn-warning">
                                        <i class="fas fa-plus me-2"></i> Ajouter une offre
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="wp-card wp-stats-card">
                            <i class="fas fa-cogs"></i>
                            <div class="count"></div>
                            <div class="label">Services</div>
                            <a href="{{ route('admin.services.index') }}" class="stretched-link"></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="wp-card wp-stats-card">
                            <i class="fas fa-newspaper"></i>
                            <div class="count">{{ $actualitesCount ?? 0 }}</div>
                            <div class="label">Actualités</div>
                            <a href="{{ route('admin.actualites.index') }}" class="stretched-link"></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="wp-card wp-stats-card">
                            <i class="fas fa-blog"></i>
                            <div class="count"></div>
                            <div class="label">Articles de blog</div>
                            <a href="{{ route('admin.blogs.index') }}" class="stretched-link"></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="wp-card wp-stats-card">
                            <i class="fas fa-briefcase"></i>
                            <div class="count"></div>
                            <div class="label">Offres d'emploi</div>
                            <a href="{{ route('admin.emplois.index') }}" class="stretched-link"></a>
                        </div>
                    </div>
                </div>

                <!-- Recent Items -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="wp-card">
                            <div class="wp-card-header d-flex justify-content-between align-items-center">
                                <span><i class="fas fa-history me-2"></i> Dernières actualités</span>
                                <a href="{{ route('admin.actualites.index') }}" class="btn btn-sm btn-outline-primary">Voir tout</a>
                            </div>
                            <div class="wp-card-body">
                                <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <span class="badge bg-secondary"></span>
                                        </li>
                                        <li class="list-group-item text-muted">Aucune actualité récente</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="wp-card">
                            <div class="wp-card-header d-flex justify-content-between align-items-center">
                                <span><i class="fas fa-history me-2"></i> Derniers articles</span>
                                <a href="{{ route('admin.blogs.index') }}" class="btn btn-sm btn-outline-primary">Voir tout</a>
                            </div>
                            <div class="wp-card-body">
                                <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <span class="badge bg-secondary"></span>
                                        </li>
                                        <li class="list-group-item text-muted">Aucun article récent</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Sidebar toggle
            const sidebar = document.getElementById('sidebar');
            const sidebarToggle = document.getElementById('sidebarToggle');

            sidebarToggle.addEventListener('click', function() {
                sidebar.classList.toggle('show');
            });

            // Animate stats cards
            const statsCards = document.querySelectorAll('.wp-stats-card');
            statsCards.forEach((card, index) => {
                setTimeout(() => {
                    card.classList.add('animate__animated', 'animate__fadeInUp');
                }, index * 100);
            });

            // Responsive behavior
            function handleResize() {
                if (window.innerWidth > 992) {
                    sidebar.classList.remove('show');
                }
            }

            window.addEventListener('resize', handleResize);
        });
    </script>
</body>
</html>