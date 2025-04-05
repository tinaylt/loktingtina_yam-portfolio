export function projectScrollAnimation() {

    gsap.registerPlugin(ScrollTrigger);
    gsap.registerPlugin(SplitText);

    const projectTitle = document.querySelector('#project-detail h2');

    const titleSplit = new SplitText(projectTitle, {type: 'words,chars'});
    const timeline = gsap.timeline();

    timeline.from(titleSplit.chars, {
        duration: 1,
        opacity: 0,
        y: 90,
        rotation: 90,
        ease: "back.out(1.7)",
        stagger: 0.01,
    })

    gsap.from(".project-description", {
        opacity: 0,
        duration: 1,
        y: 90,
        ease: "back",
        stagger: 0.01
    })

    gsap.from('.main-image', {
        opacity: 0,
        delay: .6,
        ease: 'power2.out',
        duration: 1  
    })

    const projectBoxes = document.querySelectorAll('.project-box');
    projectBoxes.forEach(projectBox => {
    gsap.from(projectBox, {
        scrollTrigger: {
            trigger: projectBox,
            start: 'top 80%',
            end: 'bottom top',
            scrub: true,
            markers: false
        },
        opacity: 0,
        x: 90,
        ease: 'elastic.out(1, 0.5)'
    });
});

    const projectImages = document.querySelectorAll('.project-image img');

    projectImages.forEach(projectImage =>{
        gsap.from(projectImage, {
            scrollTrigger: {
                trigger: projectImage,
                start: 'top bottom',
                end: 'bottom top',
                scrub: true,
                markers: false
            },
            opacity: 0,
            ease: 'power2.out',
            duration: .5 
        })
    });

    const subtitles = document.querySelectorAll('.text-section h3');

    subtitles.forEach(subtitle => {
        gsap.from(subtitle, {
            scrollTrigger: {
                trigger: subtitle,
                start: 'top 90%',
                end: 'bottom top',
                scrub: true,
                markers: false
            },
            opacity: 0,
            y: 20
        })
    });

    const circles = document.querySelectorAll('.circle-p');

    circles.forEach(circle => {
        gsap.from(circle, {
            scrollTrigger: {
                trigger: circle,
                start: 'top 90%',
                end: 'bottom top',
                scrub: true,
                markers: false
            },
            opacity: 0,
            rotation: 360
        })
    });

    const squares = document.querySelectorAll('.square-p');

    squares.forEach(square => {
        gsap.from(square, {
            scrollTrigger: {
                trigger: square,
                start: 'top 90%',
                end: 'bottom top',
                scrub: true,
                markers: false
            },
            opacity: 0,
            rotation: 360
        })
    });

    const triangles = document.querySelectorAll('.triangle-p');

    triangles.forEach(triangle => {
        gsap.from(triangle, {
            scrollTrigger: {
                trigger: triangle,
                start: 'top 90%',
                end: 'bottom 40%',
                scrub: true,
                markers: false
            },
            opacity: 0,
            duration: .7,
            rotation: 360
        })
    });

    const paras = document.querySelectorAll('.para p');

    paras.forEach(para => {
        gsap.from(para, {
            scrollTrigger: {
                trigger: para,
                start: 'top bottom',
                end: 'bottom 80%',
                scrub: true,
                markers: false
            },
            opacity: 1,
            x: 90,
            ease: 'power2.out'
        })
    })
    

}