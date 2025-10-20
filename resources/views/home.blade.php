@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<!-- Sección de bienvenida -->
<div class="text-center mb-5">
    <h1 class="fw-bold">¡Hola! Soy Jonathan Méndez</h1>
    <p class="lead">Desarrollador web en formación | Creando experiencias digitales atractivas y funcionales</p>
    <a href="/portafolio" class="btn btn-primary btn-lg mt-3">Ver mis proyectos</a>
</div>

<!-- Sección de servicios resumidos -->
<h2 class="text-center mb-4">Servicios principales</h2>
<div class="row g-4">
    <div class="col-md-4">
        <div class="card h-100 text-center shadow-sm">
            <div class="card-body">
                <h5 class="card-title">🌐 Desarrollo Web</h5>
                <p class="card-text">Laravel, WordPress, Bootstrap para sitios web responsivos y funcionales.</p>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card h-100 text-center shadow-sm">
            <div class="card-body">
                    <h5 class="card-title"> 🤖Automatización</h5>
                    <p class="card-text">Scripts y bots para ahorrar tiempo en procesos repetitivos.</p>
             </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100 text-center shadow-sm">
            <div class="card-body">
                <h5 class="card-title">📈 SEO & Automatización</h5>
                <p class="card-text">Optimización de buscadores y automatización de procesos digitales.</p>
            </div>
        </div>
    </div>
</div>

<!-- Llamada a acción -->
<div class="text-center mt-5">
    <a href="/contacto" class="btn btn-primary btn-lg">Contáctame</a>
</div>
@endsection





