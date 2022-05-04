//counter on Scroll // Contact //
var counted = 0;
if ($(".sec1-contact-sg").length) {
    $(window).scroll(function () {
        const counter = $("#counter");

        if (!counter) {
            return;
        }

        const scrollTop = counter.offset().top - window.innerHeight;

        if (counted === 0 && $(window).scrollTop() > scrollTop) {
            $(".count").each(function () {
                var $this = $(this),
                    countTo = $this.attr("data-count");
                $({
                    countNum: $this.text(),
                }).animate(
                    {
                        countNum: countTo,
                    },

                    {
                        duration: 2000,
                        easing: "swing",
                        step: function () {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function () {
                            $this.text(this.countNum);
                            //alert('finished');
                        },
                    }
                );
            });
            counted = 1;
        }
    });
}