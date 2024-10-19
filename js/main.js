(() => {
    const burger = document.querySelector('#burger-icon');
    const mobileNav = document.querySelector('#mobile-nav');
    const lines = document.querySelectorAll('.line');
    
    // Function to toggle menu with animation
    function toggleMenu() {
        const openMenu = burger.classList.toggle('active');
        mobileNav.classList.toggle('hide', !openMenu);
        lines.forEach(line => line.classList.toggle('active', openMenu)); // Adds/removes 'active' class
    }
    
    // Event handler for mobile menu toggle
    burger.addEventListener('click', toggleMenu);
    

})();