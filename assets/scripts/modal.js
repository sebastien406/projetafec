document.addEventListener('DOMContentLoaded', function() {
    const boxWrapper = document.querySelector('.box-wrapper');
    const closeButton = document.querySelector('.btn-close');
    const openModalButton = document.querySelector('.avis + .button-btn .button');
    if (openModalButton) { 
        openModalButton.addEventListener('click', function(event) {
         event.preventDefault();
         boxWrapper.style.display = 'flex';
        });
    }

    
    if (closeButton) { 
        closeButton.addEventListener('click', function() {
            boxWrapper.style.display = 'none';
        });
    }
    if (boxWrapper) { 
        boxWrapper.addEventListener('click', function(event) {
            if (event.target === boxWrapper) {
                boxWrapper.style.display = 'none';
            }
        });
    }

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
});