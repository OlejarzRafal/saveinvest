/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is not neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (function() { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/invest-karwia.js":
/*!***************************************!*\
  !*** ./resources/js/invest-karwia.js ***!
  \***************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _scss_invest_karwia_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../scss/invest-karwia.scss */ \"./resources/scss/invest-karwia.scss\");\n/* harmony import */ var _js_invest_karwia_sliders_testimonial__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../js/invest-karwia/sliders-testimonial */ \"./resources/js/invest-karwia/sliders-testimonial.js\");\n/* harmony import */ var _js_invest_karwia_sliders_testimonial__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_js_invest_karwia_sliders_testimonial__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _js_invest_karwia_sliders_about__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../js/invest-karwia/sliders-about */ \"./resources/js/invest-karwia/sliders-about.js\");\n/* harmony import */ var _js_invest_karwia_sliders_about__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_js_invest_karwia_sliders_about__WEBPACK_IMPORTED_MODULE_2__);\n/* harmony import */ var _js_invest_karwia_scroll_contact__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../js/invest-karwia/scroll-contact */ \"./resources/js/invest-karwia/scroll-contact.js\");\n/* harmony import */ var _js_invest_karwia_scroll_contact__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_js_invest_karwia_scroll_contact__WEBPACK_IMPORTED_MODULE_3__);\n // INVEST KLADNO\n\n\n\n\n\n//# sourceURL=webpack://webpack/./resources/js/invest-karwia.js?");

/***/ }),

/***/ "./resources/js/invest-karwia/scroll-contact.js":
/*!******************************************************!*\
  !*** ./resources/js/invest-karwia/scroll-contact.js ***!
  \******************************************************/
/***/ (function() {

eval("//counter on Scroll // Contact //\nvar counted = 0;\n\nif ($(\".enklawa-karwia-template-contact\").length) {\n  $(window).scroll(function () {\n    var counter = $(\"#counter\");\n\n    if (!counter) {\n      return;\n    }\n\n    var scrollTop = counter.offset().top - window.innerHeight;\n\n    if (counted === 0 && $(window).scrollTop() > scrollTop) {\n      $(\".count\").each(function () {\n        var $this = $(this),\n            countTo = $this.attr(\"data-count\");\n        $({\n          countNum: $this.text()\n        }).animate({\n          countNum: countTo\n        }, {\n          duration: 2000,\n          easing: \"swing\",\n          step: function step() {\n            $this.text(Math.floor(this.countNum));\n          },\n          complete: function complete() {\n            $this.text(this.countNum); //alert('finished');\n          }\n        });\n      });\n      counted = 1;\n    }\n  });\n}\n\n//# sourceURL=webpack://webpack/./resources/js/invest-karwia/scroll-contact.js?");

/***/ }),

/***/ "./resources/js/invest-karwia/sliders-about.js":
/*!*****************************************************!*\
  !*** ./resources/js/invest-karwia/sliders-about.js ***!
  \*****************************************************/
/***/ (function() {

eval("$(document).ready(function () {\n  var about = new Swiper(\".sec2-comfort__slider\", {\n    loop: true,\n    // autoplay: {\n    //     delay: 5000,\n    // },\n    speed: 500,\n    slidesPerView: 1,\n    breakpoints: {\n      900: {\n        slidesPerView: 2\n      },\n      1100: {\n        slidesPerView: 3\n      },\n      1400: {\n        slidesPerView: 4\n      }\n    },\n    navigation: {\n      nextEl: \".sec2-comfort__slider-nav .swiper-button-next\",\n      prevEl: \".sec2-comfort__slider-nav .swiper-button-prev\"\n    }\n  });\n});\n\n//# sourceURL=webpack://webpack/./resources/js/invest-karwia/sliders-about.js?");

/***/ }),

/***/ "./resources/js/invest-karwia/sliders-testimonial.js":
/*!***********************************************************!*\
  !*** ./resources/js/invest-karwia/sliders-testimonial.js ***!
  \***********************************************************/
/***/ (function() {

eval("$(document).ready(function () {\n  var testimonialHome = new Swiper(\".sec5-testimonial__content__entry\", {\n    loop: true,\n    // autoplay: {\n    //     delay: 5000,\n    // },\n    effect: \"fade\",\n    fadeEffect: {\n      crossFade: true\n    },\n    // slidesPerView: 1,\n    // spaceBetween: 100,\n    speed: 200,\n    // If we need pagination\n    pagination: {\n      el: \".sec5-testimonial__content__nav .swiper-pagination\",\n      clickable: true\n    },\n    navigation: {\n      nextEl: \".sec5-testimonial__content__nav .swiper-button-next\" // prevEl: \".front-slider-content-swiper .swiper-button-prev\",\n\n    }\n  });\n});\n$(document).ready(function () {\n  var testimonialContact = new Swiper(\".sec4-testimonial__content__entry\", {\n    loop: true,\n    // autoplay: {\n    //     delay: 5000,\n    // },\n    effect: \"fade\",\n    fadeEffect: {\n      crossFade: true\n    },\n    // slidesPerView: 1,\n    // spaceBetween: 100,\n    speed: 200,\n    // If we need pagination\n    pagination: {\n      el: \".sec4-testimonial__content__nav .swiper-pagination\",\n      clickable: true\n    },\n    navigation: {\n      nextEl: \".sec4-testimonial__content__nav .swiper-button-next\" // prevEl: \".front-slider-content-swiper .swiper-button-prev\",\n\n    }\n  });\n});\n\n//# sourceURL=webpack://webpack/./resources/js/invest-karwia/sliders-testimonial.js?");

/***/ }),

/***/ "./resources/scss/invest-karwia.scss":
/*!*******************************************!*\
  !*** ./resources/scss/invest-karwia.scss ***!
  \*******************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://webpack/./resources/scss/invest-karwia.scss?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		if(__webpack_module_cache__[moduleId]) {
/******/ 			return __webpack_module_cache__[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	!function() {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = function(module) {
/******/ 			var getter = module && module.__esModule ?
/******/ 				function() { return module['default']; } :
/******/ 				function() { return module; };
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	!function() {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = function(exports, definition) {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	!function() {
/******/ 		__webpack_require__.o = function(obj, prop) { return Object.prototype.hasOwnProperty.call(obj, prop); }
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
/******/ 	// startup
/******/ 	// Load entry module
/******/ 	__webpack_require__("./resources/js/invest-karwia.js");
/******/ 	// This entry module used 'exports' so it can't be inlined
/******/ })()
;