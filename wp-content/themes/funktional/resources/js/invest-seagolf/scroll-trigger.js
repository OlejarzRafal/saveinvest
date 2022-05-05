gsap.registerPlugin(ScrollTrigger);
ScrollTrigger.matchMedia({
    "(min-width: 1200px) and (max-width: 1920px) ": function () {
   
        gsap.to(".parallax", {
            x: 0,
            y: 50,
            duration: 2,
            ease: "none",
            scrollTrigger: {
                trigger: ".parallax",
                start: "top 90%",
                end: "top 10%",
                scrub: 1,
                markers: false,
            },
        });
        gsap.to(".letter-down", {
            x: 0,
            y: 300,
            duration: 4,
            ease: "none",
            scrollTrigger: {
                trigger: ".letter-down",
                start: "top 85%",
                end: "top 25%",
                scrub: 1,
                markers: false,
            },
        });
        gsap.to(".letter-up", {
            x: 0,
            y: -200,
            duration: 4,
            ease: "none",
            scrollTrigger: {
                trigger: ".letter-up",
                start: "top 85%",
                end: "top 25%",
                scrub: 1,
                markers: false,
            },
        });
        gsap.to(".letter-right", {
            x: 100,
            y: 0,
            duration: 2,
            ease: "none",
            scrollTrigger: {
                trigger: ".letter-right",
                start: "top 85%",
                end: "top 25%",
                scrub: 1,
                markers: false,
            },
        });
        gsap.to(".letter-left", {
            x: -100,
            y: 0,
            duration: 2,
            ease: "none",
            scrollTrigger: {
                trigger: ".letter-left",
                start: "top 85%",
                end: "top 25%",
                scrub: 1,
                markers: false,
            },
        });
        gsap.to(".letter-right-2", {
            x: 100,
            y: 0,
            duration: 2,
            ease: "none",
            scrollTrigger: {
                trigger: ".letter-right-2",
                start: "top 85%",
                end: "top 25%",
                scrub: 1,
                markers: false,
            },
        });
        gsap.to(".letter-left-2", {
            x: -100,
            y: 0,
            duration: 2,
            ease: "none",
            scrollTrigger: {
                trigger: ".letter-left-2 ",
                start: "top 85%",
                end: "top 25%",
                scrub: 1,
                markers: false,
            },
        });
    },
});
        // gsap.to(".rotate-item-1", {
        //     rotation: 180,
        //     duration: 1,
        //     ease: "none",
        //     scrollTrigger: {
        //         trigger: ".rotate-item-1",
        //         start: "top 78%",
        //         end: "top 25%",
        //         scrub: 1,
        //         markers: false,
        //     },
        // });    

// if ($(window).width() > 1200) {

//     const boxes = gsap.utils.toArray(".ek-fadein-karwia");
//     boxes.forEach((box, i) => {
//       const anim = gsap.fromTo(
//         box,
//         { autoAlpha: 0, y: 70 },
//         { duration: 1, autoAlpha: 1, y: 0 }
//       );
//       ScrollTrigger.create({
//         trigger: box,
//         animation: anim,
//         once: false,
//       });
//     });


//     const boxLeft = gsap.utils.toArray(".ek-left-karwia");
//     boxLeft.forEach((box, i) => {
//       const anim = gsap.fromTo(
//         box,
//         { autoAlpha: 0, x: 700 },
//         { duration: 3, autoAlpha: 1, x: 0 }
//       );
//       ScrollTrigger.create({
//         trigger: box,
//         animation: anim,
//         once: false,
//       });
//     });    


//     const boxRight = gsap.utils.toArray(".ek-right-karwia");
//     boxRight.forEach((box, i) => {
//       const anim = gsap.fromTo(
//         box,
//         { autoAlpha: 0, x: -700 },
//         { duration: 3, autoAlpha: 1, x: 0 }
//       );
//       ScrollTrigger.create({
//         trigger: box,
//         animation: anim,
//         once: false,
//       });
//     });   

//     let revealImageKladno = document.querySelectorAll(".ek-karwia-photo");
//     revealImageKladno.forEach((container) => {
//         let image = container.querySelector("img");
//         let tl = gsap.timeline({
//             scrollTrigger: {
//                 trigger: container,
//                 toggleActions: "restart none none reset"
//             }
//         });
//         tl.set(container, {
//             autoAlpha: 1
//         });
//         tl.from(image, 1.1, {
//             scale: 1.1,
//             delay: -1.5,
//             ease: Power2.out
//         });
//     });
// }

