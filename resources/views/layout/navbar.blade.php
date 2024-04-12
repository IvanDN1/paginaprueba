<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="/resources/css/navbar.css" rel="stylesheet" type="text/css">
    <!-- Estilos de Bootstrap -->


</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="/">TMCORP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Inicio<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contacto">Contacto</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/cursos" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Cursos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/cursos/cursoate">Cursos ATE</a>
                            <a class="dropdown-item" href="/cursos/cursootec">Cursos OTEC</a>
                            <a class="dropdown-item" href="#">por Definir</a>
                        </div>
                    </li>
                </ul>
                <div class="nav-buttons ml-auto">
                    <a class="btn btn-primary" href="#">Ingresar</a>
                    <a class="btn btn-outline-primary ml-2" href="#">Registrarse</a>
                </div>
            </div>
        </div>
    </nav>

</body>
<!-- Scripts JavaScript y Bootstrap -->
<script src="{{ asset('js/navbar.js') }}"></script>
</html>
