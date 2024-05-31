@extends('layout.layout')
@section('content')
    <section>
    <div class="card">
        <div class="card-header">
            <h1>Nuevo Mensaje desde TM-corporacion.cl</h1>
        </div>
        <div class="card-body">
          <h3 class="card-title">Datos del mensaje</h3>
          <p class="card-text"><b>Nombre:</b> {{ $data['name'] }}</p>
          <p class="card-text"><b>Celular:</b> {{ $data['phone'] }}</p>
          <p class="card-text"><b>Correo:</b> {{ $data['email'] }}.</p>
          <p class="card-text"><b>Mensaje:</b> {{ $data['message'] }}.</p>
        </div>
      </div>
    </section>
@endsection
