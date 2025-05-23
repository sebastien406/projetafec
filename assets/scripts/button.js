// function myFunction() {
//     var dots = document.getElementById("dots");
//     var moreText = document.getElementById("more");
//     var btnText = document.getElementById("myBtn");
  
//     if (dots.style.display === "none") {
//       dots.style.display = "inline";
//       btnText.innerHTML = "Afficher plus";
//       moreText.style.display = "none";
//     } else {
//       dots.style.display = "none";
//       btnText.innerHTML = "Afficher moins";
//       moreText.style.display = "inline";
//     }
//   }
// Attendre que tout le contenu HTML soit chargé avant d'exécuter le script
document.addEventListener('DOMContentLoaded', function() {

    // --- 1. Récupérer les éléments HTML nécessaires ---

    // La modale entière (le fond semi-transparent et la boîte au centre)
    // C'est l'élément avec la classe 'box-wrapper' qui est caché par défaut.
    const boxWrapper = document.querySelector('.box-wrapper');

    // Le bouton pour fermer la modale (le 'X')
    // C'est l'élément avec la classe 'btn-close'.
    const closeButton = document.querySelector('.btn-close');

    // Le bouton "Laisser un avis" qui ouvre la modale
    // C'est l'élément avec la classe 'button' qui est à l'intérieur d'un lien <a>
    // et qui se trouve dans la section 'info-rando-complete'.
    // On utilise querySelector car il y a d'autres boutons 'button',
    // mais celui-ci est le seul qui est un enfant direct d'un <a> dans un div 'button-btn'
    // après la section des avis.
    const openModalButton = document.querySelector('.avis + .button-btn .button');


    // --- 2. Ajouter les écouteurs d'événements (ce qui se passe quand on clique) ---

    // Écouteur pour le bouton "Laisser un avis" (pour ouvrir la modale)
    if (openModalButton) { // On vérifie que le bouton existe bien avant d'ajouter l'écouteur
        openModalButton.addEventListener('click', function(event) {
            // Empêcher le comportement par défaut du lien (qui irait vers 'avis.html')
            event.preventDefault();
            // Afficher la modale en changeant son style 'display' à 'flex'
            // (car votre CSS utilise flexbox pour centrer la modale)
            boxWrapper.style.display = 'flex';
        });
    }

    // Écouteur pour le bouton de fermeture (le 'X')
    if (closeButton) { // On vérifie que le bouton existe bien
        closeButton.addEventListener('click', function() {
            // Cacher la modale en changeant son style 'display' à 'none'
            boxWrapper.style.display = 'none';
        });
    }

    // Écouteur pour fermer la modale si on clique en dehors de la boîte de contenu
    if (boxWrapper) { // On vérifie que le wrapper existe bien
        boxWrapper.addEventListener('click', function(event) {
            // Si l'élément sur lequel on a cliqué est le 'boxWrapper' lui-même
            // et non un de ses enfants (comme la 'box-container'),
            // alors on ferme la modale.
            if (event.target === boxWrapper) {
                boxWrapper.style.display = 'none';
            }
        });
    }

    // --- Fonctionnalité "Afficher plus" pour la description ---
    // (Ajoutée ici car elle est souvent gérée par JavaScript sur la même page)

    const myBtn = document.getElementById("myBtn"); // Le bouton "Afficher plus"
    const dots = document.getElementById("dots");   // Les points (...)
    const moreText = document.getElementById("more"); // Le texte caché

    if (myBtn && dots && moreText) { // On s'assure que tous les éléments existent
        myBtn.addEventListener('click', function() {
            if (dots.style.display === "none") {
                // Si le texte est déjà affiché, on le cache
                dots.style.display = "inline";
                myBtn.innerHTML = "Afficher plus";
                moreText.style.display = "none";
            } else {
                // Si le texte est caché, on l'affiche
                dots.style.display = "none";
                myBtn.innerHTML = "Afficher moins";
                moreText.style.display = "inline";
            }
        });
    }
});