<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Enlaces a estilos CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Enlaces a fuentes de iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Document</title>

    <style>
        .footer {
            background-color: #116506; /* Color verde palta para el footer */
            color: #fff;
            padding: 30px 0;
        }

        .custom-btn {
            background-color: #1a065a; /* Cambia el color de fondo del botón */
            color: #fff; /* Cambia el color del texto del botón */
        }
        .nav-link-custom {
            color: #1a065a; /* Cambiar color del texto de los enlaces */
            /* Otros estilos para los enlaces si lo deseas */
        }
        .footer .nav-link {
            color: #fff !important;
        }
        .text-white {
            color: #ffffff; /* Color blanco */
        }
    </style>
</head>
<body>
        <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-2 mb-3 custom-section">
                    <ul class="nav flex-column">
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="/" class="nav-link p-0 text-body-secondary nav-link-custom">Inicio</a></li>
                            <li class="nav-item mb-2"><a href="/cursos" class="nav-link p-0 text-body-secondary nav-link-custom">Cursos</a></li>
                            <li class="nav-item mb-2"><a href="/contacto" class="nav-link p-0 text-body-secondary nav-link-custom">Contacto</a></li>
                            <li class="nav-item mb-2"><a href="/nosotros" class="nav-link p-0 text-body-secondary nav-link-custom">Nosotros</a></li>
                        </ul>
                </div>
                <div class="col-6 col-md-2 mb-3 custom-section">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary nav-link-custom">Home1</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary nav-link-custom">Features1</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary nav-link-custom">Pricing1</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary nav-link-custom">FAQs1</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary nav-link-custom">About1</a></li>
                        </ul>
                </div>
                <div class="col-6 col-md-2 mb-3 custom-section">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary nav-link-custom">Home2</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary nav-link-custom">Features2</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary nav-link-custom">Pricing2</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary nav-link-custom">FAQs2</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary nav-link-custom">About2</a></li>
                        </ul>
                </div>
                    <form class="col-md-6 contenedor-largo" >
                        <div>
                        <h5>¡¡Contactanos!!</h5>
                            <p>Envianos tu correo para mas información</p>
                        </div>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                            <input id="newsletter1" type="text" class="form-control flex-grow-3" placeholder="Dirección de Correo Electronico">
                            <button class="btn btn-outline-light my-2 my-sm-0 custom-btn btn-lg" type="submit">Buscar</button>
                        </div>
                    </form>
                </div>
                <div class="d-flex flex-column flex-sm-row justify-content-between py-0 my-2 border-top">
                    <div class="col-md-4 d-flex align-items-center">
                        <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                          <svg class="bi" width="30" height="24"><use xlink:href="bootstrap"></use></svg>
                        </a>
                        <span class="mb-3 mb-md-0 text-body-secondary text-white">© 2024 Company, Inc</span>
                    </div>
                    <div>
                        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                            <li class="ms-3"><a class="link-body-emphasis" href="https:/twitter.com/"><svg class="bi" width="24" height="24"><use xlink:href="twitter.com"></use></svg></a></li>
                            <li class="ms-3"><a class="link-body-emphasis" href="https:/www.instagram.com/"><svg class="bi" width="24" height="24"><use xlink:href="instagram.com"></use></svg></a></li>
                            <li class="ms-3"><a class="link-body-emphasis" href="https:/www.facebook.com/"><svg class="bi" width="24" height="24"><use xlink:href="facebook.com"></use></svg></a></li
                        </ul>
                    </div>
                </div>
            </div>
        </div
    </footer>
</body>

    <!-- Scripts JavaScript y Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
