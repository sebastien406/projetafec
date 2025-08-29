
// document.addEventListener('DOMContentLoaded', function() {
//     const openModalBtn = document.getElementById('openModalReviewBtn');
//     const reviewModal = document.getElementById('reviewModal');
//     const closeModalBtn = document.getElementById('closeReviewModalBtn');
//     if (openModalBtn) {
//         openModalBtn.addEventListener('click', function() {
//             if (reviewModal) {
//                 reviewModal.classList.add('active');
//             }
//         });
//     }
// if (closeModalBtn) {
//         closeModalBtn.addEventListener('click', function() {
//             if (reviewModal) {
//                 reviewModal.classList.remove('active'); 
//             }
//         });
//     }
//  if (reviewModal) {
//         reviewModal.addEventListener('click', function(event) {
//             if (event.target === reviewModal) { 
//                 reviewModal.classList.remove('active');
//             }
//         });
//     }
// });
// ---------------------------------------------------------------------------------------------------
export function openModal(reviewModal) {
  if (reviewModal) {
    reviewModal.classList.add('active');
  }
}


export function closeModal(reviewModal) {
  if (reviewModal) {
    reviewModal.classList.remove('active');
  }
}

export function setupModal() {
  const openModalBtn = document.getElementById('openModalReviewBtn');
  const reviewModal = document.getElementById('reviewModal');
  const closeModalBtn = document.getElementById('closeReviewModalBtn');

  if (openModalBtn) {
    openModalBtn.addEventListener('click', () => openModal(reviewModal));
  }

  if (closeModalBtn) {
    closeModalBtn.addEventListener('click', () => closeModal(reviewModal));
  }

  if (reviewModal) {
    reviewModal.addEventListener('click', (event) => {
      if (event.target === reviewModal) {
        closeModal(reviewModal);
      }
    });
  }
}

document.addEventListener('DOMContentLoaded', setupModal);
