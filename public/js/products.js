// Fonction pour retourner les cartes de produits
function flipCard(button, toBack) {
    const card = button.closest('.product-card');
    if (!card) return;
    
    // Fermer toutes les autres cartes ouvertes
    if (toBack) {
        // Fermer TOUTES les autres cartes qui sont ouvertes
        document.querySelectorAll('.product-card.flipped').forEach(flippedCard => {
            flippedCard.classList.remove('flipped');
        });
        // Puis ouvrir celle-ci
        card.classList.add('flipped');
    } else {
        card.classList.remove('flipped');
    }
}

// Initialiser les cartes de produits
function initializeProductCards() {
    // Ajouter des écouteurs d'événements aux boutons qui n'ont pas d'attribut onclick
    document.querySelectorAll('.info-button:not([onclick])').forEach(button => {
        button.setAttribute('onclick', 'flipCard(this, true)');
    });
    
    document.querySelectorAll('.back-button:not([onclick])').forEach(button => {
        button.setAttribute('onclick', 'flipCard(this, false)');
    });
}

function addToCart(productId, productName, productPrice, productImage = null) {
    // Check if user is authenticated - this will be handled by the Blade template
    // The authentication check is done in the Blade file
    
    // Appel à l'API pour ajouter au panier
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
        // Mettre à jour le compteur du panier
        const cartCountElement = document.getElementById('cart-count');
        if (cartCountElement) {
            cartCountElement.textContent = data.cart_count;
        }
        showNotification(`${productName} ajouté au panier !`);
    })
    .catch(error => {
        console.error('Error:', error);
        showNotification('Erreur lors de l\'ajout au panier', 'error');
    });
}

function updateCartCount() {
    // This will be handled by the Blade template
    // The authentication check is done in the Blade file
    fetch('/cart/count')
        .then(response => response.json())
        .then(data => {
            const cartCountElement = document.getElementById('cart-count');
            if (cartCountElement) {
                cartCountElement.textContent = data.count;
            }
        });
}

function showNotification(message) {
    const notification = document.createElement('div');
    notification.className = 'fixed bottom-4 right-4 bg-teal-600 text-white px-6 py-3 rounded-lg shadow-lg transform translate-y-10 opacity-0 transition-all duration-300';
    notification.textContent = message;
    document.body.appendChild(notification);
    
    // Animate in
    setTimeout(() => {
        notification.classList.remove('translate-y-10', 'opacity-0');
        notification.classList.add('translate-y-0', 'opacity-100');
    }, 10);
    
    // Animate out after 3 seconds
    setTimeout(() => {
        notification.classList.remove('translate-y-0', 'opacity-100');
        notification.classList.add('translate-y-10', 'opacity-0');
        
        // Remove after animation
        setTimeout(() => {
            notification.remove();
        }, 300);
    }, 3000);
}

// Script pour appliquer les styles après chargement des nouveaux produits
document.addEventListener('DOMContentLoaded', function() {
    // Fonction pour appliquer les styles corrects aux cartes
    function applyCardStyles() {
        // Fonction pour détecter les changements de taille d'écran
        function handleResize() {
            applyResponsiveStyles();
        }
        
        // Ajouter un écouteur d'événement pour le redimensionnement de la fenêtre
        window.addEventListener('resize', handleResize);
        
        // Fonction pour appliquer les styles responsifs
        function applyResponsiveStyles() {
            const isMobile = window.innerWidth <= 768;
            const isSmallMobile = window.innerWidth <= 640;
            
            // Appliquer les styles aux images sur mobile
            if (isMobile) {
                document.querySelectorAll('.product-image-container').forEach(container => {
                    container.style.overflow = 'hidden';
                    container.style.borderRadius = '0.5rem';
                });
                
                document.querySelectorAll('.product-image').forEach(img => {
                    img.style.objectFit = 'cover';
                    img.style.transform = 'scale(1)';
                    img.style.transition = 'transform 0.5s ease-in-out';
                });
            }
            
            document.querySelectorAll('.flip-card-back').forEach(cardBack => {
                cardBack.style.padding = isSmallMobile ? '0.5rem' : (isMobile ? '0.75rem' : '1rem');
                
                const actionButtons = cardBack.querySelector('.action-buttons');
                if (actionButtons) {
                    actionButtons.style.flexDirection = isMobile ? 'column' : 'row';
                    actionButtons.style.gap = isMobile ? '0.5rem' : '0.75rem';
                }
                
                const backButton = cardBack.querySelector('.back-button');
                if (backButton) {
                    backButton.style.width = isMobile ? '100%' : 'auto';
                    backButton.style.margin = isMobile ? '0' : '0 0.5rem 0 0';
                }
                
                const addToCartButton = cardBack.querySelector('.add-to-cart-button');
                if (addToCartButton) {
                    addToCartButton.style.width = isMobile ? '100%' : 'auto';
                    addToCartButton.style.margin = isMobile ? '0' : '0 0 0 0.5rem';
                }
            });
            
            document.querySelectorAll('.detail-item').forEach(item => {
                item.style.padding = isSmallMobile ? '0.4rem 0.5rem' : (isMobile ? '0.5rem 0.75rem' : '0.75rem 1rem');
                item.style.marginBottom = isSmallMobile ? '0.4rem' : (isMobile ? '0.5rem' : '0.75rem');
                
                const detailText = item.querySelector('.detail-text');
                if (detailText) {
                    detailText.style.fontSize = isSmallMobile ? '0.8rem' : (isMobile ? '0.85rem' : '0.95rem');
                }
            });
        }
        
        // Appliquer les styles responsifs immédiatement
        applyResponsiveStyles();
        
        // Appliquer les styles aux versos des cartes
        document.querySelectorAll('.flip-card-back').forEach(cardBack => {
            // Styles de base pour le verso de la carte
            cardBack.style.backgroundColor = 'white';
            cardBack.style.transform = 'rotateY(180deg)';
            cardBack.style.border = '1px solid rgba(255, 117, 15, 0.1)';
            cardBack.style.display = 'flex';
            cardBack.style.flexDirection = 'column';
            cardBack.style.position = 'absolute';
            cardBack.style.width = '100%';
            cardBack.style.height = '100%';
            cardBack.style.backfaceVisibility = 'hidden';
            cardBack.style.WebkitBackfaceVisibility = 'hidden';
            cardBack.style.borderRadius = '1rem';
            cardBack.style.overflow = 'hidden';
            cardBack.style.boxShadow = '0 5px 15px rgba(255, 117, 15, 0.05)';
            cardBack.style.padding = '1rem';
            
            // Appliquer les styles responsifs en fonction de la taille de l'écran
            if (window.innerWidth <= 768) {
                cardBack.style.padding = '0.75rem';
            }
            if (window.innerWidth <= 640) {
                cardBack.style.padding = '0.5rem';
            }
            
            // Appliquer les styles personnalisés au contenu du verso
            const cardBackInner = cardBack.querySelector('div');
            if (cardBackInner) {
                cardBackInner.style.backgroundColor = 'white';
                cardBackInner.style.padding = '0.5rem';
                cardBackInner.style.borderRadius = '0.5rem';
            }
            
            // Style du nom du produit au verso
            const productNameBack = cardBack.querySelector('.product-name-back');
            if (productNameBack) {
                productNameBack.style.textAlign = 'left';
                productNameBack.style.fontSize = '1.3rem';
                productNameBack.style.color = '#333';
                productNameBack.style.fontWeight = '600';
                productNameBack.style.marginBottom = '0.75rem';
            }
            
            // Style de la section détails
            const productDetails = cardBack.querySelector('.product-details');
            if (productDetails) {
                productDetails.style.textAlign = 'left';
                productDetails.classList.add('mt-3');
                productDetails.style.marginBottom = '1rem';
            }
            
            // Style du prix et de la référence
            const priceBack = cardBack.querySelector('.product-price-back');
            if (priceBack) {
                priceBack.style.color = '#FF750F';
                priceBack.style.fontSize = '1.6rem';
                priceBack.style.fontWeight = 'bold';
                priceBack.style.marginBottom = '0.75rem';
            }
            
            // Réorganiser les boutons
            const actionButtons = cardBack.querySelector('.action-buttons');
            if (actionButtons) {
                actionButtons.style.display = 'flex';
                actionButtons.style.justifyContent = 'space-between';
                actionButtons.style.marginTop = 'auto';
                actionButtons.style.width = '100%';
                
                // Appliquer les styles responsifs en fonction de la taille de l'écran
                if (window.innerWidth <= 768) {
                    actionButtons.style.flexDirection = 'column';
                    actionButtons.style.gap = '0.5rem';
                }
            }
            
            // Style du bouton retour
            const backButton = cardBack.querySelector('.back-button');
            if (backButton) {
                backButton.style.backgroundColor = 'white';
                backButton.style.color = '#FF750F';
                backButton.style.boxShadow = '0 3px 10px rgba(255, 117, 15, 0.12)';
                backButton.style.border = '1px solid rgba(255, 117, 15, 0.15)';
                backButton.style.fontWeight = '500';
                backButton.style.padding = '0.75rem 1rem';
                backButton.style.transition = 'all 0.3s ease';
                backButton.style.borderRadius = '0.5rem';
                backButton.style.flex = '1';
                backButton.style.margin = '0 0.5rem 0 0';
                
                // Appliquer les styles responsifs en fonction de la taille de l'écran
                if (window.innerWidth <= 768) {
                    backButton.style.width = '100%';
                    backButton.style.margin = '0';
                    backButton.style.padding = '0.6rem 1rem';
                }
            }
            
            // Style du bouton d'ajout au panier
            const addToCartButton = cardBack.querySelector('.add-to-cart-button');
            if (addToCartButton) {
                addToCartButton.style.backgroundColor = '#FF750F';
                addToCartButton.style.color = 'white';
                addToCartButton.style.boxShadow = '0 4px 10px rgba(255, 117, 15, 0.25)';
                addToCartButton.style.border = 'none';
                addToCartButton.style.fontWeight = '500';
                addToCartButton.style.padding = '0.75rem 1rem';
                addToCartButton.style.transition = 'all 0.3s ease';
                addToCartButton.style.borderRadius = '0.5rem';
                addToCartButton.style.flex = '1';
                addToCartButton.style.margin = '0 0 0 0.5rem';
                
                // Appliquer les styles responsifs en fonction de la taille de l'écran
                if (window.innerWidth <= 768) {
                    addToCartButton.style.width = '100%';
                    addToCartButton.style.margin = '0';
                    addToCartButton.style.padding = '0.6rem 1rem';
                }
            }
        });
        
        // Appliquer les styles aux éléments de détail
        document.querySelectorAll('.detail-item').forEach(item => {
            item.style.display = 'flex';
            item.style.alignItems = 'center';
            item.style.backgroundColor = 'white';
            item.style.padding = '0.75rem 1rem';
            item.style.borderRadius = '0.5rem';
            item.style.marginBottom = '0.75rem';
            item.style.opacity = '1';
            item.style.border = '1px solid rgba(255, 117, 15, 0.1)';
            item.style.transition = 'all 0.3s ease';
            item.style.boxShadow = '0 2px 5px rgba(255, 117, 15, 0.03)';
            
            // Appliquer les styles responsifs en fonction de la taille de l'écran
            if (window.innerWidth <= 768) {
                item.style.padding = '0.5rem 0.75rem';
                item.style.marginBottom = '0.5rem';
            }
            if (window.innerWidth <= 640) {
                item.style.padding = '0.4rem 0.5rem';
                item.style.marginBottom = '0.4rem';
            }
            
            // Style des icônes dans les éléments de détail
            const detailIcon = item.querySelector('.detail-icon');
            if (detailIcon) {
                detailIcon.style.color = '#FF750F';
            }
            
            // Style du texte dans les éléments de détail
            const detailText = item.querySelector('.detail-text');
            if (detailText) {
                detailText.style.color = '#444';
                detailText.style.fontSize = '0.95rem';
                detailText.style.fontWeight = '500';
                
                // Appliquer les styles responsifs en fonction de la taille de l'écran
                if (window.innerWidth <= 768) {
                    detailText.style.fontSize = '0.85rem';
                }
                if (window.innerWidth <= 640) {
                    detailText.style.fontSize = '0.8rem';
                }
                
                // Vérifier si c'est l'élément de marque et appliquer un style spécial
                if (detailText.textContent.includes('Marque:')) {
                    item.style.backgroundColor = 'rgba(255, 117, 15, 0.05)';
                    item.style.borderColor = 'rgba(255, 117, 15, 0.2)';
                }
            }
        });
    }
    
    // Appliquer les styles immédiatement
    applyCardStyles();
    
    // Initialiser les cartes de produits
    initializeProductCards();
    
    // Observer les changements dans le conteneur de produits
    const productsContainer = document.getElementById('products-container');
    if (productsContainer) {
        const observer = new MutationObserver(function(mutations) {
            setTimeout(() => {
                applyCardStyles();
                initializeProductCards();
            }, 100); // Léger délai pour s'assurer que le DOM est complètement chargé
        });
        
        observer.observe(productsContainer, { childList: true, subtree: true });
    }
});
