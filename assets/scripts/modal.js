
document.addEventListener('DOMContentLoaded', function() {
    const openModalBtn = document.getElementById('openModalReviewBtn');
    const reviewModal = document.getElementById('reviewModal');
    const closeModalBtn = document.getElementById('closeReviewModalBtn');
    if (openModalBtn) {
        openModalBtn.addEventListener('click', function() {
            if (reviewModal) {
                reviewModal.classList.add('active');
            }
        });
    }
if (closeModalBtn) {
        closeModalBtn.addEventListener('click', function() {
            if (reviewModal) {
                reviewModal.classList.remove('active'); 
            }
        });
    }
 if (reviewModal) {
        reviewModal.addEventListener('click', function(event) {
            if (event.target === reviewModal) { 
                reviewModal.classList.remove('active');
            }
        });
    }
});