<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Mi Portafolio')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        body {
            background-image: url('{{ asset('assets/images/pexels-cookiecutter-1148820.jpg') }}');
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="@yield('meta_description', 'Portafolio profesional de Jonathan Méndez: desarrollo web, diseño y soluciones digitales personalizadas.')">
        <meta name="keywords" content="Jonathan Méndez, desarrollo web, portafolio, diseñador web, El Salvador, programador Laravel">
        <meta name="author" content="Jonathan Méndez">
      
        <!-- Open Graph (para redes sociales) -->
        <meta property="og:title" content="@yield('title', 'Jonathan Méndez | Portafolio')" />
        <meta property="og:description" content="@yield('meta_description', 'Desarrollo web y diseño profesional.')" />
        <meta property="og:image" content="{{ asset('assets/images/preview.jpg') }}" />
        <meta property="og:url" content="{{ url()->current() }}" />
        <meta property="og:type" content="website" />
      
        <!-- Favicon -->

        

      
        @vite(['resources/css/app.css', 'resources/js/app.js'])

      
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background: linear-gradient(90deg, #0d6efd, #6610f2);">
            <div class="container">
                <a style="font-family: 'Playfair Display', 'Merriweather', serif;" class="navbar-brand fw-bold fs-4 d-flex align-items-center" href="/">
                    <i class="bi bi-code-slash me-2"></i> Jonathan Mendez
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link active fw-semibold" href="/">🏠 Inicio</a></li>
                        <li class="nav-item"><a class="nav-link fw-semibold" href="/servicios">💼 Servicios</a></li>
                        <li class="nav-item"><a class="nav-link fw-semibold" href="/portafolio">📂 Portafolio</a></li>
                        <li class="nav-item"><a class="nav-link fw-semibold" href="/contacto">📩 Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-4 py-4">
        @yield('content')
    </main>
</body>
</html>