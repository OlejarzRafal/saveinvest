"use strict";
function _typeof(t) {
    return (_typeof =
        "function" == typeof Symbol && "symbol" == typeof Symbol.iterator
            ? function (t) {
                  return typeof t;
              }
            : function (t) {
                  return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t;
              })(t);
}
!(function (r) {
    var o = {};
    function n(t) {
        if (o[t]) return o[t].exports;
        var e = (o[t] = { i: t, l: !1, exports: {} });
        return r[t].call(e.exports, e, e.exports, n), (e.l = !0), e.exports;
    }
    (n.m = r),
        (n.c = o),
        (n.d = function (t, e, r) {
            n.o(t, e) || Object.defineProperty(t, e, { enumerable: !0, get: r });
        }),
        (n.r = function (t) {
            "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, { value: "Module" }), Object.defineProperty(t, "__esModule", { value: !0 });
        }),
        (n.t = function (e, t) {
            if ((1 & t && (e = n(e)), 8 & t)) return e;
            if (4 & t && "object" == _typeof(e) && e && e.__esModule) return e;
            var r = Object.create(null);
            if ((n.r(r), Object.defineProperty(r, "default", { enumerable: !0, value: e }), 2 & t && "string" != typeof e))
                for (var o in e)
                    n.d(
                        r,
                        o,
                        function (t) {
                            return e[t];
                        }.bind(null, o)
                    );
            return r;
        }),
        (n.n = function (t) {
            var e =
                t && t.__esModule
                    ? function () {
                          return t.default;
                      }
                    : function () {
                          return t;
                      };
            return n.d(e, "a", e), e;
        }),
        (n.o = function (t, e) {
            return Object.prototype.hasOwnProperty.call(t, e);
        }),
        (n.p = ""),
        n((n.s = 0));
})([
    function (t, e) {
        $(document).ready(function () {
            function e() {
                if ($(window).width() < 576) {
                    var t = $(".value-mobile").val();
                    var e = 1.23 * (a = parseFloat(t));
                } else {
                    var r = $(".range-slider__range"),
                        o = $(".range-slider__value span"),
                        n = r
                            .val()
                            .toString()
                            .replace(/\B(?=(\d{3})+(?!\d))/g, " ");
                    o.html(n),
                        r.on("input", function () {
                            var t = this.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
                            o.html(t);
                        });
                    var a = parseFloat(r.val());
                     (e = 1.23 * a);
                }
                var ccc = e;
                var cccc = e;
                var l = 1.14 * e + 2460,
                    i=l
                    u=e/2/1.23
                    ccc=u;
                    c = u.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
                
                var d,
                    p = 1.21 * e + 2460,
                    f=p;







                    var valueFromSlider = a;
                    var fullPriceNet = (valueFromSlider * 1.21) + 2000;
                    var fullPriceGross = fullPriceNet * 1.23;
                    var installmentNet = (fullPriceNet - 4878) / 84;
                    var installmentGross = (fullPriceGross - 6000) / 84;

                    var valueFromSliderSec = a;
                    var fullPriceNetSec = (valueFromSliderSec * 1.14) + 2000;
                    var fullPriceGrossSec = fullPriceNetSec * 1.23;
                    var installmentNetSec = (0.5 * fullPriceNetSec) / 84;
                    var installmentGrossSec = (0.5 * fullPriceGrossSec) / 84;
                    var firstPayGrossSec = fullPriceGrossSec / 2;
                    
                   
                    $('#fifty-percent').html((Math.round(firstPayGrossSec)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "));
               
                    if ($("#radio1").is(":checked")) {

                    $('#pierwsza-wplata').html('6 000');
                    $('#price-netto').html((Math.round(installmentNet)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "));
                    $('.price-brutto').html((Math.round(installmentGross)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "));
                    $('#calkowita-netto').html((Math.round(fullPriceNet)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "));
                    $('#calkowita-brutto').html((Math.round(fullPriceGross)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "));
                    
                    // var g = (d = (f - 6000) / 84).toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
                    // var gg = (dd = Math.floor((f - 6000) / 84)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
                    // $(".price-brutto").html(gg);
                    // var h = Math.round(d / 1.23)
                    //     .toString()
                    //     .replace(/\B(?=(\d{3})+(?!\d))/g, " ");
                    // $("#price-netto").html(h), $("#pierwsza-wplata").html("6 000");
                    // var s = 84 * d + 6000,
                    //     s= Math.round(s),
                    //     y =s
                    //         .toString()
                    //         .replace(/\B(?=(\d{3})+(?!\d))/g, " ");
                    // $("#calkowita-brutto").html(y);
                    // $(".price-percent-to-change").html('3');
                    // var m = s / 1.23,
                    //     b = Math.round(m)
                    //         .toString()
                    //         .replace(/\B(?=(\d{3})+(?!\d))/g, " ");
                    // $("#calkowita-netto").html(b); 
                }
                $("#radio2").is(":checked") &&

                (
                    
                    $('#fifty-percent').html((Math.round(firstPayGrossSec)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")),
                    $('#pierwsza-wplata').html((Math.round(firstPayGrossSec)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")),
                    $('#price-netto').html((Math.round(installmentNetSec)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")),
                    $('.price-brutto').html((Math.round(installmentGrossSec)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")),
                    $('#calkowita-netto').html((Math.round(fullPriceNetSec)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")),
                    $('#calkowita-brutto').html((Math.round(fullPriceGrossSec)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "))
                )
                    
                    // (
                    //     (
                    //         g = (d = Math.round((i - u) / 84)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")

                    // ),
                    // $('#price-netto').html((Math.round(installmentNetSec)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")),
                    // $('.price-brutto').html((Math.round(installmentGrossSec)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")),
                    // $('#calkowita-netto').html((Math.round(fullPriceNetSec)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")),
                    // $('#calkowita-brutto').html((Math.round(fullPriceGrossSec)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "))
                    
                    // console.log(u),
                    // console.log(i),
                    // console.log(g),
                    // console.log(d),
                    
                    // ccc = c.replace(' ',''),
                    // ccc=ccc*2*1.14+2000,
                    // ccc=Math.round(ccc),
                    // cccc=ccc*1.23,
                    // cccc=Math.round(cccc),
                    // cccc=cccc.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "),
                    // ccc = ccc.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "),
                    // console.log(ccc),
                    // (i = i*0.5/84),
                    // $(".price-brutto").html(Math.round(i).toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")),
                    // (i=i/1.23),
                    // (i = Math.round(i).toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")),
                    // $("#price-netto").html(i),
                    // $(".price-percent-to-change").html('2'),
                    // $("#pierwsza-wplata").html(c),
                    // (s = 84 * d + u),
                    // (y = Math.round(s)
                    //     .toString()
                    //     .replace(/\B(?=(\d{3})+(?!\d))/g, " ")),
                    // $("#calkowita-brutto").html(cccc),
                    
                    // (b = Math.round(c)
                    //     .toString()
                    //     .replace(/\B(?=(\d{3})+(?!\d))/g, " ")),
                    // $("#calkowita-netto").html(ccc)
                    
                    
                    // );
            }
            e(),
                $(".calculator").change(function (t) {
                    e();
                });
        });
    },
]);



//# sourceMappingURL=all.js.map
