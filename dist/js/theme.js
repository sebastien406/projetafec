/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./assets/scripts/base.js":
/*!********************************!*\
  !*** ./assets/scripts/base.js ***!
  \********************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _button_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./button.js */ \"./assets/scripts/button.js\");\n/* harmony import */ var _modal_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modal.js */ \"./assets/scripts/modal.js\");\n\n\n\n//# sourceURL=webpack://Afec_Starter_kit/./assets/scripts/base.js?");

/***/ }),

/***/ "./assets/scripts/button.js":
/*!**********************************!*\
  !*** ./assets/scripts/button.js ***!
  \**********************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n// bouton afficher plus\n\nfunction AfficherPlus() {\n  var dots = document.getElementById(\"dots\");\n  var moreText = document.getElementById(\"more\");\n  var btnText = document.getElementById(\"myBtn\");\n  if (dots.style.display === \"none\") {\n    dots.style.display = \"inline\";\n    btnText.innerHTML = \"Afficher plus\";\n    moreText.style.display = \"none\";\n  } else {\n    dots.style.display = \"none\";\n    btnText.innerHTML = \"Afficher moins\";\n    moreText.style.display = \"inline\";\n  }\n}\nvar afficherPlusBtn = document.getElementById('myBtn');\nif (afficherPlusBtn) {\n  afficherPlusBtn.addEventListener('click', AfficherPlus);\n}\n\n//# sourceURL=webpack://Afec_Starter_kit/./assets/scripts/button.js?");

/***/ }),

/***/ "./assets/scripts/modal.js":
/*!*********************************!*\
  !*** ./assets/scripts/modal.js ***!
  \*********************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   closeModal: () => (/* binding */ closeModal),\n/* harmony export */   openModal: () => (/* binding */ openModal),\n/* harmony export */   setupModal: () => (/* binding */ setupModal)\n/* harmony export */ });\n// document.addEventListener('DOMContentLoaded', function() {\n//     const openModalBtn = document.getElementById('openModalReviewBtn');\n//     const reviewModal = document.getElementById('reviewModal');\n//     const closeModalBtn = document.getElementById('closeReviewModalBtn');\n//     if (openModalBtn) {\n//         openModalBtn.addEventListener('click', function() {\n//             if (reviewModal) {\n//                 reviewModal.classList.add('active');\n//             }\n//         });\n//     }\n// if (closeModalBtn) {\n//         closeModalBtn.addEventListener('click', function() {\n//             if (reviewModal) {\n//                 reviewModal.classList.remove('active'); \n//             }\n//         });\n//     }\n//  if (reviewModal) {\n//         reviewModal.addEventListener('click', function(event) {\n//             if (event.target === reviewModal) { \n//                 reviewModal.classList.remove('active');\n//             }\n//         });\n//     }\n// });\n// Fonction pour ouvrir la modale\nfunction openModal(reviewModal) {\n  if (reviewModal) {\n    reviewModal.classList.add('active');\n  }\n}\n\n// Fonction pour fermer la modale\nfunction closeModal(reviewModal) {\n  if (reviewModal) {\n    reviewModal.classList.remove('active');\n  }\n}\n\n// Fonction pour configurer les écouteurs d'événements\nfunction setupModal() {\n  var openModalBtn = document.getElementById('openModalReviewBtn');\n  var reviewModal = document.getElementById('reviewModal');\n  var closeModalBtn = document.getElementById('closeReviewModalBtn');\n  if (openModalBtn) {\n    openModalBtn.addEventListener('click', function () {\n      return openModal(reviewModal);\n    });\n  }\n  if (closeModalBtn) {\n    closeModalBtn.addEventListener('click', function () {\n      return closeModal(reviewModal);\n    });\n  }\n  if (reviewModal) {\n    reviewModal.addEventListener('click', function (event) {\n      if (event.target === reviewModal) {\n        closeModal(reviewModal);\n      }\n    });\n  }\n}\n\n// Appeler setupModal quand le DOM est chargé\ndocument.addEventListener('DOMContentLoaded', setupModal);\n\n//# sourceURL=webpack://Afec_Starter_kit/./assets/scripts/modal.js?");

/***/ }),

/***/ "./assets/styles/base.scss":
/*!*********************************!*\
  !*** ./assets/styles/base.scss ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://Afec_Starter_kit/./assets/styles/base.scss?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
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
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	__webpack_require__("./assets/scripts/base.js");
/******/ 	var __webpack_exports__ = __webpack_require__("./assets/styles/base.scss");
/******/ 	
/******/ })()
;