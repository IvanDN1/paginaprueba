
// js vanish carousel


document.addEventListener('DOMContentLoaded', function () {
    const carousel = document.getElementById('carousel');
    const mainContent = document.getElementById('mainContent');

    window.addEventListener('scroll', function () {
        const contentTop = mainContent.offsetTop;
        const scrollPosition = window.scrollY + window.innerHeight;

        if (scrollPosition > contentTop) {
            carousel.style.display = 'none';
        } else {
            carousel.style.display = 'block';
        }
    });
});
