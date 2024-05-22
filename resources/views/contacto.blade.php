@extends('layout.layout')

@section('content')
<section class="py-5">
    <div class="container px-5">
        <!-- Contact form-->
        <div class="bg-light rounded-4 py-5 px-4 px-md-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                <h1 class="fw-bolder">Contactanos</h1>
                <p class="lead fw-normal text-muted mb-0">Ingresa tu informacion</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Ingresa tu Nombre..." data-sb-validations="required" />
                            <label for="name">Nombres</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="LastnameP" type="text" placeholder="Ingresa tu primer Apellido..." data-sb-validations="required" />
                            <label for="LastnameP">Primer Apellido</label>
                            <div class="invalid-feedback" data-sb-feedback="LastnameP:required">Se requiere primer apellido.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="LastnameM" type="text" placeholder="Ingresa tu Segundo Apellido..." data-sb-validations="required" />
                            <label for="LastnameM">Segundo Apellido</label>
                            <div class="invalid-feedback" data-sb-feedback="LastnameM:required">Se requiere su segundo apellido.</div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">Correo</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">Ingrese un Correo.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">el Correo es invalido.</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                            <label for="phone">Número de Contacto</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">Se requiere un Numero de Contacto.</div>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text" placeholder="Ingrese su mensaje aca..." style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Mensaje</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">Se requiere mensaje.</div>
                        </div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                    </form>
                    <div>
                        <p class="lead fw-normal text-muted mb-0">Puedes llamano al +41-2513199 o +56964016557</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

