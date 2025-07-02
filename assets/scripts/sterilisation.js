const toggleSterilisation = document.getElementById('toggleSterilisation');
const labelSterilisation = document.getElementById('labelSterilisation');

toggleSterilisation.addEventListener('change', function() {
  if (this.checked) {
    labelSterilisation.textContent = 'Mon chien est-il stérilisé : Oui';
  } else {
    labelSterilisation.textContent = 'Mon chien est-il stérilisé : Non';
  }
});