export function burgerMenu() {
    const burger = document.querySelector('#burger-icon');
    const mobileNav = document.querySelector('#mobile-nav');
    const lines = document.querySelectorAll('.line');

    function toggleMenu() {
        burger.classList.toggle('active');
        mobileNav.classList.toggle('hide');
        lines.forEach(line => line.classList.toggle('active'));

    };

    burger.addEventListener('click', toggleMenu);

}