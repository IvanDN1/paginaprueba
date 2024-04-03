<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Enlaces a estilos CSS -->
    <!-- Enlaces a fuentes de iconos -->
    <title>Document</title>

    <!-- Navbar -->
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style= "{{ asset('css/navbar.css') }}" rel="stylesheet">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/mision">Cursos</a>
                    <li class="nav-item">
                        <a class="nav-link" href="/contacto">Contactos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Cursos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Cursos </a>
                            <a class="dropdown-item" href="#">Cursos </a>
                            <a class="dropdown-item" href="">Cursos </a>
                        </div>
                    </li>
                </ul>
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
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
