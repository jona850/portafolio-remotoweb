@extends('layouts.app') 

@section('title', 'Contacto')


@section('content')
    <h2>Contacto</h2>
    <p>¿Quieres trabajar conmigo o tienes alguna consulta? Escríbeme aquí:</p>

    <form action="/contacto" method="POST" class="mt-3">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="mensaje" class="form-label">Mensaje</label>
            <textarea id="mensaje" name="mensaje" rows="4" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection
