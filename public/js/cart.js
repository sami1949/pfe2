function addToCart(productId, productName, price, image = null) {
    fetch('/cart/add', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({
            product_id: productId,
            quantity: 1
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.message) {
            updateCartCount();
            showNotification(data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showNotification('Erreur lors de l\'ajout au panier', 'error');
    });
}

function updateCartCount() {
    fetch('/cart/count')
        .then(response => response.json())
        .then(data => {
            const cartCountElement = document.getElementById('cart-count');
            if (cartCountElement) {
                cartCountElement.textContent = data.count;
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
}

function showNotification(message) {
    const notification = document.createElement('div');
    notification.className = 'fixed bottom-4 right-4 bg-teal-600 text-white px-6 py-3 rounded-lg shadow-lg transform translate-y-10 opacity-0 transition-all duration-300';
    notification.textContent = message;
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.classList.remove('translate-y-10', 'opacity-0');
        notification.classList.add('translate-y-0', 'opacity-100');
    }, 10);
    
    setTimeout(() => {
        notification.classList.remove('translate-y-0', 'opacity-100');
        notification.classList.add('translate-y-10', 'opacity-0');
        
        setTimeout(() => {
            notification.remove();
        }, 300);
    }, 3000);
}

// Initialiser le compteur du panier au chargement de la page
document.addEventListener('DOMContentLoaded', function() {
    updateCartCount();
}); 