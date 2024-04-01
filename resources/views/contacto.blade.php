@extends('layout.layout')


<style>
    .body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        padding: 20px;
    }
    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    .label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    .radio-group {
        margin-bottom: 16px;
    }

    .radio-group label {
        margin-right: 20px;
}
</style>

@section('content')
<div class="container">
    <h1>Formulario de Contacto</h1>
    <form action="/enviar" method="POST">
        <label for="nombre">Nombre Completo:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono">

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="4" required></textarea>

        <div class="radio-group">
            <label><input type="radio" name="tipo_contacto" value="empresa" required> Empresa</label>
            <label><input type="radio" name="tipo_contacto" value="personal" required> Personal</label>
        </div>

        <input type="submit" value="Enviar">
    </form>
</div>


@endsection

