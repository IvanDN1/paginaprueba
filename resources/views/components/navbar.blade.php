<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('js/navbar.js') }}" rel="stylesheet">
    <!-- Estilos de Bootstrap -->

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-custom bg-gradient-primary-to-secondary3" id="navbarResponsive">
        <div class="container">
            <a href="https://www.tmcorporacion.cl/" class="navbar-brand d-none d-md-flex align-items-center m-0 mr- 4 p-0 aabtn">
                <img src="/images/LogoATE.png" alt="Logo de la empresa"  class="Logo mr-1" id="LogoATE" >
            </a>
                <ul class="navbar-nav mr-auto align-rigth">
                    <li class="nav-item active">
                        <a class="nav-link" href="/"><H5>INICIO</H5><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/nosotros"><H5>NOSOTROS</H5></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contacto"><H5>CONTACTANOS</H5></a>
                    </li>
                </ul>
        </div>
    </nav>
</body>
</html>
