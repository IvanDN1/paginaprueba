@extends('layout.layout')

@section('content')
<div class="bg-light rounded-4 py-5 px-4 px-md-5 bg-gradient-primary-to-secondary2">
    <div class="text-center mb-5">
        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
            <h1 class="fw-bolder">Contactanos</h1>
            <p class="lead fw-normal aling-center text-center mb-0">Ingresa tu informacion</p>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <label for="name">Nombres</label>
                    <input class="form-control" id="name" type="text" placeholder="Ingresa tu Nombre..." data-sb-validations="required" />
                    <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>

                    <label for="LastnameP">Primer Apellido</label>
                    <input class="form-control" id="LastnameP" type="text" placeholder="Ingresa tu primer Apellido..." data-sb-validations="required" />
                    <div class="invalid-feedback" data-sb-feedback="LastnameP:required">Se requiere primer apellido.</div>

                    <label for="LastnameM">Segundo Apellido</label>
                    <input class="form-control" id="LastnameM" type="text" placeholder="Ingresa tu Segundo Apellido..." data-sb-validations="required" />
                    <div class="invalid-feedback" data-sb-feedback="LastnameM:required">Se requiere su segundo apellido.</div>

                    <label for="email">Correo</label>
                    <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                    <div class="invalid-feedback" data-sb-feedback="email:required">Ingrese un Correo.</div>
                    <div class="invalid-feedback" data-sb-feedback="email:email">el Correo es invalido.</div>

                    <label for="phone">Número de Contacto</label>
                    <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                    <div class="invalid-feedback" data-sb-feedback="phone:required">Se requiere un Numero de Contacto.</div>

                    <label for="message">Mensaje</label>
                    <textarea class="form-control" id="message" type="text" placeholder="Ingrese su mensaje aca..." style="height: 10rem" data-sb-validations="required"></textarea>
                    <div class="invalid-feedback" data-sb-feedback="message:required">Se requiere mensaje.</div>

                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center mb-3">
                        <div class="fw-bolder">Mensaje enviado</div>
                        <br />
                    </div>
                </div>
                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error enviando el mensaje</div></div>
                <div class="d-grid"><button class="btn btn-primary btn-lg enable" id="submitButton" type="submit">Enviar</button></div>
            </form>
            <div>
                <p class="lead fw-normal text-center mb-0">Puedes llamano al +41-2513199 o +56964016557</p>
            </div>
        </div>
    </div>
</div>
@endsection

