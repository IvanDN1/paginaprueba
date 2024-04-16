function generateBreadcrumbs() {
    // Obtener la ruta de la URL actual
    var url = window.location.pathname;

    // Dividir la URL en segmentos
    var segments = url.split('/').filter(function(segment) {
        return segment.trim() !== '';
    });

    // Inicializar una variable para almacenar los breadcrumbs
    var breadcrumbs = '';

    // Construir los breadcrumbs basados en los segmentos de la URL
    segments.forEach(function(segment, key) {
        breadcrumbs += '<a href="/' + segments.slice(0, key + 1).join('/') + '">' + segment.replace(/-/g, ' ').replace(/\b\w/g, function(char) {
            return char.toUpperCase();
        }) + '</a>';

        // Agregar separador si no es el último segmento
        if (key < segments.length - 1) {
            breadcrumbs += ' > ';
        }
    });

    // Crear un elemento div para contener los breadcrumbs
    var breadcrumbsContainer = document.createElement('div');
    breadcrumbsContainer.classList.add('breadcrumbs');
    breadcrumbsContainer.innerHTML = breadcrumbs;

    // Obtener el elemento donde se van a mostrar los breadcrumbs
    var breadcrumbsParent = document.querySelector('.breadcrumbs-parent');

    // Limpiar el contenido existente
    breadcrumbsParent.innerHTML = '';

    // Agregar los breadcrumbs al elemento padre
    breadcrumbsParent.appendChild(breadcrumbsContainer);
}

// Llamar a la función para generar los breadcrumbs al cargar la página
document.addEventListener('DOMContentLoaded', generateBreadcrumbs);
