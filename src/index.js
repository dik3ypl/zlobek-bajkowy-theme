document.addEventListener('DOMContentLoaded', () => {
    let hamburger = document.querySelector('.hamburger')
    let navbar = document.querySelector('.navbar')
    hamburger.addEventListener("click", () => {
        hamburger.classList.toggle("hamburger-active")
        navbar.classList.toggle('navbar-revealed')
    })
});
