gsap.registerPlugin(ScrollTrigger);
ScrollTrigger.matchMedia({

    "(min-width: 1200px) and (max-width: 1920px) ": function () {
        gsap.to("#wave-home-2", {
            x: 0,
            y: 50,
            scrollTrigger: {
                trigger: "#wave-home-2",
                start: "top 90%",
                end: "top 10%",
                scrub: 1,
                markers: false,
            },
        });
        gsap.to("#wave-home-3", {
            x: 0,
            y: -130,
            scrollTrigger: {
                trigger: "#wave-home-3",
                start: "top 80%",
                end: "top 10%",
                scrub: 1.4,
                markers: false,
            },
        });
        gsap.to("#wave-home-4", {
                x: 0,
                y: -390,
                scrollTrigger: {
                    trigger: "#wave-home-4",
                    start: "top 110%",
                    end: "top 60%",
                    scrub: 3,
                    markers: false,
                    id: "scrub",
                },
            }),
            gsap.to("#wave-home-5", {
                x: 0,
                y: -220,
                scrollTrigger: {
                    trigger: "#wave-home-5",
                    start: "top 100%",
                    end: "top 50%",
                    scrub: 3,
                    markers: false,
                    id: "scrub",
                },
            })
    },

});


if ($(window).width() > 1200) {

    const boxes = gsap.utils.toArray(".el-fadein-kladno");
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

    let revealImageKladno = document.querySelectorAll(".reveal-kladno");
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
        tl.from(image, 1.5, {
            scale: 1.3,
            delay: -1.5,
            ease: Power2.out
        });
    });
}