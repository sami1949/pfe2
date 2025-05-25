@extends('layouts.main')

@section('title', 'Contact')

@section('content')
    <div class="relative min-h-screen">
        <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-amber-900 to-gray-900 opacity-90 z-0"></div>
        <div class="relative z-10 container mx-auto px-6 flex flex-col justify-center items-center text-center text-white min-h-screen animate-fade-in">
            <h1 class="text-4xl md:text-6xl font-light mb-6 max-w-4xl leading-tight">Nous Contacter</h1>
            <p class="text-lg text-white mb-12 max-w-2xl">Contactez-nous pour toute question ou pour réserver votre expérience de bien-être</p>
            <a href="#contact-section" class="px-8 py-4 bg-amber-500 text-black font-medium rounded-full hover:bg-amber-400 transition-all duration-300 shadow-lg hover:shadow-amber-500/50 hover-scale backdrop-blur-sm">
                Prendre Contact
            </a>
        </div>
    </div>

    <section id="contact-section" class="py-24 bg-white relative z-10 -mt-20">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 animate-fade-in">
                <h2 class="text-3xl md:text-4xl font-playfair text-amber-600 mb-6">Nous Contacter</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    Visitez notre salon ou contactez-nous pour planifier votre prochaine visite
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
                <div class="rounded-2xl overflow-hidden shadow-lg h-[450px] hover:shadow-xl transition-all duration-300">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9916258036047!2d2.333159315674104!3d48.86061407928762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2s123%20Rue%20de%20la%20Beaut%C3%A9%2C%2075000%20Paris%2C%20France!5e0!3m2!1sen!2sus!4v1667581234567!5m2!1sen!2sus" 
                            class="w-full h-full" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="space-y-6">
                        <div class="flex items-center gap-4 hover:translate-x-2 transition-transform duration-300">
                            <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-map-marker-alt text-amber-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-playfair text-lg text-amber-600">Adresse</h3>
                                <p class="text-gray-600">123 Rue de la Beauté, Paris 75000</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 hover:translate-x-2 transition-transform duration-300">
                            <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-phone text-amber-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-playfair text-lg text-amber-600">Téléphone</h3>
                                <p class="text-gray-600">+33 1 23 45 67 89</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 hover:translate-x-2 transition-transform duration-300">
                            <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-envelope text-amber-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-playfair text-lg text-amber-600">Email</h3>
                                <p class="text-gray-600">contact@elegancevibe.com</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 hover:translate-x-2 transition-transform duration-300">
                            <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-clock text-amber-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-playfair text-lg text-amber-600">Horaires</h3>
                                <p class="text-gray-600">Lun-Sam: 9h-20h | Dim: 10h-18h</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-gradient-to-b from-white to-amber-50 relative z-10">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 animate-fade-in">
                <h2 class="text-3xl md:text-4xl font-playfair text-amber-600 mb-6">Votre avis compte !</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    Laissez-nous votre opinion sur votre expérience chez Élégance Vibe
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
                <form class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300" id="avisForm" method="POST" action="{{ route('avis.store') }}">
                    @csrf
                    <div class="space-y-6">
                        <div>
                            <label class="block text-gray-700 mb-2" for="name">Votre nom</label>
                            <input type="text" id="name" name="name" required
                                   class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-amber-500 focus:ring focus:ring-amber-200 transition-all">
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2" for="email">Votre email</label>
                            <input type="email" id="email" name="email" required
                                   class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-amber-500 focus:ring focus:ring-amber-200 transition-all">
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2">Note</label>
                            <div class="flex gap-2">
                                @for ($i = 5; $i >= 1; $i--)
                                    <input type="radio" id="star{{ $i }}" name="rating" value="{{ $i }}" class="hidden" required>
                                    <label for="star{{ $i }}" class="text-3xl cursor-pointer text-amber-400 hover:text-amber-500">★</label>
                                @endfor
                            </div>
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2" for="message">Votre message</label>
                            <textarea id="message" name="message" rows="4" required
                                      class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-amber-500 focus:ring focus:ring-amber-200 transition-all"></textarea>
                        </div>
                        <button type="submit" 
                                class="w-full px-8 py-4 bg-amber-500 text-black font-medium rounded-full hover:bg-amber-400 transition-all duration-300 shadow-lg hover:shadow-amber-500/50 hover-scale">
                            Envoyer mon avis
                        </button>
                    </div>
                </form>

                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                    <h3 class="text-2xl font-playfair text-amber-600 mb-8">Ils nous ont fait confiance</h3>
                    <div class="space-y-6" id="avisList">
                        <div class="border-b border-gray-100 pb-6 hover:translate-x-2 transition-transform duration-300">
                            <div class="text-amber-400 text-xl mb-2">★★★★★</div>
                            <p class="text-gray-600 mb-2">Super expérience, équipe très professionnelle et à l'écoute !</p>
                            <span class="text-gray-400 italic">— Sarah L.</span>
                        </div>
                        <div class="border-b border-gray-100 pb-6 hover:translate-x-2 transition-transform duration-300">
                            <div class="text-amber-400 text-xl mb-2">★★★★☆</div>
                            <p class="text-gray-600 mb-2">Accueil chaleureux, je recommande vivement.</p>
                            <span class="text-gray-400 italic">— Amine B.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('styles')
<style>
.animate-fade-in {
    animation: fadeIn 1.2s ease-in-out;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.hover-scale {
    transition: transform 0.3s ease-in-out;
}

.hover-scale:hover {
    transform: scale(1.05);
}

#avisForm input[type="radio"] + label {
    cursor: pointer;
    transition: all 0.2s ease;
}

#avisForm input[type="radio"]:checked ~ label {
    color: #f59e0b;
}

#avisForm input[type="radio"] + label:hover,
#avisForm input[type="radio"] + label:hover ~ label {
    color: #f59e0b;
}

#avisForm input[type="radio"] + label {
    display: inline-block;
    transform: scale(1);
}

#avisForm input[type="radio"]:checked + label {
    transform: scale(1.2);
}
</style>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const avisForm = document.getElementById('avisForm');
    const avisList = document.getElementById('avisList');

    avisForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const formData = new FormData(avisForm);

        fetch(avisForm.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                'Accept': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Create new review element
                const newReview = document.createElement('div');
                newReview.className = 'border-b border-gray-100 pb-6 hover:translate-x-2 transition-transform duration-300';
                
                // Generate stars based on rating
                const rating = parseInt(formData.get('rating'));
                const stars = '★'.repeat(rating) + '☆'.repeat(5 - rating);
                
                newReview.innerHTML = `
                    <div class="text-amber-400 text-xl mb-2">${stars}</div>
                    <p class="text-gray-600 mb-2">${formData.get('message')}</p>
                    <span class="text-gray-400 italic">— ${formData.get('name')}</span>
                `;
                
                // Add to the top of the list
                avisList.insertBefore(newReview, avisList.firstChild);
                
                // Reset form
                avisForm.reset();
                
                // Show success message
                alert('Merci pour votre avis !');
            } else {
                alert('Une erreur est survenue. Veuillez réessayer.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Une erreur est survenue. Veuillez réessayer.');
        });
    });
});
document.addEventListener('DOMContentLoaded', function() {
            // Add click event listeners to the container instead of individual cards
            const productsContainer = document.getElementById('products-container');
            
            if (productsContainer) {
                productsContainer.addEventListener('click', function(e) {
                    // Find the closest button if a child of button was clicked
                    const button = e.target.closest('.details-button, .back-button');
                    
                    if (!button) return; // Exit if no relevant button was clicked
                    
                    e.preventDefault();
                    e.stopPropagation();
                    
                    // Find the parent product card
            const card = button.closest('.product-card');
                    
                    if (!card) {
                        console.error('Could not find parent product card');
                        return;
                    }
                    
                    // Determine if we're flipping to front or back
                    const isFlippingToBack = button.classList.contains('details-button');
                    
                    // Remove flipped class from all other cards
            document.querySelectorAll('.product-card.flipped').forEach(flippedCard => {
                if (flippedCard !== card) {
                    flippedCard.classList.remove('flipped');
                }
            });
            
                    // Add or remove the flipped class based on the button clicked
                    if (isFlippingToBack) {
                        card.classList.add('flipped');
                    } else {
                        card.classList.remove('flipped');
                    }
                });
            }
        });

        function loadMoreProducts(button) {
            const page = button.dataset.page;
            const container = document.getElementById('products-container');
            const currentUrl = new URL(window.location.href);
            
            // Show loading state
            button.disabled = true;
            button.innerHTML = `
                <svg class="animate-spin h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Loading...
            `;
            
            currentUrl.searchParams.set('page', page);

            fetch(currentUrl.toString(), {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.html) {
                    const temp = document.createElement('div');
                    temp.innerHTML = data.html;
                    
                    const newCards = temp.querySelectorAll('.product-card');
                    newCards.forEach(card => {
                        card.classList.add('opacity-0', 'translate-y-4');
                        container.appendChild(card);
                        
                        setTimeout(() => {
                            card.classList.remove('opacity-0', 'translate-y-4');
                            card.classList.add('transition-all', 'duration-500', 'ease-out');
                        }, 50);
                    });

                    // Update button state
                    button.disabled = false;
                    button.innerHTML = `
                        Load More Products
                        <svg xmlns="http://www.w3.org/2000/svg" class="load-more-icon" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    `;

                    if (data.hasMore) {
                        button.dataset.page = parseInt(page) + 1;
                    } else {
                        button.style.display = 'none';
                    }
                }
            })
            .catch(error => {
                console.error('Error loading more products:', error);
                button.disabled = false;
                button.innerHTML = 'Error loading products. Try again.';
            });
        }

        function addToCart(productId, productName, productPrice, productImage = null) {
            // Check if user is authenticated
            @if(!auth()->check())
                window.location.href = "{{ route('login') }}";
                return;
            @endif

            let userId = "{{ auth()->id() ?? 'guest' }}";
            let cartKey = `cart_${userId}`;
            let cart = JSON.parse(localStorage.getItem(cartKey)) || {};
            
            // Check if product already exists in cart
            if (cart[productId]) {
                cart[productId].quantity += 1;
            } else {
                cart[productId] = {
                    id: productId,
                    name: productName,
                    price: productPrice,
                    image: productImage,
                    quantity: 1
                };
            }
            
            localStorage.setItem(cartKey, JSON.stringify(cart));
            updateCartCount();
            showNotification(`${productName} added to cart!`);
        }

        function updateCartCount() {
            let userId = "{{ auth()->id() ?? 'guest' }}";
            let cartKey = `cart_${userId}`;
            let cart = JSON.parse(localStorage.getItem(cartKey)) || {};
            let totalItems = 0;
            
            // Calculate total quantity
            for (let productId in cart) {
                totalItems += cart[productId].quantity;
            }
            
            const cartCountElement = document.getElementById('cart-count');
            if (cartCountElement) {
                cartCountElement.textContent = totalItems;
            }
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
        function showMoreProducts() {
            const hiddenProducts = document.querySelectorAll('.more-products');
            hiddenProducts.forEach((product, index) => {
                setTimeout(() => {
                    product.classList.remove('hidden');
                    product.classList.add('animate-fadeIn');
                }, index * 100);
            });
            
            const button = event.target;
            button.classList.add('opacity-0', 'transition-opacity', 'duration-300');
            setTimeout(() => {
                button.style.display = 'none';
            }, 300);
        }
        
        function flipCard(button) {
            const card = button.closest('.flip-card');
            
            // Prevent multiple clicks during animation
            if (card.classList.contains('animating')) {
                return;
            }
            
            card.classList.add('animating');
            card.classList.toggle('flipped');
            
            // Remove animating class after transition completes
            setTimeout(() => {
                card.classList.remove('animating');
            }, 700); // Match the transition duration
            
            // Close other cards
            document.querySelectorAll('.flip-card').forEach(otherCard => {
                if (otherCard !== card && otherCard.classList.contains('flipped')) {
                    otherCard.classList.add('animating');
                    otherCard.classList.remove('flipped');
                    setTimeout(() => {
                        otherCard.classList.remove('animating');
                    }, 700);
                }
            });
        }

        const style = document.createElement('style');
        style.textContent = `
            @keyframes fadeIn {
                from { opacity: 0; transform: translateY(10px); }
                to { opacity: 1; transform: translateY(0); }
            }
            .animate-fadeIn {
                animation: fadeIn 0.5s ease-out forwards;
            }
        `;
        document.head.appendChild(style);

        document.addEventListener('DOMContentLoaded', function() {
            initializeCart();
            updateCartCount();
        });

        function loadMoreProducts(button) {
            const page = button.dataset.page;
            const container = document.getElementById('products-container');
            const currentUrl = new URL(window.location.href);
            
            currentUrl.searchParams.set('page', page);

            fetch(currentUrl.toString(), {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                // Parse the HTML string into DOM elements
                const tempContainer = document.createElement('div');
                tempContainer.innerHTML = data.html;
                
                // Add each new product card to the container
                const newCards = tempContainer.children;
                Array.from(newCards).forEach(card => {
                    container.appendChild(card);
                });
                
                if (data.hasMore) {
                    button.dataset.page = parseInt(page) + 1;
                } else {
                    button.style.display = 'none';
                }
            });
        }

        function initializeCart() {
            let userId = "{{ auth()->id() ?? 'guest' }}";
            let cartKey = `cart_${userId}`;
            
            if (!localStorage.getItem(cartKey)) {
                localStorage.setItem(cartKey, JSON.stringify({}));
            }
        }

        function addToCart(productId, productName, productPrice, productImage = null) {
            @if(!auth()->check())
                window.location.href = "{{ route('login') }}";
                return;
            @endif

            let userId = "{{ auth()->id() ?? 'guest' }}";
            let cartKey = `cart_${userId}`;
            let cart = JSON.parse(localStorage.getItem(cartKey)) || {};
            
            if (cart[productId]) {
                cart[productId].quantity += 1;
            } else {
                cart[productId] = {
                    id: productId,
                    name: productName,
                    price: productPrice,
                    image: productImage,
                    quantity: 1
                };
            }
            
            localStorage.setItem(cartKey, JSON.stringify(cart));
            updateCartCount();
            showNotification(`${productName} added to cart!`);
        }

        function updateCartCount() {
            let userId = "{{ auth()->id() ?? 'guest' }}";
            let cartKey = `cart_${userId}`;
            let cart = JSON.parse(localStorage.getItem(cartKey)) || {};
            let totalItems = 0;
            
            for (let productId in cart) {
                totalItems += cart[productId].quantity;
            }
            
            const cartCountElement = document.getElementById('cart-count');
            if (cartCountElement) {
                cartCountElement.textContent = totalItems;
            }
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
</script>
@endsection