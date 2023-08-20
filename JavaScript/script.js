// var currentPage = window.location.pathname.split('/').pop().replace('.php', '');

// // Add 'active' class to the current page's link
// var navLinks = document.querySelectorAll('.nav-link');
// for (var i = 0; i < navLinks.length; i++) {
//     if (navLinks[i].getAttribute('href').replace('.php', '') === currentPage) {
//         navLinks[i].classList.add('active');
//     }
// }








$('.counter_h3').each(function () {
    var start = parseInt($(this).data('start'));
    var end = parseInt($(this).data('end'));

    $(this).text(start); // Set initial value

    // Set up waypoint to trigger the animation
    $(this).waypoint(function () {
        $({ Counter: start }).animate(
            { Counter: end },
            {
                duration: 1500, // Animation duration in milliseconds
                easing: 'swing', // Easing function
                step: function (now) {
                    $(this).text(Math.floor(now));
                }
            }
        );
        this.destroy(); // Destroy the waypoint to prevent re-triggering
    }, {
        offset: '75%' // Trigger animation when element is 75% in view
    });
});