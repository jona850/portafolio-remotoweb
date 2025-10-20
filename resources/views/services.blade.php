@extends('layouts.app')

@section('title', 'Servicios')

@section('content')
    <h2 class="mb-4 text-center">Servicios que ofrezco</h2>
    <p class="text-center mb-5">Estos son los principales servicios que puedo ofrecer de manera profesional en línea:</p>

    <div class="row">
        <!-- Desarrollo web -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <div class="fs-1 mb-3">🌐</div>
                    <h5 class="card-title">Desarrollo Web</h5>
                    <p class="card-text">Sitios modernos con Laravel, WordPress y Bootstrap.</p>
                </div>
            </div>
        </div>



        <!-- Traducción -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <div class="fs-1 mb-3">🌍</div>
                    <h5 class="card-title">Traducción</h5>
                    <p class="card-text">Traducción e interpretación EN/ES precisa y natural.</p>
                </div>
            </div>
        </div>

        <!-- SEO -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <div class="fs-1 mb-3">📈</div>
                    <h5 class="card-title">Servicios de SEO </h5>
                    <p class="card-text">Optimización web para mejorar tu posicionamiento en Google.</p>
                </div>
            </div>
        </div>

        <!-- Automatización -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <div class="fs-1 mb-3">🤖</div>
                    <h5 class="card-title">Automatización</h5>
                    <p class="card-text">Scripts y bots para ahorrar tiempo en procesos repetitivos.</p>
                </div>
            </div>
        </div>


        <!-- Transcripción -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <div class="fs-1 mb-3">🎧</div>
                    <h5 class="card-title">Transcripción</h5>
                    <p class="card-text">Conversión de audios y videos en texto con alta precisión.</p>
                </div>
            </div>
        </div>

        <!-- Data Entry -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <div class="fs-1 mb-3">⌨️</div>
                    <h5 class="card-title">Data Entry</h5>
                    <p class="card-text">Ingreso de datos, organización y gestión de información.</p>
                </div>
            </div>
        </div>

    </div>
@endsection
