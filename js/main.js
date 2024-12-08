(() => {

    //Burger Menu//
    const burger = document.querySelector('#burger-icon');
    const mobileNav = document.querySelector('#mobile-nav');
    const lines = document.querySelectorAll('.line');

    //Video Player//
    const videoCon =document.querySelector('#video-container');
    const player = document.querySelector('#video-container video');
    const videoPanel = document.querySelector('#video-controls');
    const playButton = document.querySelector('#play-button');
    const pauseButton = document.querySelector('#pause-button');
    const stopButton = document.querySelector('#stop-button');
    const volumeSlider = document.querySelector('#change-vol');

    player.controls = false;
    videoPanel.classList.remove('hidden');

    //About Me section//
    const aboutMeSection = document.querySelector('.lightbox');    
    const aboutMeClose = document.querySelector('#aboutme-close-button');
    const aboutMeMessage = document.querySelector('#about-me-message');
    //Function//

    //Burger Menu//
    function toggleMenu() {
        burger.classList.toggle('active');
        mobileNav.classList.toggle('hide');
        lines.forEach(line => line.classList.toggle('active'));
    }

    //About Me function//

    function openLightBox() {
        aboutMeSection.classList.remove('lightbox');
    }

    function closeLightBox() {
        aboutMeSection.classList.add('lightbox');
    }



    //Video Player Function//

    function playVideo() {
        player.play();
    }

    function pauseVideo() {
        player.pause();
    }

    function stopVideo() {
        player.pause();
        player.currentTime = 1;
    }

    function changeVolume() {
        player.volume = volumeSlider.value;
    }

    function hidePanel() {
        videoPanel.classList.add('hide');
    }

    function showPanel() {
        videoPanel.classList.remove('hide');
    }
    

    //Event Listener//
    //Burger Menu//
    burger.addEventListener('click', toggleMenu);

    //About Me//
    aboutMeMessage.addEventListener('click', openLightBox);
    aboutMeClose.addEventListener('click', closeLightBox);

    //Video Panel//
    playButton.addEventListener('click', playVideo);
    pauseButton.addEventListener('click', pauseVideo);
    stopButton.addEventListener('click', stopVideo);
    volumeSlider.addEventListener('change', changeVolume);

    videoPanel.addEventListener('mouseenter', showPanel);
    videoPanel.addEventListener('mouseleave', hidePanel);
    player.addEventListener('mouseenter', showPanel);
    player.addEventListener('mouseleave', hidePanel);

})();