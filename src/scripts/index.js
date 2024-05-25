import $ from 'jquery';
import 'slick-carousel';

// Navbar
document.addEventListener('DOMContentLoaded', () => {
    let hamburger = document.querySelector('.hamburger')
    let navbar = document.querySelector('.navbar')
    hamburger.addEventListener("click", () => {
        hamburger.classList.toggle("hamburger-active")
        navbar.classList.toggle('navbar-revealed')
    })
});

// Slider

$(document).ready(function () {
    $('.slider').slick({
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 300
    });
});