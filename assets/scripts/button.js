// bouton afficher plus

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


