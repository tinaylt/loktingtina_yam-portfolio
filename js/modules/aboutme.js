export function aboutMeCloseBut() {
    const aboutMeClose = document.querySelector('#aboutMe-close-button');

function closeAboutMe() {
    history.back();
};
    aboutMeClose.addEventListener('click', closeAboutMe);
}

export function aboutMeAnimation() {

    gsap.registerPlugin(SplitText)
    gsap.registerPlugin(ScrollTrigger);

    const aboutMeSplitTitle = new SplitText('#aboutme h2', {type: 'words,chars'})

    const tl = gsap.timeline();
    tl.from(aboutMeSplitTitle.chars, {
        duration: .5,
        opacity: 0,
        y: 90,
        rotation: 90,
        ease: "back",
        stagger: 0.01
    });

    gsap.from('#pic-of-me', {
        opacity: 0,
        duration: .5,
        ease: 'power4.inOut',
        x: 90,
        delay: .1 
    })

    gsap.from('.mypic-bg', {
        opacity: 0,
        duration: 1,
        delay: .4,
        x: -1,
        y: -1,
        ease: 'power2.out'
    })

    gsap.from(".about-me-para", {
        duration: .3,
        opacity: 0,
        y: 20,
        ease: "back",
        stagger: 0.01,
        delay: .3
    })

    const subtitles = document.querySelectorAll('#knowledge h3');

    subtitles.forEach((subtitle) => {
        const designProcessSplit = new SplitText(subtitle, { type: 'words,chars' });
    
        const timeline = gsap.timeline();
        
        timeline.from(designProcessSplit.chars, {
            scrollTrigger: {
                trigger: subtitle,
                start: 'top 80%',
                end: 'top 80%',
                scrub: .5,
                markers: false,
                toggleActions: "play reverse play reverse"
            },
            duration: 1,
            opacity: 0,
            y: 90,
            rotation: 90,
            ease: "back.out(1.7)",
            stagger: 0.01,
        });
    });

    gsap.from('#design-process', {
        scrollTrigger: {
            trigger: '#design-process',
            start: 'top 70%',
            end: 'bottom 70%',
            scrub: .5,
            markers: false
        },
        opacity: 0,
        ease: 'power1.out'
    })

    const designProcesslis = document.querySelectorAll('#design-process span');

    designProcesslis.forEach((processLi) => {
        gsap.from(processLi, {
            scrollTrigger: {
                trigger: '#design-process',
                start: 'top 80%',
                end: 'bottom 80%',
                scrub: 0.5,
                markers: false,
            },
            opacity: 0,
            y: 90,
            ease: "back.out(1.7)",
            duration: 1,
            stagger: 0.01,
        });
    });

    const designProcessStep = document.querySelectorAll('#design-process p');

    designProcessStep.forEach((process) => {
        gsap.from(process, {
            scrollTrigger: {
                trigger: process,
                start: 'top 80%',
                end: 'bottom 80%',
                scrub: 0.5,
                markers: false,
            },
            opacity: 0,
            ease: "back.out(1.7)",
            duration: 1,
            stagger: 0.01,
        });
    });

    gsap.from('#design-software', {
        scrollTrigger: {
            trigger: '#design-software',
            start: 'top 80%',
            end: 'top 80%',
            scrub: 0.5,
            markers: false
        },
        opacity: 0,
        ease: 'power1.out'
    })

    const circles = document.querySelectorAll('#design-software .circle');

    circles.forEach(circle => {
        gsap.from(circle, {
            scrollTrigger: {
                trigger: '#design-software',
                start: 'top 80%',
                end: 'top 80%',
                scrub: 0.5,
                markers: false
            },
            opacity: 0,
            duration: 1,
            rotation: 360,
            ease: 'bounce'
        })
    });

    const squares = document.querySelectorAll('#design-software .square');

    squares.forEach(square => {
        gsap.from(square, {
            scrollTrigger: {
                trigger: '#design-software',
                start: 'top 80%',
                end: 'top 80%',
                scrub: 0.5,
                markers: false
            },
            opacity: 0,
            duration: 1,
            rotation: 360,
            ease: 'bounce'
        })
    });

    const triangles = document.querySelectorAll('#design-software .triangle');

    triangles.forEach(triangle => {
        gsap.from(triangle, {
            scrollTrigger: {
                trigger: '#design-software',
                start: 'top 80%',
                end: 'top 80%',
                scrub: 0.5,
                markers: false
            },
            opacity: 0,
            duration: 1,
            rotation: 360,
            ease: 'bounce'
        })
    });

    const designSoftwares = document.querySelectorAll('#design-software ul li');

    designSoftwares.forEach((software) => {
        gsap.from(software, {
            scrollTrigger: {
                trigger: '#design-software',
                start: 'top 80%',
                end: 'top 80%',
                scrub: 0.5,
                markers: false,
            },
            opacity: 0,
            ease: "back.out(1.7)",
            duration: .5,
            stagger: 0.01,
        });
    });

    gsap.from('#development-tech', {
        scrollTrigger: {
            trigger: '#development-tech',
            start: 'top 80%',
            end: 'top 80%',
            scrub: 0.5,
            markers: false
        },
        opacity: 0,
        ease: 'power1.out'
    });

    const devCircles = document.querySelectorAll('#development-tech .circle');

    devCircles.forEach(devCircle => {
        gsap.from(devCircle, {
            scrollTrigger: {
                trigger: '#development-tech',
                start: '-10% 90%',
                end: 'bottom 90%',
                scrub: 0.5,
                markers: false
            },
            opacity: 0,
            duration: 1,
            rotation: 360,
            ease: 'bounce'
        })
    });

    const devSquares = document.querySelectorAll('#development-tech .square');

    devSquares.forEach(devSquare => {
        gsap.from(devSquare, {
            scrollTrigger: {
                trigger: '#development-tech',
                start: 'top 90%',
                end: 'bottom 90%',
                scrub: 0.5,
                markers: false
            },
            opacity: 0,
            duration: 1,
            rotation: 360,
            ease: 'bounce'
        })
    });

    const devTriangles = document.querySelectorAll('#development-tech .triangle-blue');

    devTriangles.forEach(devTriangle => {
        gsap.from(devTriangle, {
            scrollTrigger: {
                trigger: '#development-tech',
                start: 'top 90%',
                end: 'bottom 90%',
                scrub: 0.5,
                markers: false
            },
            opacity: 0,
            duration: 1,
            rotation: 360,
            ease: 'bounce'
        })
    });

    const devSoftwares = document.querySelectorAll('#development-tech ul li');

    devSoftwares.forEach((devSoftware) => {
        gsap.from(devSoftware, {
            scrollTrigger: {
                trigger: '#development-tech',
                start: 'top 90%',
                end: 'bottom 90%',
                scrub: 0.5,
                markers: false,
            },
            opacity: 0,
            ease: "back.out(1.7)",
            duration: 1,
            stagger: 0.01,
        });
    });






    
}