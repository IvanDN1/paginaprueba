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

// vanish event for long pages

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#navbarResponsive');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#navbarResponsive');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#navbarResponsive',
            rootMargin: '0px 0px -40%',
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});


document.addEventListener('DOMContentLoaded', function () {
    const navbar = document.getElementById('navbarResponsive');
    const sections = document.querySelectorAll('.section');

    window.addEventListener('scroll', function () {
        const scrollPosition = window.scrollY + window.innerHeight;

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            if (scrollPosition > sectionTop) {
                navbar.style.display = 'none';
            } else {
                navbar.style.display = 'block';
            }
        });
    });
});
