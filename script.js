const burger = document.querySelector('.site-header__burger');
const menu = document.querySelector('.site-header__container');

burger.addEventListener('click', () => {
  menu.classList.toggle('open');
});