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

eval("__webpack_require__.r(__webpack_exports__);\nfunction AfficherPlus() {\n  var dots = document.getElementById(\"dots\");\n  var moreText = document.getElementById(\"more\");\n  var btnText = document.getElementById(\"myBtn\");\n  if (dots.style.display === \"none\") {\n    dots.style.display = \"inline\";\n    btnText.innerHTML = \"Afficher plus\";\n    moreText.style.display = \"none\";\n  } else {\n    dots.style.display = \"none\";\n    btnText.innerHTML = \"Afficher moins\";\n    moreText.style.display = \"inline\";\n  }\n}\nvar afficherPlusBtn = document.getElementById('myBtn');\nif (afficherPlusBtn) {\n  afficherPlusBtn.addEventListener('click', AfficherPlus);\n}\ndocument.addEventListener('DOMContentLoaded', function () {\n  var boxWrapper = document.querySelector('.box-wrapper');\n  var closeButton = document.querySelector('.btn-close');\n  var openReviewModalBtn = document.getElementById('openReviewModalBtn'); // Nouveau sélecteur pour le bouton \"Laisser un avis\"\n  var commentTextArea = document.getElementById('commentTextArea'); // Le champ de texte pour le commentaire\n  var submitReviewBtn = document.getElementById('submitReviewBtn'); // Le bouton \"Envoyer votre avis\" à l'intérieur de la modale\n\n  // Écouteur d'événement pour ouvrir la modale\n  if (openReviewModalBtn) {\n    openReviewModalBtn.addEventListener('click', function (event) {\n      event.preventDefault(); // Empêche le comportement par défaut du lien si le bouton est dans un <a>\n      if (boxWrapper) {\n        boxWrapper.style.display = 'flex'; // Affiche la modale (utilisez 'flex' pour le centrage CSS)\n      }\n    });\n  } else {\n    console.log('ERREUR : openReviewModalBtn non trouvé. Vérifiez la structure HTML/l\\'ID.');\n  }\n\n  // Écouteur d'événement pour fermer la modale via le bouton 'X'\n  if (closeButton) {\n    closeButton.addEventListener('click', function () {\n      if (boxWrapper) {\n        boxWrapper.style.display = 'none'; // Cache la modale\n        // Optionnel : Réinitialiser le champ de texte lors de la fermeture\n        if (commentTextArea) {\n          commentTextArea.value = '';\n        }\n      }\n    });\n  }\n\n  // Écouteur d'événement pour fermer la modale en cliquant en dehors\n  if (boxWrapper) {\n    boxWrapper.addEventListener('click', function (event) {\n      if (event.target === boxWrapper) {\n        // Si le clic est sur le fond sombre de la modale\n        boxWrapper.style.display = 'none'; // Cache la modale\n        // Optionnel : Réinitialiser le champ de texte lors de la fermeture\n        if (commentTextArea) {\n          commentTextArea.value = '';\n        }\n      }\n    });\n  }\n\n  // Écouteur d'événement pour le bouton \"Envoyer votre avis\" à l'intérieur de la modale\n  if (submitReviewBtn) {\n    submitReviewBtn.addEventListener('click', function () {\n      if (commentTextArea) {\n        var reviewText = commentTextArea.value;\n        console.log('Avis envoyé :', reviewText);\n        // Ici, vous enverriez 'reviewText' à votre serveur (par exemple, avec une requête AJAX)\n        // Pour l'instant, on se contente de le loguer et de fermer la modale\n        boxWrapper.style.display = 'none'; // Ferme la modale après \"envoi\"\n        commentTextArea.value = ''; // Efface le texte après envoi\n        alert('Merci pour votre avis ! (Normalement, ceci serait envoyé au serveur.)');\n      }\n    });\n  }\n\n  // --- Votre logique existante \"Afficher plus\" ---\n  var myBtn = document.getElementById(\"myBtn\");\n  var dots = document.getElementById(\"dots\");\n  var moreText = document.getElementById(\"more\");\n  if (myBtn && dots && moreText) {\n    myBtn.addEventListener('click', function () {\n      if (dots.style.display === \"none\") {\n        dots.style.display = \"inline\";\n        myBtn.innerHTML = \"Afficher plus\";\n        moreText.style.display = \"none\";\n      } else {\n        dots.style.display = \"none\";\n        myBtn.innerHTML = \"Afficher moins\";\n        moreText.style.display = \"inline\";\n      }\n    });\n  }\n});\n\n//# sourceURL=webpack://Afec_Starter_kit/./assets/scripts/button.js?");

/***/ }),

/***/ "./assets/scripts/modal.js":
/*!*********************************!*\
  !*** ./assets/scripts/modal.js ***!
  \*********************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\ndocument.addEventListener('DOMContentLoaded', function () {\n  var boxWrapper = document.querySelector('.box-wrapper');\n  var closeButton = document.querySelector('.btn-close');\n  var openReviewModalBtn = document.getElementById('openReviewModalBtn'); // Nouveau sélecteur pour le bouton \"Laisser un avis\"\n  var commentTextArea = document.getElementById('commentTextArea'); // Le champ de texte pour le commentaire\n  var submitReviewBtn = document.getElementById('submitReviewBtn'); // Le bouton \"Envoyer votre avis\" à l'intérieur de la modale\n\n  console.log('--- Débogage Modale Avis ---');\n  console.log('Élément boxWrapper trouvé :', boxWrapper);\n  console.log('Élément closeButton trouvé :', closeButton);\n  console.log('Élément openReviewModalBtn trouvé :', openReviewModalBtn);\n  console.log('Élément commentTextArea trouvé :', commentTextArea);\n  console.log('Élément submitReviewBtn trouvé :', submitReviewBtn);\n\n  // Écouteur d'événement pour ouvrir la modale\n  if (openReviewModalBtn) {\n    openReviewModalBtn.addEventListener('click', function (event) {\n      event.preventDefault(); // Empêche le comportement par défaut du lien si le bouton est dans un <a>\n      if (boxWrapper) {\n        boxWrapper.style.display = 'flex'; // Affiche la modale (utilisez 'flex' pour le centrage CSS)\n        console.log('Bouton \"Laisser un avis\" cliqué. Affichage de la modale défini sur flex.');\n      }\n    });\n  } else {\n    console.log('ERREUR : openReviewModalBtn non trouvé. Vérifiez la structure HTML/l\\'ID.');\n  }\n\n  // Écouteur d'événement pour fermer la modale via le bouton 'X'\n  if (closeButton) {\n    closeButton.addEventListener('click', function () {\n      if (boxWrapper) {\n        boxWrapper.style.display = 'none'; // Cache la modale\n        // Optionnel : Réinitialiser le champ de texte lors de la fermeture\n        if (commentTextArea) {\n          commentTextArea.value = '';\n        }\n        console.log('Bouton de fermeture cliqué. Modale masquée.');\n      }\n    });\n  }\n\n  // Écouteur d'événement pour fermer la modale en cliquant en dehors\n  if (boxWrapper) {\n    boxWrapper.addEventListener('click', function (event) {\n      if (event.target === boxWrapper) {\n        // Si le clic est sur le fond sombre de la modale\n        boxWrapper.style.display = 'none'; // Cache la modale\n        // Optionnel : Réinitialiser le champ de texte lors de la fermeture\n        if (commentTextArea) {\n          commentTextArea.value = '';\n        }\n        console.log('Cliqué en dehors de la modale. Modale masquée.');\n      }\n    });\n  }\n\n  // Écouteur d'événement pour le bouton \"Envoyer votre avis\" à l'intérieur de la modale\n  if (submitReviewBtn) {\n    submitReviewBtn.addEventListener('click', function () {\n      if (commentTextArea) {\n        var reviewText = commentTextArea.value;\n        console.log('Avis envoyé :', reviewText);\n        // Ici, vous enverriez 'reviewText' à votre serveur (par exemple, avec une requête AJAX)\n        // Pour l'instant, on se contente de le loguer et de fermer la modale\n        boxWrapper.style.display = 'none'; // Ferme la modale après \"envoi\"\n        commentTextArea.value = ''; // Efface le texte après envoi\n        alert('Merci pour votre avis ! (Normalement, ceci serait envoyé au serveur.)');\n      }\n    });\n  }\n\n  // --- Votre logique existante \"Afficher plus\" ---\n  var myBtn = document.getElementById(\"myBtn\");\n  var dots = document.getElementById(\"dots\");\n  var moreText = document.getElementById(\"more\");\n  if (myBtn && dots && moreText) {\n    // Supprimez l'attribut onclick=\"myFunction()\" du HTML pour ce bouton,\n    // car nous gérons l'événement ici avec addEventListener\n    myBtn.addEventListener('click', function () {\n      if (dots.style.display === \"none\") {\n        dots.style.display = \"inline\";\n        myBtn.innerHTML = \"Afficher plus\";\n        moreText.style.display = \"none\";\n      } else {\n        dots.style.display = \"none\";\n        myBtn.innerHTML = \"Afficher moins\";\n        moreText.style.display = \"inline\";\n      }\n    });\n  }\n  console.log('--- Fin du débogage Modale Avis ---');\n});\n\n//# sourceURL=webpack://Afec_Starter_kit/./assets/scripts/modal.js?");

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