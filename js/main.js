(() => {

    //Burger Menu//
    const burger = document.querySelector('#burger-icon');
    const mobileNav = document.querySelector('#mobile-nav');
    const lines = document.querySelectorAll('.line');
    const sections = document.querySelectorAll('#mobile-nav ul li a');
    
    //Function//

    //Burger Menu//
    function toggleMenu() {
        burger.classList.toggle('active');
        mobileNav.classList.toggle('hide');
        lines.forEach(line => line.classList.toggle('active'));
    }

    //Event Listener//
    //Burger Menu//
    burger.addEventListener('click', toggleMenu);

})();