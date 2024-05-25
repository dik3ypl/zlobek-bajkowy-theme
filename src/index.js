document.addEventListener('DOMContentLoaded', () => {
    let hamburger = document.querySelector('.hamburger')
    hamburger.addEventListener("click", () => {
        hamburger.classList.toggle("hamburger-active")
    })
});
