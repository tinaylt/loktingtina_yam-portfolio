export function contactAnimation() {
    gsap.registerPlugin(ScrollTrigger);
    gsap.registerPlugin(SplitText);

    const mainTitleSplit = new SplitText('#connect h2', {type: 'words,chars'});
    const timeline = gsap.timeline();
    const connectSplit = new SplitText('#connect-intro', {type: 'words,chars'});
    const tl = gsap.timeline();

    timeline.from(mainTitleSplit.chars, {
        duration: 1,
        opacity: 0,
        y: 90,
        rotation: 90,
        ease: "back.out(1.7)",
        stagger: 0.01,
    })


    tl.from(connectSplit.words, {
        opacity: 0,
        duration: 1,
        ease: "back",
        delay: .2,
        stagger: 0.01
    });

    gsap.from('#contact-form', {
        opacity: 0,
        x: 90,
        delay: .3,
        ease: 'elastic.out(1,0.75)',
    });

}