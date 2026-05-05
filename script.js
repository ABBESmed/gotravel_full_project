// select elements
const burger = document.querySelector('.site-header__burger');
const menu = document.querySelector('.site-header__container');

// when clicking burger
burger.addEventListener('click', () => {
    menu.classList.toggle('open');
});