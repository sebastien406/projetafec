import { openModal, closeModal, setupModal } from '../../assets/scripts/modal.js';

describe('Modale de commentaires', () => {
  beforeEach(() => {
    
    document.body.innerHTML = 
    `<button id="openModalReviewBtn"></button>
    <div id="reviewModal" class="modal">
    <button id="closeReviewModalBtn"></button>
     </div>`;
    setupModal();
  });

  test('La modale doit s\'ouvrir au clic sur le bouton d\'ouverture', () => {
    const openModalBtn = document.getElementById('openModalReviewBtn');
    const reviewModal = document.getElementById('reviewModal');

    openModalBtn.click();

    expect(reviewModal.classList.contains('active')).toBe(true);
  });

  test('La modale doit se fermer au clic sur le bouton de fermeture', () => {
    const openModalBtn = document.getElementById('openModalReviewBtn');
    const closeModalBtn = document.getElementById('closeReviewModalBtn');
    const reviewModal = document.getElementById('reviewModal');


    openModalBtn.click();
    expect(reviewModal.classList.contains('active')).toBe(true);

    closeModalBtn.click();

    expect(reviewModal.classList.contains('active')).toBe(false);
  });

  test('La modale doit se fermer au clic en dehors de la modale', () => {
    const openModalBtn = document.getElementById('openModalReviewBtn');
    const reviewModal = document.getElementById('reviewModal');

    openModalBtn.click();
    expect(reviewModal.classList.contains('active')).toBe(true);

    reviewModal.click();
    
    expect(reviewModal.classList.contains('active')).toBe(false);
  });
});
