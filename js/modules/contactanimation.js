export function contactAnimation() {
    gsap.registerPlugin(ScrollTrigger);
    gsap.registerPlugin(SplitText);

    const timeline = gsap.timeline();
    const connectSplit = new SplitText('#connect-intro', {type: 'words,chars'});
    const tl = gsap.timeline();

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
        delay: .2,
        ease: 'elastic.out(1,0.75)',
    });

    gsap.from('#connect-sticker', {
        opacity: 0,
        delay: .3,
    });

    gsap.from('#connect-sticker1', {
        opacity: 0,
        duration: 1,
        delay: .3,
        x: -90
    });

    gsap.from('#connect-sticker3', {
        opacity: 0,
        duration: 1,
        delay: .3,
        rotate: 1,
    });


}