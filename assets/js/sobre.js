$(document).ready(function () {

    $(".owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        navText: ["←", "→"],
        animateOut: 'fadeOut',
        margin: 10
    });

});

const headerMenu = document.querySelectorAll('nav');

headerMenu[0].children[0].children[1].style.opacity = '0.34'; // header desktop
headerMenu[1].children[0].children[1].style.opacity = '0.34'; // header mobile