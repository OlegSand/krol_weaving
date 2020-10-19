
// BURGER VISIBLE
let burger = document.querySelector('.burger');
    menu = document.querySelector('.menu');

burger.addEventListener('click', () => {
    burger.classList.toggle('visible-burger');
    menu.classList.toggle('visible-menu')
})