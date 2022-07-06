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
/******/ 	return __webpack_require__(__webpack_require__.s = "./resources/js/invest-osadadziwnowek.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/invest-osadadziwnowek.js":
/*!***********************************************!*\
  !*** ./resources/js/invest-osadadziwnowek.js ***!
  \***********************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _scss_invest_osadadziwnowek_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../scss/invest-osadadziwnowek.scss */ \"./resources/scss/invest-osadadziwnowek.scss\");\n/* harmony import */ var _scss_invest_osadadziwnowek_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_scss_invest_osadadziwnowek_scss__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _js_invest_osadadziwnowek_other__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../js/invest-osadadziwnowek/other */ \"./resources/js/invest-osadadziwnowek/other.js\");\n/* harmony import */ var _js_invest_osadadziwnowek_other__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_js_invest_osadadziwnowek_other__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _js_invest_osadadziwnowek_sliders__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../js/invest-osadadziwnowek/sliders */ \"./resources/js/invest-osadadziwnowek/sliders.js\");\n/* harmony import */ var _js_invest_osadadziwnowek_sliders__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_js_invest_osadadziwnowek_sliders__WEBPACK_IMPORTED_MODULE_2__);\n/* harmony import */ var _js_invest_osadadziwnowek_nav_burger__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../js/invest-osadadziwnowek/nav-burger */ \"./resources/js/invest-osadadziwnowek/nav-burger.js\");\n/* harmony import */ var _js_invest_osadadziwnowek_nav_burger__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_js_invest_osadadziwnowek_nav_burger__WEBPACK_IMPORTED_MODULE_3__);\n/* harmony import */ var _js_invest_osadadziwnowek_nav_scroll__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../js/invest-osadadziwnowek/nav-scroll */ \"./resources/js/invest-osadadziwnowek/nav-scroll.js\");\n/* harmony import */ var _js_invest_osadadziwnowek_nav_scroll__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_js_invest_osadadziwnowek_nav_scroll__WEBPACK_IMPORTED_MODULE_4__);\n/* harmony import */ var _scss_style_scss__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../scss/style.scss */ \"./resources/scss/style.scss\");\n/* harmony import */ var _scss_style_scss__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_scss_style_scss__WEBPACK_IMPORTED_MODULE_5__);\n\n\n\n\n\n\n\n//# sourceURL=webpack:///./resources/js/invest-osadadziwnowek.js?");

/***/ }),

/***/ "./resources/js/invest-osadadziwnowek/nav-burger.js":
/*!**********************************************************!*\
  !*** ./resources/js/invest-osadadziwnowek/nav-burger.js ***!
  \**********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  $(\".dziwnowek-nav__container__burger\").click(function () {\n    window.setTimeout(function () {\n      $('.klasa li a').toggleClass('visibility');\n    }, 200);\n    $(this).toggleClass(\"open\");\n    $(\".dziwnowek-nav \").toggleClass(\"active\");\n    $(\".dziwnowek-nav__container__mobile\").toggleClass(\"active\");\n    $(\".logo-dziwnowek\").toggleClass(\"active\");\n    $(\".mobile-logo-href\").toggleClass(\"mobile-main-href-none\");\n    $(\".dziwnowek-nav__container__box\").toggleClass(\"none\");\n  });\n});\n\n//# sourceURL=webpack:///./resources/js/invest-osadadziwnowek/nav-burger.js?");

/***/ }),

/***/ "./resources/js/invest-osadadziwnowek/nav-scroll.js":
/*!**********************************************************!*\
  !*** ./resources/js/invest-osadadziwnowek/nav-scroll.js ***!
  \**********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  var stickyNav = function stickyNav() {\n    var scrollTop = $(window).scrollTop();\n\n    if (scrollTop > 0) {\n      $(\".dziwnowek-nav\").addClass(\"dziwnowek-nav--sticky\");\n      $(\".dziwnowek-nav\").addClass(\"dziwnowek-nav__home--sticky\");\n      $(\".logo-karwia\").addClass(\"logo-karwia--sticky\");\n      $(\".btn-nav\").addClass(\"btn-nav--sticky\");\n      $(\".nav-sticky\").addClass(\"nav-sticky--sticky\");\n      $(\".logo-karwia-sticky\").addClass(\"logo-karwia-sticky--sticky\");\n      $(\".logo-test\").addClass(\"active\");\n      $(\".dziwnowek-nav__container__burger\").addClass(\"dziwnowek-nav__container__burger--sticky\");\n    } else {\n      $(\".dziwnowek-nav\").removeClass(\"dziwnowek-nav--sticky\");\n      $(\".dziwnowek-nav\").removeClass(\"dziwnowek-nav__home--sticky\");\n      $(\".logo-karwia\").removeClass(\"logo-karwia--sticky\");\n      $(\".btn-nav\").removeClass(\"btn-nav--sticky\");\n      $(\".nav-sticky\").removeClass(\"nav-sticky--sticky\");\n      $(\".logo-karwia-sticky\").removeClass(\"logo-karwia-sticky--sticky\");\n      $(\".logo-test\").removeClass(\"active\");\n      $(\".dziwnowek-nav__container__burger\").removeClass(\"dziwnowek-nav__container__burger--sticky\");\n    }\n  };\n\n  stickyNav();\n  $(window).scroll(function () {\n    stickyNav();\n  });\n});\n\n//# sourceURL=webpack:///./resources/js/invest-osadadziwnowek/nav-scroll.js?");

/***/ }),

/***/ "./resources/js/invest-osadadziwnowek/other.js":
/*!*****************************************************!*\
  !*** ./resources/js/invest-osadadziwnowek/other.js ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("//STICKY\n// window.onscroll = function() {\n// \tstickyFrontPage()\n// };\n// var navbar = document.querySelector('.header__content');\n// function stickyFrontPage() {\n// \tif (window.pageYOffset > 1) {\n// \t  navbar.classList.add(\"sticky\")\n// \t} else {\n// \t  navbar.classList.remove(\"sticky\");\n// \t}\n//   }\n// Scroll down btn\nvar scrollBtn = document.getElementById('scroll-down-btn');\n\nif (scrollBtn) {\n  scrollBtn.addEventListener('click', function () {\n    var startPostition = window.pageYOffset;\n    var heroHeight = document.querySelector('.hero').offsetHeight;\n    var targetPosition = heroHeight + 1;\n    var distance = targetPosition - startPostition;\n    var startTime = null;\n    var duration = 750;\n\n    function animation(currentTime) {\n      if (startTime === null) startTime = currentTime;\n      var timeElapsed = currentTime - startTime;\n      var run = ease(timeElapsed, startPostition, distance, duration);\n      window.scrollTo(0, run);\n      if (timeElapsed < duration) requestAnimationFrame(animation);\n    }\n\n    function ease(t, b, c, d) {\n      t /= d / 2;\n      if (t < 1) return c / 2 * t * t + b;\n      t--;\n      return -c / 2 * (t * (t - 2) - 1) + b;\n    }\n\n    requestAnimationFrame(animation);\n  });\n} // Hamburger menu\n\n\nvar button = document.getElementById('menu-btn'); // const menu = document.getElementById('main-menu');\n// button.addEventListener('click', function() {\n// \tif (button.classList.contains('header__hamburger--opened') == false) {\n// \t\tbutton.classList.add('header__hamburger--opened');\n// \t\tmenu.classList.add('header__menu--opened');\n// \t} else {\n// \t\tbutton.classList.remove('header__hamburger--opened');\n// \t\tmenu.classList.remove('header__menu--opened');\n// \t}\n// });\n\nif (document.querySelector('.category')) {\n  var filterSelection = function filterSelection(c) {\n    var x, i;\n    x = document.getElementsByClassName('gallery__item');\n    if (c == 'all') c = '';\n\n    for (i = 0; i < x.length; i++) {\n      removeClass(x[i], 'show');\n      if (x[i].className.indexOf(c) > -1) addClass(x[i], 'show');\n    }\n  };\n\n  var addClass = function addClass(element, name) {\n    var i, arr1, arr2;\n    arr1 = element.className.split(' ');\n    arr2 = name.split(' ');\n\n    for (i = 0; i < arr2.length; i++) {\n      if (arr1.indexOf(arr2[i]) == -1) {\n        element.className += ' ' + arr2[i];\n      }\n    }\n  };\n\n  var removeClass = function removeClass(element, name) {\n    var i, arr1, arr2;\n    arr1 = element.className.split(' ');\n    arr2 = name.split(' ');\n\n    for (i = 0; i < arr2.length; i++) {\n      while (arr1.indexOf(arr2[i]) > -1) {\n        arr1.splice(arr1.indexOf(arr2[i]), 1);\n      }\n    }\n\n    element.className = arr1.join(' ');\n  };\n\n  var cat = document.querySelector('.category');\n  var catItems = cat.querySelectorAll('.category__item');\n  catItems[0].addEventListener('click', function () {\n    filterSelection('all');\n  });\n  catItems[1].addEventListener('click', function () {\n    filterSelection('picture');\n  });\n  catItems[2].addEventListener('click', function () {\n    filterSelection('visualization');\n  });\n  catItems[3].addEventListener('click', function () {\n    filterSelection('video');\n  });\n  filterSelection('all');\n\n  for (var i = 0; i < catItems.length; i++) {\n    catItems[i].addEventListener('click', function () {\n      var current = document.getElementsByClassName('active');\n      current[0].className = current[0].className.replace(' active', '');\n      this.className += ' active';\n    });\n  }\n}\n\n//# sourceURL=webpack:///./resources/js/invest-osadadziwnowek/other.js?");

/***/ }),

/***/ "./resources/js/invest-osadadziwnowek/sliders.js":
/*!*******************************************************!*\
  !*** ./resources/js/invest-osadadziwnowek/sliders.js ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  var Contact = new Swiper(\".dziwnowek-swiper\", {\n    loop: true,\n    autoplay: {\n      delay: 5000\n    },\n    // effect: \"fade\",\n    // fadeEffect: {\n    //     crossFade: true,\n    // },\n    // slidesPerView: 1,\n    // spaceBetween: 100,\n    speed: 800,\n    // If we need pagination\n    pagination: {\n      el: \".dziwnowek-swiper-pagination .swiper-pagination\",\n      clickable: true\n    },\n    navigation: {\n      nextEl: \".dziwnowek-swiper-content-swiper .swiper-button-next\",\n      prevEl: \".dziwnowek-swiper-content-swiper .swiper-button-prev\"\n    }\n  });\n  /* MATCH HEIGHT */\n  // $(\" .awards__content\").matchHeight();\n});\n$(document).ready(function () {\n  var Contact = new Swiper(\".sec7__opinions\", {\n    loop: true,\n    autoplay: {\n      delay: 5000\n    },\n    // effect: \"fade\",\n    // fadeEffect: {\n    //     crossFade: true,\n    // },\n    slidesPerView: 1,\n    spaceBetween: 150,\n    speed: 800,\n    // If we need pagination\n    pagination: {\n      el: \".opinion-swiper-pagination .swiper-pagination\",\n      clickable: true\n    } // navigation: {\n    //     nextEl: \".dziwnowek-swiper-content-swiper .swiper-button-next\",\n    //     prevEl: \".dziwnowek-swiper-content-swiper .swiper-button-prev\",\n    // },\n\n  });\n  /* MATCH HEIGHT */\n  // $(\" .awards__content\").matchHeight();\n});\n$(document).ready(function () {\n  var Contact = new Swiper(\".contact-opinion-sec5\", {\n    loop: true,\n    autoplay: {\n      delay: 5000\n    },\n    slidesPerView: 1,\n    spaceBetween: 150,\n    speed: 800,\n    // If we need pagination\n    pagination: {\n      el: \".contact-opinion-swiper-pagination .swiper-pagination\",\n      clickable: true\n    }\n  });\n});\n$(document).ready(function () {\n  var Contact = new Swiper(\".localization-dziwnowek\", {\n    loop: true,\n    autoplay: {\n      delay: 5000\n    },\n    slidesPerView: 5,\n    spaceBetween: 30,\n    speed: 800,\n    breakpoints: {\n      0: {\n        slidesPerView: 2\n      },\n      576: {\n        slidesPerView: 3\n      },\n      992: {\n        slidesPerView: 4\n      },\n      // when window width is >= 640px\n      1200: {\n        slidesPerView: 5\n      }\n    },\n    navigation: {\n      nextEl: \".dziwnowek-localization-swiper .swiper-button-next\",\n      prevEl: \".dziwnowek-localization-swiper .swiper-button-prev\"\n    }\n  });\n});\n\n//# sourceURL=webpack:///./resources/js/invest-osadadziwnowek/sliders.js?");

/***/ }),

/***/ "./resources/scss/invest-osadadziwnowek.scss":
/*!***************************************************!*\
  !*** ./resources/scss/invest-osadadziwnowek.scss ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("// extracted by mini-css-extract-plugin\n\n//# sourceURL=webpack:///./resources/scss/invest-osadadziwnowek.scss?");

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