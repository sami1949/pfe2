<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegance Vibe - Espace Femme</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;700&family=Lora:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        :root {
            --primary: #f59e0b;  /* Ambre pour les boutons */
            --secondary: #92400e; /* Ambre foncé */
            --dark: #1f2937;     /* Gris foncé */
            --light: #fffbeb;    /* Ambre très clair pour arrière-plan */
            --accent: #d97706;   /* Ambre accent */
            --text: #374151;     /* Gris foncé pour le texte */
            --transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Lora', serif;
            color: var(--text);
            line-height: 1.6;
            background-color: white;
        }

        /* Hero Section */
        .hero-section {
            display: flex;
            align-items: center;
            min-height: 90vh;
            padding: 20px 3rem 0;
            max-width: 1400px;
            margin: 0 auto;
            position: relative;
            gap: 4rem;
        }

        .hero-content {
            flex: 1;
            padding-left: 3rem;
            position: relative;
            z-index: 2;
            margin-top: 1rem;
        }

        .hero-image {
            flex: 1.2;
            height: 600px;
            border-radius: 16px;
            background: url('/images/background3.jpeg') center/cover no-repeat;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
            position: relative;
            overflow: hidden;
            order: -1; /* Place l'image à gauche */
        }

        .hero-image::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(255, 251, 235, 0.1) 0%, rgba(245, 158, 11, 0.1) 100%);
        }

        .hero-content h1 {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            font-weight: 700;
            color: var(--secondary);
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .hero-content p {
            font-size: 1.1rem;
            margin-bottom: 2.5rem;
            max-width: 600px;
            color: var(--text);
        }

        .discover-btn {
            display: inline-block;
            background: var(--primary);
            color: white;
            padding: 0.9rem 2.5rem;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 500;
            font-size: 1.1rem;
            transition: var(--transition);
            box-shadow: 0 4px 15px rgba(245, 158, 11, 0.3);
            position: relative;
            overflow: hidden;
        }

        .discover-btn:hover {
            background: var(--accent);
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(245, 158, 11, 0.4);
        }

        .discover-btn::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, transparent 0%, rgba(255, 255, 255, 0.3) 100%);
            transform: translateX(-100%);
            transition: var(--transition);
        }

        .discover-btn:hover::after {
            transform: translateX(0);
        }

        /* Services Section */
        .services-section {
            padding: 8rem 3rem;
            display: none;
            max-width: 1400px;
            margin: 0 auto;
            margin-bottom: 8rem;
            background-color: white;
        }

        .section-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 500;
            color: var(--secondary);
            margin-bottom: 1.5rem;
        }

        .section-subtitle {
            font-size: 1.1rem;
            color: var(--text);
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.8;
        }

        .services-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2.5rem;
            margin-top: 2rem;
        }

        .service-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: var(--transition);
            border: 1px solid rgba(245, 158, 11, 0.2);
            display: flex;
            flex-direction: column;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(245, 158, 11, 0.12);
        }

        .service-img {
            height: 280px;
            overflow: hidden;
        }

        .service-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 1.2s ease;
        }

        .service-card:hover .service-img img {
            transform: scale(1.1);
        }

        .service-content {
            padding: 1.5rem;
            text-align: center;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .service-content h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: var(--secondary);
            margin-bottom: 1rem;
            font-weight: 500;
        }

        .service-content p {
            color: var(--text);
            margin-bottom: 1.5rem;
            font-size: 1rem;
            line-height: 1.6;
            flex: 1;
        }

        .service-details {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1.5rem;
            padding: 0.5rem 0;
            border-top: 1px solid rgba(245, 158, 11, 0.1);
            border-bottom: 1px solid rgba(245, 158, 11, 0.1);
        }

        .service-details p {
            margin: 0;
            font-weight: 500;
        }

        .service-details .price {
            color: var(--primary);
        }

        .service-details .duration {
            color: var(--secondary);
        }

        .service-btn {
            display: inline-block;
            background: var(--secondary);
            color: white;
            padding: 0.7rem 1.5rem;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            transition: var(--transition);
            align-self: center;
            margin-top: auto;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(146, 64, 14, 0.2);
        }

        .service-btn:hover {
            background: var(--accent);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(146, 64, 14, 0.3);
        }

        /* Search Section */
        .search-section {
            padding: 2rem 0;
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
        }

        .search-container {
            position: relative;
            margin-top: 1rem;
        }

        .search-input {
            width: 100%;
            padding: 1rem 3rem;
            border: 2px solid var(--secondary);
            border-radius: 30px;
            font-size: 1rem;
            background-color: white;
            transition: var(--transition);
            color: var(--dark);
        }

        .search-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 15px rgba(245, 158, 11, 0.2);
        }

        .search-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--secondary);
            font-size: 1.2rem;
        }

        .search-input::placeholder {
            color: #999;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .hero-content h1 {
                font-size: 2.8rem;
            }
        }

        @media (max-width: 992px) {
            .hero-section {
                flex-direction: column;
                padding-top: 100px;
                text-align: center;
                gap: 2rem;
            }

            .hero-content {
                padding-left: 0;
                margin-bottom: 3rem;
            }

            .hero-image {
                width: 100%;
                height: 450px;
                order: 0; /* Réinitialise l'ordre sur mobile */
            }
        }

        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.3rem;
            }

            .section-title {
                font-size: 2.2rem;
            }
            
            .service-img {
                height: 240px;
            }
        }

        @media (max-width: 576px) {
            .hero-section {
                padding: 100px 1.5rem 0;
            }

            .hero-content h1 {
                font-size: 2rem;
            }

            .services-section {
                padding: 5rem 1.5rem;
            }

            .section-title {
                font-size: 2rem;
            }
            
            .service-img {
                height: 220px;
            }
        }

        /* Espace avant le footer */
        .footer-spacer {
            height: 12rem;
            width: 100%;
        }
    </style>
</head>
<body>
    @include('layouts.navigation')

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1>Bienvenue dans votre espace femme</h1>
            <p style="margin-bottom: 0;">Ici commence votre voyage dans un monde de luxe et d'élégance, conçu spécialement pour vous en tant que femme. Notre équipe soigneusement sélectionnée sera à votre disposition, travaillant avec les technologies les plus avancées et utilisant des produits de la plus haute qualité pour répondre à vos besoins de la meilleure façon possible. Découvrez notre gamme complète de services :</p>
            <ul style="list-style: none; margin: 0 0 2rem 0;">
                <li><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Soins du visage personnalisés</li>
                <li><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Massages relaxants et thérapeutiques</li>
                <li><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Soins du corps et gommages</li>
                <li><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Épilation professionnelle</li>
                <li><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Manucure et pédicure</li>
                <li><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Coiffure et soins capillaires</li>
                <li><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Hammam et rituels de beauté</li>
            </ul>
            <a href="#" class="discover-btn" id="discoverBtn">Découvrir nos services</a>
        </div>
        <div class="hero-image"></div>
    </section>

    <!-- Services Section -->
    <section class="services-section" id="servicesSection">
        <div class="section-header">
            <h2 class="section-title">Nos Prestations Femme</h2>
            <p class="section-subtitle">Des soins sur-mesure réalisés par nos experts pour révéler votre beauté naturelle</p>
        </div>

        <!-- Ajout de la barre de recherche -->
        <div class="search-section">
            <div class="search-container">
                <i class="fas fa-search search-icon"></i>
                <input type="text" id="searchServices" class="search-input" placeholder="Rechercher un service...">
            </div>
        </div>

        <div class="services-container">
            @foreach($services as $service)
            <div class="service-card">
                <div class="service-img">
                    <img src="{{ asset($service->image_path) }}" alt="{{ $service->title }}" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="service-content">
                    <h3>
                        @if($service->icon)
                            <i class="{{ $service->icon }}"></i>
                        @endif
                        {{ $service->title }}
                    </h3>
                    <p>{{ $service->description }}</p>
                    @if($service->route_name)
                        <a href="{{ route($service->route_name) }}" class="service-btn">Détails</a>
                    @else
                        <button class="service-btn">Détails</button>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <div class="footer-spacer"></div>
    @include('layouts.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const discoverBtn = document.getElementById('discoverBtn');
            const servicesSection = document.getElementById('servicesSection');
            const searchInput = document.getElementById('searchServices');
            
            // Fonction de recherche
            function filterServices() {
                const searchTerm = searchInput.value.toLowerCase().trim();
                const serviceCards = document.querySelectorAll('.service-card');

                serviceCards.forEach(card => {
                    const title = card.querySelector('h3').textContent.toLowerCase();
                    const description = card.querySelector('p').textContent.toLowerCase();
                    
                    if (title.includes(searchTerm) || description.includes(searchTerm)) {
                        card.style.display = '';
                    } else {
                        card.style.display = 'none';
                    }
                });
            }
            
            discoverBtn.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Afficher la section services
                servicesSection.style.display = 'block';
                
                // Scroll vers la section
                servicesSection.scrollIntoView({ behavior: 'smooth' });
                
                // Gestion du menu déroulant des services
                const subServices = document.querySelector('.sub-services');
                if (subServices) {
                    subServices.style.display = 'none';
                }
            });

            // Gestion du menu déroulant des services
            if (document.querySelector('[x-data]')?.__x) {
                document.querySelector('[x-data]').__x.$data.showSubServices = false;
            }

            // Événement de recherche
            if (searchInput) {
                searchInput.addEventListener('input', filterServices);
                // Recherche initiale au cas où il y a déjà une valeur
                filterServices();
            }

            // Ajout des événements pour les boutons Détails (seulement pour les boutons sans route)
            const detailButtons = document.querySelectorAll('button.service-btn');
            detailButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const serviceTitle = this.closest('.service-content').querySelector('h3').textContent.trim();
                    alert(`Vous avez cliqué sur Détails pour le service : ${serviceTitle}\n\nCette fonctionnalité peut être développée pour afficher plus d'informations ou rediriger vers une page dédiée.`);
                });
            });
        });
    </script>
</body>
</html>
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