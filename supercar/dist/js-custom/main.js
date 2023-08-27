(self["webpackChunksupercars"] = self["webpackChunksupercars"] || []).push([["/js-custom/main"],{

/***/ "./assets/js/main.js":
/*!***************************!*\
  !*** ./assets/js/main.js ***!
  \***************************/
/***/ (() => {

var swiper = new Swiper('.js-trustpilot-slider__slider_api', {
  loop: true,
  centeredSlides: true,
  slidesPerView: 3,
  loopFillGroupWithBlank: true,
  spaceBetween: 0,
  autoHeight: false,
  speed: 1e3,
  touchStartPreventDefault: false,
  roundLengths: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true
  },
  breakpoints: {
    320: {
      slidesPerView: 1.7,
      spaceBetween: 110
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 35
    }
  }
});

/***/ }),

/***/ "./assets/scss/main.scss":
/*!*******************************!*\
  !*** ./assets/scss/main.scss ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["css/main"], () => (__webpack_exec__("./assets/js/main.js"), __webpack_exec__("./assets/scss/main.scss")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);