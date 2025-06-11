function AfficherPlus() {
    let dots = document.getElementById("dots");
    let moreText = document.getElementById("more");
    let btnText = document.getElementById("myBtn");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Afficher plus";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Afficher moins";
      moreText.style.display = "inline";
    }
  }

let afficherPlusBtn = document.getElementById('myBtn');

if (afficherPlusBtn) {
  afficherPlusBtn.addEventListener('click', AfficherPlus);
}


document.addEventListener('DOMContentLoaded', function() {
    const boxWrapper = document.querySelector('.box-wrapper');
    const closeButton = document.querySelector('.btn-close');
    const openReviewModalBtn = document.getElementById('openReviewModalBtn'); // Nouveau sélecteur pour le bouton "Laisser un avis"
    const commentTextArea = document.getElementById('commentTextArea'); // Le champ de texte pour le commentaire
    const submitReviewBtn = document.getElementById('submitReviewBtn'); // Le bouton "Envoyer votre avis" à l'intérieur de la modale


    console.log('--- Débogage Modale Avis ---');
    console.log('Élément boxWrapper trouvé :', boxWrapper);
    console.log('Élément closeButton trouvé :', closeButton);
    console.log('Élément openReviewModalBtn trouvé :', openReviewModalBtn);
    console.log('Élément commentTextArea trouvé :', commentTextArea);
    console.log('Élément submitReviewBtn trouvé :', submitReviewBtn);


    // Écouteur d'événement pour ouvrir la modale
    if (openReviewModalBtn) {
        openReviewModalBtn.addEventListener('click', function(event) {
            event.preventDefault(); // Empêche le comportement par défaut du lien si le bouton est dans un <a>
            if (boxWrapper) {
                boxWrapper.style.display = 'flex'; // Affiche la modale (utilisez 'flex' pour le centrage CSS)
                console.log('Bouton "Laisser un avis" cliqué. Affichage de la modale défini sur flex.');
            }
        });
    } else {
        console.log('ERREUR : openReviewModalBtn non trouvé. Vérifiez la structure HTML/l\'ID.');
    }

    // Écouteur d'événement pour fermer la modale via le bouton 'X'
    if (closeButton) {
        closeButton.addEventListener('click', function() {
            if (boxWrapper) {
                boxWrapper.style.display = 'none'; // Cache la modale
                // Optionnel : Réinitialiser le champ de texte lors de la fermeture
                if (commentTextArea) {
                    commentTextArea.value = '';
                }
                console.log('Bouton de fermeture cliqué. Modale masquée.');
            }
        });
    }

    // Écouteur d'événement pour fermer la modale en cliquant en dehors
    if (boxWrapper) {
        boxWrapper.addEventListener('click', function(event) {
            if (event.target === boxWrapper) { // Si le clic est sur le fond sombre de la modale
                boxWrapper.style.display = 'none'; // Cache la modale
                // Optionnel : Réinitialiser le champ de texte lors de la fermeture
                if (commentTextArea) {
                    commentTextArea.value = '';
                }
                console.log('Cliqué en dehors de la modale. Modale masquée.');
            }
        });
    }

    // Écouteur d'événement pour le bouton "Envoyer votre avis" à l'intérieur de la modale
    if (submitReviewBtn) {
        submitReviewBtn.addEventListener('click', function() {
            if (commentTextArea) {
                const reviewText = commentTextArea.value;
                console.log('Avis envoyé :', reviewText);
                // Ici, vous enverriez 'reviewText' à votre serveur (par exemple, avec une requête AJAX)
                // Pour l'instant, on se contente de le loguer et de fermer la modale
                boxWrapper.style.display = 'none'; // Ferme la modale après "envoi"
                commentTextArea.value = ''; // Efface le texte après envoi
                alert('Merci pour votre avis ! (Normalement, ceci serait envoyé au serveur.)');
            }
        });
    }


    // --- Votre logique existante "Afficher plus" ---
    const myBtn = document.getElementById("myBtn");
    const dots = document.getElementById("dots");
    const moreText = document.getElementById("more");

    if (myBtn && dots && moreText) {
        myBtn.addEventListener('click', function() {
            if (dots.style.display === "none") {
                dots.style.display = "inline";
                myBtn.innerHTML = "Afficher plus";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                myBtn.innerHTML = "Afficher moins";
                moreText.style.display = "inline";
            }
        });
    }
    console.log('--- Fin du débogage Modale Avis ---');
});