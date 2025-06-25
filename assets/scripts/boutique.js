document.addEventListener('DOMContentLoaded', () => {
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    const cartCountSpan = document.getElementById('cart-count');
    const cartItemsList = document.getElementById('cart-items');
    const cartTotalSpan = document.getElementById('cart-total');
    const cartIcon = document.getElementById('cart-icon');
    const cartModal = document.getElementById('cart-modal');
    const closeModalButton = document.querySelector('.close-button');

    let cart = []; // Le panier stockera les objets produit {id, name, price, quantity}

    // Charger le panier depuis le localStorage (si existant)
    if (localStorage.getItem('cart')) {
        cart = JSON.parse(localStorage.getItem('cart'));
        updateCartDisplay();
    }

    // Fonction pour sauvegarder le panier dans le localStorage
    function saveCart() {
        localStorage.setItem('cart', JSON.stringify(cart));
    }

    // Fonction pour mettre à jour l'affichage du panier (nombre d'articles et total)
    function updateCartDisplay() {
        let totalItems = 0;
        let totalPrice = 0;
        cartItemsList.innerHTML = ''; // Vider la liste actuelle

        cart.forEach(item => {
            totalItems += item.quantity;
            totalPrice += item.price * item.quantity;

            const listItem = document.createElement('li');
            listItem.innerHTML = `
                ${item.name} (x${item.quantity}) - <span>${(item.price * item.quantity).toFixed(2)} €</span>
                <button data-id="${item.id}" class="remove-from-cart">Supprimer</button>
            `;
            cartItemsList.appendChild(listItem);
        });

        cartCountSpan.textContent = totalItems;
        cartTotalSpan.textContent = totalPrice.toFixed(2) + ' €';
        saveCart(); // Sauvegarder après chaque mise à jour
    }

    // Ajouter un produit au panier
    addToCartButtons.forEach(button => {
        button.addEventListener('click', (event) => {
            const id = parseInt(event.target.dataset.id);
            const name = event.target.dataset.name;
            const price = parseFloat(event.target.dataset.price);

            const existingItem = cart.find(item => item.id === id);

            if (existingItem) {
                existingItem.quantity++;
            } else {
                cart.push({ id, name, price, quantity: 1 });
            }
            updateCartDisplay();
            // Optionnel: afficher un message de confirmation
            alert(`${name} a été ajouté au panier !`);
        });
    });

    // Supprimer un produit du panier (délégation d'événements)
    cartItemsList.addEventListener('click', (event) => {
        if (event.target.classList.contains('remove-from-cart')) {
            const idToRemove = parseInt(event.target.dataset.id);
            cart = cart.filter(item => item.id !== idToRemove); // Supprime l'article

            // Si tu veux juste décrémenter la quantité au lieu de supprimer complètement :
            /*
            const itemToDecrement = cart.find(item => item.id === idToRemove);
            if (itemToDecrement && itemToDecrement.quantity > 1) {
                itemToDecrement.quantity--;
            } else {
                cart = cart.filter(item => item.id !== idToRemove);
            }
            */
            updateCartDisplay();
        }
    });


    // Ouvrir la modale du panier
    cartIcon.addEventListener('click', (event) => {
        event.preventDefault(); // Empêche le comportement de lien par défaut
        cartModal.style.display = 'flex'; // Affiche la modale (flex pour centrage)
        updateCartDisplay(); // S'assurer que le panier est à jour
    });

    // Fermer la modale du panier avec le bouton X
    closeModalButton.addEventListener('click', () => {
        cartModal.style.display = 'none';
    });

    // Fermer la modale si on clique en dehors du contenu
    window.addEventListener('click', (event) => {
        if (event.target === cartModal) {
            cartModal.style.display = 'none';
        }
    });

    // Gestion du bouton de paiement (simple alerte pour l'exemple)
    const checkoutButton = document.getElementById('checkout-button');
    checkoutButton.addEventListener('click', () => {
        if (cart.length > 0) {
            alert('Procédure de paiement lancée ! (Fonctionnalité réelle à implémenter)');
            // Ici, vous enverriez les données du panier à un serveur pour le traitement du paiement.
            // Par exemple, via une requête AJAX à un script PHP de traitement de commande.
            cart = []; // Vider le panier après "paiement" (pour l'exemple)
            updateCartDisplay();
            cartModal.style.display = 'none';
        } else {
            alert('Votre panier est vide !');
        }
    });
});