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
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _scss_style_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../scss/style.scss */ \"./resources/scss/style.scss\");\n/* harmony import */ var _scss_style_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_scss_style_scss__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _saveinvest_slider_opinion__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./saveinvest/slider-opinion */ \"./resources/js/saveinvest/slider-opinion.js\");\n/* harmony import */ var _saveinvest_slider_opinion__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_saveinvest_slider_opinion__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _saveinvest_slider_specialist__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./saveinvest/slider-specialist */ \"./resources/js/saveinvest/slider-specialist.js\");\n/* harmony import */ var _saveinvest_slider_specialist__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_saveinvest_slider_specialist__WEBPACK_IMPORTED_MODULE_2__);\n/* harmony import */ var _saveinvest_backtotop__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./saveinvest/backtotop */ \"./resources/js/saveinvest/backtotop.js\");\n/* harmony import */ var _saveinvest_backtotop__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_saveinvest_backtotop__WEBPACK_IMPORTED_MODULE_3__);\n/* harmony import */ var _saveinvest_sticky__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./saveinvest/sticky */ \"./resources/js/saveinvest/sticky.js\");\n/* harmony import */ var _saveinvest_sticky__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_saveinvest_sticky__WEBPACK_IMPORTED_MODULE_4__);\n/* harmony import */ var _saveinvest_hamburger__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./saveinvest/hamburger */ \"./resources/js/saveinvest/hamburger.js\");\n/* harmony import */ var _saveinvest_hamburger__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_saveinvest_hamburger__WEBPACK_IMPORTED_MODULE_5__);\n/* harmony import */ var _saveinvest_all_other__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./saveinvest/all-other */ \"./resources/js/saveinvest/all-other.js\");\n/* harmony import */ var _saveinvest_all_other__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(_saveinvest_all_other__WEBPACK_IMPORTED_MODULE_6__);\n/* harmony import */ var _saveinvest_slider_infophoto_mobile__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./saveinvest/slider-infophoto-mobile */ \"./resources/js/saveinvest/slider-infophoto-mobile.js\");\n/* harmony import */ var _saveinvest_slider_infophoto_mobile__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(_saveinvest_slider_infophoto_mobile__WEBPACK_IMPORTED_MODULE_7__);\n/* harmony import */ var _js_blog_blog_slider__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ../js/blog/blog-slider */ \"./resources/js/blog/blog-slider.js\");\n/* harmony import */ var _js_blog_blog_slider__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(_js_blog_blog_slider__WEBPACK_IMPORTED_MODULE_8__);\n/* harmony import */ var _js_blog_sticky_sidebar__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ../js/blog/sticky-sidebar */ \"./resources/js/blog/sticky-sidebar.js\");\n/* harmony import */ var _js_blog_sticky_sidebar__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(_js_blog_sticky_sidebar__WEBPACK_IMPORTED_MODULE_9__);\n/* harmony import */ var _js_template_landings_input__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ../js/template-landings/input */ \"./resources/js/template-landings/input.js\");\n/* harmony import */ var _js_template_landings_input__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(_js_template_landings_input__WEBPACK_IMPORTED_MODULE_10__);\n/* harmony import */ var _js_template_landings_blocks_hero__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ../js/template-landings/blocks/hero */ \"./resources/js/template-landings/blocks/hero.js\");\n/* harmony import */ var _js_template_landings_blocks_hero__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(_js_template_landings_blocks_hero__WEBPACK_IMPORTED_MODULE_11__);\n/* harmony import */ var _js_template_landings_blocks_boxes__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ../js/template-landings/blocks/boxes */ \"./resources/js/template-landings/blocks/boxes.js\");\n/* harmony import */ var _js_template_landings_blocks_boxes__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(_js_template_landings_blocks_boxes__WEBPACK_IMPORTED_MODULE_12__);\n/* harmony import */ var _js_template_landings_blocks_charts__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ../js/template-landings/blocks/charts */ \"./resources/js/template-landings/blocks/charts.js\");\n/* harmony import */ var _js_template_landings_blocks_charts__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(_js_template_landings_blocks_charts__WEBPACK_IMPORTED_MODULE_13__);\n/* harmony import */ var _js_template_landings_blocks_opinions__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! ../js/template-landings/blocks/opinions */ \"./resources/js/template-landings/blocks/opinions.js\");\n/* harmony import */ var _js_template_landings_blocks_opinions__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(_js_template_landings_blocks_opinions__WEBPACK_IMPORTED_MODULE_14__);\n/* harmony import */ var _js_template_landings_blocks_threeImages__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! ../js/template-landings/blocks/threeImages */ \"./resources/js/template-landings/blocks/threeImages.js\");\n/* harmony import */ var _js_template_landings_blocks_threeImages__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(_js_template_landings_blocks_threeImages__WEBPACK_IMPORTED_MODULE_15__);\n // SAVEINVEST\n\n\n\n\n\n\n\n // BLOG\n\n\n //LANDING PAGES\n\n\n\n\n\n\n\n\n//# sourceURL=webpack:///./resources/js/index.js?");

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

eval("// // Hamburger menu\nif ($(\".page-template-front-page\").length) {\n  var button = document.getElementById(\"hamburger\");\n  var menu = document.getElementById(\"nav-menu\");\n  var headersubpage = document.querySelector(\".header__subpage\");\n  button.addEventListener(\"click\", function () {\n    if (button.classList.contains(\"hamburger--opened\") == false) {\n      button.classList.add(\"hamburger--opened\");\n      menu.classList.add(\"nav__menu--opened\");\n      headersubpage.classList.add(\"header__subpage--opened\");\n      document.body.style.overflow = \"hidden\";\n    } else {\n      button.classList.remove(\"hamburger--opened\");\n      menu.classList.remove(\"nav__menu--opened\");\n      headersubpage.classList.remove(\"header__subpage--opened\");\n      document.body.style.overflow = \"unset\";\n    }\n  });\n\n  if ($(window).width() < 767) {\n    $(\".nav__menu ul li a\").click(function () {\n      console.log('test');\n      button.classList.remove(\"hamburger--opened\");\n      menu.classList.remove(\"nav__menu--opened\");\n      document.body.style.overflow = \"unset\";\n    });\n  }\n}\n\n//# sourceURL=webpack:///./resources/js/saveinvest/hamburger.js?");

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

/***/ "./resources/js/template-landings/blocks/boxes.js":
/*!********************************************************!*\
  !*** ./resources/js/template-landings/blocks/boxes.js ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  if ($('.pageLandingBoxes').length) {\n    var hexToRgbA = function hexToRgbA(hex, transparecy) {\n      var c;\n\n      if (/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)) {\n        c = hex.substring(1).split('');\n\n        if (c.length == 3) {\n          c = [c[0], c[0], c[1], c[1], c[2], c[2]];\n        }\n\n        c = '0x' + c.join('');\n        return 'rgba(' + [c >> 16 & 255, c >> 8 & 255, c & 255].join(',') + ',' + transparecy + ')';\n      }\n\n      throw new Error('Bad Hex');\n    };\n\n    $('.landingBox').each(function () {\n      var borderColor = $(this).data('bordercolor');\n      var iconColor = $(this).data('iconcolor');\n      var plusColor = $(this).data('pluscolor');\n      var borderColorRGBA = hexToRgbA(borderColor, 0.3);\n      $(this).find('.landingBox__outner').css('outline', '1px solid' + borderColor);\n      $(this).find('.landingBox__inner').css('border', '1px solid ' + borderColorRGBA);\n      $(this).find('.landingBox__icon svg path').css('fill', iconColor);\n      $(this).find('.landingBox__plus svg path, .landingBox__plus svg rect').css('fill', plusColor);\n\n      if ($(this).find('.landingBox__icon').hasClass('landingBox__icon--0')) {\n        $(this).addClass('landingBox--iconPosition-0');\n      } else {\n        $(this).addClass('landingBox--iconPosition-1');\n      }\n    });\n    $('.landingBox').hover(function () {\n      $(this).toggleClass('landingBox--active');\n    });\n  }\n});\n\n//# sourceURL=webpack:///./resources/js/template-landings/blocks/boxes.js?");

/***/ }),

/***/ "./resources/js/template-landings/blocks/charts.js":
/*!*********************************************************!*\
  !*** ./resources/js/template-landings/blocks/charts.js ***!
  \*********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  if ($('.pageLandingCharts').length) {\n    var markerColor = $('.pageLandingCharts__inner ul').data('markercolor');\n    $('.pageLandingCharts__inner ul li svg').each(function () {\n      $(this).find('path').css('stroke', markerColor);\n    });\n  }\n});\n\n//# sourceURL=webpack:///./resources/js/template-landings/blocks/charts.js?");

/***/ }),

/***/ "./resources/js/template-landings/blocks/hero.js":
/*!*******************************************************!*\
  !*** ./resources/js/template-landings/blocks/hero.js ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  if ($('.pageLandingHero').length) {\n    var form = $('.formBox__form');\n    var buttonbgcolor = form.data('buttonbgcolor');\n    var buttoncolor = form.data('buttoncolor');\n    var buttonstyle = form.data('buttonstyle');\n    var color = form.data('color');\n    var font = form.data('font');\n    $('.formDescUnder').css('color', color).addClass('font--' + font);\n    $('.preExpand').css('color', color).addClass('font--' + font);\n    $('.expand').css('color', color).addClass('font--' + font);\n    $('.postExpand').css('color', color).addClass('font--' + font);\n    $('.formInfo').css('color', color).addClass('font--' + font);\n    $('.pageLandingHero__formBox input[type=submit]').css('background', buttonbgcolor).css('color', buttoncolor).css('outline', '4px solid' + buttonbgcolor).addClass('font--' + font + ' buttonStyle--' + buttonstyle);\n\n    if ($('.weAreForU').length) {\n      $('.formBox').clone().appendTo($('.weAreForU__row'));\n    }\n\n    $('.expand').click(function () {\n      $(this).siblings('.postExpand').slideToggle();\n\n      if ($(this).hasClass('expand--active')) {\n        $(this).text('Rozwiń *');\n      } else {\n        $(this).text('Zwiń *');\n      }\n\n      $(this).toggleClass('expand--active');\n    });\n  }\n});\n\n//# sourceURL=webpack:///./resources/js/template-landings/blocks/hero.js?");

/***/ }),

/***/ "./resources/js/template-landings/blocks/opinions.js":
/*!***********************************************************!*\
  !*** ./resources/js/template-landings/blocks/opinions.js ***!
  \***********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  if ($('.landingPageOpinions').length) {\n    var hexToRgbA = function hexToRgbA(hex, transparecy) {\n      var c;\n\n      if (/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)) {\n        c = hex.substring(1).split('');\n\n        if (c.length == 3) {\n          c = [c[0], c[0], c[1], c[1], c[2], c[2]];\n        }\n\n        c = '0x' + c.join('');\n        return 'rgba(' + [c >> 16 & 255, c >> 8 & 255, c & 255].join(',') + ',' + transparecy + ')';\n      }\n\n      throw new Error('Bad Hex');\n    };\n\n    var landingPageOpinions = new Swiper(\".opinionBox__inner\", {\n      effect: \"fade\",\n      fadeEffect: {\n        crossFade: true\n      },\n      pagination: {\n        el: \".opinionBox__pagNav .swiper-pagination\",\n        type: \"fraction\"\n      },\n      navigation: {\n        nextEl: \".opinionBox__pagNav .swiper-button-next\",\n        prevEl: \".opinionBox__pagNav .swiper-button-prev\"\n      }\n    });\n    var quotecolor = $('.opinionBox').data('quotecolor');\n    var arrowscolor = $('.opinionBox').data('arrowscolor');\n    var activecolor = $('.opinionBox').data('activecolor');\n    var textcolor = $('.opinionBox').data('textcolor');\n    var opinionbgcolor = $('.opinionBox').data('opinionbgcolor');\n    var opinionbgtransparency = $('.opinionBox').data('opinionbgtransparency');\n    var opiniongbg = hexToRgbA(opinionbgcolor, opinionbgtransparency);\n    $('.opinionBox__quote svg path').css('fill', quotecolor);\n    $('.opinionBox__bg').css('background-color', opiniongbg);\n    $('.opinionBox__nav svg path').css('fill', activecolor);\n    $('.opinionBox__pag .swiper-pagination-current').css('color', activecolor);\n    $('.opinionBox__nav .swiper-button-disabled svg path').css('fill', arrowscolor);\n    $('.opinionBox__pag').css('color', arrowscolor);\n    $('.opinionBox__opinion').css('color', textcolor);\n    $('.opinionBox__authorBox').css('color', textcolor);\n    $('.opinionBox__lineUnder').css('background', activecolor);\n  }\n});\n\n//# sourceURL=webpack:///./resources/js/template-landings/blocks/opinions.js?");

/***/ }),

/***/ "./resources/js/template-landings/blocks/threeImages.js":
/*!**************************************************************!*\
  !*** ./resources/js/template-landings/blocks/threeImages.js ***!
  \**************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("\n\n//# sourceURL=webpack:///./resources/js/template-landings/blocks/threeImages.js?");

/***/ }),

/***/ "./resources/js/template-landings/input.js":
/*!*************************************************!*\
  !*** ./resources/js/template-landings/input.js ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  if ($(\".page-template-page-landing\").length) {\n    //contact form 7 inputs validation (adding class to custom parent of input)\n    var callback = function callback(mutationsList, observer) {\n      $(mutationsList).each(function () {\n        if (this.target.classList.contains('wpcf7-not-valid')) {\n          $('.wpcf7-not-valid').parent().parent().addClass('inputBox--invalid');\n        }\n      });\n    };\n\n    var arrowDown = \"<div class=\\\"arrow\\\">\\n                            <svg width=\\\"19\\\" height=\\\"11\\\" viewBox=\\\"0 0 19 11\\\" fill=\\\"none\\\" xmlns=\\\"http://www.w3.org/2000/svg\\\">\\n                                <path d=\\\"M1 1L9.5 9.5L18 1\\\" stroke=\\\"#B68B1D\\\"/>\\n                            </svg>\\n                        </div>\";\n    var clock = \"<div class=\\\"clock\\\">\\n                        <svg width=\\\"24\\\" height=\\\"24\\\" viewBox=\\\"0 0 24 24\\\" fill=\\\"none\\\" xmlns=\\\"http://www.w3.org/2000/svg\\\">\\n                            <path d=\\\"M12 20.5C16.6944 20.5 20.5 16.6944 20.5 12C20.5 7.30557 16.6944 3.5 12 3.5C7.30558 3.5 3.5 7.30557 3.5 12C3.5 16.6944 7.30558 20.5 12 20.5Z\\\" stroke=\\\"#BF9875\\\" stroke-miterlimit=\\\"10\\\"/>\\n                            <path d=\\\"M12 12.5L12 6.5\\\" stroke=\\\"#BF9875\\\"/>\\n                            <path d=\\\"M11.5 12.5L17.5 12.5\\\" stroke=\\\"#BF9875\\\"/>\\n                        </svg>\\n                    </div>\";\n    var person = \"<svg width=\\\"24\\\" height=\\\"24\\\" viewBox=\\\"0 0 24 24\\\" fill=\\\"none\\\" xmlns=\\\"http://www.w3.org/2000/svg\\\">\\n                        <path d=\\\"M12.227 8.73209C14.044 8.73209 15.517 7.25911 15.517 5.44209C15.517 3.62508 14.044 2.1521 12.227 2.1521C10.41 2.1521 8.93701 3.62508 8.93701 5.44209C8.93701 7.25911 10.41 8.73209 12.227 8.73209Z\\\" stroke=\\\"#8D8D9A\\\" stroke-miterlimit=\\\"10\\\"/>\\n                        <path d=\\\"M19.0903 13.3698C18.646 12.3889 18.0022 11.5114 17.1998 10.7933C16.3975 10.0751 15.4543 9.53209 14.4304 9.19883C13.4064 8.86557 12.3243 8.74939 11.253 8.85772C10.1817 8.96604 9.14467 9.29649 8.20818 9.82797C7.2717 10.3594 6.45628 11.0803 5.81394 11.9445C5.1716 12.8087 4.71646 13.7973 4.47754 14.8473C4.23863 15.8972 4.22118 16.9855 4.42633 18.0425C4.63147 19.0996 5.0547 20.1023 5.66901 20.9867\\\" stroke=\\\"#8D8D9A\\\" stroke-miterlimit=\\\"10\\\"/>\\n                        </svg>\";\n    var tel = \"<svg width=\\\"24\\\" height=\\\"24\\\" viewBox=\\\"0 0 24 24\\\" fill=\\\"none\\\" xmlns=\\\"http://www.w3.org/2000/svg\\\">\\n                        <path d=\\\"M7.28802 3.46399C7.43402 3.51266 7.64902 3.82132 7.93302 4.38999C8.02236 4.54399 8.14402 \\n                        4.76299 8.29802 5.04699C8.45202 5.33099 8.59402 5.58866 8.72402 5.81999C8.85402 6.05199 8.98002 6.26932\\n                        9.10202 6.47199C9.12602 6.50399 9.19702 6.60599 9.31502 6.77199C9.41271 6.90945 9.50027 7.05383 9.57702 7.20399C9.63135 \\n                        7.3117 9.66042 7.43037 9.66202 7.55099C9.62276 7.78891 9.49968 8.00492 9.31502 8.15999C9.08303 8.40456 8.83043 8.62872 8.56002 \\n                        8.82999C8.29407 9.02768 8.04182 9.24318 7.80502 9.47499C7.62469 9.61331 7.50126 9.81288 7.45802 10.036C7.46238 10.1302 7.48301 \\n                        10.2229 7.51902 10.31C7.56002 10.419 7.59402 10.502 7.61902 10.559C7.64402 10.616 7.70502 10.713 7.79002 10.851C7.87502 10.989\\n                         7.92202 11.067 7.93002 11.083C8.49915 12.131 9.21243 13.0941 10.049 13.944C10.899 14.7806 11.862 15.4939 12.91 16.063C12.926 \\n                         16.071 13.004 16.118 13.142 16.203C13.28 16.288 13.377 16.345 13.434 16.374C13.491 16.403 13.574 16.436 13.683 16.474C13.7701 \\n                         16.51 13.8629 16.5306 13.957 16.535C14.1801 16.4918 14.3797 16.3683 14.518 16.188C14.7498 15.9512 14.9653 15.6989 15.163 \\n                         15.433C15.3643 15.1626 15.5885 14.91 15.833 14.678C15.9881 14.4933 16.2041 14.3703 16.442 14.331C16.5626 14.3326 16.6813 \\n                         14.3617 16.789 14.416C16.9392 14.4927 17.0836 14.5803 17.221 14.678C17.391 14.796 17.493 14.867 17.521 14.891C17.721 15.013 \\n                         17.9384 15.139 18.173 15.269C18.4077 15.399 18.6654 15.541 18.946 15.695C19.23 15.849 19.449 15.9707 19.603 16.06C20.1717 \\n                         16.344 20.4804 16.559 20.529 16.705C20.557 16.7873 20.5692 16.8742 20.565 16.961C20.5557 17.2508 20.5151 17.5388 20.444 \\n                         17.82C20.3835 18.105 20.2978 18.3841 20.188 18.654C19.8372 19.2266 19.3183 19.6771 18.702 19.944C17.8275 20.4563 16.8063 \\n                         20.6602 15.802 20.523C15.5656 20.488 15.3317 20.4372 15.102 20.371C14.842 20.2977 14.6494 20.2387 14.524 20.194C14.3987 \\n                         20.1493 14.1734 20.066 13.848 19.944C13.5227 19.8227 13.3227 19.7497 13.248 19.725C12.5038 19.4651 11.7894 19.1266 11.117 \\n                         18.715C9.94786 17.9697 8.86841 17.0923 7.90002 16.1C6.90407 15.1312 6.02324 14.0507 5.27502 12.88C4.86346 12.2076 4.52487 \\n                         11.4933 4.26502 10.749C4.24036 10.6757 4.16736 10.4757 4.04602 10.149C3.92469 9.82233 3.84269 9.59699 3.80002 \\n                         9.47299C3.75536 9.34833 3.69636 9.15566 3.62302 8.89499C3.55683 8.6653 3.50606 8.43145 3.47102 8.19499C3.33386 \\n                         7.19076 3.53775 6.16956 4.05002 5.29499C4.31691 4.67875 4.76739 4.15982 5.34002 3.80899C5.60993 3.69922 5.88901 \\n                         3.61356 6.17402 3.55299C6.45517 3.4819 6.74317 3.44133 7.03302 3.43199C7.11927 3.42664 7.20577 3.4375 7.28802 3.46399Z\\\" stroke=\\\"#D30000\\\" stroke-miterlimit=\\\"10\\\"/>\\n                        </svg>\";\n    var tick = \"<svg width=\\\"10\\\" height=\\\"8\\\" viewBox=\\\"0 0 10 8\\\" fill=\\\"none\\\" xmlns=\\\"http://www.w3.org/2000/svg\\\">\\n                        <path d=\\\"M0.5 4.5L3 7L9 1\\\" stroke=\\\"white\\\"/>\\n                    </svg>\";\n    $('.inputBox.inputBox--name').append(person);\n    $('.inputBox.inputBox--tel').append(tel);\n    var mutationObserver = new MutationObserver(callback);\n\n    if ($('.wpcf7-form').length) {\n      $('.wpcf7 select, .wpcf7 input[type=text], .wpcf7 input[type=email], .wpcf7 input[type=tel], .wpcf7 textarea').each(function () {\n        mutationObserver.observe(this, {\n          attributes: true\n        });\n      });\n    }\n\n    $(\".inputBox--select select\").each(function () {\n      var $this = $(this),\n          selectOptions = $(this).children(\"option\").length;\n      $this.addClass(\"hide-select\");\n      $this.wrap('<div class=\"select\"></div>');\n      $this.after('<div class=\"custom-select\"></div>');\n      var $customSelect = $this.next(\"div.custom-select\");\n      $customSelect.text($this.children(\"option\").eq(0).text());\n      $customSelect.append(arrowDown);\n      $customSelect.prepend(clock);\n      var $optionlist = $(\"<ul />\", {\n        class: \"select-options\"\n      }).insertAfter($customSelect);\n\n      for (var i = 0; i < selectOptions; i++) {\n        $(\"<li />\", {\n          text: $this.children(\"option\").eq(i).text(),\n          rel: $this.children(\"option\").eq(i).val()\n        }).appendTo($optionlist);\n      }\n\n      var $optionlistItems = $optionlist.children(\"li\");\n      $customSelect.click(function (e) {\n        e.stopPropagation();\n        $(\"div.custom-select.active\").not(this).each(function () {\n          $(this).removeClass(\"active\").next(\"ul.select-options\").hide();\n        });\n        $(this).toggleClass(\"active\").next(\"ul.select-options\").slideToggle();\n      });\n      $optionlistItems.click(function (e) {\n        e.stopPropagation();\n        $customSelect.text($(this).text()).removeClass(\"active\");\n        $customSelect.append(arrowDown);\n        $customSelect.prepend(clock);\n        $this.val($(this).attr(\"rel\"));\n        $optionlist.hide();\n        $optionlistItems.removeClass('current');\n        $(this).addClass('current');\n      });\n      $('.select-options li').each(function () {\n        $(this).prepend(tick);\n      });\n    });\n  }\n});\n\n//# sourceURL=webpack:///./resources/js/template-landings/input.js?");

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