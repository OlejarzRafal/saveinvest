$(document).ready(function () {
    // VAARIABLES
    var rangeCheck = $("#range-checbox");
    var target = $("#range-input-1");
    var target2 = $("#range-input-2");

    var range2maxText = $("#range-2-maxValue");
    var range2minText = $("#range-2-minValue");

    var range1 = $("#range-input-1");
    var range1text = $("#range-fieldtext-1");
    var range2 = $("#range-input-2");
    var range2text = $("#range-fieldtext-2");

    function changeRange1() {
        var minR1 = target.attr("min");
        var maxR1 = target.attr("max");
        var valR1 = target.val();

        target2.attr("max", valR1);
        target2.val(0);
        $("#range-fill-2").css("width", 0 + "%");

        $("#range-fill-1").css("width", ((valR1 - minR1) * 100) / (maxR1 - minR1) + "%");
        range2maxText.html((valR1 / 1000) + " tys.");

        if (rangeCheck.prop('checked')) {
            target2.attr("max", 11999);
            target2.attr("min", 6000);
            target2.val(0);
            target2.addClass('active6-12');
            range2maxText.html("12 tys.");
            range2minText.html("6 tys.");
            $("#range-fill-2").css("width", 0 + "%");
        } else {
            target2.attr("max", valR1);
            target2.attr("min", 12100);
            target2.val(0);
            target2.removeClass('active6-12');
            range2maxText.html((valR1 / 1000) + " tys.");
            range2minText.html("12.1 tys.");
            $("#range-fill-2").css("width", 0 + "%");
        }
    }

    function changeRange2() {
        var minR2 = target2.attr("min");
        var maxR2 = target2.attr("max");
        var valR2 = target2.val();
        $("#range-fill-2").css("width", ((valR2 - minR2) * 100) / (maxR2 - minR2) + "%");
    }

    function changeRange3() {
        var minR1 = target.attr("min");
        var maxR1 = target.attr("max");
        var valR1 = target.val();
        if (rangeCheck.prop('checked')) {
            target2.attr("max", 12000);
            target2.attr("min", 6000);
            target2.val(0);
            target2.addClass('active6-12');
            range2maxText.html("12 tys.");
            range2minText.html("6 tys.");
            $("#range-fill-2").css("width", 0 + "%");

        } else {
            target2.attr("max", valR1);
            target2.attr("min", 12100);
            target2.val(0);
            target2.removeClass('active6-12');
            range2maxText.html((valR1 / 1000) + " tys.");
            range2minText.html("12.1 tys.");
            $("#range-fill-2").css("width", 0 + "%");
        }
    }

    // ******************
    // calculate
    // *******************

    function calc() {

        range1text.html(parseFloat(range1.val()));
        range2text.html(parseFloat(range2.val()));

        range1.on("input", function () {
            range1text.html(parseFloat(range1.val()));
        });
        range2.on("input", function () {
            range2text.html(parseFloat(range2.val()));
        });

        var range1Val = parseFloat(range1.val());
        // var range1ValBrutto = range1Val * 1.23;
        var range2Val = parseFloat(range2.val());
        // var range2ValBrutto = range2Val * 1.23;

        // ***************************************************************************************

        if (rangeCheck.prop('checked')) {
            var BudowlanaDziałka = Math.round(
                range2Val + (range1Val - range2Val) * (1 + 0.05 * 7) + 4920
            );
            console.log("Budowlana: " + range2Val + "+" + "(" + range1Val + "-" + range2Val + ")" + "* (1 + 0.05 * 7) + 4920");
            var RolnaDziałka = Math.round(
                range2Val + (range1Val - range2Val) * (1 + 0.05 * 7) + 4000
            );
            console.log("Rolna: " + range2Val + "+" + "(" + range1Val + "-" + range2Val + ")" + "* (1 + 0.05 * 7) + 4000");

            $(".price-color").addClass('active');

        } else {
            var BudowlanaDziałka = Math.round(
                range2Val + (range1Val - range2Val) * (1 + 0.05 * 7) + 3690
            );
            console.log("Budowlana: " + range2Val + "+" + "(" + range1Val + "-" + range2Val + ")" + "* (1 + 0.05 * 7) + 3690");

            var RolnaDziałka = Math.round(
                range2Val + (range1Val - range2Val) * (1 + 0.05 * 7) + 3000
            );
            console.log("Rolna: " + range2Val + "+" + "(" + range1Val + "-" + range2Val + ")" + "* (1 + 0.05 * 7) + 3000");

            $(".price-color").removeClass('active');
        }

        var RolnaDziałkaRata = Math.round((RolnaDziałka - range2Val) / 84);
        var BudowlanaDziałkaRata = Math.round((BudowlanaDziałka - range2Val) / 84);

        // ROLNE
        $("#rolna-rata").html(
            RolnaDziałkaRata.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")
        );
        $("#rolna-calkowita").html(
            RolnaDziałka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")
        );
        $("#info-rata-rolna").html(
            RolnaDziałkaRata.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")
        );
        $("#rolna-pierwsza-wplata").html(range2.val());

        // BUDOWLANE
        $("#budowlana-rata").html(
            BudowlanaDziałkaRata.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")
        );
        $("#budowlana-calkowita").html(
            BudowlanaDziałka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")
        );
        $("#budowlana-pierwsza-wplata").html(range2.val());
        $("#info-rata-budowlana").html(
            BudowlanaDziałkaRata.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")
        );
    }


    
    changeRange1();
    changeRange2();
    $("#range-input-1").on("input", function () {
        changeRange1();
    });
    $("#range-input-2").on("input", function () {
        changeRange2();
    });
    $(".range-box--3").change(function () {
        changeRange3();
    });
    calc();
    $(".calculator").change(function () {
        calc();
    });
});

//# sourceMappingURL=all.js.map
// budowlana 2
// 73800 + (73800 * 1.35) + 3690 = 177 120

// rolna2
// 60000 + (60000 * 1.35) +  3000 = 144 000