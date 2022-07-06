$(document).ready(function(){
    if ($(".page-template-page-landing").length) {
        var arrowDown = `<div class="arrow">
                            <svg width="19" height="11" viewBox="0 0 19 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L9.5 9.5L18 1" stroke="#B68B1D"/>
                            </svg>
                        </div>`;
        var clock = `<div class="clock">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 20.5C16.6944 20.5 20.5 16.6944 20.5 12C20.5 7.30557 16.6944 3.5 12 3.5C7.30558 3.5 3.5 7.30557 3.5 12C3.5 16.6944 7.30558 20.5 12 20.5Z" stroke="#BF9875" stroke-miterlimit="10"/>
                            <path d="M12 12.5L12 6.5" stroke="#BF9875"/>
                            <path d="M11.5 12.5L17.5 12.5" stroke="#BF9875"/>
                        </svg>
                    </div>`
        var person = `<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.227 8.73209C14.044 8.73209 15.517 7.25911 15.517 5.44209C15.517 3.62508 14.044 2.1521 12.227 2.1521C10.41 2.1521 8.93701 3.62508 8.93701 5.44209C8.93701 7.25911 10.41 8.73209 12.227 8.73209Z" stroke="#8D8D9A" stroke-miterlimit="10"/>
                        <path d="M19.0903 13.3698C18.646 12.3889 18.0022 11.5114 17.1998 10.7933C16.3975 10.0751 15.4543 9.53209 14.4304 9.19883C13.4064 8.86557 12.3243 8.74939 11.253 8.85772C10.1817 8.96604 9.14467 9.29649 8.20818 9.82797C7.2717 10.3594 6.45628 11.0803 5.81394 11.9445C5.1716 12.8087 4.71646 13.7973 4.47754 14.8473C4.23863 15.8972 4.22118 16.9855 4.42633 18.0425C4.63147 19.0996 5.0547 20.1023 5.66901 20.9867" stroke="#8D8D9A" stroke-miterlimit="10"/>
                        </svg>`;
        var tel = `<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.28802 3.46399C7.43402 3.51266 7.64902 3.82132 7.93302 4.38999C8.02236 4.54399 8.14402 
                        4.76299 8.29802 5.04699C8.45202 5.33099 8.59402 5.58866 8.72402 5.81999C8.85402 6.05199 8.98002 6.26932
                        9.10202 6.47199C9.12602 6.50399 9.19702 6.60599 9.31502 6.77199C9.41271 6.90945 9.50027 7.05383 9.57702 7.20399C9.63135 
                        7.3117 9.66042 7.43037 9.66202 7.55099C9.62276 7.78891 9.49968 8.00492 9.31502 8.15999C9.08303 8.40456 8.83043 8.62872 8.56002 
                        8.82999C8.29407 9.02768 8.04182 9.24318 7.80502 9.47499C7.62469 9.61331 7.50126 9.81288 7.45802 10.036C7.46238 10.1302 7.48301 
                        10.2229 7.51902 10.31C7.56002 10.419 7.59402 10.502 7.61902 10.559C7.64402 10.616 7.70502 10.713 7.79002 10.851C7.87502 10.989
                         7.92202 11.067 7.93002 11.083C8.49915 12.131 9.21243 13.0941 10.049 13.944C10.899 14.7806 11.862 15.4939 12.91 16.063C12.926 
                         16.071 13.004 16.118 13.142 16.203C13.28 16.288 13.377 16.345 13.434 16.374C13.491 16.403 13.574 16.436 13.683 16.474C13.7701 
                         16.51 13.8629 16.5306 13.957 16.535C14.1801 16.4918 14.3797 16.3683 14.518 16.188C14.7498 15.9512 14.9653 15.6989 15.163 
                         15.433C15.3643 15.1626 15.5885 14.91 15.833 14.678C15.9881 14.4933 16.2041 14.3703 16.442 14.331C16.5626 14.3326 16.6813 
                         14.3617 16.789 14.416C16.9392 14.4927 17.0836 14.5803 17.221 14.678C17.391 14.796 17.493 14.867 17.521 14.891C17.721 15.013 
                         17.9384 15.139 18.173 15.269C18.4077 15.399 18.6654 15.541 18.946 15.695C19.23 15.849 19.449 15.9707 19.603 16.06C20.1717 
                         16.344 20.4804 16.559 20.529 16.705C20.557 16.7873 20.5692 16.8742 20.565 16.961C20.5557 17.2508 20.5151 17.5388 20.444 
                         17.82C20.3835 18.105 20.2978 18.3841 20.188 18.654C19.8372 19.2266 19.3183 19.6771 18.702 19.944C17.8275 20.4563 16.8063 
                         20.6602 15.802 20.523C15.5656 20.488 15.3317 20.4372 15.102 20.371C14.842 20.2977 14.6494 20.2387 14.524 20.194C14.3987 
                         20.1493 14.1734 20.066 13.848 19.944C13.5227 19.8227 13.3227 19.7497 13.248 19.725C12.5038 19.4651 11.7894 19.1266 11.117 
                         18.715C9.94786 17.9697 8.86841 17.0923 7.90002 16.1C6.90407 15.1312 6.02324 14.0507 5.27502 12.88C4.86346 12.2076 4.52487 
                         11.4933 4.26502 10.749C4.24036 10.6757 4.16736 10.4757 4.04602 10.149C3.92469 9.82233 3.84269 9.59699 3.80002 
                         9.47299C3.75536 9.34833 3.69636 9.15566 3.62302 8.89499C3.55683 8.6653 3.50606 8.43145 3.47102 8.19499C3.33386 
                         7.19076 3.53775 6.16956 4.05002 5.29499C4.31691 4.67875 4.76739 4.15982 5.34002 3.80899C5.60993 3.69922 5.88901 
                         3.61356 6.17402 3.55299C6.45517 3.4819 6.74317 3.44133 7.03302 3.43199C7.11927 3.42664 7.20577 3.4375 7.28802 3.46399Z" stroke="#D30000" stroke-miterlimit="10"/>
                        </svg>`;
        var tick = `<svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.5 4.5L3 7L9 1" stroke="white"/>
                    </svg>`;
        $('.inputBox.inputBox--name').append(person);
        $('.inputBox.inputBox--tel').append(tel);

        //contact form 7 inputs validation (adding class to custom parent of input)

        function callback(mutationsList, observer) {

            $(mutationsList).each(function(){

            if (this.target.classList.contains('wpcf7-not-valid')) {

                    $('.wpcf7-not-valid').parent().parent().addClass('inputBox--invalid');

                } 

            })

        }

        var mutationObserver = new MutationObserver(callback);

        if( $('.wpcf7-form').length ){

            $('.wpcf7 select, .wpcf7 input[type=text], .wpcf7 input[type=email], .wpcf7 input[type=tel], .wpcf7 textarea').each(function() {

                mutationObserver.observe(this, { attributes: true })

            });

        }
        



        $(".inputBox--select select").each(function () {
            var $this = $(this),
                selectOptions = $(this).children("option").length;

            $this.addClass("hide-select");
            $this.wrap('<div class="select"></div>');
            $this.after('<div class="custom-select"></div>');

            var $customSelect = $this.next("div.custom-select");
            $customSelect.text($this.children("option").eq(0).text());
            $customSelect.append(arrowDown);
            $customSelect.prepend(clock);

            var $optionlist = $("<ul />", {
                class: "select-options",
            }).insertAfter($customSelect);

            for (var i = 0; i < selectOptions; i++) {
                $("<li />", {
                    text: $this.children("option").eq(i).text(),
                    rel: $this.children("option").eq(i).val(),
                }).appendTo($optionlist);
            }

            var $optionlistItems = $optionlist.children("li");

            $customSelect.click(function (e) {
                e.stopPropagation();
                $("div.custom-select.active").not(this).each(function () {
                        $(this).removeClass("active").next("ul.select-options").hide();
                    });
                $(this).toggleClass("active").next("ul.select-options").slideToggle();
            });

            $optionlistItems.click(function (e) {
                e.stopPropagation();
                $customSelect.text($(this).text()).removeClass("active");
                $customSelect.append(arrowDown);
                $customSelect.prepend(clock);
                $this.val($(this).attr("rel"));
                $optionlist.hide();
                $optionlistItems.removeClass('current');
                $(this).addClass('current');
            });
            $('.select-options li').each(function(){
                $(this).prepend(tick);
            });
    
        });
    }
});