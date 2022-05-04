/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./resources/js/invest-seagolf.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/invest-seagolf.js":
/*!****************************************!*\
  !*** ./resources/js/invest-seagolf.js ***!
  \****************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _scss_invest_seagolf_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../scss/invest-seagolf.scss */ \"./resources/scss/invest-seagolf.scss\");\n/* harmony import */ var _scss_invest_seagolf_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_scss_invest_seagolf_scss__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _js_invest_seagolf_scroll_trigger__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../js/invest-seagolf/scroll-trigger */ \"./resources/js/invest-seagolf/scroll-trigger.js\");\n/* harmony import */ var _js_invest_seagolf_scroll_trigger__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_js_invest_seagolf_scroll_trigger__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _js_invest_seagolf_link_play__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../js/invest-seagolf/link-play */ \"./resources/js/invest-seagolf/link-play.js\");\n/* harmony import */ var _js_invest_seagolf_link_play__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_js_invest_seagolf_link_play__WEBPACK_IMPORTED_MODULE_2__);\n/* harmony import */ var _js_invest_seagolf_slider_testimonial__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../js/invest-seagolf/slider-testimonial */ \"./resources/js/invest-seagolf/slider-testimonial.js\");\n/* harmony import */ var _js_invest_seagolf_slider_testimonial__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_js_invest_seagolf_slider_testimonial__WEBPACK_IMPORTED_MODULE_3__);\n/* harmony import */ var _js_invest_seagolf_sliders_about__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../js/invest-seagolf/sliders-about */ \"./resources/js/invest-seagolf/sliders-about.js\");\n/* harmony import */ var _js_invest_seagolf_sliders_about__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_js_invest_seagolf_sliders_about__WEBPACK_IMPORTED_MODULE_4__);\n/* harmony import */ var _js_invest_seagolf_scroll_contact__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../js/invest-seagolf/scroll-contact */ \"./resources/js/invest-seagolf/scroll-contact.js\");\n/* harmony import */ var _js_invest_seagolf_scroll_contact__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_js_invest_seagolf_scroll_contact__WEBPACK_IMPORTED_MODULE_5__);\n // INVEST SEAGOLF\n\n\n\n\n\n // import \"../js/invest-kladno/animation\";\n// import \"../js/invest-kladno/sliders-localizations\";\n// import \"../js/invest-kladno/sliders-front-page\";\n// import \"../js/invest-kladno/nav-burger\";\n// import \"../js/invest-kladno/plots\";\n// import \"../js/invest-kladno/nav-scroll\";\n// import \"../js/invest-kladno/loader\";\n\n//# sourceURL=webpack:///./resources/js/invest-seagolf.js?");

/***/ }),

/***/ "./resources/js/invest-seagolf/link-play.js":
/*!**************************************************!*\
  !*** ./resources/js/invest-seagolf/link-play.js ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("if ($(window).width() > 767) {\n  $(\".sec8-links__box__video-link\").hover(function () {\n    $(this).find($('.sec8-links__box__video-link__item__hover')).get(0).play();\n  }, function () {\n    $(this).find($('.sec8-links__box__video-link__item__hover')).get(0).pause();\n  });\n} else {\n  $('.sec8-links__box__video-link__item__hover').each(function () {\n    $(this).get(0).play();\n  });\n}\n\n//# sourceURL=webpack:///./resources/js/invest-seagolf/link-play.js?");

/***/ }),

/***/ "./resources/js/invest-seagolf/scroll-contact.js":
/*!*******************************************************!*\
  !*** ./resources/js/invest-seagolf/scroll-contact.js ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("//counter on Scroll // Contact //\nvar counted = 0;\n\nif ($(\".sec1-contact-sg\").length) {\n  $(window).scroll(function () {\n    var counter = $(\"#counter\");\n\n    if (!counter) {\n      return;\n    }\n\n    var scrollTop = counter.offset().top - window.innerHeight;\n\n    if (counted === 0 && $(window).scrollTop() > scrollTop) {\n      $(\".count\").each(function () {\n        var $this = $(this),\n            countTo = $this.attr(\"data-count\");\n        $({\n          countNum: $this.text()\n        }).animate({\n          countNum: countTo\n        }, {\n          duration: 2000,\n          easing: \"swing\",\n          step: function step() {\n            $this.text(Math.floor(this.countNum));\n          },\n          complete: function complete() {\n            $this.text(this.countNum); //alert('finished');\n          }\n        });\n      });\n      counted = 1;\n    }\n  });\n}\n\n//# sourceURL=webpack:///./resources/js/invest-seagolf/scroll-contact.js?");

/***/ }),

/***/ "./resources/js/invest-seagolf/scroll-trigger.js":
/*!*******************************************************!*\
  !*** ./resources/js/invest-seagolf/scroll-trigger.js ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("gsap.registerPlugin(ScrollTrigger);\nScrollTrigger.matchMedia({\n  \"(min-width: 1200px) and (max-width: 1920px) \": function minWidth1200pxAndMaxWidth1920px() {\n    // gsap.to(\".rotate-item-1\", {\n    //     rotation: 180,\n    //     duration: 1,\n    //     ease: \"none\",\n    //     scrollTrigger: {\n    //         trigger: \".rotate-item-1\",\n    //         start: \"top 78%\",\n    //         end: \"top 25%\",\n    //         scrub: 1,\n    //         markers: false,\n    //     },\n    // });       \n    gsap.to(\".paralax\", {\n      x: 0,\n      y: 100,\n      duration: 5,\n      ease: \"none\",\n      scrollTrigger: {\n        trigger: \".paralax\",\n        start: \"top 85%\",\n        end: \"top 25%\",\n        scrub: 1,\n        markers: false\n      }\n    });\n    gsap.to(\".letter-down\", {\n      x: 0,\n      y: 100,\n      duration: 5,\n      ease: \"none\",\n      scrollTrigger: {\n        trigger: \".letter-down\",\n        start: \"top 85%\",\n        end: \"top 25%\",\n        scrub: 1,\n        markers: false\n      }\n    });\n  }\n}); // if ($(window).width() > 1200) {\n//     const boxes = gsap.utils.toArray(\".ek-fadein-karwia\");\n//     boxes.forEach((box, i) => {\n//       const anim = gsap.fromTo(\n//         box,\n//         { autoAlpha: 0, y: 70 },\n//         { duration: 1, autoAlpha: 1, y: 0 }\n//       );\n//       ScrollTrigger.create({\n//         trigger: box,\n//         animation: anim,\n//         once: false,\n//       });\n//     });\n//     const boxLeft = gsap.utils.toArray(\".ek-left-karwia\");\n//     boxLeft.forEach((box, i) => {\n//       const anim = gsap.fromTo(\n//         box,\n//         { autoAlpha: 0, x: 700 },\n//         { duration: 3, autoAlpha: 1, x: 0 }\n//       );\n//       ScrollTrigger.create({\n//         trigger: box,\n//         animation: anim,\n//         once: false,\n//       });\n//     });    \n//     const boxRight = gsap.utils.toArray(\".ek-right-karwia\");\n//     boxRight.forEach((box, i) => {\n//       const anim = gsap.fromTo(\n//         box,\n//         { autoAlpha: 0, x: -700 },\n//         { duration: 3, autoAlpha: 1, x: 0 }\n//       );\n//       ScrollTrigger.create({\n//         trigger: box,\n//         animation: anim,\n//         once: false,\n//       });\n//     });   \n//     let revealImageKladno = document.querySelectorAll(\".ek-karwia-photo\");\n//     revealImageKladno.forEach((container) => {\n//         let image = container.querySelector(\"img\");\n//         let tl = gsap.timeline({\n//             scrollTrigger: {\n//                 trigger: container,\n//                 toggleActions: \"restart none none reset\"\n//             }\n//         });\n//         tl.set(container, {\n//             autoAlpha: 1\n//         });\n//         tl.from(image, 1.1, {\n//             scale: 1.1,\n//             delay: -1.5,\n//             ease: Power2.out\n//         });\n//     });\n// }\n\n//# sourceURL=webpack:///./resources/js/invest-seagolf/scroll-trigger.js?");

/***/ }),

/***/ "./resources/js/invest-seagolf/slider-testimonial.js":
/*!***********************************************************!*\
  !*** ./resources/js/invest-seagolf/slider-testimonial.js ***!
  \***********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  var testimonialHomeSeaGolf = new Swiper(\".sec9-testimonial__box .swiper\", {\n    loop: true,\n    // autoplay: {\n    //     delay: 5000,\n    // },\n    effect: \"fade\",\n    fadeEffect: {\n      crossFade: true\n    },\n    // slidesPerView: 1,\n    // spaceBetween: 100,\n    speed: 200,\n    // If we need pagination\n    pagination: {\n      el: \".sec9-testimonial__box__nav .swiper-pagination\",\n      clickable: true\n    },\n    navigation: {\n      nextEl: \".sec9-testimonial__box__nav  .swiper-button-next\" // prevEl: \".front-slider-content-swiper .swiper-button-prev\",\n\n    }\n  });\n});\n$(document).ready(function () {\n  var testimonialContactSeaGolf = new Swiper(\".sec4-testimonial .swiper\", {\n    loop: true,\n    // autoplay: {\n    //     delay: 5000,\n    // },\n    effect: \"fade\",\n    fadeEffect: {\n      crossFade: true\n    },\n    // slidesPerView: 1,\n    // spaceBetween: 100,\n    speed: 200,\n    // If we need pagination\n    pagination: {\n      el: \".sec4-testimonial__box__nav .swiper-pagination\",\n      clickable: true\n    },\n    navigation: {\n      nextEl: \".sec4-testimonial__box__nav  .swiper-button-next\" // prevEl: \".front-slider-content-swiper .swiper-button-prev\",\n\n    }\n  });\n});\n\n//# sourceURL=webpack:///./resources/js/invest-seagolf/slider-testimonial.js?");

/***/ }),

/***/ "./resources/js/invest-seagolf/sliders-about.js":
/*!******************************************************!*\
  !*** ./resources/js/invest-seagolf/sliders-about.js ***!
  \******************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  var SeaGolfAbout = new Swiper(\".sec4-slider__slider\", {\n    // loop: true,\n    // autoplay: {\n    // delay: 5000,\n    // },\n    speed: 500,\n    slidesPerView: 1,\n    breakpoints: {\n      900: {\n        slidesPerView: 2\n      },\n      1100: {\n        slidesPerView: 3\n      },\n      1400: {\n        slidesPerView: 4\n      }\n    },\n    navigation: {\n      nextEl: \".sec4-slider__slider-nav .swiper-button-next\",\n      prevEl: \".sec4-slider__slider-nav .swiper-button-prev\"\n    }\n  });\n});\n\n//# sourceURL=webpack:///./resources/js/invest-seagolf/sliders-about.js?");

/***/ }),

/***/ "./resources/scss/invest-seagolf.scss":
/*!********************************************!*\
  !*** ./resources/scss/invest-seagolf.scss ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("// extracted by mini-css-extract-plugin\n\n//# sourceURL=webpack:///./resources/scss/invest-seagolf.scss?");

/***/ })

/******/ });