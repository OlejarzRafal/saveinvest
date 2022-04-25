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

/***/ "./resources/js/invest-seagolf.js":
/*!****************************************!*\
  !*** ./resources/js/invest-seagolf.js ***!
  \****************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _scss_invest_seagolf_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../scss/invest-seagolf.scss */ \"./resources/scss/invest-seagolf.scss\");\n/* harmony import */ var _js_invest_seagolf_scroll_trigger__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../js/invest-seagolf/scroll-trigger */ \"./resources/js/invest-seagolf/scroll-trigger.js\");\n/* harmony import */ var _js_invest_seagolf_scroll_trigger__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_js_invest_seagolf_scroll_trigger__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _js_invest_seagolf_link_play__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../js/invest-seagolf/link-play */ \"./resources/js/invest-seagolf/link-play.js\");\n/* harmony import */ var _js_invest_seagolf_link_play__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_js_invest_seagolf_link_play__WEBPACK_IMPORTED_MODULE_2__);\n // INVEST SEAGOLF\n\n\n // import \"../js/invest-kladno/animation\";\n// import \"../js/invest-kladno/sliders-localizations\";\n// import \"../js/invest-kladno/sliders-contact\";\n// import \"../js/invest-kladno/sliders-front-page\";\n// import \"../js/invest-kladno/nav-burger\";\n// import \"../js/invest-kladno/plots\";\n// import \"../js/invest-kladno/nav-scroll\";\n// import \"../js/invest-kladno/loader\";\n\n//# sourceURL=webpack://webpack/./resources/js/invest-seagolf.js?");

/***/ }),

/***/ "./resources/js/invest-seagolf/link-play.js":
/*!**************************************************!*\
  !*** ./resources/js/invest-seagolf/link-play.js ***!
  \**************************************************/
/***/ (function() {

eval("if ($(window).width() > 767) {\n  $(\".sec8-links__video-link\").hover(function () {\n    $(this).find($('.sec8-links__video-link__box__hover')).get(0).play();\n  }, function () {\n    $(this).find($('.sec8-links__video-link__box__hover')).get(0).pause();\n  });\n} else {\n  $('.sec8-links__video-link__box__hover').each(function () {\n    $(this).get(0).play();\n  });\n}\n\n//# sourceURL=webpack://webpack/./resources/js/invest-seagolf/link-play.js?");

/***/ }),

/***/ "./resources/js/invest-seagolf/scroll-trigger.js":
/*!*******************************************************!*\
  !*** ./resources/js/invest-seagolf/scroll-trigger.js ***!
  \*******************************************************/
/***/ (function() {

eval("gsap.registerPlugin(ScrollTrigger);\nScrollTrigger.matchMedia({\n  \"(min-width: 1200px) and (max-width: 1920px) \": function minWidth1200pxAndMaxWidth1920px() {\n    // gsap.to(\".rotate-item-1\", {\n    //     rotation: 180,\n    //     duration: 1,\n    //     ease: \"none\",\n    //     scrollTrigger: {\n    //         trigger: \".rotate-item-1\",\n    //         start: \"top 78%\",\n    //         end: \"top 25%\",\n    //         scrub: 1,\n    //         markers: false,\n    //     },\n    // });       \n    gsap.to(\".paralax\", {\n      x: 0,\n      y: 100,\n      duration: 5,\n      ease: \"none\",\n      scrollTrigger: {\n        trigger: \".paralax\",\n        start: \"top 85%\",\n        end: \"top 25%\",\n        scrub: 1,\n        markers: false\n      }\n    });\n    gsap.to(\".letter-down\", {\n      x: 0,\n      y: 100,\n      duration: 5,\n      ease: \"none\",\n      scrollTrigger: {\n        trigger: \".letter-down\",\n        start: \"top 85%\",\n        end: \"top 25%\",\n        scrub: 1,\n        markers: false\n      }\n    });\n  }\n}); // if ($(window).width() > 1200) {\n//     const boxes = gsap.utils.toArray(\".ek-fadein-karwia\");\n//     boxes.forEach((box, i) => {\n//       const anim = gsap.fromTo(\n//         box,\n//         { autoAlpha: 0, y: 70 },\n//         { duration: 1, autoAlpha: 1, y: 0 }\n//       );\n//       ScrollTrigger.create({\n//         trigger: box,\n//         animation: anim,\n//         once: false,\n//       });\n//     });\n//     const boxLeft = gsap.utils.toArray(\".ek-left-karwia\");\n//     boxLeft.forEach((box, i) => {\n//       const anim = gsap.fromTo(\n//         box,\n//         { autoAlpha: 0, x: 700 },\n//         { duration: 3, autoAlpha: 1, x: 0 }\n//       );\n//       ScrollTrigger.create({\n//         trigger: box,\n//         animation: anim,\n//         once: false,\n//       });\n//     });    \n//     const boxRight = gsap.utils.toArray(\".ek-right-karwia\");\n//     boxRight.forEach((box, i) => {\n//       const anim = gsap.fromTo(\n//         box,\n//         { autoAlpha: 0, x: -700 },\n//         { duration: 3, autoAlpha: 1, x: 0 }\n//       );\n//       ScrollTrigger.create({\n//         trigger: box,\n//         animation: anim,\n//         once: false,\n//       });\n//     });   \n//     let revealImageKladno = document.querySelectorAll(\".ek-karwia-photo\");\n//     revealImageKladno.forEach((container) => {\n//         let image = container.querySelector(\"img\");\n//         let tl = gsap.timeline({\n//             scrollTrigger: {\n//                 trigger: container,\n//                 toggleActions: \"restart none none reset\"\n//             }\n//         });\n//         tl.set(container, {\n//             autoAlpha: 1\n//         });\n//         tl.from(image, 1.1, {\n//             scale: 1.1,\n//             delay: -1.5,\n//             ease: Power2.out\n//         });\n//     });\n// }\n\n//# sourceURL=webpack://webpack/./resources/js/invest-seagolf/scroll-trigger.js?");

/***/ }),

/***/ "./resources/scss/invest-seagolf.scss":
/*!********************************************!*\
  !*** ./resources/scss/invest-seagolf.scss ***!
  \********************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://webpack/./resources/scss/invest-seagolf.scss?");

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
/******/ 	__webpack_require__("./resources/js/invest-seagolf.js");
/******/ 	// This entry module used 'exports' so it can't be inlined
/******/ })()
;