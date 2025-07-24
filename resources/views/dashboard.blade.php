 @extends('admin.layout.template')
 @section('content')
 
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

@endsection