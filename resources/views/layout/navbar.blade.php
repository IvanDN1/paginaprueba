<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown link
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>



      <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar con estilo CSS</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a href="#" class="navbar-logo">Logo</a>
            <ul class="navbar-menu">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Acerca de</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </div>
    </nav>
    <div class="content">
        <h1>Bienvenido</h1>
        <p>Este es un ejemplo de Navbar con estilo CSS.</p>
    </div>
</body>
</html>


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
