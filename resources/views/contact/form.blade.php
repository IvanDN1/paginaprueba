
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

@extends('layout.layout')
@section('content')
<body>
<section>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext" name="name" placeholder="Nombre">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Celular</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control-php RTISANplaintext" name="phone" placeholder="Celular">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Correo</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control-plaintext" name="email" placeholder="Correo">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Asunto</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext" name="subject" placeholder="Asunto">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Mensaje</label>
                        <div class="col-sm-10">
                            <textarea name="message" cols="50" placeholder="Mensaje"></textarea>
                        </div>
                        <button class="btn btn-info col-md-10">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </section>
@endsection
