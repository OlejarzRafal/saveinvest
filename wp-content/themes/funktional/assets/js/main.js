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
/******/ 	return __webpack_require__(__webpack_require__.s = "./resources/js/index.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/all-page/disabled-copy-text.js":
/*!*****************************************************!*\
  !*** ./resources/js/all-page/disabled-copy-text.js ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  $('body').bind('cut copy paste', function (e) {\n    e.preventDefault();\n  });\n  document.addEventListener('contextmenu', function (event) {\n    return event.preventDefault();\n  });\n});\n\n//# sourceURL=webpack:///./resources/js/all-page/disabled-copy-text.js?");

/***/ }),

/***/ "./resources/js/all-page/form-showhide.js":
/*!************************************************!*\
  !*** ./resources/js/all-page/form-showhide.js ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(\".form-showhide__btn\").click(function (e) {\n  e.preventDefault();\n  $(this).parent().parent().find(\".form-showhide__information\").slideToggle();\n});\n\n//# sourceURL=webpack:///./resources/js/all-page/form-showhide.js?");

/***/ }),

/***/ "./resources/js/all-page/matchheight.js":
/*!**********************************************!*\
  !*** ./resources/js/all-page/matchheight.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  $(\".front-page .sec5 .plots-wrap .plots .plot__content\").matchHeight();\n  $(\".page-blog .slider-expert .slider-expert-loop__item\").matchHeight();\n  $(\".page-blog .slider-authors-loop__position\").matchHeight();\n  $(\".page-blog .slider-aktualnosci-loop__excerpt\").matchHeight();\n  $(\".page-blog .slider-pytania-loop__excerpt\").matchHeight();\n  $(\".page-blog .slider-expert-loop__excerpt\").matchHeight();\n  $(\".page-blog .slider-aktualnosci-loop__content\").matchHeight();\n  $(\".page-blog .slider-pytania-loop__content\").matchHeight();\n  $(\".page-blog .slider-expert-loop__content\").matchHeight(); //Karwia HP SEC 3\n\n  $(\".sec3-prestige__box1 .sec3-prestige__box2\").matchHeight();\n});\n\n//# sourceURL=webpack:///./resources/js/all-page/matchheight.js?");

/***/ }),

/***/ "./resources/js/all-page/scrollGsap.js":
/*!*********************************************!*\
  !*** ./resources/js/all-page/scrollGsap.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("if ($(window).width() > 767) {\n  gsap.registerPlugin(ScrollTrigger);\n  var revealContainers = document.querySelectorAll(\".reveal\");\n  revealContainers.forEach(function (container) {\n    var image = container.querySelector(\"img\");\n    var tl = gsap.timeline({\n      scrollTrigger: {\n        trigger: container,\n        start: \"-600\" // once:true,\n\n      }\n    });\n    tl.set(container, {\n      autoAlpha: 1\n    });\n    tl.from(container, 1.5, {\n      xPercent: -100,\n      ease: Power2.out\n    });\n    tl.from(image, 1.5, {\n      xPercent: 100,\n      // scale: 1.3,\n      delay: -1.5,\n      ease: Power2.out\n    });\n  });\n  var boxes = gsap.utils.toArray(\".el-fadein\");\n  boxes.forEach(function (box, i) {\n    var anim = gsap.fromTo(box, {\n      autoAlpha: 0,\n      y: 50\n    }, {\n      duration: 1,\n      autoAlpha: 1,\n      y: 0\n    });\n    ScrollTrigger.create({\n      trigger: box,\n      animation: anim,\n      once: true\n    });\n  });\n}\n\n//# sourceURL=webpack:///./resources/js/all-page/scrollGsap.js?");

/***/ }),

/***/ "./resources/js/all-page/scrollToDiv.js":
/*!**********************************************!*\
  !*** ./resources/js/all-page/scrollToDiv.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("if ($(window).width() > 767) {\n  $(\"a[href*=\\\\#]:not([href=\\\\#])\").click(function () {\n    if (location.pathname.replace(/^\\//, \"\") == this.pathname.replace(/^\\//, \"\") && location.hostname == this.hostname) {\n      var target = $(this.hash);\n      target = target.length ? target : $(\"[name=\" + this.hash.slice(1) + \"]\");\n\n      if (target.length) {\n        $(\"html,body\").animate({\n          scrollTop: target.offset().top - 150\n        }, 3000);\n        return false;\n      }\n    }\n  });\n} else {\n  $(\"a[href*=\\\\#]:not([href=\\\\#])\").click(function () {\n    if (location.pathname.replace(/^\\//, \"\") == this.pathname.replace(/^\\//, \"\") && location.hostname == this.hostname) {\n      var target = $(this.hash);\n      target = target.length ? target : $(\"[name=\" + this.hash.slice(1) + \"]\");\n\n      if (target.length) {\n        $(\"html,body\").animate({\n          scrollTop: target.offset().top - 50\n        }, 3000);\n        return false;\n      }\n    }\n  });\n}\n\n$(document).ready(function () {\n  var backtotop = $(\"#backtotop\");\n  var backtotopHeight = $(\"#backtotop\").innerHeight() + 400;\n  $(window).scroll(function () {\n    if ($(window).scrollTop() > backtotopHeight) {\n      backtotop.addClass(\"backtotop--show\");\n    } else {\n      backtotop.removeClass(\"backtotop--show\");\n    }\n  });\n});\n\n//# sourceURL=webpack:///./resources/js/all-page/scrollToDiv.js?");

/***/ }),

/***/ "./resources/js/blog/blog-slider.js":
/*!******************************************!*\
  !*** ./resources/js/blog/blog-slider.js ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  var sliderExpert = new Swiper(\".slider-expert-loop.swiper\", {\n    slidesPerView: \"auto\",\n    spaceBetween: 30,\n    allowTouchMove: true,\n    slidesPerGroup: 2,\n    pagination: {\n      el: \".swiper-pagination\",\n      clickable: true\n    }\n  });\n  var sliderAktualnosci = new Swiper(\".slider-aktualnosci-loop.swiper\", {\n    slidesPerView: \"auto\",\n    spaceBetween: 30,\n    allowTouchMove: true,\n    slidesPerGroup: 2,\n    pagination: {\n      el: \".swiper-pagination\",\n      clickable: true\n    }\n  });\n  var sliderPytania = new Swiper(\".slider-pytania-loop.swiper\", {\n    slidesPerView: \"auto\",\n    spaceBetween: 30,\n    allowTouchMove: true,\n    slidesPerGroup: 2,\n    pagination: {\n      el: \".swiper-pagination\",\n      clickable: true\n    }\n  });\n  var sliderAutorzy = new Swiper(\".slider-authors-loop.swiper\", {\n    slidesPerView: \"auto\",\n    spaceBetween: 30,\n    allowTouchMove: true,\n    slidesPerGroup: 2,\n    pagination: {\n      el: \".swiper-pagination\",\n      clickable: true\n    }\n  });\n});\n\n//# sourceURL=webpack:///./resources/js/blog/blog-slider.js?");

/***/ }),

/***/ "./resources/js/blog/sticky-sidebar.js":
/*!*********************************************!*\
  !*** ./resources/js/blog/sticky-sidebar.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  if ($('.aktualnosci_cpt-template').length || $('.pytania_cpt-template').length) {\n    if ($(window).width() > 991) {\n      var sticky_relocate = function sticky_relocate() {\n        var window_top = $(window).scrollTop();\n        var footer_top = $(\".sticky-anchor-stop\").offset().top;\n        var div_top = $(\".sticky-anchor\").offset().top;\n        var div_height = $(\".news-filter\").height();\n        var stickitLeft = $(\".news-filter\").offset.left;\n        var stickitWidth = $(\".news-filter\").width() + \"px\";\n        var stickitHeight = $(\".news-filter\").height() + \"px\";\n        var padding_bottom = 0; // tweak here or get from margins etc\n\n        if (window_top + div_height > footer_top - padding_bottom) {\n          $(\".news-filter\").css({\n            top: (window_top + div_height - footer_top + padding_bottom) * -1,\n            position: \"fixed\",\n            left: stickitLeft,\n            width: stickitWidth,\n            height: stickitHeight\n          });\n        } else if (window_top > div_top) {\n          $(\".news-filter\").css({\n            position: \"fixed\",\n            left: stickitLeft,\n            width: stickitWidth,\n            height: stickitHeight\n          });\n          $(\".news-filter\").css({\n            top: 0\n          });\n        } else {\n          $(\".news-filter\").removeAttr(\"style\");\n        }\n      };\n\n      $(window).scroll(sticky_relocate);\n      sticky_relocate();\n    }\n  }\n});\n\n//# sourceURL=webpack:///./resources/js/blog/sticky-sidebar.js?");

/***/ }),

/***/ "./resources/js/index.js":
/*!*******************************!*\
  !*** ./resources/js/index.js ***!
  \*******************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _scss_style_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../scss/style.scss */ \"./resources/scss/style.scss\");\n/* harmony import */ var _scss_style_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_scss_style_scss__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _all_page_scrollToDiv_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./all-page/scrollToDiv.js */ \"./resources/js/all-page/scrollToDiv.js\");\n/* harmony import */ var _all_page_scrollToDiv_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_all_page_scrollToDiv_js__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _all_page_matchheight__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./all-page/matchheight */ \"./resources/js/all-page/matchheight.js\");\n/* harmony import */ var _all_page_matchheight__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_all_page_matchheight__WEBPACK_IMPORTED_MODULE_2__);\n/* harmony import */ var _all_page_scrollGsap__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./all-page/scrollGsap */ \"./resources/js/all-page/scrollGsap.js\");\n/* harmony import */ var _all_page_scrollGsap__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_all_page_scrollGsap__WEBPACK_IMPORTED_MODULE_3__);\n/* harmony import */ var _all_page_form_showhide__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./all-page/form-showhide */ \"./resources/js/all-page/form-showhide.js\");\n/* harmony import */ var _all_page_form_showhide__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_all_page_form_showhide__WEBPACK_IMPORTED_MODULE_4__);\n/* harmony import */ var _all_page_disabled_copy_text__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./all-page/disabled-copy-text */ \"./resources/js/all-page/disabled-copy-text.js\");\n/* harmony import */ var _all_page_disabled_copy_text__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_all_page_disabled_copy_text__WEBPACK_IMPORTED_MODULE_5__);\n/* harmony import */ var _saveinvest_slider_opinion__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./saveinvest/slider-opinion */ \"./resources/js/saveinvest/slider-opinion.js\");\n/* harmony import */ var _saveinvest_slider_opinion__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(_saveinvest_slider_opinion__WEBPACK_IMPORTED_MODULE_6__);\n/* harmony import */ var _saveinvest_slider_specialist__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./saveinvest/slider-specialist */ \"./resources/js/saveinvest/slider-specialist.js\");\n/* harmony import */ var _saveinvest_slider_specialist__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(_saveinvest_slider_specialist__WEBPACK_IMPORTED_MODULE_7__);\n/* harmony import */ var _saveinvest_backtotop__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./saveinvest/backtotop */ \"./resources/js/saveinvest/backtotop.js\");\n/* harmony import */ var _saveinvest_backtotop__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(_saveinvest_backtotop__WEBPACK_IMPORTED_MODULE_8__);\n/* harmony import */ var _saveinvest_sticky__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./saveinvest/sticky */ \"./resources/js/saveinvest/sticky.js\");\n/* harmony import */ var _saveinvest_sticky__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(_saveinvest_sticky__WEBPACK_IMPORTED_MODULE_9__);\n/* harmony import */ var _saveinvest_hamburger__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ./saveinvest/hamburger */ \"./resources/js/saveinvest/hamburger.js\");\n/* harmony import */ var _saveinvest_hamburger__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(_saveinvest_hamburger__WEBPACK_IMPORTED_MODULE_10__);\n/* harmony import */ var _saveinvest_all_other__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ./saveinvest/all-other */ \"./resources/js/saveinvest/all-other.js\");\n/* harmony import */ var _saveinvest_all_other__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(_saveinvest_all_other__WEBPACK_IMPORTED_MODULE_11__);\n/* harmony import */ var _saveinvest_slider_infophoto_mobile__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ./saveinvest/slider-infophoto-mobile */ \"./resources/js/saveinvest/slider-infophoto-mobile.js\");\n/* harmony import */ var _saveinvest_slider_infophoto_mobile__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(_saveinvest_slider_infophoto_mobile__WEBPACK_IMPORTED_MODULE_12__);\n/* harmony import */ var _js_blog_blog_slider__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ../js/blog/blog-slider */ \"./resources/js/blog/blog-slider.js\");\n/* harmony import */ var _js_blog_blog_slider__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(_js_blog_blog_slider__WEBPACK_IMPORTED_MODULE_13__);\n/* harmony import */ var _js_blog_sticky_sidebar__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! ../js/blog/sticky-sidebar */ \"./resources/js/blog/sticky-sidebar.js\");\n/* harmony import */ var _js_blog_sticky_sidebar__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(_js_blog_sticky_sidebar__WEBPACK_IMPORTED_MODULE_14__);\n // ALL PAGE\n\n\n\n\n\n // SAVEINVEST\n\n\n\n\n\n\n\n // BLOG\n\n\n\n\n//# sourceURL=webpack:///./resources/js/index.js?");

/***/ }),

/***/ "./resources/js/saveinvest/all-other.js":
/*!**********************************************!*\
  !*** ./resources/js/saveinvest/all-other.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  // blog to menu\n  // if ($(window).width() < 991) {\n  //   var link_blog = $(\".nav__menu-blog ul li\").html();\n  //   $(\".nav__menu ul\").append(\"<li>\" + link_blog + \"</li>\");\n  // }\n  $(\"form input\").on(\"change keyup\", function () {\n    $(this).addClass(\"value-true\");\n  }); // PLOTS FRONTPAGE\n\n  $(\".home .plots-wrap .col-md-6\").hide();\n  $(\".home .plots-wrap .col-md-6:nth-child(n+1):nth-child(-n+6)\").show();\n  $(\".plots__se-more .btn\").click(function (e) {\n    e.preventDefault();\n    $(this).closest(\".home .plots-wrap \").find(\".col-md-6:not(:visible):lt(6)\").show();\n\n    if ($(\".home .plots-wrap .col-md-6:hidden\").length === 0) {\n      $(\".plots__se-more .btn\").hide();\n    }\n  });\n});\n$(window).on(\"load\", function () {\n  $(\".fullpage-loader\").delay(1500).fadeOut(\"slow\");\n});\n\n//# sourceURL=webpack:///./resources/js/saveinvest/all-other.js?");

/***/ }),

/***/ "./resources/js/saveinvest/backtotop.js":
/*!**********************************************!*\
  !*** ./resources/js/saveinvest/backtotop.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  $(\"#backtotop\").click(function () {\n    $(\"html, body\").animate({\n      scrollTop: 0\n    }, 1000);\n  });\n});\n\n//# sourceURL=webpack:///./resources/js/saveinvest/backtotop.js?");

/***/ }),

/***/ "./resources/js/saveinvest/hamburger.js":
/*!**********************************************!*\
  !*** ./resources/js/saveinvest/hamburger.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("// // Hamburger menu\n// const button = document.getElementById(\"hamburger\");\n// const menu = document.getElementById(\"nav-menu\");\n// const headersubpage = document.querySelector(\".header__subpage\");\n// button.addEventListener(\"click\", function () {\n//   if (button.classList.contains(\"hamburger--opened\") == false) {\n//     button.classList.add(\"hamburger--opened\");\n//     menu.classList.add(\"nav__menu--opened\");\n//     headersubpage.classList.add(\"header__subpage--opened\");\n//     document.body.style.overflow = \"hidden\";\n//   } else {\n//     button.classList.remove(\"hamburger--opened\");\n//     menu.classList.remove(\"nav__menu--opened\");\n//     headersubpage.classList.remove(\"header__subpage--opened\");\n//     document.body.style.overflow = \"unset\";\n//   }\n// });\n// if ($(window).width() < 767) {\n//   $(\".nav__menu ul li a\").click(function () {\n//     console.log('test');\n//     button.classList.remove(\"hamburger--opened\");\n//     menu.classList.remove(\"nav__menu--opened\");\n//     document.body.style.overflow = \"unset\";\n//   });\n// }\n\n//# sourceURL=webpack:///./resources/js/saveinvest/hamburger.js?");

/***/ }),

/***/ "./resources/js/saveinvest/slider-infophoto-mobile.js":
/*!************************************************************!*\
  !*** ./resources/js/saveinvest/slider-infophoto-mobile.js ***!
  \************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  var specialist = new Swiper(\".swiper.sec6-guarantee-mobile\", {\n    slidesPerView: 'auto',\n    spaceBetween: 30,\n    speed: 100,\n    autoplay: {\n      delay: 3000\n    },\n    // If we need pagination\n    pagination: {\n      el: \".sec6-guarantee-mobile .swiper-pagination\",\n      clickable: true\n    },\n    breakpoints: {// when window width is >= 320px\n    }\n  });\n  /* MATCH HEIGHT */\n  // $(\" .awards__content\").matchHeight();\n});\n\n//# sourceURL=webpack:///./resources/js/saveinvest/slider-infophoto-mobile.js?");

/***/ }),

/***/ "./resources/js/saveinvest/slider-opinion.js":
/*!***************************************************!*\
  !*** ./resources/js/saveinvest/slider-opinion.js ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  var opinion = new Swiper(\".sec8-opinion.swiper\", {\n    speed: 1500,\n    autoplay: {\n      delay: 10000\n    },\n    loop: true,\n    navigation: {\n      nextEl: \".sec8-opinion .swiper-button-next\",\n      prevEl: \".sec8-opinion .swiper-button-prev\"\n    },\n    pagination: {\n      el: \".swiper-pagination\",\n      type: \"fraction\"\n    }\n  });\n  /* MATCH HEIGHT */\n  // $(\" .awards__content\").matchHeight();\n});\n\n//# sourceURL=webpack:///./resources/js/saveinvest/slider-opinion.js?");

/***/ }),

/***/ "./resources/js/saveinvest/slider-specialist.js":
/*!******************************************************!*\
  !*** ./resources/js/saveinvest/slider-specialist.js ***!
  \******************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  var specialist = new Swiper(\".swiper.spec-slider\", {\n    slidesPerView: 'auto',\n    spaceBetween: 15,\n    speed: 100,\n    // If we need pagination\n    pagination: {\n      el: \".swiper-pagination\",\n      clickable: true\n    },\n    breakpoints: {\n      // when window width is >= 320px\n      768: {\n        slidesPerView: 4,\n        slidesPerGroup: 4,\n        spaceBetween: 20,\n        speed: 1200\n      },\n      // when window width is >= 480px\n      992: {\n        slidesPerView: 6,\n        slidesPerGroup: 6,\n        spaceBetween: 30,\n        speed: 1500\n      }\n    }\n  });\n  /* MATCH HEIGHT */\n  // $(\" .awards__content\").matchHeight();\n});\n\n//# sourceURL=webpack:///./resources/js/saveinvest/slider-specialist.js?");

/***/ }),

/***/ "./resources/js/saveinvest/sticky.js":
/*!*******************************************!*\
  !*** ./resources/js/saveinvest/sticky.js ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  /** ===========================================\r\n      Hide / show the master navigation menu\r\n  ============================================ */\n  var previousScroll = 0;\n  $(window).scroll(function () {\n    var currentScroll = $(this).scrollTop();\n\n    if (currentScroll > 0 && currentScroll < $(document).height() - $(window).height()) {\n      if (currentScroll > previousScroll) {\n        window.setTimeout(hideNav, 50);\n      } else {\n        window.setTimeout(showNav, 50);\n      }\n\n      previousScroll = currentScroll;\n    } else {\n      window.setTimeout(hideNav2, 50);\n    }\n  });\n\n  function hideNav2() {\n    $(\"nav\").removeClass(\"is-visible\");\n  }\n\n  function hideNav() {\n    $(\"nav\").removeClass(\"is-visible\").addClass(\"is-hidden\");\n  }\n\n  function showNav() {\n    $(\"nav\").removeClass(\"is-hidden\").addClass(\"is-visible\");\n  }\n});\n$(window).on(\"load\", function () {\n  var navoffsetTop = $(\"nav\").offset().top;\n  console.log(navoffsetTop);\n\n  if (navoffsetTop > 0) {\n    $(\"nav\").addClass(\"is-hidden\");\n  }\n});\n\n//# sourceURL=webpack:///./resources/js/saveinvest/sticky.js?");

/***/ }),

/***/ "./resources/scss/style.scss":
/*!***********************************!*\
  !*** ./resources/scss/style.scss ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("// extracted by mini-css-extract-plugin\n\n//# sourceURL=webpack:///./resources/scss/style.scss?");

/***/ })

/******/ });