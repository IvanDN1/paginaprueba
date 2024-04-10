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



    <!-- JavaScript para los dropdowns -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var dropdownToggles = document.querySelectorAll('.dropdown-toggle');
            var dropdownMenus = document.querySelectorAll('.dropdown-menu');

            dropdownToggles.forEach(function(dropdownToggle, index) {
                dropdownToggle.addEventListener('click', function() {
                    dropdownMenus[index].classList.toggle('show');
                });

                document.addEventListener('click', function(event) {
                    if (!dropdownToggle.contains(event.target) && !dropdownMenus[index].contains(event.target)) {
                        dropdownMenus[index].classList.remove('show');
                    }
                });
            });
        });
    </script>

    <?php
    // Función para generar los breadcrumbs basados en la URL actual
    function generateBreadcrumbs() {
        // Obtener la ruta de la URL actual
        $url = $_SERVER['REQUEST_URI'];

        // Dividir la URL en segmentos
        $segments = explode('/', trim($url, '/'));

        // Inicializar una variable para almacenar los breadcrumbs
        $breadcrumbs = '';

        // Construir los breadcrumbs basados en los segmentos de la URL
        foreach ($segments as $key => $segment) {
            $breadcrumbs .= '<a href="/' . implode('/', array_slice($segments, 0, $key + 1)) . '">' . ucwords(str_replace('-', ' ', $segment)) . '</a>';

            // Agregar separador si no es el último segmento
            if ($key < count($segments) - 1) {
                $breadcrumbs .= ' > ';
            }
        }

        // Imprimir los breadcrumbs
        echo '<div class="breadcrumbs">' . $breadcrumbs . '</div>';
    }

    // Llamar a la función para generar los breadcrumbs
    generateBreadcrumbs();
    ?>

</body>
<!-- Scripts JavaScript y Bootstrap -->

</html>
