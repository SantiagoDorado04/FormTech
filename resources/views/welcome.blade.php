<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenido a Tu Software</title>

    <style>
        /* Estilos base */
        :root {
            --primary-color: #4F46E5;
            --secondary-color: #818CF8;
            --text-color: #1F2937;
            --background-color: #F3F4F6;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: var(--background-color);
            color: var(--text-color);
        }

        /* Header */
        .header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            padding: 1rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            height: 50px;
        }

        .nav-links {
            display: flex;
            gap: 1.5rem;
        }

        .nav-link {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        /* Hero Section */
        .hero {
            text-align: center;
            padding: 4rem 2rem;
            max-width: 800px;
            margin: 0 auto;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero p {
            font-size: 1.2rem;
            color: #4B5563;
            margin-bottom: 2rem;
        }

        /* Botones */
        .button {
            display: inline-block;
            padding: 0.8rem 1.5rem;
            border-radius: 5px;
            text-decoration: none;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .button-primary {
            background: var(--primary-color);
            color: white;
        }

        .button-primary:hover {
            background: var(--secondary-color);
            transform: translateY(-2px);
        }

        /* Footer */
        .footer {
            background: #1F2937;
            color: white;
            text-align: center;
            padding: 1rem;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-container {
                flex-direction: column;
                gap: 1rem;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }
        }

        /* Animaciones */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero {
            animation: fadeIn 1s ease-out;
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="nav-container">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="logo">
            <nav class="nav-links">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="nav-link">Iniciar Sesión</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-link">Registrarse</a>
                        @endif
                    @endauth
                @endif
            </nav>
        </div>
    </header>

    <main class="hero">
        <h1>Bienvenido a tu software de aprendizaje</h1>
        <p>Una solución innovadora para tus necesidades academicas</p>
        <div>
            @if (Route::has('login'))
                @auth
                    <a href="{{ route('dashboard') }}" class="button button-primary">Comenzar Ahora</a>
                @else
                    <a href="{{ route('login') }}" class="button button-primary">Comenzar Ahora</a>
                @endauth
            @endif
        </div>
    </main>

    <footer class="footer">
        <p>Desarrollado por los mejores programadores Laravel</p>
    </footer>
</body>

</html>
