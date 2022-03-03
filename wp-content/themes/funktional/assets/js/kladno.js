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
/******/ 	return __webpack_require__(__webpack_require__.s = "./resources/js/invest-kladno.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/invest-kladno.js":
/*!***************************************!*\
  !*** ./resources/js/invest-kladno.js ***!
  \***************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _scss_invest_kladno_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../scss/invest-kladno.scss */ \"./resources/scss/invest-kladno.scss\");\n/* harmony import */ var _scss_invest_kladno_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_scss_invest_kladno_scss__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _js_invest_kladno_sliders_localizations__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../js/invest-kladno/sliders-localizations */ \"./resources/js/invest-kladno/sliders-localizations.js\");\n/* harmony import */ var _js_invest_kladno_sliders_localizations__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_js_invest_kladno_sliders_localizations__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _js_invest_kladno_sliders_contact__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../js/invest-kladno/sliders-contact */ \"./resources/js/invest-kladno/sliders-contact.js\");\n/* harmony import */ var _js_invest_kladno_sliders_contact__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_js_invest_kladno_sliders_contact__WEBPACK_IMPORTED_MODULE_2__);\n/* harmony import */ var _js_invest_kladno_sliders_front_page__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../js/invest-kladno/sliders-front-page */ \"./resources/js/invest-kladno/sliders-front-page.js\");\n/* harmony import */ var _js_invest_kladno_sliders_front_page__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_js_invest_kladno_sliders_front_page__WEBPACK_IMPORTED_MODULE_3__);\n/* harmony import */ var _js_invest_kladno_nav_burger__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../js/invest-kladno/nav-burger */ \"./resources/js/invest-kladno/nav-burger.js\");\n/* harmony import */ var _js_invest_kladno_nav_burger__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_js_invest_kladno_nav_burger__WEBPACK_IMPORTED_MODULE_4__);\n // INVEST KLADNO\n\n\n\n\n //counter on Scroll // Contact //\n\nvar counted = 0;\n$(window).scroll(function () {\n  var counter = $(\"#counter\");\n\n  if (!counter) {\n    return;\n  }\n\n  var scrollTop = counter.offset().top - window.innerHeight;\n\n  if (counted === 0 && $(window).scrollTop() > scrollTop) {\n    $(\".f-special\").each(function () {\n      var $this = $(this),\n          countTo = $this.attr(\"data-count\");\n      $({\n        countNum: $this.text()\n      }).animate({\n        countNum: countTo\n      }, {\n        duration: 2000,\n        easing: \"swing\",\n        step: function step() {\n          $this.text(Math.floor(this.countNum));\n        },\n        complete: function complete() {\n          $this.text(this.countNum); //alert('finished');\n        }\n      });\n    });\n    counted = 1;\n  }\n});\n\n//# sourceURL=webpack:///./resources/js/invest-kladno.js?");

/***/ }),

/***/ "./resources/js/invest-kladno/nav-burger.js":
/*!**************************************************!*\
  !*** ./resources/js/invest-kladno/nav-burger.js ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  $(\".kladno-nav-container__burger\").click(function () {\n    $(this).toggleClass(\"open\"); // $(\".kladno-nav-container__box\").slideToggle();\n    // $(\".kladno-nav-container\").toggleClass(\"active\");\n\n    $(\".kladno-nav-container__box\").slideToggle();\n    $(\".kladno-nav\").toggleClass(\"active\");\n  });\n});\n\n//# sourceURL=webpack:///./resources/js/invest-kladno/nav-burger.js?");

/***/ }),

/***/ "./resources/js/invest-kladno/sliders-contact.js":
/*!*******************************************************!*\
  !*** ./resources/js/invest-kladno/sliders-contact.js ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  var Contact = new Swiper(\".testimonial-kladno__container .box\", {\n    effect: \"fade\",\n    fadeEffect: {\n      crossFade: true\n    },\n    // slidesPerView: 1,\n    spaceBetween: 100,\n    speed: 500,\n    // If we need pagination\n    pagination: {\n      el: \".swiper-contenet-pagination .swiper-pagination\",\n      clickable: true\n    },\n    navigation: {\n      nextEl: \".testimonial-kladno .swiper-contenet-testimonial .swiper-button-next\",\n      prevEl: \".testimonial-kladno .swiper-contenet-testimonial .swiper-button-prev\"\n    }\n  });\n  /* MATCH HEIGHT */\n  // $(\" .awards__content\").matchHeight();\n});\n\n//# sourceURL=webpack:///./resources/js/invest-kladno/sliders-contact.js?");

/***/ }),

/***/ "./resources/js/invest-kladno/sliders-front-page.js":
/*!**********************************************************!*\
  !*** ./resources/js/invest-kladno/sliders-front-page.js ***!
  \**********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  var Contact = new Swiper(\".front-slider\", {\n    autoplay: {\n      delay: 5000\n    },\n    effect: \"fade\",\n    fadeEffect: {\n      crossFade: true\n    },\n    // slidesPerView: 1,\n    // spaceBetween: 100,\n    speed: 500,\n    // If we need pagination\n    pagination: {\n      el: \".front-slider-pagination .swiper-pagination\",\n      clickable: true\n    },\n    navigation: {\n      nextEl: \".front-slider-content-swiper .swiper-button-next\",\n      prevEl: \".front-slider-content-swiper .swiper-button-prev\"\n    }\n  });\n  /* MATCH HEIGHT */\n  // $(\" .awards__content\").matchHeight();\n});\n\n//# sourceURL=webpack:///./resources/js/invest-kladno/sliders-front-page.js?");

/***/ }),

/***/ "./resources/js/invest-kladno/sliders-localizations.js":
/*!*************************************************************!*\
  !*** ./resources/js/invest-kladno/sliders-localizations.js ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  var Localisation = new Swiper(\".icon-localization__content\", {\n    slidesPerView: 1,\n    // spaceBetween: 15,\n    speed: 500,\n    // If we need pagination\n    // pagination: {\n    //     el: \".swiper-pagination\",\n    //     clickable: true,\n    // },\n    breakpoints: {\n      900: {\n        slidesPerView: 2 // slidesPerGroup: 4,\n        // spaceBetween: 20,\n        // speed: 1200,\n\n      },\n      // when window width is >= 320px\n      1100: {\n        slidesPerView: 3 // slidesPerGroup: 4,\n        // spaceBetween: 20,\n        // speed: 1200,\n\n      },\n      // when window width is >= 480px\n      1400: {\n        slidesPerView: 4 // slidesPerGroup: 6,\n        // spaceBetween: 30,\n        // speed: 1500,\n\n      }\n    },\n    navigation: {\n      nextEl: \".icon-localization .swiper-contenet-nav .swiper-button-next\",\n      prevEl: \".icon-localization .swiper-contenet-nav .swiper-button-prev\"\n    }\n  });\n  /* MATCH HEIGHT */\n  // $(\" .awards__content\").matchHeight();\n});\n\n//# sourceURL=webpack:///./resources/js/invest-kladno/sliders-localizations.js?");

/***/ }),

/***/ "./resources/scss/invest-kladno.scss":
/*!*******************************************!*\
  !*** ./resources/scss/invest-kladno.scss ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("// extracted by mini-css-extract-plugin\n\n//# sourceURL=webpack:///./resources/scss/invest-kladno.scss?");

/***/ })

/******/ });