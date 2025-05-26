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

// Initialiser les cartes de produits et les filtres
function initializeProductCards() {
    // Ajouter des écouteurs d'événements aux boutons qui n'ont pas d'attribut onclick
    document.querySelectorAll('.info-button:not([onclick])').forEach(button => {
        button.setAttribute('onclick', 'flipCard(this, true)');
    });
    
    document.querySelectorAll('.back-button:not([onclick])').forEach(button => {
        button.setAttribute('onclick', 'flipCard(this, false)');
    });
}

// Fonction principale d'initialisation
document.addEventListener('DOMContentLoaded', function() {
    // Initialiser les cartes de produits
    initializeProductCards();
    
    // Initialiser les filtres
    initializeFilters();
    
    // Initialiser l'affichage des sous-catégories
    toggleSubcategoryFilter();
    
    // Appliquer les filtres initiaux
    filterProducts();
    
    console.log('Initialisation complète terminée');
});

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

// Fonction pour gérer l'affichage du filtre de sous-catégorie
function toggleSubcategoryFilter() {
    const categorySelect = document.getElementById('category');
    const subcategoryDiv = document.getElementById('subcategory-filter');
    const subcategorySelect = document.getElementById('subcategory');
    
    if (!categorySelect || !subcategoryDiv || !subcategorySelect) {
        console.log('Un ou plusieurs éléments de filtre manquants');
        return;
    }
    
    const selectedCategory = categorySelect.value;
    console.log('Catégorie sélectionnée:', selectedCategory);
    
    // Afficher le filtre de sous-catégorie uniquement pour 'se_maquiller' et 'fragrance'
    if (selectedCategory === 'se_maquiller' || selectedCategory === 'fragrance') {
        subcategoryDiv.style.display = 'block';
        
        // Filtrer les options de sous-catégorie en fonction de la catégorie sélectionnée
        const options = subcategorySelect.querySelectorAll('option');
        let visibleOptions = 0;
        
        options.forEach(option => {
            const parent = option.getAttribute('data-parent');
            
            // Toujours afficher l'option vide (Toutes les sous-catégories)
            if (option.value === '') {
                option.style.display = '';
                visibleOptions++;
                return;
            }
            
            // Comparer en ignorant la casse pour éviter les problèmes de majuscules/minuscules
            const shouldDisplay = !parent || (parent && parent.toLowerCase() === selectedCategory.toLowerCase());
            option.style.display = shouldDisplay ? '' : 'none';
            
            if (shouldDisplay) visibleOptions++;
        });
        
        console.log(`Nombre d'options visibles: ${visibleOptions}`);
        
        // Réinitialiser la sélection de sous-catégorie
        subcategorySelect.value = '';
        
        // Si la catégorie est 'fragrance', sélectionner automatiquement 'all_fragrance'
        if (selectedCategory === 'fragrance') {
            // Trouver l'option 'all_fragrance'
            const allFragranceOption = Array.from(subcategorySelect.options).find(opt => opt.value === 'all_fragrance');
            if (allFragranceOption) {
                subcategorySelect.value = 'all_fragrance';
                console.log('Sélection automatique de la sous-catégorie all_fragrance');
            }
        }
        
        console.log('Filtre de sous-catégorie affiché pour la catégorie:', selectedCategory);
    } else {
        // Masquer le filtre de sous-catégorie
        subcategoryDiv.style.display = 'none';
        subcategorySelect.value = '';
        console.log('Filtre de sous-catégorie masqué');
    }
    
    // Appliquer les filtres après avoir changé la sous-catégorie
    filterProducts();
}

// Fonction pour sauvegarder les filtres dans le localStorage
function saveFilters() {
    const priceRange = document.getElementById('price_range') ? document.getElementById('price_range').value : '';
    const brand = document.getElementById('brand') ? document.getElementById('brand').value : '';
    const nameFilter = document.getElementById('name_filter') ? document.getElementById('name_filter').value : '';
    const sortOption = document.getElementById('sort') ? document.getElementById('sort').value : 'price-asc';
    const category = document.getElementById('category') ? document.getElementById('category').value : '';
    const subcategory = document.getElementById('subcategory') ? document.getElementById('subcategory').value : '';
    
    const filters = {
        priceRange,
        brand,
        nameFilter,
        sortOption,
        category,
        subcategory
    };
    
    localStorage.setItem('productFilters', JSON.stringify(filters));
    console.log('Filtres sauvegardés:', filters);
}

// Fonction pour restaurer les filtres depuis le localStorage
function restoreFilters() {
    const savedFilters = localStorage.getItem('productFilters');
    if (!savedFilters) return;
    
    const filters = JSON.parse(savedFilters);
    console.log('Restauration des filtres:', filters);
    
    // Appliquer les filtres sauvegardés aux éléments du formulaire
    if (document.getElementById('price_range')) document.getElementById('price_range').value = filters.priceRange || '';
    if (document.getElementById('brand')) document.getElementById('brand').value = filters.brand || '';
    if (document.getElementById('name_filter')) document.getElementById('name_filter').value = filters.nameFilter || '';
    if (document.getElementById('sort')) document.getElementById('sort').value = filters.sortOption || 'price-asc';
    
    // Restaurer la catégorie et la sous-catégorie
    if (document.getElementById('category')) {
        document.getElementById('category').value = filters.category || '';
        // Déclencher l'affichage des sous-catégories si nécessaire
        if (filters.category === 'fragrance' || filters.category === 'se_maquiller') {
            toggleSubcategoryFilter();
            // Restaurer la sous-catégorie après un court délai pour s'assurer que toggleSubcategoryFilter a terminé
            setTimeout(() => {
                if (document.getElementById('subcategory')) {
                    document.getElementById('subcategory').value = filters.subcategory || '';
                }
                // Appliquer les filtres restaurés
                filterProducts();
            }, 100);
        } else {
            // Appliquer les filtres restaurés immédiatement si pas de sous-catégorie
            filterProducts();
        }
    }
}

// Fonction globale pour filtrer les produits sans rafraîchir la page
function filterProducts() {
    console.log('Application des filtres...');
    
    // Récupérer les valeurs des filtres
    const priceRange = document.getElementById('price_range') ? document.getElementById('price_range').value : '';
    const brand = document.getElementById('brand') ? document.getElementById('brand').value : '';
    const nameFilter = document.getElementById('name_filter') ? document.getElementById('name_filter').value.toLowerCase() : '';
    const sortOption = document.getElementById('sort') ? document.getElementById('sort').value : 'price-asc';
    const category = document.getElementById('category') ? document.getElementById('category').value : '';
    let subcategory = document.getElementById('subcategory') ? document.getElementById('subcategory').value : '';
    
    // Sauvegarder les filtres actuels pour les restaurer après changement de page
    saveFilters();
    
    console.log('Filtres sélectionnés - Catégorie:', category, '| Sous-catégorie:', subcategory, '| Prix:', priceRange, '| Marque:', brand, '| Nom:', nameFilter, '| Tri:', sortOption);
    
    // Récupérer tous les produits
    const products = document.querySelectorAll('.product-card');
    const productsContainer = document.getElementById('products-container');
    
    if (!productsContainer || products.length === 0) {
        console.log('Aucun produit trouvé ou conteneur manquant');
        return; // Si aucun produit n'est trouvé, ne rien faire
    }
    
    // Débogage: Afficher tous les produits disponibles
    console.log('=== Début débogage de tous les produits ===');
    products.forEach(product => {
        const name = product.getAttribute('data-name') || 'Sans nom';
        const cat = product.getAttribute('data-category');
        const subcat = product.getAttribute('data-subcategory');
        const price = product.getAttribute('data-price');
        console.log(`Produit: ${name} | Catégorie: ${cat} | Sous-catégorie: ${subcat} | Prix: ${price}`);
    });
    console.log('=== Fin débogage de tous les produits ===');
    console.log(`Nombre total de produits avant filtrage: ${products.length}`);
    
    // Si la catégorie est 'fragrance' et qu'aucune sous-catégorie n'est sélectionnée,
    // sélectionner automatiquement 'all_fragrance' pour afficher tous les produits de fragrance
    if (category === 'fragrance' && !subcategory) {
        const subcategorySelect = document.getElementById('subcategory');
        if (subcategorySelect) {
            subcategorySelect.value = 'all_fragrance';
            subcategory = 'all_fragrance';
            console.log('Sélection automatique de la sous-catégorie all_fragrance');
        }
    }
    
    // Toujours commencer avec tous les produits pour chaque filtrage
    let filteredProducts = Array.from(products);
    
    // Filtrer par catégorie
    if (category) {
        console.log('Filtrage par catégorie:', category);
        
        // Débogage: Afficher les catégories de tous les produits avant filtrage
        console.log('=== Début débogage des catégories ===');
        products.forEach(product => {
            const name = product.getAttribute('data-name') || 'Sans nom';
            const cat = product.getAttribute('data-category');
            const subcat = product.getAttribute('data-subcategory');
            console.log(`Produit: ${name} | Catégorie: ${cat} | Sous-catégorie: ${subcat}`);
        });
        console.log('=== Fin débogage des catégories ===');
        
        // IMPORTANT: Repartir de TOUS les produits pour le filtrage par catégorie
        // Cela garantit que nous n'avons pas déjà filtré des produits qui devraient être inclus
        filteredProducts = Array.from(products).filter(product => {
            // Récupérer la catégorie du produit depuis l'attribut data-category
            const productCategory = product.getAttribute('data-category');
            const productName = product.getAttribute('data-name') || 'Sans nom';
            
            // Vérifier si la catégorie correspond (insensible à la casse)
            const match = productCategory && category && 
                         productCategory.toLowerCase() === category.toLowerCase();
            console.log(`Produit: ${productName} | Catégorie: ${productCategory} === ${category}? ${match}`);
            
            return match;
        });
        
        console.log(`Nombre de produits après filtrage par catégorie '${category}': ${filteredProducts.length}`);
        
        // Si la catégorie est 'fragrance' et qu'aucune sous-catégorie n'est sélectionnée,
        // sélectionner automatiquement 'all_fragrance' pour afficher tous les produits de fragrance
        if (category === 'fragrance' && !subcategory) {
            const subcategorySelect = document.getElementById('subcategory');
            if (subcategorySelect) {
                subcategorySelect.value = 'all_fragrance';
                subcategory = 'all_fragrance';
                console.log('Sélection automatique de la sous-catégorie all_fragrance');
            }
        }
    }
    
    // Filtrer par sous-catégorie
    if (subcategory) {
        console.log('Filtrage par sous-catégorie:', subcategory);
        
        // Si aucune sous-catégorie n'est sélectionnée, afficher tous les produits filtrés par catégorie
        if (subcategory === '') {
            console.log('Aucune sous-catégorie sélectionnée, affichage de tous les produits filtrés par catégorie');
            return;
        }
        
        // Cas spécial pour 'all_fragrance' - accepter tous les produits de la catégorie 'fragrance'
        if (subcategory === 'all_fragrance') {
            console.log('Filtrage spécial pour all_fragrance - afficher tous les produits de la catégorie fragrance');
            
            // IMPORTANT: Repartir de TOUS les produits, pas seulement ceux déjà filtrés
            // C'est crucial pour afficher les 4 produits de la catégorie fragrance
            filteredProducts = Array.from(products).filter(product => {
                const productCategory = product.getAttribute('data-category');
                const productName = product.getAttribute('data-name') || 'Sans nom';
                
                // Débogage détaillé pour comprendre pourquoi les produits ne s'affichent pas
                console.log(`Débogage all_fragrance: ${productName} | Catégorie: ${productCategory}`);
                
                // Vérifier si le produit est dans la catégorie 'fragrance'
                // Utiliser une comparaison insensible à la casse pour éviter les problèmes de majuscules/minuscules
                const isFragrance = productCategory && productCategory.toLowerCase() === 'fragrance';
                console.log(`${productName}: Est dans la catégorie fragrance? ${isFragrance}`);
                return isFragrance;
            });
            
            console.log(`Nombre de produits après filtrage all_fragrance: ${filteredProducts.length}`);
        } else {
            // Pour les autres sous-catégories
            // IMPORTANT: Pour les sous-catégories de fragrance, repartir de tous les produits
            // pour éviter les problèmes de filtrage
            const fragranceSubcategories = ['perfumes', 'mists', 'sets'];
            if (fragranceSubcategories.includes(subcategory)) {
                // Pour les sous-catégories de fragrance, filtrer directement depuis tous les produits
                filteredProducts = Array.from(products).filter(product => {
                    const productCategory = product.getAttribute('data-category');
                    const productSubcategory = product.getAttribute('data-subcategory');
                    const productName = product.getAttribute('data-name') || 'Sans nom';
                    
                    // Débogage détaillé pour comprendre pourquoi les produits ne s'affichent pas
                    console.log(`Débogage sous-catégorie fragrance: ${productName} | Catégorie: ${productCategory} | Sous-catégorie: ${productSubcategory} | Filtre: ${subcategory}`);
                    
                    // Vérifier d'abord que le produit est dans la catégorie 'fragrance'
                    if (productCategory !== 'fragrance') {
                        return false;
                    }
                    
                    // Cas spécial pour les parfums (perfumes)
                    if (subcategory === 'perfumes') {
                        // Si le produit a la sous-catégorie 'perfumes' OU si son nom contient 'Parfum' OU 'Eau de Parfum'
                        const isPerfume = (productSubcategory && productSubcategory.toLowerCase() === 'perfumes') || 
                                         (productName && productName.toLowerCase().includes('parfum')) ||
                                         (productName && productName.toLowerCase().includes('eau de parfum'));
                        console.log(`${productName}: Est un parfum? ${isPerfume}`);
                        return isPerfume;
                    }
                    
                    // Cas spécial pour les brumes (mists)
                    if (subcategory === 'mists') {
                        // Si le produit a la sous-catégorie 'mists' OU si son nom contient 'Brume' OU 'Mist'
                        const isMist = (productSubcategory && productSubcategory.toLowerCase() === 'mists') || 
                                      (productName && productName.toLowerCase().includes('brume')) ||
                                      (productName && productName.toLowerCase().includes('mist'));
                        console.log(`${productName}: Est une brume? ${isMist}`);
                        return isMist;
                    }
                    
                    // Cas spécial pour les coffrets (sets)
                    if (subcategory === 'sets') {
                        // Si le produit a la sous-catégorie 'sets' OU si son nom contient 'Coffret' OU 'Set'
                        const isSet = (productSubcategory && productSubcategory.toLowerCase() === 'sets') || 
                                     (productName && productName.toLowerCase().includes('coffret')) ||
                                     (productName && productName.toLowerCase().includes('set'));
                        console.log(`${productName}: Est un coffret? ${isSet}`);
                        return isSet;
                    }
                    
                    // Si le produit n'a pas de sous-catégorie spécifiée mais est dans la catégorie 'fragrance',
                    // l'accepter pour toutes les sous-catégories de fragrance
                    if (!productSubcategory) {
                        console.log(`${productName}: Produit de fragrance sans sous-catégorie spécifiée, accepté`);
                        return true;
                    }
                    
                    // Accepter le produit si sa sous-catégorie correspond à celle du filtre
                    const match = productSubcategory === subcategory;
                    console.log(`${productName}: Sous-catégorie ${productSubcategory} === ${subcategory}? ${match}`);
                    return match;
                });
            } else {
                // Pour les autres sous-catégories (se_maquiller), filtrer normalement
                filteredProducts = filteredProducts.filter(product => {
                    const productSubcategory = product.getAttribute('data-subcategory');
                    const productName = product.getAttribute('data-name') || 'Sans nom';
                    
                    const match = productSubcategory === subcategory;
                    console.log(`${productName}: Sous-catégorie ${productSubcategory} === ${subcategory}? ${match}`);
                    return match;
                });
            }
            
            console.log(`Nombre de produits après filtrage par sous-catégorie '${subcategory}': ${filteredProducts.length}`);
        }
    }
    
    // Filtrer par prix
    if (priceRange) {
        console.log('Filtrage par prix:', priceRange);
        
        let minPrice = 0;
        let maxPrice = Infinity;
        
        // Définir les plages de prix en fonction de l'option sélectionnée
        if (priceRange === '0-25') {
            maxPrice = 25;
        } else if (priceRange === '25-50') {
            minPrice = 25;
            maxPrice = 50;
        } else if (priceRange === '50-100') {
            minPrice = 50;
            maxPrice = 100;
        } else if (priceRange === '100+') {
            minPrice = 100;
        }
        
        console.log(`Filtrage par plage de prix: ${minPrice} - ${maxPrice}`);
        
        // Débogage: Afficher les prix de tous les produits filtrés
        console.log('=== Début débogage des prix ===');
        filteredProducts.forEach(product => {
            const name = product.getAttribute('data-name') || 'Sans nom';
            const price = parseFloat(product.getAttribute('data-price')) || 0;
            console.log(`Produit: ${name} | Prix: ${price}`);
        });
        console.log('=== Fin débogage des prix ===');
        
        // Filtrer les produits par prix
        filteredProducts = filteredProducts.filter(product => {
            const price = parseFloat(product.getAttribute('data-price')) || 0;
            const inRange = price >= minPrice && price <= maxPrice;
            const name = product.getAttribute('data-name') || 'Sans nom';
            console.log(`Produit: ${name} | Prix: ${price} | Dans la plage ${minPrice}-${maxPrice}? ${inRange}`);
            return inRange;
        });
        
        console.log('Produits après filtrage par prix:', filteredProducts.length);
    }

    // Filtrer par marque
    if (brand) {
        console.log('Filtrage par marque:', brand);
        
        filteredProducts = filteredProducts.filter(product => {
            const productBrand = product.getAttribute('data-brand');
            const name = product.getAttribute('data-name') || 'Sans nom';
            const match = productBrand === brand;
            console.log(`Produit: ${name} | Marque: ${productBrand} === ${brand}? ${match}`);
            return match;
        });
        
        console.log('Produits après filtrage par marque:', filteredProducts.length);
    }
    
    // Filtrer par nom
    if (nameFilter) {
        console.log('Filtrage par nom:', nameFilter);
        
        filteredProducts = filteredProducts.filter(product => {
            // Récupérer tous les textes dans la carte produit pour une recherche plus large
            const allText = product.textContent.toLowerCase();
            
            // Recherche directe dans tout le texte de la carte
            if (allText.includes(nameFilter)) {
                return true;
            }
            
            // Recherche spécifique dans les éléments de nom
            const nameElements = [
                product.querySelector('.product-name'),
                product.querySelector('h3'),
                product.querySelector('.flip-card-front h3')
            ];
            
            for (const element of nameElements) {
                if (element) {
                    const productName = element.textContent.trim().toLowerCase();
                    if (productName.includes(nameFilter)) {
                        return true;
                    }
                }
            }
            
            return false;
        });
        console.log('Produits filtrés:', filteredProducts.length);
    }
    
    // Version simplifiée et optimisée du tri par prix
    console.log('Option de tri sélectionnée:', sortOption);
    
    // Tri par prix (croissant ou décroissant)
    if (sortOption === 'price-asc' || sortOption === 'price-desc') {
        console.log('Début du tri par prix:', sortOption);
        
        // Débogage: Afficher les prix de tous les produits
        console.log('=== Début débogage des prix ===');
        filteredProducts.forEach(product => {
            const name = product.querySelector('.product-name')?.textContent || 'Sans nom';
            const price = product.getAttribute('data-price');
            console.log(`Produit: ${name} | Prix (attribut): ${price}`);
        });
        console.log('=== Fin débogage des prix ===');
        
        // Convertir en tableau pour pouvoir trier
        filteredProducts = Array.from(filteredProducts);
        
        // Tri direct par prix
        filteredProducts.sort((a, b) => {
            // Extraire les prix directement depuis l'attribut data-price
            const priceA = parseFloat(a.getAttribute('data-price')) || 0;
            const priceB = parseFloat(b.getAttribute('data-price')) || 0;
            
            // Appliquer le tri selon l'option sélectionnée
    
    // Appliquer le tri selon l'option sélectionnée
    if (sortOption === 'price-asc') {
        console.log(`Tri croissant: ${priceA} vs ${priceB}`);
        return priceA - priceB; // Prix croissant
    } else {
        console.log(`Tri décroissant: ${priceB} vs ${priceA}`);
        return priceB - priceA; // Prix décroissant
    }
});

console.log(`Tri par prix ${sortOption} terminé. Nombre de produits: ${filteredProducts.length}`);
}

console.log('Produits triés:', filteredProducts.length);

// Afficher les produits filtrés
updateProductsDisplay(filteredProducts);
}

// Fonction pour afficher ou masquer les produits filtrés
function updateProductsDisplay(filteredProducts) {
    const products = document.querySelectorAll('.product-card');
    const productsContainer = document.getElementById('products-container');
    const noResultsMessage = document.getElementById('no-results-message');
    
    if (!productsContainer) {
        console.error('Conteneur de produits non trouvé');
        return;
    }
    
    // Débogage: afficher tous les produits avant filtrage
    console.log('=== Début débogage des produits avant filtrage ===');
    products.forEach(product => {
        const name = product.getAttribute('data-name') || 'Sans nom';
        const category = product.getAttribute('data-category');
        const subcategory = product.getAttribute('data-subcategory');
        console.log(`Produit: ${name} | Catégorie: ${category} | Sous-catégorie: ${subcategory}`);
    });
    console.log('=== Fin débogage des produits avant filtrage ===');
    
    // Débogage: afficher tous les produits filtrés
    console.log('=== Début débogage des produits filtrés ===');
    filteredProducts.forEach(product => {
        const name = product.getAttribute('data-name') || 'Sans nom';
        const category = product.getAttribute('data-category');
        const subcategory = product.getAttribute('data-subcategory');
        console.log(`Produit filtré: ${name} | Catégorie: ${category} | Sous-catégorie: ${subcategory}`);
    });
    console.log('=== Fin débogage des produits filtrés ===');
    
    // Masquer tous les produits d'abord
    products.forEach(product => {
        product.style.display = 'none';
    });
    
    // Afficher uniquement les produits filtrés
    filteredProducts.forEach(product => {
        product.style.display = 'block';
    });
    
    // Afficher un message si aucun produit ne correspond aux filtres
    if (filteredProducts.length === 0) {
        if (noResultsMessage) {
            noResultsMessage.style.display = 'block';
        } else {
            // Créer un message si nécessaire
            const message = document.createElement('div');
            message.id = 'no-results-message';
            message.className = 'col-span-full text-center py-8 text-gray-500';
            message.innerHTML = 'Aucun produit ne correspond à vos critères de filtrage.';
            productsContainer.appendChild(message);
        }
    } else if (noResultsMessage) {
        noResultsMessage.style.display = 'none';
    }
    
    console.log(`Affichage de ${filteredProducts.length} produits sur ${products.length} au total`);
}

// Fonction pour réinitialiser tous les filtres
function resetFilters() {
    console.log('Réinitialisation des filtres...');
    
    // Réinitialiser les valeurs des filtres
    if (document.getElementById('price_range')) document.getElementById('price_range').value = '';
    if (document.getElementById('brand')) document.getElementById('brand').value = '';
    if (document.getElementById('name_filter')) document.getElementById('name_filter').value = '';
    if (document.getElementById('sort')) document.getElementById('sort').value = 'price-asc';
    if (document.getElementById('category')) document.getElementById('category').value = '';
    if (document.getElementById('subcategory')) document.getElementById('subcategory').value = '';
    
    // Masquer le filtre de sous-catégorie
    const subcategoryFilter = document.getElementById('subcategory-filter');
    if (subcategoryFilter) subcategoryFilter.style.display = 'none';
    
    // Supprimer les filtres sauvegardés dans le localStorage
    localStorage.removeItem('productFilters');
    
    // Appliquer les filtres réinitialisés
    filterProducts();
    
    console.log('Filtres réinitialisés');
}

// Initialiser les filtres au chargement de la page
document.addEventListener('DOMContentLoaded', function() {
    console.log('Initialisation des filtres...');
    
    // Restaurer les filtres sauvegardés
    restoreFilters();
    
    // Ajouter des écouteurs d'événements pour les liens de pagination
    const paginationLinks = document.querySelectorAll('.pagination a');
    paginationLinks.forEach(link => {
        link.addEventListener('click', function() {
            // Sauvegarder les filtres avant de changer de page
            saveFilters();
        });
    });
    
    // Ajouter des écouteurs d'événements pour les boutons de pagination (Précédent/Suivant)
    const paginationButtons = document.querySelectorAll('.pagination button');
    paginationButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Sauvegarder les filtres avant de changer de page
            saveFilters();
        });
    });
    
    // Ajouter un écouteur d'événement pour le chargement de la page
    window.addEventListener('pageshow', function(event) {
        // Si la page est chargée depuis le cache (navigation avec bouton retour)
        if (event.persisted) {
            console.log('Page chargée depuis le cache, restauration des filtres...');
            restoreFilters();
        }
    });
});

// Fonction pour appliquer les styles responsifs
function applyResponsiveStyles() {
    const isMobile = window.innerWidth < 768;
    const isTablet = window.innerWidth >= 768 && window.innerWidth < 1024;
    const isDesktop = window.innerWidth >= 1024;
    
    // Appliquer les styles spécifiques aux boutons 'Retour'
    document.querySelectorAll('.back-button').forEach(button => {
        button.classList.add('px-3', 'py-2', 'rounded-lg');
        // Appliquer le style spécifique demandé par l'utilisateur
        button.style.padding = '0.75rem 1rem';
        button.style.borderRadius = '0.5rem';
        // Positionner le bouton à droite
        button.parentElement.classList.add('flex', 'justify-end');
    });
}

// Script pour appliquer les styles après chargement des nouveaux produits
document.addEventListener('DOMContentLoaded', function() {
    // Fonction pour appliquer les styles corrects aux cartes
    function applyCardStyles() {
        // Appliquer les styles responsifs
        applyResponsiveStyles();
    }
    
    // Fonction pour détecter les changements de taille d'écran
    function handleResize() {
        applyCardStyles();
    }
    
    // Ajouter un écouteur d'événement pour le redimensionnement de la fenêtre
    window.addEventListener('resize', handleResize);
    
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
    
    // Système de filtrage des produits côté client
    function initializeFilters() {
        const filterForm = document.getElementById('filter-form');
        const priceFilter = document.getElementById('price_range');
        const brandFilter = document.getElementById('brand');
        const nameFilter = document.getElementById('name_filter');
        const sortFilter = document.getElementById('sort');
        const categoryFilter = document.getElementById('category');
        const subcategoryFilter = document.getElementById('subcategory');
        
        // Si les éléments de filtrage n'existent pas, ne rien faire
        if (!filterForm) {
            return;
        }
        
        // Initialiser le filtrage au chargement de la page
        setTimeout(filterProducts, 100);
        
        // Ajouter des écouteurs d'événements pour le changement des filtres
        if (priceFilter) priceFilter.addEventListener('change', filterProducts);
        if (brandFilter) brandFilter.addEventListener('change', filterProducts);
        if (sortFilter) sortFilter.addEventListener('change', filterProducts);
        if (nameFilter) {
            nameFilter.addEventListener('input', function() {
                filterProducts();
            });
        }
        if (categoryFilter) {
            categoryFilter.addEventListener('change', function() {
                // D'abord mettre à jour l'affichage des sous-catégories
                toggleSubcategoryFilter();
                // Ensuite appliquer les filtres
                filterProducts();
            });
        }
        if (subcategoryFilter) {
            subcategoryFilter.addEventListener('change', filterProducts);
        }
    }
    
    // Initialiser les filtres
    initializeFilters();
});
