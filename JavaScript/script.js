var currentPage = window.location.pathname.split('/').pop().replace('.php', '');

// Add 'active' class to the current page's link
var navLinks = document.querySelectorAll('.nav-link');
for (var i = 0; i < navLinks.length; i++) {
    if (navLinks[i].getAttribute('href').replace('.php', '') === currentPage) {
        navLinks[i].classList.add('active');
    }
}