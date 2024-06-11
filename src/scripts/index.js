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

    // let path1 = document.getElementById('path2357')
    // let path1Len = path1.getTotalLength()
    // console.log(path1Len)
    // setInterval(() => {
    //     setTimeout(() => {
    //         path1.style.strokeDasharray = 0;
    //         console.log("test")
    //     }, 3000)
    //     path1.style.strokeDasharray = path1Len;
    // }, 6000)
});

// Slider

$(document).ready(function () {
    $('.slider').slick({
        dots: true,
        infinite: true,
        speed: 500,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: true
    });
});

// Dynamic .container padding

document.addEventListener("DOMContentLoaded", function () {
    const header = document.querySelector('header');
    const mainContent = document.querySelector('.container');

    function adjustPadding() {
        const headerHeight = header.offsetHeight;
        mainContent.style.paddingTop = headerHeight + 'px';
    }

    adjustPadding();
    window.addEventListener('resize', adjustPadding);
});