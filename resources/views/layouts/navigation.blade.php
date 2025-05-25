<header class="fixed top-0 left-0 right-0 z-20 w-full bg-gradient-to-r from-gray-900 via-amber-900 to-gray-900 shadow-lg">
  <div class="max-w-7xl mx-auto px-4">
    <div class="flex items-center justify-between py-4">
      <!-- Logo -->
      <div class="shrink-0" style="display:flex; flex-direction:column; align-items:center;">
        <img src="/client/images/acceuil/logo.jpg" alt="Logo EleganceVibe" class="w-12 h-12 rounded-full shadow-lg transform hover:-translate-x-1 transition-transform duration-300 ease-in-out ring-2 ring-amber-500/30">
        <div class="text-white font-playfair italic text-2xl">EleganceVibe</div>
      </div>

      <!-- Navigation Links -->
      <nav class="hidden nav-900-show items-center justify-center flex-1">
        <ul class="flex items-center justify-center md:gap-2 lg:gap-6">
          <li class="menu-item">
            <a href="{{ auth()->check() ? route('clientt') : route('welcome') }}" class="nav-link flex flex-col items-center {{ request()->routeIs('welcome') || request()->routeIs('clientt') ? 'active' : '' }}">
              <span class="text-white font-medium text-xs md:text-xs lg:text-sm tracking-wide mb-1 hover:text-amber-300 transition-colors duration-300 flex items-center gap-2">
                <i class="fas fa-home text-amber-400"></i>
                ACCUEIL
              </span>
              <span class="nav-indicator"></span>
            </a>
          </li>

          <!-- Galerie Link -->
          <li class="menu-item">
            <a href="{{ auth()->check() ? route('galleryClient') : route('gallery.public') }}" class="nav-link flex flex-col items-center {{ request()->routeIs('galleryClient') || request()->routeIs('gallery.public') ? 'active' : '' }}">
              <span class="text-white font-medium text-xs md:text-xs lg:text-sm tracking-wide mb-1 hover:text-amber-300 transition-colors duration-300 flex items-center gap-2">
                <i class="fas fa-images text-amber-400"></i>
                GALERIE
              </span>
              <span class="nav-indicator"></span>
            </a>
          </li>

          <!-- Services Dropdown -->
     <!-- Services Dropdown -->
<li class="menu-item relative group">
    <a href="#" class="nav-link flex flex-col items-center">
        <span class="text-white font-medium text-xs md:text-sm xl:text-base tracking-wide mb-1 flex items-center gap-2 hover:text-amber-300 transition-colors duration-300">
            <i class="fas fa-spa text-amber-400"></i>
            SERVICES <i class="fas fa-chevron-down text-xs transition-transform duration-300 group-hover:rotate-180"></i>
        </span>
        <span class="nav-indicator"></span>
    </a>
    <div class="submenu absolute top-full left-1/2 transform -translate-x-1/2 w-64 bg-gray-900/95 backdrop-blur-md rounded-lg shadow-2xl p-4 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 border border-amber-500/20">
        <div class="grid gap-2">
            <a href="{{ auth()->check() ? route('servicefemme.auth') : route('servicefemme') }}" class="flex items-center gap-3 p-2 hover:bg-amber-900/50 rounded-md transition-all duration-300 hover:translate-x-1">
                <i class="fas fa-female text-amber-500"></i>
                <div>
                    <div class="font-medium text-white">Femme</div>
                    <div class="text-xs text-amber-300">Soins féminins</div>
                </div>
            </a>
            <a href="{{ auth()->check() ? route('servicehomme.auth') : route('servicehomme') }}" class="flex items-center gap-3 p-2 hover:bg-amber-900/50 rounded-md transition-all duration-300 hover:translate-x-1">
                <i class="fas fa-male text-amber-500"></i>
                <div>
                    <div class="font-medium text-white">Homme</div>
                    <div class="text-xs text-amber-300">Soins masculins</div>
                </div>
            </a>
        </div>
    </div>
</li>

<!-- Produits Dropdown -->
<li class="menu-item relative group">
    <a href="{{ auth()->check() ? route('product.private') : route('product.public') }}" 
       class="nav-link flex flex-col items-center {{ request()->routeIs('productClient') ? 'active' : '' }}">
        <span class="text-white font-medium text-xs md:text-sm xl:text-base tracking-wide mb-1 flex items-center gap-2 hover:text-amber-300 transition-colors duration-300">
            <i class="fas fa-shopping-bag text-amber-400"></i>
            PRODUITS <i class="fas fa-chevron-down text-xs transition-transform duration-300 group-hover:rotate-180"></i>
        </span>
        <span class="nav-indicator"></span>
    </a>
    <div class="submenu absolute top-full left-1/2 transform -translate-x-1/2 w-64 bg-gray-900/95 backdrop-blur-md rounded-lg shadow-2xl p-4 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 border border-amber-500/20">
        <div class="grid gap-2">
            <a href="{{ auth()->check() ? route('product.private.gender', 'femme') : route('product.public.gender', 'femme') }}" 
               class="flex items-center gap-3 p-2 hover:bg-amber-900/50 rounded-md transition-all duration-300 hover:translate-x-1">
                <i class="fas fa-female text-amber-500"></i>
                <div>
                    <div class="font-medium text-white">Femme</div>
                    <div class="text-xs text-amber-300">Produits féminins</div>
                </div>
            </a>
            <a href="{{ auth()->check() ? route('product.private.gender', 'homme') : route('product.public.gender', 'homme') }}" 
               class="flex items-center gap-3 p-2 hover:bg-amber-900/50 rounded-md transition-all duration-300 hover:translate-x-1">
                <i class="fas fa-male text-amber-500"></i>
                <div>
                    <div class="font-medium text-white">Homme</div>
                    <div class="text-xs text-amber-300">Produits masculins</div>
                </div>
            </a>
        </div>
    </div>
</li>

          <!-- Contact -->
          <li class="menu-item">
            <a href="{{ auth()->check() ? route('contactClient') : route('contact') }}" class="nav-link flex flex-col items-center {{ request()->routeIs('contactClient') || request()->routeIs('contact') ? 'active' : '' }}">
              <span class="text-white font-medium text-xs md:text-xs lg:text-sm tracking-wide mb-1 hover:text-amber-300 transition-colors duration-300 flex items-center gap-2">
                <i class="fas fa-envelope text-amber-400"></i>
                CONTACT
              </span>
              <span class="nav-indicator"></span>
            </a>
          </li>
        </ul>


        <div id="cart-icon" class="relative">
                        @auth
                        <a href="#" onclick="handleCartClick(event)" class="text-[#f8e8e8] hover:text-teal-600 transition-colors duration-300 nav-scrolled:text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M3 1a1 1 0 000 2h1l.8 3h10.4l.8-3h1a1 1 0 100-2H3zm2.6 6l1.4 5.6A2 2 0 009 14h4a2 2 0 001.9-1.4L16.4 7H5.6zM6 17a1 1 0 102 0 1 1 0 00-2 0zm6 1a1 1 0 100-2 1 1 0 000 2z"/>
                            </svg>
                            <span id="cart-count" class="absolute -top-1 -right-1 bg-red-500 text-white text-xs font-bold rounded-full px-1.5">
                            0
                            </span>
                        </a>
                        @else
                        <span></span>
                        @endauth
                    </div>
      </nav>

      <!-- Auth Buttons -->
      <div class="hidden nav-900-show items-center md:gap-2 lg:gap-4">
        @auth
        <div class="relative md:ml-2 lg:ml-4 group">
            <button class="flex items-center space-x-2 focus:outline-none transition-all duration-200">
                <div class="flex items-center space-x-2 transition-colors duration-200">
                <!-- User avatar and name -->
                <div class="relative h-10 w-10 rounded-full bg-gradient-to-tr from-amber-500 to-amber-600 flex items-center justify-center overflow-hidden shadow-lg ring-2 ring-amber-500/30">
                    <span class="text-white font-medium text-sm uppercase">
                        {{ substr(Auth::user()->first_name, 0, 1) }}
                    </span>
                    <span class="absolute bottom-1 right-1 h-2.5 w-2.5 rounded-full bg-green-400 border-2 border-white"></span>
                </div>
                
                <p class="font-bold text-white hover:text-amber-300 transition-colors duration-300">
                    {{ Auth::user()->first_name }}
                </p>        
                
                <!-- Chevron Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" 
                    class="h-4 w-4 transition-all duration-200 text-white transform group-hover:rotate-180"
                    viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
                </div>
            </button>

            <div class="absolute right-0 mt-2 w-56 origin-top-right rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none z-50 overflow-hidden opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 translate-y-2">
                <div class="px-4 py-3 bg-gray-50 border-b border-gray-100">
                    <p class="text-sm font-medium text-gray-900 truncate">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</p>
                    <p class="text-xs text-gray-500 truncate">{{ Auth::user()->email }}</p>
                </div>
                
                <div class="py-1">
                    <a href="{{ route('profile.edit') }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-150">
                        <svg class="h-5 w-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Profile
                    </a>
                    
                    <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-150">
                        <svg class="h-5 w-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                        Mes rendez-vous
                    </a>

                    <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-150">
                        <svg class="h-5 w-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                        Mes commandes
                    </a>
                </div>
                
                <div class="py-1 border-t border-gray-100">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="flex w-full items-center px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition-colors duration-150">
                            <svg class="h-5 w-5 mr-3 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                            Déconnexion
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @else
            <div class="flex items-center md:space-x-2 lg:space-x-4 whitespace-nowrap">
                <a href="{{ route('login') }}" class="inline-flex items-center px-3 md:px-4 lg:px-6 py-2 text-white text-xs md:text-xs lg:text-sm font-medium tracking-wide border border-white/30 rounded-full hover:bg-white/10 transition-all duration-300">Se connecter</a>
                <a href="{{ route('register') }}" class="inline-flex items-center px-3 md:px-4 lg:px-6 py-2 bg-amber-500 text-black text-xs md:text-xs lg:text-sm font-medium tracking-wide rounded-full hover:bg-amber-400 transition-all duration-300 shadow-lg hover:shadow-amber-500/50">S'inscrire</a>
            </div>
        @endauth
      </div>

      <!-- Mobile Menu Button -->
      <button id="burger" class="nav-900-hide text-white p-2 focus:outline-none hover:text-amber-300 transition-colors duration-300">
        <i class="fas fa-bars text-xl sm:text-2xl"></i>
      </button>
    </div>
  </div>

  <!-- Mobile Navigation -->
  <div id="mobile-menu" class="mobile-menu nav-900-hide fixed top-0 left-0 w-[80%] h-full bg-gradient-to-br from-gray-900 via-amber-900 to-gray-900 z-50 shadow-2xl overflow-y-auto transform transition-transform duration-300 ease-in-out">
    <div class="p-6">
      <div class="flex items-center justify-between mb-8">
        <div class="flex items-center gap-3">
          <img src="/client/images/acceuil/logo.jpg" alt="Logo EleganceVibe" class="w-12 h-12 rounded-full ring-2 ring-amber-500/30">
          <span class="text-white font-playfair italic text-xl">EleganceVibe</span>
        </div>
        <button id="close-menu" class="text-white/80 hover:text-amber-300 transition-colors duration-300">
          <i class="fas fa-times text-2xl"></i>
        </button>
      </div>

      <nav class="mt-8">
        <ul class="space-y-2">
          <!-- Accueil -->
          <li class="relative group">
    <a href="{{ auth()->check() ? route('clientt') : route('welcome') }}" 
       class="flex items-center gap-3 py-3 px-4 rounded-lg transition-all duration-300
              {{ request()->routeIs('welcome') || request()->routeIs('clientt') 
                 ? 'bg-amber-600/20 text-amber-300 font-semibold' 
                 : 'text-white/90 font-medium hover:bg-white/10' }}">
       
       <!-- Icône dynamique avec animation -->
       <div class="relative">
           <i class="fas fa-home text-amber-400 group-hover:scale-110 transition-transform duration-300"></i>
           <!-- Point d'indication pour la page active -->
           @if(request()->routeIs('welcome') || request()->routeIs('clientt'))
               <span class="absolute -top-1 -right-1 w-2 h-2 bg-amber-400 rounded-full"></span>
           @endif
       </div>
       
       <span class="group-hover:translate-x-1 transition-transform duration-300">Accueil</span>
       
       <!-- Effet de soulignement au hover -->
       <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-amber-400 transition-all duration-500 group-hover:w-full"></span>
    </a>
</li>

          <!-- Galerie -->
          <li class="relative group">
    <a href="{{ auth()->check() ? route('galleryClient') : route('gallery.public') }}"
       class="flex items-center gap-3 py-3 px-4 rounded-lg transition-all duration-300
              {{ request()->routeIs('galleryClient', 'gallery.public') 
                 ? 'bg-amber-600/20 text-amber-300 font-semibold' 
                 : 'text-white/90 font-medium hover:bg-white/10' }}">
       
       <!-- Icône dynamique -->
       <div class="relative">
           <i class="fas fa-images text-amber-400 
                   group-hover:text-amber-300 
                   transition-colors duration-300"></i>
           <!-- Indicateur de page active -->
           @if(request()->routeIs('galleryClient', 'gallery.public'))
               <span class="absolute -top-1 -right-1 w-2 h-2 bg-amber-400 rounded-full"></span>
           @endif
       </div>
       
       <!-- Texte avec animation -->
       <span class="relative overflow-hidden">
           <span class="block group-hover:-translate-y-[110%] transition-transform duration-300">Galerie</span>
           <span class="absolute left-0 top-0 translate-y-[110%] group-hover:translate-y-0 
                      text-amber-300 transition-transform duration-300">Galerie</span>
       </span>
       
       <!-- Effet de fond au hover -->
       <span class="absolute inset-0 bg-gradient-to-r from-transparent to-amber-400/10 
                  opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-lg"></span>
    </a>
</li>

          <!-- Services -->
          <li class="mobile-submenu">
            <button class="flex items-center justify-between w-full text-white/90 font-medium py-3 px-4 rounded-lg hover:bg-white/10 transition-all duration-300">
              <div class="flex items-center gap-3">
                <i class="fas fa-spa text-amber-400"></i>
                <span>Services</span>
              </div>
              <i class="fas fa-chevron-down text-sm transition-transform duration-300"></i>
            </button>
            <ul class="pl-4 mt-2 space-y-1 overflow-hidden transition-all duration-300 max-h-0">
              <li>
                <a href="{{ auth()->check() ? route('servicefemme.auth') : route('servicefemme') }}" class="flex items-center gap-3 text-white/80 py-2 px-4 rounded-lg hover:bg-white/10 transition-all duration-300">
                  <i class="fas fa-female text-amber-400/80"></i>
                  <span>Soins Féminins</span>
                </a>
              </li>
              <li>
                <a href="{{ auth()->check() ? route('servicehomme.auth') : route('servicehomme') }}" class="flex items-center gap-3 text-white/80 py-2 px-4 rounded-lg hover:bg-white/10 transition-all duration-300">
                  <i class="fas fa-male text-amber-400/80"></i>
                  <span>Soins Masculins</span>
                </a>
              </li>
            </ul>
          </li>

          <!-- Produits -->
          <li class="mobile-submenu">
            <button class="flex items-center justify-between w-full text-white/90 font-medium py-3 px-4 rounded-lg hover:bg-white/10 transition-all duration-300">
              <div class="flex items-center gap-3">
                <i class="fas fa-shopping-bag text-amber-400"></i>
                <span>Produits</span>
              </div>
              <i class="fas fa-chevron-down text-sm transition-transform duration-300"></i>
            </button>
            <ul class="pl-4 mt-2 space-y-1 overflow-hidden transition-all duration-300 max-h-0">
              <li>
                <a href="{{ auth()->check() ? route('product.private.gender', 'femme') : route('product.public.gender', 'femme') }}" class="flex items-center gap-3 text-white/80 py-2 px-4 rounded-lg hover:bg-white/10 transition-all duration-300">
                  <i class="fas fa-female text-amber-400/80"></i>
                  <span>Produits Féminins</span>
                </a>
              </li>
              <li>
                <a href="{{ auth()->check() ? route('product.private.gender', 'homme') : route('product.public.gender', 'homme') }}" class="flex items-center gap-3 text-white/80 py-2 px-4 rounded-lg hover:bg-white/10 transition-all duration-300">
                  <i class="fas fa-male text-amber-400/80"></i>
                  <span>Produits Masculins</span>
                </a>
              </li>
            </ul>
          </li>

          <!-- Contact -->
          <li>
            <a href="#" class="flex items-center gap-3 text-white/90 font-medium py-3 px-4 rounded-lg hover:bg-white/10 transition-all duration-300">
              <i class="fas fa-envelope text-amber-400"></i>
              <span>Contact</span>
            </a>
          </li>
        </ul>
      </nav>

      <div class="mt-8 space-y-4">
        <a href="#" class="flex items-center gap-3 text-amber-300 font-medium py-3 px-4 rounded-lg bg-amber-600/20 hover:bg-amber-600/30 transition-all duration-300">
          <i class="fas fa-calendar-alt"></i>
          <span>Réserver un rendez-vous</span>
        </a>

        <div class="grid gap-3 pt-4 border-t border-white/10">
          @auth
            <div class="flex items-center gap-3 px-4 py-3">
              <div class="relative h-10 w-10 rounded-full bg-gradient-to-tr from-amber-500 to-amber-600 flex items-center justify-center">
                <span class="text-white font-medium text-sm uppercase">{{ substr(Auth::user()->first_name, 0, 1) }}</span>
                <span class="absolute bottom-0 right-0 h-2.5 w-2.5 rounded-full bg-green-400 border-2 border-gray-900"></span>
              </div>
              <div class="flex-1">
                <p class="text-white font-medium">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</p>
                <p class="text-white/60 text-sm">{{ Auth::user()->email }}</p>
              </div>
            </div>
            <form method="POST" action="{{ route('logout') }}" class="px-4">
              @csrf
              <button type="submit" class="flex items-center gap-3 w-full text-red-400 py-2 px-4 rounded-lg hover:bg-red-500/10 transition-all duration-300">
                <i class="fas fa-sign-out-alt"></i>
                <span>Déconnexion</span>
              </button>
            </form>
          @else
            <div class="px-4 grid gap-3">
              <a href="{{ route('login') }}" class="block text-center px-6 py-3 text-white/90 border border-white/20 rounded-lg hover:bg-white/10 transition-all duration-300">Se connecter</a>
              <a href="{{ route('register') }}" class="block text-center px-6 py-3 bg-amber-500 text-black font-medium rounded-lg hover:bg-amber-400 transition-all duration-300">S'inscrire</a>
            </div>
          @endauth
        </div>
      </div>
    </div>
  </div>
</header>

<div class="h-24"></div> <!-- Spacer pour éviter que le contenu ne soit caché sous la navbar fixe -->

<script>
  const burger = document.getElementById('burger');
  const closeMenu = document.getElementById('close-menu');
  const mobileMenu = document.getElementById('mobile-menu');
  const mobileSubmenus = document.querySelectorAll('.mobile-submenu');

  burger.addEventListener('click', () => {
    mobileMenu.classList.add('active');
    document.body.style.overflow = 'hidden';
  });

  closeMenu.addEventListener('click', () => {
    mobileMenu.classList.remove('active');
    document.body.style.overflow = 'auto';
  });

  mobileSubmenus.forEach(submenu => {
    const button = submenu.querySelector('button');
    const menu = submenu.querySelector('ul');
    const icon = button.querySelector('i.fa-chevron-down');
    
    button.addEventListener('click', () => {
      const isExpanded = menu.style.maxHeight !== '0px' && menu.style.maxHeight !== '';
      
      // Fermer tous les autres sous-menus
      mobileSubmenus.forEach(other => {
        if (other !== submenu) {
          const otherMenu = other.querySelector('ul');
          const otherIcon = other.querySelector('i.fa-chevron-down');
          otherMenu.style.maxHeight = '0px';
          otherIcon.style.transform = 'rotate(0deg)';
        }
      });

      // Basculer le sous-menu actuel
      if (isExpanded) {
        menu.style.maxHeight = '0px';
        icon.style.transform = 'rotate(0deg)';
      } else {
        menu.style.maxHeight = menu.scrollHeight + 'px';
        icon.style.transform = 'rotate(180deg)';
      }
    });
  });

  document.addEventListener('click', (e) => {
    if (!mobileMenu.contains(e.target) && !burger.contains(e.target)) {
      mobileMenu.classList.remove('active');
      document.body.style.overflow = 'auto';
    }
  });

  // Navbar scroll effect
  window.addEventListener('scroll', function() {
            const nav = document.getElementById('mainNav');
            if (window.scrollY > 50) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        });

        function smoothScroll() {
            const productsSection = document.getElementById('products');
            productsSection.scrollIntoView({ 
                behavior: 'smooth' 
            });
        }

        function handleCartClick(event) {
            event.preventDefault();
            @auth
                fetch('/cart/items')
                    .then(response => response.json())
                    .then(data => {
                        if (data.items && data.items.length > 0) {
                            window.location.href = "{{ route('cart') }}";
                        } else {
                            showNotification('Votre panier est vide');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        showNotification('Erreur lors de la vérification du panier', 'error');
                    });
            @else
                window.location.href = "{{ route('login') }}";
            @endauth
        }

        function updateCartCount() {
            @auth
                fetch('/cart/count')
                    .then(response => response.json())
                    .then(data => {
                        const cartCountElement = document.getElementById('cart-count');
                        if (cartCountElement) {
                            cartCountElement.textContent = data.count;
                        }
                    })
                    .catch(error => console.error('Error:', error));
            @endauth
        }

        // Mettre à jour le compteur au chargement de la page
        document.addEventListener('DOMContentLoaded', function() {
            updateCartCount();
        });

        // Mettre à jour le compteur toutes les 30 secondes
        setInterval(updateCartCount, 30000);

        function initializeCart() {
            let userId = "{{ auth()->id() ?? 'guest' }}";
            let cartKey = `cart_${userId}`;
            
            if (!localStorage.getItem(cartKey)) {
                localStorage.setItem(cartKey, JSON.stringify({}));
            }
        }

        function showNotification(message) {
            const notification = document.createElement('div');
            notification.className = 'fixed bottom-4 right-4 bg-[#886666] text-white px-6 py-3 rounded-lg shadow-lg transform translate-y-10 opacity-0 transition-all duration-300';
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

<style>
@media (min-width: 1024px) and (max-width: 1279px) {
  .nav-link span {
    font-size: 0.8rem;
  }
  
  .menu-item {
    margin: 0 0.5rem;
  }
  
  nav ul {
    gap: 0.5rem !important;
  }
  
  .auth-buttons a {
    padding-left: 1rem !important;
    padding-right: 1rem !important;
    font-size: 0.8rem;
  }
}

.nav-link.active .nav-indicator {
  width: 100%;
  opacity: 1;
  background: linear-gradient(to right, #f59e0b, #d97706);
}

.nav-indicator {
  height: 2px;
  width: 0;
  background: linear-gradient(to right, #f59e0b, #d97706);
  transition: all 0.3s ease;
  opacity: 0;
}

.nav-link:hover .nav-indicator {
  width: 100%;
  opacity: 1;
}

.mobile-menu {
  transform: translateX(-100%);
  transition: transform 0.3s ease-in-out;
}

.mobile-menu.active {
  transform: translateX(0);
}

.mobile-submenu ul {
  transition: max-height 0.3s ease-in-out;
}

@media (min-width: 900px) {
  .nav-900-show {
    display: flex;
  }
  .nav-900-hide {
    display: none;
  }
}
</style>
