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
/******/ 	return __webpack_require__(__webpack_require__.s = "./resources/js/all-page.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/all-page.js":
/*!**********************************!*\
  !*** ./resources/js/all-page.js ***!
  \**********************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _scss_all_page_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../scss/all-page.scss */ \"./resources/scss/all-page.scss\");\n/* harmony import */ var _scss_all_page_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_scss_all_page_scss__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _all_page_scrollToDiv_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./all-page/scrollToDiv.js */ \"./resources/js/all-page/scrollToDiv.js\");\n/* harmony import */ var _all_page_scrollToDiv_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_all_page_scrollToDiv_js__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _all_page_matchheight__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./all-page/matchheight */ \"./resources/js/all-page/matchheight.js\");\n/* harmony import */ var _all_page_matchheight__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_all_page_matchheight__WEBPACK_IMPORTED_MODULE_2__);\n/* harmony import */ var _all_page_scrollGsap__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./all-page/scrollGsap */ \"./resources/js/all-page/scrollGsap.js\");\n/* harmony import */ var _all_page_scrollGsap__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_all_page_scrollGsap__WEBPACK_IMPORTED_MODULE_3__);\n/* harmony import */ var _all_page_form_showhide__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./all-page/form-showhide */ \"./resources/js/all-page/form-showhide.js\");\n/* harmony import */ var _all_page_form_showhide__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_all_page_form_showhide__WEBPACK_IMPORTED_MODULE_4__);\n/* harmony import */ var _all_page_disabled_copy_text__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./all-page/disabled-copy-text */ \"./resources/js/all-page/disabled-copy-text.js\");\n/* harmony import */ var _all_page_disabled_copy_text__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_all_page_disabled_copy_text__WEBPACK_IMPORTED_MODULE_5__);\n/* harmony import */ var _all_page_popup_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./all-page/popup.js */ \"./resources/js/all-page/popup.js\");\n/* harmony import */ var _all_page_popup_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(_all_page_popup_js__WEBPACK_IMPORTED_MODULE_6__);\n // ALL PAGE\n\n\n\n\n\n\n\n\n//# sourceURL=webpack:///./resources/js/all-page.js?");

/***/ }),

/***/ "./resources/js/all-page/disabled-copy-text.js":
/*!*****************************************************!*\
  !*** ./resources/js/all-page/disabled-copy-text.js ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  $('body').bind('cut copy paste', function (e) {\n    e.preventDefault();\n  }); // document.addEventListener('contextmenu', event => event.preventDefault());\n});\n\n//# sourceURL=webpack:///./resources/js/all-page/disabled-copy-text.js?");

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

/***/ "./resources/js/all-page/popup.js":
/*!****************************************!*\
  !*** ./resources/js/all-page/popup.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(window).on(\"load\", function () {\n  // WIDGET TIME TO SHOW\n  var widgetShowTime = $(\".popup-wrap\").attr(\"data-time\");\n  var widgetShowTimeSeconds = widgetShowTime * 1000;\n  setTimeout(function () {\n    $('.popup').addClass('popup--open');\n    setTimeout(function () {\n      if ($('.popup').hasClass('popup--open')) {\n        $('body').addClass(\"popup-open\");\n      }\n\n      $('.popup').css('opacity', '1');\n    }, 300);\n  }, widgetShowTimeSeconds);\n  $('.popup-widget').addClass(\"popup-widget--close\");\n});\n$(document).ready(function () {\n  // show hide policy in popup\n  $(\".popup-wrap .form-showhide__btn\").click(function (e) {\n    e.preventDefault();\n    $(this).parent().parent().find(\".form-showhide__information\").slideToggle();\n  }); // label animation\n\n  $(\".wpcf7-form .form-group input\").focus(function () {\n    $(this).parent().siblings('label').addClass('label-up');\n    $(this).addClass('label-up');\n  }).blur(function () {\n    var text_val = $(this).val();\n\n    if (text_val === \"\") {\n      $(this).parent().siblings('label').removeClass('label-up');\n      $(this).removeClass('label-up');\n    }\n  }); // widget\n\n  $('.popup-widget').click(function () {\n    $(this).addClass(\"popup-widget--close\");\n    $('body').addClass(\"popup-open\");\n    var popup = $(this).parent().find('.popup');\n    popup.addClass('popup--open'); // delay for the fonts to be loaded on first time\n\n    setTimeout(function () {\n      popup.css('opacity', '1');\n    }, 100);\n  }); // popup close \n\n  $('.popup__close').click(function () {\n    $('body').removeClass(\"popup-open\");\n    $(this).parent().removeClass('popup--open');\n    $(this).parent().parent().find('.popup-widget').removeClass('popup-widget--close');\n  });\n});\n\n//# sourceURL=webpack:///./resources/js/all-page/popup.js?");

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

eval("if ($(window).width() > 767) {\n  $(\"a[href*=\\\\#]:not([href=\\\\#])\").click(function () {\n    if (location.pathname.replace(/^\\//, \"\") == this.pathname.replace(/^\\//, \"\") && location.hostname == this.hostname) {\n      var target = $(this.hash);\n      target = target.length ? target : $(\"[name=\" + this.hash.slice(1) + \"]\");\n\n      if (target.length) {\n        $(\"html,body\").animate({\n          scrollTop: target.offset().top - 150\n        }, 2000);\n        return false;\n      }\n    }\n  });\n} else {\n  $(\"a[href*=\\\\#]:not([href=\\\\#])\").click(function () {\n    if (location.pathname.replace(/^\\//, \"\") == this.pathname.replace(/^\\//, \"\") && location.hostname == this.hostname) {\n      var target = $(this.hash);\n      target = target.length ? target : $(\"[name=\" + this.hash.slice(1) + \"]\");\n\n      if (target.length) {\n        $(\"html,body\").animate({\n          scrollTop: target.offset().top - 50\n        }, 2000);\n        return false;\n      }\n    }\n  });\n}\n\n$(document).ready(function () {\n  var backtotop = $(\"#backtotop\");\n  var backtotopHeight = $(\"#backtotop\").innerHeight() + 400;\n  $(window).scroll(function () {\n    if ($(window).scrollTop() > backtotopHeight) {\n      backtotop.addClass(\"backtotop--show\");\n    } else {\n      backtotop.removeClass(\"backtotop--show\");\n    }\n  });\n});\n\n//# sourceURL=webpack:///./resources/js/all-page/scrollToDiv.js?");

/***/ }),

/***/ "./resources/scss/all-page.scss":
/*!**************************************!*\
  !*** ./resources/scss/all-page.scss ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("// extracted by mini-css-extract-plugin\n\n//# sourceURL=webpack:///./resources/scss/all-page.scss?");

/***/ })

/******/ });