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
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _scss_invest_osadadziwnowek_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../scss/invest-osadadziwnowek.scss */ \"./resources/scss/invest-osadadziwnowek.scss\");\n/* harmony import */ var _scss_invest_osadadziwnowek_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_scss_invest_osadadziwnowek_scss__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _js_invest_osadadziwnowek_other__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../js/invest-osadadziwnowek/other */ \"./resources/js/invest-osadadziwnowek/other.js\");\n/* harmony import */ var _js_invest_osadadziwnowek_other__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_js_invest_osadadziwnowek_other__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _js_invest_osadadziwnowek_sliders__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../js/invest-osadadziwnowek/sliders */ \"./resources/js/invest-osadadziwnowek/sliders.js\");\n/* harmony import */ var _js_invest_osadadziwnowek_sliders__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_js_invest_osadadziwnowek_sliders__WEBPACK_IMPORTED_MODULE_2__);\n/* harmony import */ var _scss_style_scss__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../scss/style.scss */ \"./resources/scss/style.scss\");\n/* harmony import */ var _scss_style_scss__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_scss_style_scss__WEBPACK_IMPORTED_MODULE_3__);\n\n\n\n\n\n//# sourceURL=webpack:///./resources/js/invest-osadadziwnowek.js?");

/***/ }),

/***/ "./resources/js/invest-osadadziwnowek/other.js":
/*!*****************************************************!*\
  !*** ./resources/js/invest-osadadziwnowek/other.js ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("//STICKY\nwindow.onscroll = function () {\n  stickyFrontPage();\n};\n\nvar navbar = document.querySelector('.header__content');\n\nfunction stickyFrontPage() {\n  if (window.pageYOffset > 1) {\n    navbar.classList.add(\"sticky\");\n  } else {\n    navbar.classList.remove(\"sticky\");\n  }\n} // Scroll down btn\n\n\nvar scrollBtn = document.getElementById('scroll-down-btn');\n\nif (scrollBtn) {\n  scrollBtn.addEventListener('click', function () {\n    var startPostition = window.pageYOffset;\n    var heroHeight = document.querySelector('.hero').offsetHeight;\n    var targetPosition = heroHeight + 1;\n    var distance = targetPosition - startPostition;\n    var startTime = null;\n    var duration = 750;\n\n    function animation(currentTime) {\n      if (startTime === null) startTime = currentTime;\n      var timeElapsed = currentTime - startTime;\n      var run = ease(timeElapsed, startPostition, distance, duration);\n      window.scrollTo(0, run);\n      if (timeElapsed < duration) requestAnimationFrame(animation);\n    }\n\n    function ease(t, b, c, d) {\n      t /= d / 2;\n      if (t < 1) return c / 2 * t * t + b;\n      t--;\n      return -c / 2 * (t * (t - 2) - 1) + b;\n    }\n\n    requestAnimationFrame(animation);\n  });\n} // Hamburger menu\n// const button = document.getElementById('menu-btn');\n// const menu = document.getElementById('main-menu');\n// button.addEventListener('click', function() {\n// \tif (button.classList.contains('header__hamburger--opened') == false) {\n// \t\tbutton.classList.add('header__hamburger--opened');\n// \t\tmenu.classList.add('header__menu--opened');\n// \t} else {\n// \t\tbutton.classList.remove('header__hamburger--opened');\n// \t\tmenu.classList.remove('header__menu--opened');\n// \t}\n// });\n// if (document.querySelector('.category')) {\n// \tvar cat = document.querySelector('.category');\n// \tvar catItems = cat.querySelectorAll('.category__item');\n// \tcatItems[0].addEventListener('click', function() {\n// \t\tfilterSelection('all');\n// \t});\n// \tcatItems[1].addEventListener('click', function() {\n// \t\tfilterSelection('picture');\n// \t});\n// \tcatItems[2].addEventListener('click', function() {\n// \t\tfilterSelection('visualization');\n// \t});\n// \tcatItems[3].addEventListener('click', function() {\n// \t\tfilterSelection('video');\n// \t});\n// \tfilterSelection('all');\n// \tfunction filterSelection(c) {\n// \t\tvar x, i;\n// \t\tx = document.getElementsByClassName('gallery__item');\n// \t\tif (c == 'all') c = '';\n// \t\tfor (i = 0; i < x.length; i++) {\n// \t\t\tremoveClass(x[i], 'show');\n// \t\t\tif (x[i].className.indexOf(c) > -1) addClass(x[i], 'show');\n// \t\t}\n// \t}\n// \tfunction addClass(element, name) {\n// \t\tvar i, arr1, arr2;\n// \t\tarr1 = element.className.split(' ');\n// \t\tarr2 = name.split(' ');\n// \t\tfor (i = 0; i < arr2.length; i++) {\n// \t\t\tif (arr1.indexOf(arr2[i]) == -1) {\n// \t\t\t\telement.className += ' ' + arr2[i];\n// \t\t\t}\n// \t\t}\n// \t}\n// \tfunction removeClass(element, name) {\n// \t\tvar i, arr1, arr2;\n// \t\tarr1 = element.className.split(' ');\n// \t\tarr2 = name.split(' ');\n// \t\tfor (i = 0; i < arr2.length; i++) {\n// \t\t\twhile (arr1.indexOf(arr2[i]) > -1) {\n// \t\t\t\tarr1.splice(arr1.indexOf(arr2[i]), 1);\n// \t\t\t}\n// \t\t}\n// \t\telement.className = arr1.join(' ');\n// \t}\n// \tfor (var i = 0; i < catItems.length; i++) {\n// \t\tcatItems[i].addEventListener('click', function() {\n// \t\t\tvar current = document.getElementsByClassName('active');\n// \t\t\tcurrent[0].className = current[0].className.replace(' active', '');\n// \t\t\tthis.className += ' active';\n// \t\t});\n// \t}\n// }\n\n//# sourceURL=webpack:///./resources/js/invest-osadadziwnowek/other.js?");

/***/ }),

/***/ "./resources/js/invest-osadadziwnowek/sliders.js":
/*!*******************************************************!*\
  !*** ./resources/js/invest-osadadziwnowek/sliders.js ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  var Contact = new Swiper(\".dziwnowek-swiper\", {\n    loop: true,\n    autoplay: {\n      delay: 5000\n    },\n    // effect: \"fade\",\n    // fadeEffect: {\n    //     crossFade: true,\n    // },\n    // slidesPerView: 1,\n    // spaceBetween: 100,\n    speed: 800,\n    // If we need pagination\n    pagination: {\n      el: \".dziwnowek-swiper-pagination .swiper-pagination\",\n      clickable: true\n    },\n    navigation: {\n      nextEl: \".dziwnowek-swiper-content-swiper .swiper-button-next\",\n      prevEl: \".dziwnowek-swiper-content-swiper .swiper-button-prev\"\n    }\n  });\n  /* MATCH HEIGHT */\n  // $(\" .awards__content\").matchHeight();\n});\n\n//# sourceURL=webpack:///./resources/js/invest-osadadziwnowek/sliders.js?");

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