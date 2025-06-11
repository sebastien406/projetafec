document.addEventListener('DOMContentLoaded', function() {
    const boxWrapper = document.querySelector('.box-wrapper');
    const closeButton = document.querySelector('.btn-close');
    const openReviewModalBtn = document.getElementById('openReviewModalBtn'); 
    const commentTextArea = document.getElementById('commentTextArea'); 
    const submitReviewBtn = document.getElementById('submitReviewBtn'); 

    if (openReviewModalBtn) {
        openReviewModalBtn.addEventListener('click', function(event) {
            event.preventDefault(); 
            if (boxWrapper) {
                boxWrapper.style.display = 'flex'; 
                console.log('Bouton "Laisser un avis" cliqué. Affichage de la modale défini sur flex.');
            }
        });
    } else {
        console.log('ERREUR : openReviewModalBtn non trouvé. Vérifiez la structure HTML/l\'ID.');
    }
    if (closeButton) {
        closeButton.addEventListener('click', function() {
            if (boxWrapper) {
                boxWrapper.style.display = 'none'; 
                if (commentTextArea) {
                    commentTextArea.value = '';
                }
                
            }
        });
    }


    if (boxWrapper) {
        boxWrapper.addEventListener('click', function(event) {
            if (event.target === boxWrapper) { 
                boxWrapper.style.display = 'none'; 
                if (commentTextArea) {
                    commentTextArea.value = '';
                }
                
            }
        });
    }

  
    if (submitReviewBtn) {
        submitReviewBtn.addEventListener('click', function() {
            if (commentTextArea) {
                const reviewText = commentTextArea.value;
                console.log('Avis envoyé :', reviewText);
                boxWrapper.style.display = 'none'; 
                commentTextArea.value = ''; 
                alert('Merci pour votre avis ! (Normalement, ceci serait envoyé au serveur.)');
            }
        });
    }
});