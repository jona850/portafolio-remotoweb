@extends('layouts.app')

@section('title', 'Portafolio')

@section('content')
<h2 class="text-center mb-4">Mis Proyectos</h2>

<div class="row g-4">
    <!-- Proyecto 1 -->
    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <img src="{{ asset('assets/images/img1.PNG') }}" class="card-img-top" alt="Componente QR">
            <div class="card-body">
                <h5 class="card-title">Componente QR</h5>
                <p class="card-text">Implementación del reto de Frontend Mentor con diseño responsivo y accesible.</p>
                <a href="https://jona850.github.io/Qr-code/" target="_blank" class="btn btn-primary">Ver Demo</a>
            </div>
        </div>
    </div>

    <!-- Proyecto 2 -->
    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <img src="{{ asset('assets/images/img2.PNG') }}" class="card-img-top" alt="Página de Recetas">
            <div class="card-body">
                <h5 class="card-title">Página de Recetas</h5>
                <p class="card-text">Desafío de Frontend Mentor implementando un diseño atractivo para una receta culinaria.</p>
                <a href="https://jona850.github.io/recipe-page-main-remoto/" target="_blank" class="btn btn-primary">Ver Demo</a>
            </div>
        </div>
    </div>

    <!-- Proyecto 3 -->
    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <img src="{{ asset('assets/images/img3.PNG') }}" class="card-img-top" alt="Vista previa de blog">
            <div class="card-body">
                <h5 class="card-title">Tarjeta de Blog</h5>
                <p class="card-text">Componente de vista previa de blog con diseño moderno y efectos interactivos.</p>
                <a href="https://jona850.github.io/blog-preview-card-main-remoto/" target="_blank" class="btn btn-primary">Ver Demo</a>
            </div>
        </div>
    </div>
</div>
@endsection
