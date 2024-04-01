@extends('layout.layout')

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        padding: 20px;
    }

    .container-1 {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 20px;
        max-width: 1200px;
    }


    .card {
        width: 300px;
        margin: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: translateY(-10px);
    }

    .card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-bottom: 1px solid #ccc;
    }

    .card-content {
        padding: 20px;
    }

    .card-title {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .card-description {
        font-size: 16px;
        line-height: 1.5;
        margin-bottom: 20px;
    }

    .card-link {
        display: block;
        text-align: center;
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 0;
        border-radius: 4px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .card-link:hover {
        background-color: #45a049;
    }
</style>

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

