gsap.registerPlugin(ScrollTrigger);
ScrollTrigger.matchMedia({
    "(min-width: 1200px) and (max-width: 1920px) ": function () {
        gsap.to(".rotate-item-1", {
            rotation: 180,
            duration: 1,
            ease: "none",
            scrollTrigger: {
                trigger: ".rotate-item-1",
                start: "top 78%",
                end: "top 25%",
                scrub: 1,
                markers: false,
            },
        });
        gsap.to(".rotate-item-2", {
            rotation: 180,
            duration: 1,
            ease: "none",
            scrollTrigger: {
                trigger: ".rotate-item-2",
                start: "top 78%",
                end: "top 25%",
                scrub: 1,
                markers: false,
            },
        });
        gsap.to(".rotate-item-3", {
            rotation: 180,
            duration: 1,
            ease: "none",
            scrollTrigger: {
                trigger: ".rotate-item-3",
                start: "top 78%",
                end: "top 25%",
                scrub: 1,
                markers: false,
            },
        });
        gsap.to(".rotate-item-4", {
            rotation: 180,
            duration: 1,
            ease: "none",
            scrollTrigger: {
                trigger: ".rotate-item-4",
                start: "top 78%",
                end: "top 25%",
                scrub: 1,
                markers: false,
            },
        });
        gsap.to(".rotate-item-5", {
            rotation: 90,
            duration: 1,
            ease: "none",
            scrollTrigger: {
                trigger: ".rotate-item-5",
                start: "top 75%",
                end: "top 50%",
                scrub: 1,
                markers: false,
            },
        });
        gsap.to(".rotate-item-6", {
            rotation: 90,
            duration: 1,
            ease: "none",
            scrollTrigger: {
                trigger: ".rotate-item-6",
                start: "top 70%",
                end: "top 50%",
                scrub: 1,
                markers: false,
            },
        });
        gsap.to(".rotate-item-7", {
            rotation: 90,
            duration: 1,
            ease: "none",
            scrollTrigger: {
                trigger: ".rotate-item-7",
                start: "top 65%",
                end: "top 50%",
                scrub: 1,
                markers: false,
            },
        });
        gsap.to(".rotate-item-footer", {
            rotation: 180,
            duration: 1,
            ease: "none",
            scrollTrigger: {
                trigger: ".rotate-item-footer",
                start: "top 78%",
                end: "top 25%",
                scrub: 1,
                markers: false,
            },
        });
        gsap.to(".bottom-item-1", {
            // rotation: 180,
            x: 0,
            y: -19,
            duration: 1,
            ease: "none",
            scrollTrigger: {
                trigger: ".bottom-item-1",
                start: "top 60%",
                end: "top 25%",
                scrub: 1,
                markers: false,
            },
        });
        gsap.to(".bottom-item-2", {
            // rotation: 180,
            x: 0,
            y: -19,
            duration: 1,
            ease: "none",
            scrollTrigger: {
                trigger: ".bottom-item-2",
                start: "top 60%",
                end: "top 25%",
                scrub: 1,
                markers: false,
            },
        });
        gsap.to(".bottom-item-3", {
            // rotation: 180,
            x: 0,
            y: -19,
            duration: 5,
            ease: "none",
            scrollTrigger: {
                trigger: ".bottom-item-3",
                start: "top 60%",
                end: "top 25%",
                scrub: 1,
                markers: false,
            },
        });
        gsap.to(".left-rotate-item-1", {
            rotation: 225,
            x: 380,
            y: 0,
            duration: 5,
            ease: "none",
            scrollTrigger: {
                trigger: ".left-rotate-item-1",
                start: "top 85%",
                end: "top 25%",
                scrub: 1,
                markers: false,
            },
        });
    },
});


if ($(window).width() > 1200) {

    const boxes = gsap.utils.toArray(".ek-fadein-karwia");
    boxes.forEach((box, i) => {
      const anim = gsap.fromTo(
        box,
        { autoAlpha: 0, y: 70 },
        { duration: 1, autoAlpha: 1, y: 0 }
      );
      ScrollTrigger.create({
        trigger: box,
        animation: anim,
        once: false,
      });
    });


    const boxLeft = gsap.utils.toArray(".ek-left-karwia");
    boxLeft.forEach((box, i) => {
      const anim = gsap.fromTo(
        box,
        { autoAlpha: 0, x: 700 },
        { duration: 3, autoAlpha: 1, x: 0 }
      );
      ScrollTrigger.create({
        trigger: box,
        animation: anim,
        once: false,
      });
    });    


    const boxRight = gsap.utils.toArray(".ek-right-karwia");
    boxRight.forEach((box, i) => {
      const anim = gsap.fromTo(
        box,
        { autoAlpha: 0, x: -700 },
        { duration: 3, autoAlpha: 1, x: 0 }
      );
      ScrollTrigger.create({
        trigger: box,
        animation: anim,
        once: false,
      });
    });   

    let revealImageKladno = document.querySelectorAll(".ek-karwia-photo");
    revealImageKladno.forEach((container) => {
        let image = container.querySelector("img");
        let tl = gsap.timeline({
            scrollTrigger: {
                trigger: container,
                toggleActions: "restart none none reset"
            }
        });
        tl.set(container, {
            autoAlpha: 1
        });
        tl.from(image, 1.1, {
            scale: 1.1,
            delay: -1.5,
            ease: Power2.out
        });
    });
}