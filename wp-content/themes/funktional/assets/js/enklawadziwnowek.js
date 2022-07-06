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
/******/ 	return __webpack_require__(__webpack_require__.s = "./resources/js/invest-enklawadziwnowek.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/invest-enklawadziwnowek.js":
/*!*************************************************!*\
  !*** ./resources/js/invest-enklawadziwnowek.js ***!
  \*************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _scss_invest_enklawadziwnowek_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../scss/invest-enklawadziwnowek.scss */ \"./resources/scss/invest-enklawadziwnowek.scss\");\n/* harmony import */ var _scss_invest_enklawadziwnowek_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_scss_invest_enklawadziwnowek_scss__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _js_invest_enklawadziwnowek_loader__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../js/invest-enklawadziwnowek/loader */ \"./resources/js/invest-enklawadziwnowek/loader.js\");\n/* harmony import */ var _js_invest_enklawadziwnowek_loader__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_js_invest_enklawadziwnowek_loader__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _js_invest_enklawadziwnowek_plots__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../js/invest-enklawadziwnowek/plots */ \"./resources/js/invest-enklawadziwnowek/plots.js\");\n/* harmony import */ var _js_invest_enklawadziwnowek_plots__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_js_invest_enklawadziwnowek_plots__WEBPACK_IMPORTED_MODULE_2__);\n/* harmony import */ var _js_invest_enklawadziwnowek_customMap__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../js/invest-enklawadziwnowek/customMap */ \"./resources/js/invest-enklawadziwnowek/customMap.js\");\n/* harmony import */ var _js_invest_enklawadziwnowek_customMap__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_js_invest_enklawadziwnowek_customMap__WEBPACK_IMPORTED_MODULE_3__);\n/* harmony import */ var _js_invest_enklawadziwnowek_gallery__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../js/invest-enklawadziwnowek/gallery */ \"./resources/js/invest-enklawadziwnowek/gallery.js\");\n/* harmony import */ var _js_invest_enklawadziwnowek_gallery__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_js_invest_enklawadziwnowek_gallery__WEBPACK_IMPORTED_MODULE_4__);\n/* harmony import */ var _js_invest_enklawadziwnowek_nav__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../js/invest-enklawadziwnowek/nav */ \"./resources/js/invest-enklawadziwnowek/nav.js\");\n/* harmony import */ var _js_invest_enklawadziwnowek_nav__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_js_invest_enklawadziwnowek_nav__WEBPACK_IMPORTED_MODULE_5__);\n/* harmony import */ var _js_invest_enklawadziwnowek_sliders__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../js/invest-enklawadziwnowek/sliders */ \"./resources/js/invest-enklawadziwnowek/sliders.js\");\n/* harmony import */ var _js_invest_enklawadziwnowek_sliders__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(_js_invest_enklawadziwnowek_sliders__WEBPACK_IMPORTED_MODULE_6__);\n/* harmony import */ var _js_invest_enklawadziwnowek_burgerNav__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../js/invest-enklawadziwnowek/burgerNav */ \"./resources/js/invest-enklawadziwnowek/burgerNav.js\");\n/* harmony import */ var _js_invest_enklawadziwnowek_burgerNav__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(_js_invest_enklawadziwnowek_burgerNav__WEBPACK_IMPORTED_MODULE_7__);\n/* harmony import */ var _js_invest_enklawadziwnowek_scroll_trigger__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ../js/invest-enklawadziwnowek/scroll-trigger */ \"./resources/js/invest-enklawadziwnowek/scroll-trigger.js\");\n/* harmony import */ var _js_invest_enklawadziwnowek_scroll_trigger__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(_js_invest_enklawadziwnowek_scroll_trigger__WEBPACK_IMPORTED_MODULE_8__);\n\n\n\n\n\n\n\n\n\n\n//# sourceURL=webpack:///./resources/js/invest-enklawadziwnowek.js?");

/***/ }),

/***/ "./resources/js/invest-enklawadziwnowek/burgerNav.js":
/*!***********************************************************!*\
  !*** ./resources/js/invest-enklawadziwnowek/burgerNav.js ***!
  \***********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("// // Hamburger menu\n// const button = document.getElementById(\"navbar-toggler-icon\");\n// const menu = document.getElementById(\"nav-menu\");\n// const headersubpage = document.querySelector(\".header__subpage\");\n// button.addEventListener(\"click\", function () {\n//   if (button.classList.contains(\"navbar-toggler-icon--opened\") == false) {\n//     button.classList.add(\"navbar-toggler-icon--opened\");\n//     menu.classList.add(\"nav__menu--opened\");\n//     headersubpage.classList.add(\"header__subpage--opened\");\n//     document.body.style.overflow = \"hidden\";\n//   } else {\n//     button.classList.remove(\"navbar-toggler-icon--opened\");\n//     menu.classList.remove(\"nav__menu--opened\");\n//     headersubpage.classList.remove(\"header__subpage--opened\");\n//     document.body.style.overflow = \"unset\";\n//   }\n// });\n// if ($(window).width() < 767) {\n//   $(\".nav__menu ul li a\").click(function () {\n//     console.log('test');\n//     button.classList.remove(\"navbar-toggler-icon--opened\");\n//     menu.classList.remove(\"nav__menu--opened\");\n//     document.body.style.overflow = \"unset\";\n//   });\n// }\n$(document).ready(function () {\n  $(\".enkalwa-dziwnowek-nav__container__burger\").click(function () {\n    $(this).toggleClass(\"open\"); // $(\".kladno-nav-container__box\").slideToggle();\n    // $(\".kladno-nav-container\").toggleClass(\"active\");\n    // $(\".kladno-nav-container__box\").slideToggle();\n\n    $(\".navbar-collapse\").toggleClass(\"show\"); // $(\".seagolf-nav__container__mobile\").toggleClass(\"active\");\n    // $(\".seagolf-nav__container__box\").toggleClass(\"none\");\n    // $(\".seagolf-nav__container\").toggleClass(\"active\");\n  });\n});\n\n//# sourceURL=webpack:///./resources/js/invest-enklawadziwnowek/burgerNav.js?");

/***/ }),

/***/ "./resources/js/invest-enklawadziwnowek/customMap.js":
/*!***********************************************************!*\
  !*** ./resources/js/invest-enklawadziwnowek/customMap.js ***!
  \***********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  var bikes = $('.bikes');\n  var pool = $('.pool');\n  var playground = $('.playground');\n  $(\".plot-sectors__svg #pool\").hover(function () {\n    pool.addClass(\"elements__item--open\");\n  }, function () {\n    pool.removeClass(\"elements__item--open\");\n  });\n  $(\".plot-sectors__svg #bikes\").hover(function () {\n    bikes.addClass(\"elements__item--open\");\n  }, function () {\n    bikes.removeClass(\"elements__item--open\");\n  });\n  $(\".plot-sectors__svg #playground\").hover(function () {\n    playground.addClass(\"elements__item--open\");\n  }, function () {\n    playground.removeClass(\"elements__item--open\");\n  });\n});\n\n//# sourceURL=webpack:///./resources/js/invest-enklawadziwnowek/customMap.js?");

/***/ }),

/***/ "./resources/js/invest-enklawadziwnowek/gallery.js":
/*!*********************************************************!*\
  !*** ./resources/js/invest-enklawadziwnowek/gallery.js ***!
  \*********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  $('#filter').on('click', 'a', function () {\n    var filterValue = $(this).attr('data-filter');\n    $('#grid').find('[data-category]').removeClass('hide');\n\n    if (filterValue === 'allItem') {\n      $(\".pictures\").removeClass(\"active\");\n      $(\".visual\").removeClass(\"active\");\n      $(\".movies\").removeClass(\"active\");\n      $(\".all\").addClass(\"active\");\n    }\n\n    if (filterValue === 'visualizations') {\n      $('#grid').find('[data-category=\"pictures\"]').addClass('hide');\n      $('#grid').find('[data-category=\"movies\"]').addClass('hide');\n      $(\".pictures\").removeClass(\"active\");\n      $(\".visual\").addClass(\"active\");\n      $(\".movies\").removeClass(\"active\");\n      $(\".all\").removeClass(\"active\");\n    }\n\n    if (filterValue === 'pictures') {\n      $('#grid').find('[data-category=\"visualizations\"]').addClass('hide');\n      $('#grid').find('[data-category=\"movies\"]').addClass('hide');\n      $(\".pictures\").addClass(\"active\");\n      $(\".visual\").removeClass(\"active\");\n      $(\".movies\").removeClass(\"active\");\n      $(\".all\").removeClass(\"active\");\n    }\n\n    if (filterValue === 'movies') {\n      $('#grid').find('[data-category=\"visualizations\"]').addClass('hide');\n      $('#grid').find('[data-category=\"pictures\"]').addClass('hide');\n      $(\".pictures\").removeClass(\"active\");\n      $(\".visual\").removeClass(\"active\");\n      $(\".movies\").addClass(\"active\");\n      $(\".all\").removeClass(\"active\");\n    }\n  });\n});\n\n//# sourceURL=webpack:///./resources/js/invest-enklawadziwnowek/gallery.js?");

/***/ }),

/***/ "./resources/js/invest-enklawadziwnowek/loader.js":
/*!********************************************************!*\
  !*** ./resources/js/invest-enklawadziwnowek/loader.js ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(window).on(\"load\", function () {\n  setTimeout(function () {\n    $(\".preloader\").fadeOut(500);\n  });\n});\n\n//# sourceURL=webpack:///./resources/js/invest-enklawadziwnowek/loader.js?");

/***/ }),

/***/ "./resources/js/invest-enklawadziwnowek/nav.js":
/*!*****************************************************!*\
  !*** ./resources/js/invest-enklawadziwnowek/nav.js ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("jQuery(document).ready(function ($) {\n  if ($(document).width() > 992) {\n    $('#nav .dropdown').removeClass(\"open\");\n  }\n\n  if ($(document).width() < 992) {\n    $('#nav .dropdown').addClass(\"open\");\n  }\n\n  $(window).resize(function () {\n    if (window.innerWidth < 992) {\n      $('.dropdown').addClass(\"open\");\n    } else if (window.innerWidth > 992) {\n      $('.dropdown').removeClass(\"open\");\n    }\n  });\n});\n\n(function () {\n  var topSection = $('.navbar');\n  var topSectionHeight = topSection.height();\n  var main = document.querySelector(\".mainSection\");\n\n  if (document.querySelector(\".mainSection\") === null) {\n    main = document.querySelector(\".headerSection\");\n  }\n\n  if (window.innerWidth > 992) {\n    $(document).on('scroll', function () {\n      var top_of_screen = $(window).scrollTop();\n\n      if (topSectionHeight > top_of_screen + 15) {\n        topSection.removeClass(\"animated slideInDown fixed\");\n        main.classList.remove(\"jsFix\");\n      } else {\n        topSection.addClass(\"animated slideInDown fixed\");\n        main.classList.add(\"jsFix\");\n      }\n    });\n  }\n})();\n\n//# sourceURL=webpack:///./resources/js/invest-enklawadziwnowek/nav.js?");

/***/ }),

/***/ "./resources/js/invest-enklawadziwnowek/plots.js":
/*!*******************************************************!*\
  !*** ./resources/js/invest-enklawadziwnowek/plots.js ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  $('.plot-sectors__all [data-plots-sectors]').scrollLeft(220);\n});\n\n//# sourceURL=webpack:///./resources/js/invest-enklawadziwnowek/plots.js?");

/***/ }),

/***/ "./resources/js/invest-enklawadziwnowek/scroll-trigger.js":
/*!****************************************************************!*\
  !*** ./resources/js/invest-enklawadziwnowek/scroll-trigger.js ***!
  \****************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("gsap.registerPlugin(ScrollTrigger);\nScrollTrigger.matchMedia({\n  \"(min-width: 1200px) and (max-width: 1920px) \": function minWidth1200pxAndMaxWidth1920px() {\n    gsap.to(\".parallax\", {\n      x: 0,\n      y: 100,\n      duration: 2,\n      ease: \"none\",\n      scrollTrigger: {\n        trigger: \".parallax\",\n        start: \"top 20%\",\n        end: \"top 0%\",\n        scrub: 1,\n        markers: false\n      }\n    });\n    gsap.to(\".parallax-top-contact\", {\n      x: 0,\n      y: -50,\n      duration: 2,\n      ease: \"none\",\n      scrollTrigger: {\n        trigger: \".parallax-top-contact\",\n        start: \"top 70%\",\n        end: \"top 30%\",\n        scrub: 1,\n        markers: false\n      }\n    });\n    gsap.to(\".parallax-bottom\", {\n      x: 0,\n      y: 50,\n      duration: 2,\n      ease: \"none\",\n      scrollTrigger: {\n        trigger: \".parallax-bottom\",\n        start: \"top 70%\",\n        end: \"top 40%\",\n        scrub: 1,\n        markers: false\n      }\n    });\n    gsap.to(\".parallax-bottom-map\", {\n      x: 0,\n      y: 200,\n      duration: 2,\n      ease: \"none\",\n      scrollTrigger: {\n        trigger: \".parallax-bottom-map\",\n        start: \"top 80%\",\n        end: \"top 20%\",\n        scrub: 1,\n        markers: false\n      }\n    });\n    gsap.to(\".parallax-bottom-contact\", {\n      x: 0,\n      y: 150,\n      duration: 2,\n      ease: \"none\",\n      scrollTrigger: {\n        trigger: \".parallax-bottom-contact\",\n        start: \"top 30%\",\n        end: \"top 0%\",\n        scrub: 1,\n        markers: false\n      }\n    });\n    gsap.to(\".parallax-top\", {\n      x: 0,\n      y: -100,\n      duration: 2,\n      ease: \"none\",\n      scrollTrigger: {\n        trigger: \".parallax-top\",\n        start: \"top 85%\",\n        end: \"top 20%\",\n        scrub: 1,\n        markers: false\n      }\n    });\n    gsap.to(\".logo-right\", {\n      x: 150,\n      y: 0,\n      duration: 2,\n      ease: \"none\",\n      scrollTrigger: {\n        trigger: \".logo-right\",\n        start: \"top 80%\",\n        end: \"top 20%\",\n        scrub: 1,\n        markers: false\n      }\n    }); // gsap.to(\".letter-down\", {\n    //     x: 0,\n    //     y: 300,\n    //     duration: 4,\n    //     ease: \"none\",\n    //     scrollTrigger: {\n    //         trigger: \".letter-down\",\n    //         start: \"top 85%\",\n    //         end: \"top 25%\",\n    //         scrub: 1,\n    //         markers: false,\n    //     },\n    // });\n    // gsap.to(\".letter-up\", {\n    //     x: 0,\n    //     y: -200,\n    //     duration: 4,\n    //     ease: \"none\",\n    //     scrollTrigger: {\n    //         trigger: \".letter-up\",\n    //         start: \"top 85%\",\n    //         end: \"top 25%\",\n    //         scrub: 1,\n    //         markers: false,\n    //     },\n    // });\n    // gsap.to(\".letter-right\", {\n    //     x: 100,\n    //     y: 0,\n    //     duration: 2,\n    //     ease: \"none\",\n    //     scrollTrigger: {\n    //         trigger: \".letter-right\",\n    //         start: \"top 85%\",\n    //         end: \"top 25%\",\n    //         scrub: 1,\n    //         markers: false,\n    //     },\n    // });\n    // gsap.to(\".letter-right-2\", {\n    //     x: 100,\n    //     y: 0,\n    //     duration: 2,\n    //     ease: \"none\",\n    //     scrollTrigger: {\n    //         trigger: \".letter-right-2\",\n    //         start: \"top 85%\",\n    //         end: \"top 25%\",\n    //         scrub: 1,\n    //         markers: false,\n    //     },\n    // });\n    // gsap.to(\".letter-left-2\", {\n    //     x: -100,\n    //     y: 0,\n    //     duration: 2,\n    //     ease: \"none\",\n    //     scrollTrigger: {\n    //         trigger: \".letter-left-2 \",\n    //         start: \"top 85%\",\n    //         end: \"top 25%\",\n    //         scrub: 1,\n    //         markers: false,\n    //     },\n    // });\n  }\n}); // gsap.to(\".rotate-item-1\", {\n//     rotation: 180,\n//     duration: 1,\n//     ease: \"none\",\n//     scrollTrigger: {\n//         trigger: \".rotate-item-1\",\n//         start: \"top 78%\",\n//         end: \"top 25%\",\n//         scrub: 1,\n//         markers: false,\n//     },\n// });    \n\nif ($(window).width() > 1200) {\n  var boxes = gsap.utils.toArray(\".ek-fadein-dziwnowek\");\n  boxes.forEach(function (box, i) {\n    var anim = gsap.fromTo(box, {\n      autoAlpha: 0,\n      y: 70\n    }, {\n      duration: 1,\n      autoAlpha: 1,\n      y: 0\n    });\n    ScrollTrigger.create({\n      trigger: box,\n      animation: anim,\n      once: false\n    });\n  });\n  var boxesSmall = gsap.utils.toArray(\".ek-fadein-dziwnowek-small\");\n  boxesSmall.forEach(function (box, i) {\n    var anim = gsap.fromTo(box, {\n      autoAlpha: 0,\n      y: 30\n    }, {\n      duration: 1,\n      autoAlpha: 1,\n      y: 0\n    });\n    ScrollTrigger.create({\n      trigger: box,\n      animation: anim,\n      once: false\n    });\n  }); // const boxLeft = gsap.utils.toArray(\".ek-left-dziwnowek\");\n  // boxLeft.forEach((box, i) => {\n  //   const anim = gsap.fromTo(\n  //     box,\n  //     { autoAlpha: 0, x: 700 },\n  //     { duration: 3, autoAlpha: 1, x: 0 }\n  //   );\n  //   ScrollTrigger.create({\n  //     trigger: box,\n  //     animation: anim,\n  //     once: false,\n  //   });\n  // });    \n  // const boxRight = gsap.utils.toArray(\".ek-right-dziwnowek\");\n  // boxRight.forEach((box, i) => {\n  //   const anim = gsap.fromTo(\n  //     box,\n  //     { autoAlpha: 0, x: -700 },\n  //     { duration: 3, autoAlpha: 1, x: 0 }\n  //   );\n  //   ScrollTrigger.create({\n  //     trigger: box,\n  //     animation: anim,\n  //     once: false,\n  //   });\n  // });   \n  //     let revealImageKladno = document.querySelectorAll(\".ek-karwia-photo\");\n  //     revealImageKladno.forEach((container) => {\n  //         let image = container.querySelector(\"img\");\n  //         let tl = gsap.timeline({\n  //             scrollTrigger: {\n  //                 trigger: container,\n  //                 toggleActions: \"restart none none reset\"\n  //             }\n  //         });\n  //         tl.set(container, {\n  //             autoAlpha: 1\n  //         });\n  //         tl.from(image, 1.1, {\n  //             scale: 1.1,\n  //             delay: -1.5,\n  //             ease: Power2.out\n  //         });\n  //     });\n}\n\n//# sourceURL=webpack:///./resources/js/invest-enklawadziwnowek/scroll-trigger.js?");

/***/ }),

/***/ "./resources/js/invest-enklawadziwnowek/sliders.js":
/*!*********************************************************!*\
  !*** ./resources/js/invest-enklawadziwnowek/sliders.js ***!
  \*********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  var carousellocalization = new Swiper(\".ek-fadein-dziwnowek\", {\n    loop: true,\n    autoplay: {\n      delay: 5000\n    },\n    speed: 500,\n    slidesPerView: 1,\n    breakpoints: {\n      900: {\n        slidesPerView: 3\n      },\n      1100: {\n        slidesPerView: 4\n      },\n      1400: {\n        slidesPerView: 6\n      }\n    },\n    navigation: {\n      nextEl: \".container-fluid-slider-nav .slick-prev\",\n      prevEl: \".container-fluid-slider-nav .slick-next\"\n    }\n  });\n  var testimonialContactEnklDziw = new Swiper(\".carousel-opinion.swiper\", {\n    loop: true,\n    // autoplay: {\n    //     delay: 5000,\n    // },\n    effect: \"fade\",\n    fadeEffect: {\n      crossFade: true\n    },\n    speed: 200,\n    // If we need pagination\n    pagination: {\n      el: \".carousel-opinion .swiper-pagination\",\n      clickable: true\n    }\n  });\n});\n\n//# sourceURL=webpack:///./resources/js/invest-enklawadziwnowek/sliders.js?");

/***/ }),

/***/ "./resources/scss/invest-enklawadziwnowek.scss":
/*!*****************************************************!*\
  !*** ./resources/scss/invest-enklawadziwnowek.scss ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("// extracted by mini-css-extract-plugin\n\n//# sourceURL=webpack:///./resources/scss/invest-enklawadziwnowek.scss?");

/***/ })

/******/ });