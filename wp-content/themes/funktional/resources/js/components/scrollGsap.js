if ($(window).width() > 767) {
  gsap.registerPlugin(ScrollTrigger);

  let revealContainers = document.querySelectorAll(".reveal");

  revealContainers.forEach((container) => {
    let image = container.querySelector("img");
    let tl = gsap.timeline({
      scrollTrigger: {
        trigger: container,
        start: "-600",
        // once:true,
      },
    });

    tl.set(container, { autoAlpha: 1 });
    tl.from(container, 1.5, {
      xPercent: -100,
      ease: Power2.out,
    });
    tl.from(image, 1.5, {
      xPercent: 100,
      // scale: 1.3,
      delay: -1.5,
      ease: Power2.out,
    });
  });


  const boxes = gsap.utils.toArray(".el-fadein");
  boxes.forEach((box, i) => {
    const anim = gsap.fromTo(
      box,
      { autoAlpha: 0, y: 70 },
      { duration: 1, autoAlpha: 1, y: 0 }
    );
    ScrollTrigger.create({
      trigger: box,
      animation: anim,
      once: true,
    });
  });
}
