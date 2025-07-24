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
    @include('admin.layout.navbar')

    <div class="d-flex">
        <!-- Sidebar -->    
    @include('admin.layout.sidebar')

        <!-- Main Content -->
    @yield('content')

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