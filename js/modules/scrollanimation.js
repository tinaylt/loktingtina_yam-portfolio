export function scrollIndex() {

    gsap.registerPlugin(ScrollTrigger);
    gsap.registerPlugin(SplitText); 

    //Hero animation//
    const projects = document.querySelectorAll('.project');
    const title = ['Digital<br>Designer', 'Front-end<br>Developer'];
    const h3Title = document.querySelector('#hero-h3 h3');
    let index = 0;

    function changeTitle() {
        h3Title.innerHTML = title[index];
    
        const split = new SplitText(h3Title, { type: 'chars' });
    
        gsap.from(split.chars, {
            duration: 0.5,
            autoAlpha: 0,
            stagger: 0.1,
            each: .1,
            ease: 'power1.inOut',
            onComplete: () => {
                index = (index + 1) % title.length;
                setTimeout(changeTitle, 2000);
            }
        });
    }
    
    changeTitle();

    const splitIntro = new SplitText('#hero-p', { type: 'words,chars' });

    const tl = gsap.timeline();
    tl.from(splitIntro.chars, {
        duration: 1,
        opacity: 0,
        y: 90,
        ease: "back",
        stagger: 0.01
    });

    gsap.from('#hello', {
        opacity: 0,
        duration: .7,
        delay: 1.3,
        ease: "back",
        y: 90
    });


    document.addEventListener("load", ()=> {
        setupGraphic();
        selfGraphic.src = "images/self-graphic-01.png"; 
    });
    
    function setupGraphic() {
        const selfGraphic = document.querySelector("#graphic1");
    
        selfGraphic.addEventListener("mouseover", ()=> {
            selfGraphic.src = "images/self-graphic-02.png";
            selfGraphic.classList.add('graphic2');
        });
    
        selfGraphic.addEventListener("mouseout", function () {
            selfGraphic.src = "images/self-graphic-01.png"; 
            selfGraphic.classList.remove('graphic2');
        });
    }

    const splitProject = new SplitText('#projects h2', {type: 'words,chars'});

    gsap.from(splitProject.chars, {
        scrollTrigger: {
            trigger: '#projects h2',
            start: 'bottom 70%',
            end: '70% center',
            scrub: 1,
        },
        opacity: 0,
        y: 90,
        rotation: 90,
        ease: "back",
        stagger: 0.01
    });

    projects.forEach((project, index) => {
        gsap.from(project, {
            opacity: 0,
            x: index % 2 === 0 ? -30 : 30,
            duration: 1.5,
            ease: 'elastic.inOut(1.2, 0.75)',
            scrollTrigger: {
                trigger: project,
                start: 'top 85%',
                end: 'top 20%',
                scrub: 1,
                toggleActions: "play reverse play reverse",
                markers: false
            }
        });
    });

    gsap.from('#video-container', {
        opacity: 0,
        x: 90,
        ease: 'power3.inOut',
        scrollTrigger: {
            trigger: '#video-container',
            start: 'top bottom',
            end: 'bottom top',
            markers: false,
            toggleActions: "play reverse play reverse",
        },
    });

    gsap.to('#grid-bg', {
        backgroundPositionY: '10%',
        ease: "none",
        scrollTrigger: {
            trigger: '#projects',
            start: 'top bottom',
            end: 'bottom top',
            scrub: .5,
            markers: false
        }
    });

}