<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-8">Mon Panier</h2>
        
        @if(count($cartItems) > 0)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Produit</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Prix</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantité</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($cartItems as $item)
                            <tr id="cart-item-{{ $item->product_id }}" class="hover:bg-gray-50 transition-colors duration-200">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-16 w-16">
                                            <img class="h-16 w-16 rounded-md object-cover" src="{{ asset('storage/' . $item->product->image) }}" alt="{{ $item->product->name }}">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">{{ $item->product->name }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ number_format($item->price, 2) }} €</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center space-x-2">
                                        <button class="w-8 h-8 flex items-center justify-center rounded-md border border-gray-300 hover:bg-gray-100 transition-colors duration-200" onclick="updateQuantity({{ $item->product_id }}, -1)">-</button>
                                        <span id="quantity-{{ $item->product_id }}" class="w-12 text-center text-gray-700">{{ $item->quantity }}</span>
                                        <button class="w-8 h-8 flex items-center justify-center rounded-md border border-gray-300 hover:bg-gray-100 transition-colors duration-200" onclick="updateQuantity({{ $item->product_id }}, 1)">+</button>
                                    </div>
                                </td>
                                <td id="subtotal-{{ $item->product_id }}" class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ number_format($item->price * $item->quantity, 2) }} €</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button onclick="removeFromCart({{ $item->product_id }})" class="text-red-600 hover:text-red-900 transition-colors duration-200">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot class="bg-gray-50">
                        <tr>
                            <td colspan="3" class="px-6 py-4 text-right text-sm font-medium text-gray-500">Total</td>
                            <td id="cart-total" class="px-6 py-4 text-sm font-bold text-gray-900">{{ number_format($cartItems->sum(function($item) { return $item->price * $item->quantity; }), 2) }} €</td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            
            <div class="mt-8 flex justify-between items-center">
                <div class="flex space-x-4">
                    <button onclick="showClearCartModal()" class="px-6 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                        Vider le panier
                    </button>
                    <a href="{{ route('product.private') }}" class="px-6 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                        Continuer les achats
                    </a>
                </div>
                <a href="{{ route('checkout') }}" class="inline-block px-8 py-3 bg-green-600 text-white rounded-md hover:bg-green-700 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 flex items-center space-x-2">
                    <span>Procéder au paiement</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        @else
            <div class="bg-blue-50 border-l-4 border-blue-400 p-4 rounded-md">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <i class="fas fa-info-circle text-blue-400"></i>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-blue-700">
                            Votre panier est vide. <a href="{{ route('product.private') }}" class="font-medium underline hover:text-blue-600">Continuer vos achats</a>
                        </p>
                    </div>
                </div>
            </div>
        @endif
    </div>

    <!-- Modal de confirmation -->
    <div id="clearCartModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden overflow-y-auto h-full w-full z-50 transition-opacity duration-300">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white transform transition-all duration-300 scale-95 opacity-0" id="modalContent">
            <div class="mt-3 text-center">
                <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-red-100 mb-4">
                    <i class="fas fa-trash-alt text-red-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mt-4">Vider le panier</h3>
                <div class="mt-4 px-7 py-3">
                    <p class="text-base text-gray-600">
                        Êtes-vous sûr de vouloir vider votre panier ? Cette action est irréversible.
                    </p>
                </div>
                <div class="flex justify-center space-x-4 mt-6">
                    <button onclick="closeClearCartModal()" 
                            class="px-6 py-3 bg-gray-200 text-gray-800 text-base font-medium rounded-lg shadow-sm hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-300 transition-all duration-200">
                        Annuler
                    </button>
                    <button onclick="confirmClearCart()" 
                            class="px-6 py-3 bg-red-600 text-white text-base font-medium rounded-lg shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 transition-all duration-200">
                        Vider le panier
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
    function updateQuantity(productId, change) {
        const quantityElement = document.querySelector(`#quantity-${productId}`);
        const currentQuantity = parseInt(quantityElement.textContent);
        const newQuantity = currentQuantity + change;

        if (newQuantity < 1) return;

        fetch('{{ route("cart.update-quantity") }}', {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({
                product_id: productId,
                quantity: newQuantity
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Mettre à jour la quantité
                quantityElement.textContent = newQuantity;
                
                // Mettre à jour le sous-total
                const subtotalElement = document.querySelector(`#subtotal-${productId}`);
                if (subtotalElement) {
                    subtotalElement.textContent = (newQuantity * parseFloat(data.price)).toFixed(2) + ' €';
                }
                
                // Mettre à jour le total
                const totalElement = document.querySelector('#cart-total');
                if (totalElement) {
                    totalElement.textContent = data.total + ' €';
                }
                
                // Mettre à jour le compteur du panier
                const cartCountElement = document.getElementById('cart-count');
                if (cartCountElement) {
                    cartCountElement.textContent = data.cart_count;
                }

                // Si la quantité est 0, supprimer l'élément
                if (newQuantity === 0) {
                    const cartItem = document.querySelector(`#cart-item-${productId}`);
                    if (cartItem) {
                        cartItem.remove();
                    }
                }
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }

    function removeFromCart(productId) {
        fetch('{{ route("cart.remove") }}', {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({
                product_id: productId
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Supprimer l'élément du panier
                const cartItem = document.querySelector(`#cart-item-${productId}`);
                if (cartItem) {
                    cartItem.remove();
                }
                
                // Mettre à jour le total
                const totalElement = document.querySelector('#cart-total');
                if (totalElement) {
                    totalElement.textContent = data.total + ' €';
                }
                
                // Mettre à jour le compteur du panier
                const cartCountElement = document.getElementById('cart-count');
                if (cartCountElement) {
                    cartCountElement.textContent = data.cart_count;
                }
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }

    function showClearCartModal() {
        const modal = document.getElementById('clearCartModal');
        const modalContent = document.getElementById('modalContent');
        modal.classList.remove('hidden');
        // Petit délai pour l'animation
        setTimeout(() => {
            modalContent.classList.remove('scale-95', 'opacity-0');
            modalContent.classList.add('scale-100', 'opacity-100');
        }, 10);
    }

    function closeClearCartModal() {
        const modal = document.getElementById('clearCartModal');
        const modalContent = document.getElementById('modalContent');
        modalContent.classList.remove('scale-100', 'opacity-100');
        modalContent.classList.add('scale-95', 'opacity-0');
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300);
    }

    function confirmClearCart() {
        // Fermer la modal immédiatement
        closeClearCartModal();

        // Supprimer le contenu du panier
        const cartContainer = document.querySelector('.container');
        if (cartContainer) {
            // Supprimer le tableau et les boutons
            const table = document.querySelector('table');
            const buttonsContainer = document.querySelector('.mt-8');
            if (table) table.remove();
            if (buttonsContainer) buttonsContainer.remove();

            // Afficher le message "panier vide"
            const emptyCartMessage = `
                <div class="flex flex-col items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
                    <div class="w-full max-w-md">
                        <div class="text-center">
                            <div class="mx-auto flex items-center justify-center h-24 w-24 rounded-full bg-blue-100 mb-6">
                                <i class="fas fa-shopping-cart text-blue-600 text-4xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900 mb-4">Votre panier est vide</h2>
                            <p class="text-gray-600 mb-8">
                                Vous n'avez pas encore ajouté de produits à votre panier.
                            </p>
                            <a href="{{ route('product.private') }}" 
                               class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-all duration-200">
                                <i class="fas fa-home mr-2"></i>
                                Retour à la boutique
                            </a>
                        </div>
                    </div>
                </div>
            `;
            cartContainer.innerHTML = emptyCartMessage;
        }

        // Mettre à jour le compteur du panier
        const cartCountElements = document.querySelectorAll('#cart-count');
        cartCountElements.forEach(element => {
            element.textContent = '0';
        });

        // Envoyer la requête au serveur
        fetch('{{ route("cart.clear") }}', {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            }
        })
        .then(response => response.json())
        .then(data => {
            if (!data.success) {
                console.error('Erreur lors de la suppression du panier');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }

    // Modifier le bouton "Vider le panier" pour utiliser la nouvelle modal
    document.addEventListener('DOMContentLoaded', function() {
        const clearCartButton = document.querySelector('button[onclick="showClearCartModal()"]');
        if (clearCartButton) {
            clearCartButton.setAttribute('onclick', 'showClearCartModal()');
        }
    });
    </script>
</x-app-layout>