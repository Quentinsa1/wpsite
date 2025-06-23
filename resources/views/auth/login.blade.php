<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Performance - Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        :root {
            --wp-primary: #2c3e50;
            --wp-secondary: #3498db;
            --wp-accent: #e74c3c;
        }

        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .login-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: all 0.3s ease;
            border: none;
        }

        .login-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

        .login-header {
            background: var(--wp-primary);
            color: white;
            padding: 1.5rem;
            text-align: center;
        }

        .login-header h2 {
            margin: 0;
            font-weight: 600;
        }

        .login-body {
            padding: 2rem;
        }

        .form-control {
            border-radius: 8px;
            padding: 12px 15px;
            border: 1px solid #ddd;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: var(--wp-secondary);
            box-shadow: 0 0 0 0.25rem rgba(52, 152, 219, 0.25);
        }

        .btn-wp {
            background-color: var(--wp-secondary);
            border: none;
            color: white;
            padding: 12px 25px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s;
            width: 100%;
        }

        .btn-wp:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
        }

        .forgot-link {
            color: var(--wp-secondary);
            text-decoration: none;
            transition: all 0.3s;
        }

        .forgot-link:hover {
            color: var(--wp-primary);
            text-decoration: underline;
        }

        .logo {
            max-width: 120px;
            margin-bottom: 1rem;
        }

        .input-group-text {
            background-color: var(--wp-primary);
            color: white;
            border: none;
        }

        .floating-label {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .floating-label label {
            position: absolute;
            top: 12px;
            left: 15px;
            color: #999;
            transition: all 0.3s;
            pointer-events: none;
            background: white;
            padding: 0 5px;
        }

        .floating-label input:focus + label,
        .floating-label input:not(:placeholder-shown) + label {
            top: -10px;
            left: 10px;
            font-size: 12px;
            color: var(--wp-secondary);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="login-card animate__animated animate__fadeIn">
                    <div class="login-header">
                        <img src="wplogo.png" alt="World Performance Logo" class="logo">
                        <h2>Connexion</h2>
                    </div>
                    <div class="login-body">
                        <!-- Session Status -->
                        @if(session('status'))
                            <div class="alert alert-success mb-4" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}" id="loginForm">
                            @csrf

                            <!-- Email Address -->
                            <div class="floating-label mb-4">
                                <input id="email" type="email" class="form-control"
                                       name="email" value="{{ old('email') }}"
                                       required autofocus autocomplete="username"
                                       placeholder=" ">
                                <label for="email">Email</label>
                                @if($errors->get('email'))
                                    <div class="text-danger mt-2">
                                        @foreach ($errors->get('email') as $error)
                                            <small>{{ $error }}</small>
                                        @endforeach
                                    </div>
                                @endif
                            </div>

                            <!-- Password -->
                            <div class="floating-label mb-4">
                                <input id="password" type="password" class="form-control"
                                       name="password" required autocomplete="current-password"
                                       placeholder=" ">
                                <label for="password">Mot de passe</label>
                                @if($errors->get('password'))
                                    <div class="text-danger mt-2">
                                        @foreach ($errors->get('password') as $error)
                                            <small>{{ $error }}</small>
                                        @endforeach
                                    </div>
                                @endif
                            </div>

                            <!-- Remember Me -->
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" id="remember_me" name="remember">
                                <label class="form-check-label" for="remember_me">
                                    Se souvenir de moi
                                </label>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-4">
                                @if (Route::has('password.request'))
                                    <a class="forgot-link" href="{{ route('password.request') }}">
                                        Mot de passe oublié ?
                                    </a>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-wp">
                                <span id="loginText">Se connecter</span>
                                <span id="loginSpinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Animation au chargement
        document.addEventListener('DOMContentLoaded', function() {
            const inputs = document.querySelectorAll('.form-control');

            inputs.forEach(input => {
                // Ajout d'un délai pour l'animation en cascade
                input.style.transitionDelay = `${inputs.length * 0.1}s`;

                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('animate__animated', 'animate__pulse');
                });

                input.addEventListener('blur', function() {
                    this.parentElement.classList.remove('animate__animated', 'animate__pulse');
                });
            });

            // Gestion du loader lors de la soumission
            const loginForm = document.getElementById('loginForm');
            if(loginForm) {
                loginForm.addEventListener('submit', function() {
                    const btn = this.querySelector('button[type="submit"]');
                    const loginText = document.getElementById('loginText');
                    const loginSpinner = document.getElementById('loginSpinner');

                    btn.disabled = true;
                    loginText.textContent = 'Connexion...';
                    loginSpinner.classList.remove('d-none');
                });
            }
        });
    </script>
</body>
</html>