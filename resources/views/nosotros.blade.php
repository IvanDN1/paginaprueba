@extends('layout.layout')
<link href="{{ asset('css/nosotros.css') }}" rel="stylesheet">

@section('content')

<div class="container-1">
    <div class="card">
        <img src="https://via.placeholder.com/300x200" alt="Imagen de Tarjeta 1">
        <div class="card-content">
            <h2 class="card-title">Nuestra Historia</h2>
            <p class="card-description">Descubre cómo comenzamos y nuestra trayectoria en la industria.</p>
            <a href="#" class="card-link">Leer Más</a>
        </div>
    </div>

    <div class="card">
        <img src="https://via.placeholder.com/300x200" alt="Imagen de Tarjeta 2">
        <div class="card-content">
            <h2 class="card-title">Nuestro Equipo</h2>
            <p class="card-description">Conoce a nuestro talentoso equipo de profesionales.</p>
            <a href="#" class="card-link">Conocer Más</a>
        </div>
    </div>

    <div class="card">
        <img src="https://via.placeholder.com/300x200" alt="Imagen de Tarjeta 3">
        <div class="card-content">
            <h2 class="card-title">Nuestras Metas</h2>
            <p class="card-description">Entérate de nuestros objetivos y visión a futuro.</p>
            <a href="#" class="card-link">Explorar</a>
        </div>
    </div>
</div>


@endsection

