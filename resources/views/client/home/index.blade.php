@extends('layouts.main')

@section('title', 'Accueil')

@section('content')
@auth 
<div class="relative min-h-screen">
    <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover z-0 brightness-75">
        <source src="{{ asset('client/videos/acceuil/Vd.mp4') }}" type="video/mp4">
        Votre navigateur ne supporte pas la balise vidéo.
    </video>

    <section class="relative min-h-screen z-10 container mx-auto px-6 flex flex-col justify-center items-center text-center text-white animate-fade-in">
        <h2 class="text-4xl md:text-6xl font-light mb-6 max-w-4xl leading-tight">Enchantés de vous revoir, <span class="font-playfair italic text-amber-300">{{ Auth::user()->first_name }}</span><br>Votre moment de beauté vous attend</h2>
        <p class="text-lg text-white mb-12 max-w-2xl">Découvrez l'excellence des soins personnalisés dans notre salon de beauté premium</p>
        <div class="flex flex-wrap justify-center gap-6">
            <a href="#" class="px-8 py-4 bg-amber-500 text-black font-medium rounded-full hover:bg-amber-400 transition-all duration-300 shadow-lg hover:shadow-amber-500/50 hover-scale backdrop-blur-sm">DÉCOUVRIR NOS PRODUITS</a>
            <a href="#" class="px-8 py-4 border-2 border-white text-white font-medium rounded-full hover:bg-white/10 hover:border-amber-300 hover:text-amber-300 transition-all duration-300 hover-scale backdrop-blur-sm">PRENDRE RENDEZ-VOUS</a>
        </div>
    </section>
</div>
@else
<div class="relative min-h-screen">
    <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover z-0 brightness-75">
        <source src="{{ asset('client/videos/acceuil/Vd.mp4') }}" type="video/mp4">
        Votre navigateur ne supporte pas la balise vidéo.
    </video>

    <section class="relative min-h-screen z-10 container mx-auto px-6 flex flex-col justify-center items-center text-center text-white animate-fade-in">
        <h2 class="text-4xl md:text-6xl font-light mb-6 max-w-4xl leading-tight">Révélez votre beauté naturelle avec <span class="font-playfair italic text-amber-300">EleganceVibe</span></h2>
        <p class="text-lg text-white mb-12 max-w-2xl">Découvrez l'excellence des soins personnalisés dans notre salon de beauté premium</p>
        <div class="flex flex-wrap justify-center gap-6">
            <a href="#" class="px-8 py-4 bg-gradient-to-r from-amber-500 to-amber-600 text-black font-medium rounded-full hover:from-amber-400 hover:to-amber-500 transition-all duration-300 shadow-lg hover:shadow-amber-500/50 hover-scale backdrop-blur-sm">DÉCOUVRIR NOS PRODUITS</a>
            <a href="#" class="px-8 py-4 border-2 border-white text-white font-medium rounded-full hover:bg-white/10 hover:border-amber-300 hover:text-amber-300 transition-all duration-300 hover-scale backdrop-blur-sm">PRENDRE RENDEZ-VOUS</a>     
        </div>
    </section>
</div>
@endauth

<section class="bg-white py-24 relative z-10">
    <div class="container mx-auto px-6">
        <div class="flex flex-wrap gap-16 items-center justify-between max-w-7xl mx-auto">
            <div class="flex-1 min-w-[300px] animate-fade-in">
                <h3 class="text-3xl md:text-4xl font-playfair text-amber-900 mb-8">L'Excellence au Service de Votre Beauté</h3>
                <p class="text-gray-600 leading-relaxed mb-8 text-lg">
                    Bienvenue chez ÉléganceVibe, votre sanctuaire de beauté et de bien-être. Notre salon allie luxe et expertise pour vous offrir une expérience unique de transformation et de relaxation.
                </p>
                <p class="text-gray-600 leading-relaxed text-lg">
                    Nos experts passionnés utilisent des techniques innovantes et des produits haut de gamme pour révéler votre beauté naturelle. Chaque visite est une invitation à l'excellence, où votre satisfaction est notre priorité absolue.
                </p>
            </div>
            <div class="flex-1 min-w-[300px]">
                <div class="relative">
                    <img src="client/images/acceuil/imgSalon.jpg" alt="Salon EleganceVibe" class="w-full rounded-2xl shadow-2xl hover-scale object-cover aspect-[4/3]">
                    <div class="absolute -bottom-6 -right-6 bg-gradient-to-r from-amber-500 to-amber-600 p-6 rounded-lg shadow-xl">
                        <p class="text-white font-playfair text-lg">Plus de 1000 clients satisfaits</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Photos -->
<section class="py-24 bg-gray-50 relative z-10">
    <div class="container mx-auto px-6">
        <h3 class="text-4xl md:text-5xl font-playfair text-amber-900 mb-12 text-center">Nos Réalisations</h3>
        
        <!-- Images Femmes -->
        <div class="mb-12">
            <h4 class="text-2xl font-playfair text-amber-300 mb-8 text-center">Féminins</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="relative group overflow-hidden rounded-2xl shadow-lg">
                    <img src="{{ asset('images/women8.jpg') }}" alt="Soin Femme 1" class="w-full h-[300px] object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <h4 class="text-white text-xl font-playfair">Soin Féminin</h4>
                    </div>
                </div>
                <div class="relative group overflow-hidden rounded-2xl shadow-lg">
                    <img src="{{ asset('images/women6.jpg') }}" alt="Soin Femme 2" class="w-full h-[300px] object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <h4 class="text-white text-xl font-playfair">Soin Féminin</h4>
                    </div>
                </div>
                <div class="relative group overflow-hidden rounded-2xl shadow-lg">
                    <img src="{{ asset('images/women3.jpg') }}" alt="Soin Femme 3" class="w-full h-[300px] object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <h4 class="text-white text-xl font-playfair">Soin Féminin</h4>
                    </div>
                </div>
                <div class="relative group overflow-hidden rounded-2xl shadow-lg">
                    <img src="{{ asset('images/women4.jpg') }}" alt="Soin Femme 4" class="w-full h-[300px] object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <h4 class="text-white text-xl font-playfair">Soin Féminin</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Images Hommes -->
        <div class="mb-12">
            <h4 class="text-2xl font-playfair text-amber-300 mb-8 text-center">Masculins</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="relative group overflow-hidden rounded-2xl shadow-lg">
                    <img src="{{ asset('images/men1.jpg') }}" alt="Soin Homme 1" class="w-full h-[300px] object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <h4 class="text-white text-xl font-playfair">Soin Masculin</h4>
                    </div>
                </div>
                <div class="relative group overflow-hidden rounded-2xl shadow-lg">
                    <img src="{{ asset('images/men2.jpg') }}" alt="Soin Homme 2" class="w-full h-[300px] object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <h4 class="text-white text-xl font-playfair">Soin Masculin</h4>
                    </div>
                </div>
                <div class="relative group overflow-hidden rounded-2xl shadow-lg">
                    <img src="{{ asset('images/men7.jpg') }}" alt="Soin Homme 3" class="w-full h-[300px] object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <h4 class="text-white text-xl font-playfair">Soin Masculin</h4>
                    </div>
                </div>
                <div class="relative group overflow-hidden rounded-2xl shadow-lg">
                    <img src="{{ asset('images/men4.jpg') }}" alt="Soin Homme 4" class="w-full h-[300px] object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <h4 class="text-white text-xl font-playfair">Soin Masculin</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="{{ auth()->check() ? route('galleryClient') : route('gallery.public') }}" 
               class="inline-block px-8 py-4 bg-gradient-to-r from-amber-500 to-amber-600 text-black font-medium rounded-full hover:from-amber-400 hover:to-amber-500 transition-all duration-300 shadow-lg hover:shadow-amber-500/50 hover-scale">
               DÉCOUVRIR NOS RÉALISATIONS
            </a>
        </div>
    </div>
</section>



<section class="py-24 bg-gradient-to-b from-white to-amber-50 relative z-10 -mt-20">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h3 class="text-4xl md:text-5xl font-playfair text-amber-900 mb-6">Notre Vision de la Beauté</h3>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    Chez ÉléganceVibe, nous croyons que la beauté est une expérience holistique qui combine expertise, innovation et bien-être.
                </p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
                <div class="bg-gradient-to-br from-amber-50 to-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-gradient-to-r from-amber-500 to-amber-600 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-gem text-white text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-playfair text-amber-900 mb-4 text-center">Excellence</h4>
                    <p class="text-gray-600 text-center">
                        Nous nous engageons à offrir des services d'exception, en utilisant uniquement des produits de luxe et des techniques innovantes.
                    </p>
                </div>
                <div class="bg-gradient-to-br from-amber-50 to-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-gradient-to-r from-amber-500 to-amber-600 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-hand-sparkles text-white text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-playfair text-amber-900 mb-4 text-center">Personnalisation</h4>
                    <p class="text-gray-600 text-center">
                        Chaque client est unique. Nous créons des expériences sur mesure pour répondre à vos besoins spécifiques.
                    </p>
                </div>
                <div class="bg-gradient-to-br from-amber-50 to-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-gradient-to-r from-amber-500 to-amber-600 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-crown text-white text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-playfair text-amber-900 mb-4 text-center">Prestige</h4>
                    <p class="text-gray-600 text-center">
                        Notre environnement luxueux et notre service attentionné vous garantissent une expérience royale.
                    </p>
                </div>
            </div>
            <div class="flex flex-col md:flex-row items-center justify-between gap-8 bg-white p-8 rounded-2xl shadow-lg">
                <div class="flex-1">
                    <h4 class="text-3xl md:text-4xl font-playfair text-amber-900 mb-4">Prêt à vivre l'expérience ÉléganceVibe ?</h4>
                    <p class="text-gray-600">
                        Découvrez nos services exclusifs et laissez-nous prendre soin de votre beauté.
                    </p>
                </div>
                <div class="flex gap-4">
                    <a href="{{ route('serviceClient') }}" class="inline-block px-8 py-4 bg-gradient-to-r from-amber-500 to-amber-600 text-black font-medium rounded-full hover:from-amber-400 hover:to-amber-500 transition-all duration-300 shadow-lg hover:shadow-amber-500/50 hover-scale">SERVICES FEMMES</a>
                    <a href="{{ route('contactClient') }}" class="inline-block px-8 py-4 border-2 border-amber-500 text-amber-300 font-medium rounded-full hover:bg-amber-500 hover:text-black transition-all duration-300 hover-scale">SERVICES HOMMES</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section Astuces Beauté -->
<section class="py-24 bg-white relative z-10">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h3 class="text-4xl md:text-5xl font-playfair text-amber-900 mb-6">Découvrez Nos Astuces Beauté</h3>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Explorez notre univers de conseils, tutoriels et tendances pour sublimer votre beauté au quotidien
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Tutos -->
            <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                <div class="aspect-w-16 aspect-h-9">
                    <img src="{{ asset('images/1.jpg') }}" alt="Tutoriels Beauté" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                    <h4 class="text-white text-2xl font-playfair mb-2">Tutoriels</h4>
                    <p class="text-white/90 mb-4">Apprenez les techniques de maquillage et de soin avec nos experts</p>
                    <a href="{{ route('tutos.description') }}" class="text-amber-300 hover:text-amber-200 transition-colors duration-300">Découvrir →</a>
                </div>
            </div>

            <!-- Unboxing -->
            <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                <div class="aspect-w-16 aspect-h-9">
                    <img src="{{ asset('images/2.jpg') }}" alt="Unboxing Produits" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                    <h4 class="text-white text-2xl font-playfair mb-2">Unboxing</h4>
                    <p class="text-white/90 mb-4">Découvrez nos derniers produits et nouveautés beauté</p>
                    <a href="{{ route('unboxing.description') }}" class="text-amber-300 hover:text-amber-200 transition-colors duration-300">Découvrir →</a>
                </div>
            </div>

            <!-- Inspiration -->
            <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                <div class="aspect-w-16 aspect-h-9">
                    <img src="{{ asset('images/3.jpg') }}" alt="Inspiration Beauté" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                    <h4 class="text-white text-2xl font-playfair mb-2">Inspiration</h4>
                    <p class="text-white/90 mb-4">Trouvez l'inspiration pour vos looks et routines beauté</p>
                    <a href="{{ route('inspiration.description') }}" class="text-amber-300 hover:text-amber-200 transition-colors duration-300">Découvrir →</a>
                </div>
            </div>

            <!-- Tendances -->
            <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                <div class="aspect-w-16 aspect-h-9">
                    <img src="{{ asset('images/4.jpg') }}" alt="Tendances Beauté" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                    <h4 class="text-white text-2xl font-playfair mb-2">Tendances</h4>
                    <p class="text-white/90 mb-4">Restez à la pointe des dernières tendances beauté</p>
                    <a href="{{ route('tendances.description') }}" class="text-amber-300 hover:text-amber-200 transition-colors duration-300">Découvrir →</a>
                </div>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('astuces.all') }}" class="inline-block px-8 py-4 bg-gradient-to-r from-amber-500 to-amber-600 text-black font-medium rounded-full hover:from-amber-400 hover:to-amber-500 transition-all duration-300 shadow-lg hover:shadow-amber-500/50 hover-scale">
                EXPLORER TOUTES NOS ASTUCES
            </a>
        </div>
    </div>
</section>

@endsection

@section('styles')
<style>

.animate-fade-in {
    animation: fadeIn 1.2s ease-in-out;
}

.hover-scale {
    transition: transform 0.3s ease-in-out;
}

.hover-scale:hover {
    transform: scale(1.05);
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

video {
    filter: saturate(1.2) contrast(1.1);
}
</style>

<script>
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
