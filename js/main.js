(() => {

    gsap.registerPlugin(ScrollTrigger);
    gsap.registerPlugin(ScrollToPlugin);
    gsap.registerPlugin(TextPlugin); 

    //gsap animation//
    const greetingBox = document.querySelectorAll('.message-box');
    const greetingText = document.querySelectorAll('.message-box p');
    const tickOne = document.querySelector('#tick1');
    const tickTwo = document.querySelector('#tick2');
    const tickThree = document.querySelector('#tick3');

    gsap.from('#box1', {
        autoAlpha: 0,
        duration: 2,
        delay: 1
    });

    gsap.to('.hello', {
        text: 'HELLO! I am TINA!',
        duration: .5,
        delay: 2
    });

    gsap.from('#tick1', {
        autoAlpha: 0,
        duration: 0.5,
        delay: 3,
        onComplete: readMessage
    });

    function readMessage() {
        tickOne.style.color = '#3ff92a';
    }

    gsap.from('#box2', {
        autoAlpha: 0,
        duration: 2,
        delay: 3
    });

    gsap.to('.position', {
        text: 'A Front End Developer and Digital Designer',
        duration: 2,
        delay: 3.5
    });

    gsap.from('#tick2', {
        autoAlpha: 0,
        duration: 1,
        delay: 5.5,
        onComplete: readMessageTwo
    });

    function readMessageTwo() {
        tickTwo.style.color = '#3ff92a';
    }

    gsap.from('#about-me-message', {
        autoAlpha: 0,
        duration: 2,
        delay: 6.5
    });

    gsap.to('.link', {
        text: 'Want to know more about me?',
        duration: 1,
        delay: 7
    });

    gsap.from('#tick3', {
        autoAlpha: 0,
        duration: 1,
        delay: 8,
        onComplete: readMessageThree
    });

    function readMessageThree() {
        tickThree.style.color = '#3ff92a';
    }

    gsap.from('#video-container', {
        autoAlpha: 0,
        duration: 0.5,
        ease: 'power1.in',
        scrollTrigger: {
            trigger:"#video-container",
            markers: false,
            start: 'top center',
            toggleActions: "play none none reset"
          },
    })

    gsap.from('#projects', {
        autoAlpha: 0,
        duration: 0.5,
        ease: 'power1.in',
        scrollTrigger: {
            trigger:"#projects",
            markers: false,
            start: 'top center',
            toggleActions: "play none none reset"
          },
    })

    gsap.from('#contact-form', {
        autoAlpha: 0,
        duration: 1
    })

    
    //Burger Menu//
    const burger = document.querySelector('#burger-icon');
    const mobileNav = document.querySelector('#mobile-nav');
    const lines = document.querySelectorAll('.line');

    //Video Player//
    const videoCon = document.querySelector('#video-container');
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
    const aboutMePhoto = document.querySelector('#photo-section');
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

        gsap.from('#photo-section', {
            autoAlpha: 0,
            duration: 1
        })

        gsap.from('#design-process', {
            autoAlpha: 0,
            duration: 1,
            delay: 1
        })

        gsap.from('#coding', {
            autoAlpha: 0,
            duration: 1,
            delay: 2
        });
    }

    function closeLightBox() {
        aboutMeSection.classList.add('lightbox');
    }

    function changeColour() {
        aboutMeSection.classList.remove('greyscale');
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
    aboutMePhoto.addEventListener('click', changeColour);


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