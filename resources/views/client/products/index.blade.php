@php
    use App\Models\Product;
@endphp

<x-app-layout>
    <x-slot name="header">
        <div class="container mx-auto px-4">
            <div class="flex flex-col items-center justify-center py-4">
                <h2 class="font-light text-3xl md:text-4xl text-[#886666] tracking-wide mb-2">
                    <span class="relative inline-block">
                        {{ __('Nos Produits') }}
                        <span class="absolute -bottom-1 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-[#886666]/30 to-transparent"></span>
                    </span>
                    @if($currentGender)
                        <span class="font-normal ml-2 text-[#886666]/80">{{ ucfirst($currentGender) }}</span>
                    @endif
                </h2>
                <p class="text-[#886666]/60 text-sm tracking-wider font-light mt-1">Découvrez notre sélection exclusive de produits de beauté</p>
            </div>
        </div>
    </x-slot>
    
    <style>
        /* Animations pour les titres */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes lineExpand {
            from {
                width: 0;
            }
            to {
                width: 100%;
            }
        }
        
        .animate-fadeInUp {
            animation: fadeInUp 0.8s ease forwards;
        }
        
        .animate-lineExpand {
            animation: lineExpand 0.6s ease-in-out forwards;
        }
        
        /* Typographie élégante */
        body {
            font-family: 'Inter', 'Helvetica Neue', sans-serif;
            letter-spacing: -0.01em;
            color: #555;
            background-color: #FAFAFA;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', 'Times New Roman', serif;
            letter-spacing: -0.02em;
        }
    </style>

    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Gender Navigation - Minimal Luxury Design -->
            <div class="mb-16">
                <div class="flex justify-center gap-4 md:gap-8">
                    <a href="{{ route('product.public', ['gender' => 'femme']) }}" 
                       class="relative inline-flex items-center px-6 py-3 rounded-full text-lg transition-all
                              {{ $currentGender === 'femme' ? 'bg-[#886666] text-white shadow-[0_4px_10px_rgba(136,102,102,0.25)]' : 'bg-white text-[#886666] hover:bg-[#f8e8e8] shadow-[0_2px_10px_rgba(0,0,0,0.05)] border border-[#f0d8d8]' }}">
                        <span class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            Pour Femmes
                            @if($currentGender === 'femme')
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            @endif
                        </span>
                    </a>
                    <a href="{{ route('product.public', ['gender' => 'homme']) }}" 
                       class="relative inline-flex items-center px-6 py-3 rounded-full text-lg transition-all
                              {{ $currentGender === 'homme' ? 'bg-[#886666] text-white shadow-[0_4px_10px_rgba(136,102,102,0.25)]' : 'bg-white text-[#886666] hover:bg-[#f8e8e8] shadow-[0_2px_10px_rgba(0,0,0,0.05)] border border-[#f0d8d8]' }}">
                        <span class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            Pour Hommes
                            @if($currentGender === 'homme')
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            @endif
                        </span>
                    </a>
                </div>
            </div>

            <!-- Category Navigation - Luxurious Minimal Design -->
            <div class="mb-24 max-w-6xl mx-auto">
                <div class="text-center mb-14">
                    <!-- Animated Title -->
                    <div class="overflow-hidden">
                        <span class="inline-block text-xs tracking-[0.2em] uppercase text-[#886666]/70 font-light mb-3 animate-fadeInUp opacity-0" style="animation-delay: 0.2s; animation-fill-mode: forwards;">
                            Explorez notre collection
                        </span>
                    </div>
                    <div class="overflow-hidden">
                        <h2 class="text-3xl font-light text-[#886666] tracking-wide animate-fadeInUp opacity-0" style="animation-delay: 0.4s; animation-fill-mode: forwards;">
                            Filtrer par <span class="font-medium relative inline-block">
                                Catégorie
                                <span class="absolute bottom-0 left-0 w-0 h-[1px] bg-[#886666]/30 animate-lineExpand" style="animation-delay: 0.8s;"></span>
                            </span>
                        </h2>
                    </div>
                </div>
                
                <!-- Modern Filter Tabs -->
                <div class="relative mb-16 overflow-hidden">
                    <div class="flex justify-center mb-10">
                        <div class="inline-flex bg-[#F9F5F5] p-1.5 rounded-full shadow-[0_2px_10px_rgba(0,0,0,0.02)]">
                            @foreach($categories as $categoryKey => $categoryName)
                                @php
                                    $isActive = $category === $categoryKey;
                                    $hasSubcategories = in_array($categoryKey, [Product::CATEGORY_MAQUILLAGE, Product::CATEGORY_FRAGRANCE]);
                                    $routeName = auth()->check() ? 'product.private.category' : 'product.public.category';
                                @endphp
                                <a href="{{ route($routeName, ['gender' => $currentGender, 'category' => $categoryKey]) }}"
                                   class="relative px-5 py-2.5 text-sm rounded-full transition-all duration-300 {{ $isActive ? 'bg-white text-[#886666] shadow-[0_2px_10px_rgba(136,102,102,0.1)]' : 'text-[#886666]/70 hover:text-[#886666]' }}">
                                    <span class="relative z-10">{{ $categoryName }}</span>
                                    @if($hasSubcategories)
                                        <button @click.prevent.stop="$dispatch('open-subcategories', { category: '{{ $categoryKey }}' })" 
                                                class="ml-1.5 inline-flex items-center justify-center w-4 h-4 text-[10px] rounded-full {{ $isActive ? 'bg-[#F8E8E8] text-[#886666]' : 'bg-[#F8E8E8]/50 text-[#886666]/70' }}">
                                            <span>{{ count($subcategories[$categoryKey] ?? []) }}</span>
                                        </button>
                                    @endif
                                </a>
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- Subcategories Panels -->
                    <div class="max-w-4xl mx-auto">
                        @foreach($categories as $categoryKey => $categoryName)
                            @php
                                $hasSubcategories = in_array($categoryKey, [Product::CATEGORY_MAQUILLAGE, Product::CATEGORY_FRAGRANCE]);
                                $subRouteName = auth()->check() ? 'product.private.subcategory' : 'product.public.subcategory';
                            @endphp
                            
                            @if($hasSubcategories && isset($subcategories[$categoryKey]) && count($subcategories[$categoryKey]) > 0)
                                <div x-data="{ open: {{ $category === $categoryKey ? 'true' : 'false' }} }" 
                                     x-show="open"
                                     x-on:open-subcategories.window="open = ($event.detail.category === '{{ $categoryKey }}')" 
                                     x-transition:enter="transition ease-out duration-200"
                                     x-transition:enter-start="opacity-0 -translate-y-2"
                                     x-transition:enter-end="opacity-100 translate-y-0"
                                     x-transition:leave="transition ease-in duration-150"
                                     x-transition:leave-start="opacity-100 translate-y-0"
                                     x-transition:leave-end="opacity-0 -translate-y-2"
                                     class="bg-white rounded-2xl shadow-[0_10px_40px_rgba(136,102,102,0.08)] p-8 mb-6">
                                    
                                    <div class="flex flex-wrap gap-3 justify-center">
                                        @foreach($subcategories[$categoryKey] as $subKey => $subName)
                                            @php
                                                $isSubActive = $subcategory === $subKey;
                                            @endphp
                                            <a href="{{ route($subRouteName, ['gender' => $currentGender, 'category' => $categoryKey, 'subcategory' => $subKey]) }}"
                                               class="px-4 py-2 text-sm rounded-full transition-all duration-300 {{ $isSubActive ? 'bg-[#886666] text-white shadow-[0_4px_12px_rgba(136,102,102,0.15)]' : 'bg-[#F9F5F5] text-[#886666] hover:bg-[#F8E8E8]' }}">
                                                {{ $subName }}
                                                @if($isSubActive)
                                                    <span class="ml-1.5 inline-flex items-center justify-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                        </svg>
                                                    </span>
                                                @endif
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            
            <!-- Products Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mt-16" id="products-container">
                @foreach($products as $product)
                <div class="product-card">
                    <div class="flip-card-inner">
                        <!-- Front of the card -->
                        <div class="flip-card-front">
                            @if($product->image)
                            <div class="product-image-container">
                                <div class="absolute top-4 right-4 z-10">
                                    @if($product->is_new)
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#886666]/10 text-[#886666]">
                                        Nouveau
                                    </span>
                                    @endif
                                </div>
                                <img src="{{ asset('storage/' . $product->image) }}" 
                                    alt="{{ $product->name }}"
                                    class="product-image main-image">
                                @if($product->imageToSwitch)
                                <img src="{{ asset('storage/' . $product->imageToSwitch) }}" 
                                    alt="{{ $product->name }} - Alternative View"
                                    class="product-image hover-image">
                                @endif
                                <div class="image-overlay"></div>
                            </div>
                            @endif
                            
                            <div class="p-6 flex flex-col flex-grow">
                                <div class="mb-1 text-xs font-medium text-[#886666]/60 uppercase tracking-wider">{{ $product->brand ?? 'Elegance Vibe' }}</div>
                                <h3 class="product-name">{{ $product->name }}</h3>
                                <p class="product-description">{{ $product->description }}</p>
                                
                                <div class="product-footer">
                                    <span class="product-price">{{ number_format($product->price, 2) }}€</span>
                                    <div class="product-actions-front">
                                        @auth
                                        <button type="button" class="add-to-cart-button-front" onclick="addToCart({{ $product->id }}, '{{ $product->name }}', {{ $product->price }}, '{{ $product->image }}')">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="button-icon" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                                            </svg>
                                            <span>Panier</span>
                                        </button>
                                        @else
                                        <a href="{{ route('login') }}" class="add-to-cart-button-front">
                                            <svg class="button-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                                            </svg>
                                            <span>Connexion</span>
                                        </a>
                                        @endauth
                                        <button type="button" class="info-button" onclick="flipCard(this, true)">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="button-icon" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9a1 1 0 00-1-1z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Back of the card -->
                        <div class="flip-card-back">
                            <div class="p-6 flex flex-col h-full" style="background-color: #fcfafa;">
                                <div class="mb-4 pb-3 border-b border-[#f0d8d8]/50">
                                    <div class="text-xs font-medium text-[#886666]/80 uppercase tracking-wider mb-2">{{ $product->brand ?? 'Elegance Vibe' }}</div>
                                    <h3 class="product-name-back" style="text-align: left; font-size: 1.3rem; color: #333;">{{ $product->name }}</h3>
                                </div>
                                
                                <div class="product-details flex-grow mt-3" style="text-align: left;">
                                    @if($product->description1)
                                    <div class="detail-item" style="background-color: white; border: 1px solid rgba(136, 102, 102, 0.15);">
                                        <div class="detail-icon" style="color: #886666;">
                                            <svg class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="detail-text" style="color: #444; font-size: 0.95rem;">{{ $product->description1 }}</p>
                                        </div>
                                    </div>
                                    @endif

                                    @if($product->description2)
                                    <div class="detail-item" style="background-color: white; border: 1px solid rgba(136, 102, 102, 0.15);">
                                        <div class="detail-icon" style="color: #886666;">
                                            <svg class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="detail-text" style="color: #444; font-size: 0.95rem;">{{ $product->description2 }}</p>
                                        </div>
                                    </div>
                                    @endif

                                    @if($product->description3)
                                    <div class="detail-item" style="background-color: white; border: 1px solid rgba(136, 102, 102, 0.15);">
                                        <div class="detail-icon" style="color: #886666;">
                                            <svg class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="detail-text" style="color: #444; font-size: 0.95rem;">{{ $product->description3 }}</p>
                                        </div>
                                    </div>
                                    @endif

                                    @if($product->brand)
                                    <div class="detail-item" style="background-color: #f8e8e8; border: 1px solid rgba(136, 102, 102, 0.15);">
                                        <div class="detail-icon" style="color: #886666;">
                                            <svg class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5h14l-4 10H9L5 5z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="detail-text" style="color: #444; font-size: 0.95rem;">Marque: <span class="font-medium">{{ $product->brand }}</span></p>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                
                                <div class="product-actions mt-auto pt-4 border-t border-[#f0d8d8]/50">
                                    <div class="flex items-center justify-between mb-4">
                                        <span class="product-price-back" style="color: #886666; font-size: 1.6rem;">{{ number_format($product->price, 2) }}€</span>
                                        <div class="text-xs text-[#886666]/70 font-medium">Réf: {{ $product->id }}</div>
                                    </div>
                                    <div class="action-buttons">
                                        <button type="button" class="back-button back-button-full" onclick="flipCard(this, false)" style="background-color: white; box-shadow: 0 3px 10px rgba(136, 102, 102, 0.12); border: 1px solid rgba(136, 102, 102, 0.15); font-weight: 500; padding: 0.75rem 0; transition: all 0.3s ease;">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="button-icon" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                            </svg>
                                            <span>Retour</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- More Products Section -->
            @if($hasMore)
            <div class="mt-16 text-center">
                <button id="load-more" 
                        class="load-more-button"
                        data-page="{{ $currentPage + 1 }}"
                        onclick="loadMoreProducts(this)">
                    <span>Voir plus de produits</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="load-more-icon" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
            @endif
        </div>
    </div>

    <style>
        /* Base Product Card Styles */
        .product-card {
            perspective: 1500px;
            background-color: transparent;
            height: 32rem;
            position: relative;
            margin-bottom: 2rem;
            transition: transform 0.3s ease-out;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transform-style: preserve-3d;
            box-shadow: 0 10px 30px rgba(136, 102, 102, 0.07);
            border-radius: 1rem;
        }

        .product-card.flipped .flip-card-inner {
            transform: rotateY(180deg);
        }

        /* Front and Back Card Styles */
        .flip-card-front, .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            border-radius: 1rem;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .flip-card-front {
            transform: rotateY(0deg);
            background-color: white;
            border: 1px solid rgba(248, 232, 232, 0.5);
            box-shadow: 0 5px 15px rgba(136, 102, 102, 0.05);
        }

        .flip-card-back {
            background-color: white;
            transform: rotateY(180deg);
            border: 1px solid rgba(248, 232, 232, 0.5);
            display: flex;
            flex-direction: column;
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(136, 102, 102, 0.05);
        }

        /* Product Image Styles */
        .product-image-container {
            position: relative;
            overflow: hidden;
            border-radius: 1rem 1rem 0 0;
            height: 20rem;
            margin-bottom: 0;
            box-shadow: none;
            width: 100%;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .product-image {
            width: 100%;
            height: 100%;
            object-fit: contain;
            object-position: center;
            position: absolute;
            top: 0;
            left: 0;
            transition: all 0.6s cubic-bezier(0.215, 0.61, 0.355, 1);
            transform: scale(1);
            will-change: transform;
            background-color: white;
        }
        
        .product-card:hover .product-image-container .product-image {
            transform: scale(1.03);
        }

        .main-image {
            opacity: 1;
            z-index: 1;
            filter: brightness(1.02) contrast(1.05);
        }

        .hover-image {
            opacity: 0;
            z-index: 2;
            filter: brightness(1.05) contrast(1.08);
        }

        .product-card:hover .product-image-container .main-image {
            opacity: 0;
            transform: scale(1.05);
        }

        .product-card:hover .product-image-container .hover-image {
            opacity: 1;
            transform: scale(1.03);
        }

        .image-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(136, 102, 102, 0.1), rgba(136, 102, 102, 0.02), transparent);
            pointer-events: none;
            transition: opacity 0.3s ease;
            z-index: 3;
        }
        
        .product-card:hover .image-overlay {
            opacity: 0.8;
        }
        
        /* Effet de bordure subtil */
        .flip-card-front::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 20rem;
            border-radius: 1rem 1rem 0 0;
            box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.1);
            pointer-events: none;
            z-index: 4;
        }
        
        /* Styles des noms de produits et descriptions */
        .product-name {
            font-family: 'Playfair Display', serif;
            font-size: 1.35rem;
            font-weight: 700;
            color: #1a1a1a;
            margin: 1rem 0 0.75rem;
            line-height: 1.3;
            position: relative;
            display: inline-block;
        }
        
        .product-name-back {
            font-size: 1.25rem;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 0.5rem;
            text-align: center;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid rgba(248, 232, 232, 0.5);
        }

        .product-name::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 50%;
            width: 40px;
            height: 2px;
            background: linear-gradient(to right, #f0d8d8, #e8c6c6);
            transform: translateX(-50%);
            border-radius: 2px;
        }
        
        .product-name-back::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 60px;
            height: 3px;
            background: linear-gradient(to right, #f0d8d8, #e8c6c6);
            transform: translateX(-50%);
            border-radius: 2px;
        }

        .product-description {
            color: #4b5563;
            margin: 0.75rem 1.25rem 1.5rem;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            flex-grow: 1;
            line-height: 1.5;
            font-size: 0.95rem;
            text-align: center;
        }

        /* Price Styles */
        .product-price {
            font-size: 1.6rem;
            font-weight: 700;
            color: #886666 !important;
            text-shadow: 0 1px 1px rgba(255,255,255,0.8);
            position: relative;
            display: inline-block;
        }
        
        .product-price-back {
            font-size: 1.5rem;
            font-weight: 700;
            color: #886666 !important;
        }

        .product-price::before {
            content: '';
            position: absolute;
            bottom: 5px;
            left: 0;
            width: 100%;
            height: 6px;
            background-color: rgba(248, 232, 232, 0.6);
            z-index: -1;
            border-radius: 3px;
        }

        .product-footer {
            margin: 0 1.25rem 1.25rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 1rem;
        }

        /* Back Card Specific Styles */
        .product-details {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            margin-top: 0.75rem;
            padding: 0 0.5rem;
        }

        .detail-item {
            display: flex !important;
            align-items: center;
            background-color: #f9f9f9;
            padding: 0.625rem 0.875rem;
            border-radius: 0.5rem;
            margin-bottom: 0.5rem;
            opacity: 1 !important;
            transition: background-color 0.2s ease;
        }

        .detail-item:hover {
            background-color: #f8e8e8;
        }

        .flip-card-back .detail-item {
            background-color: white;
            border: 1px solid rgba(136, 102, 102, 0.1);
        }

        .detail-text {
            color: #555555;
            font-size: 0.9rem;
            margin: 0;
            line-height: 1.3;
        }

        .detail-icon {
            width: 1.25rem;
            height: 1.25rem;
            margin-right: 0.75rem;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .icon {
            width: 100%;
            height: 100%;
            color: #886666;
        }

        .product-actions {
            margin: 0.75rem 1.25rem 1.25rem;
            padding-top: 0.75rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid rgba(248, 232, 232, 0.3);
        }

        /* Fond de page */
        .bg-gray-50 {
            background-color: #FAFAFA;
        }

        /* Correction pour line-clamp */
        .product-description {
            line-clamp: 2;
            -webkit-line-clamp: 2;
            -moz-line-clamp: 2;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        /* Styles des boutons */
        .product-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: auto;
            padding: 0.75rem 0;
        }
        
        .product-actions-front {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .info-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 2.5rem;
            height: 2.5rem;
            background-color: white;
            color: #886666;
            border: 1px solid rgba(136, 102, 102, 0.2);
            border-radius: 50%;
            font-size: 0.875rem;
            font-weight: 500;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(136, 102, 102, 0.08);
        }
        
        .add-to-cart-button-front {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            background-color: #886666;
            color: white;
            border: none;
            border-radius: 2rem;
            font-size: 0.875rem;
            font-weight: 500;
            transition: all 0.3s ease;
            text-decoration: none;
            box-shadow: 0 3px 8px rgba(136, 102, 102, 0.15);
        }
        
        .info-button:hover {
            background-color: #886666;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(136, 102, 102, 0.15);
        }
        
        .add-to-cart-button-front:hover {
            background-color: #775555;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(136, 102, 102, 0.15);
            text-decoration: none;
        }
        
        .button-icon {
            width: 1rem;
            height: 1rem;
        }
        
        .action-buttons {
            display: flex;
            gap: 0.75rem;
            width: 100%;
        }
        
        .back-button, .add-to-cart-button, .login-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.75rem 1rem;
            border-radius: 2rem;
            font-size: 0.875rem;
            font-weight: 500;
            transition: all 0.3s ease;
            cursor: pointer;
            text-decoration: none;
        }
        
        .back-button {
            background-color: white;
            color: #666;
            border: 1px solid rgba(136, 102, 102, 0.2);
            flex: 1;
        }
        
        .back-button-full {
            width: 100%;
            justify-content: center;
            padding: 0.75rem 1.5rem;
            font-weight: 500;
            box-shadow: 0 3px 8px rgba(136, 102, 102, 0.08);
            transition: all 0.3s ease;
        }
        
        .back-button:hover {
            background-color: #f8f8f8;
            color: #886666;
        }
        
        .add-to-cart-button, .login-button {
            background-color: #886666;
            color: white !important;
            border: none;
            flex: 2;
            box-shadow: 0 4px 12px rgba(136, 102, 102, 0.15);
        }
        
        .add-to-cart-button:hover, .login-button:hover {
            background-color: #775555;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(136, 102, 102, 0.2);
            color: white !important;
            text-decoration: none !important;
        }
        
        /* Styles des détails produit */
        .product-details {
            padding: 0.5rem 0;
            margin-bottom: 1rem;
        }
        
        .detail-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 0.75rem;
            gap: 0.75rem;
        }
        
        .detail-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 1.25rem;
            height: 1.25rem;
            flex-shrink: 0;
            color: #886666;
        }
        
        .icon {
            width: 1rem;
            height: 1rem;
        }
        
        .detail-text {
            font-size: 0.875rem;
            color: #555;
            line-height: 1.5;
            text-align: left;
        }
        
        /* Style du bouton Load More */
        .load-more-button {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 2rem;
            background-color: white;
            color: #886666;
            border: 1px solid rgba(136, 102, 102, 0.2);
            border-radius: 2rem;
            font-size: 1rem;
            font-weight: 500;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(136, 102, 102, 0.05);
        }
        
        .load-more-button:hover {
            background-color: #886666;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(136, 102, 102, 0.15);
        }
        
        .load-more-icon {
            width: 1.25rem;
            height: 1.25rem;
        }

        /* Text Styles */
        .product-name {
            font-size: 1.35rem;
            font-weight: 700;
            color: #1a1a1a;
            margin: 1rem 1.25rem 0.75rem;
            line-height: 1.3;
            position: relative;
            display: inline-block;
        }
        
        .product-name-back {
            font-size: 1.25rem;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 0.5rem;
            text-align: center;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid rgba(248, 232, 232, 0.5);
        }

        .product-name::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 50%;
            width: 40px;
            height: 2px;
            background: linear-gradient(to right, #f0d8d8, #e8c6c6);
            transform: translateX(-50%);
            border-radius: 2px;
        }
        
        .product-name-back::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 60px;
            height: 3px;
            background: linear-gradient(to right, #f0d8d8, #e8c6c6);
            transform: translateX(-50%);
            border-radius: 2px;
        }

        .product-description {
            color: #4b5563;
            margin: 0.75rem 1.25rem 1.5rem;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            flex-grow: 1;
            line-height: 1.5;
            font-size: 0.95rem;
            text-align: center;
        }

        /* Price Styles */
        .product-price {
            font-size: 1.6rem;
            font-weight: 700;
            color: #886666 !important;
            text-shadow: 0 1px 1px rgba(255,255,255,0.8);
            position: relative;
            display: inline-block;
        }
        
        .product-price-back {
            font-size: 1.5rem;
            font-weight: 700;
            color: #886666 !important;
        }

        .product-price::before {
            content: '';
            position: absolute;
            bottom: 5px;
            left: 0;
            width: 100%;
            height: 6px;
            background-color: rgba(248, 232, 232, 0.6);
            z-index: -1;
            border-radius: 3px;
        }

        .product-footer {
            margin: 0 1.25rem 1.25rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 1rem;
        }

        /* Back Card Specific Styles */
        .product-details {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            margin-top: 0.75rem;
            padding: 0 0.5rem;
        }

        .detail-item {
            display: flex !important;
            align-items: center;
            background-color: #f9f9f9;
            padding: 0.625rem 0.875rem;
            border-radius: 0.5rem;
            margin-bottom: 0.5rem;
            opacity: 1 !important;
            transition: background-color 0.2s ease;
        }

        .detail-item:hover {
            background-color: #f8e8e8;
        }

        .flip-card-back .detail-item {
            background-color: white;
            border: 1px solid rgba(136, 102, 102, 0.1);
        }

        .detail-text {
            color: #555555;
            font-size: 0.9rem;
            margin: 0;
            line-height: 1.3;
        }

        .detail-icon {
            width: 1.25rem;
            height: 1.25rem;
            margin-right: 0.75rem;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .icon {
            width: 100%;
            height: 100%;
            color: #886666;
        }

        .product-actions {
            margin: 0.75rem 1.25rem 1.25rem;
            padding-top: 0.75rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid rgba(248, 232, 232, 0.3);
        }

        .action-buttons {
            display: flex;
            gap: 0.75rem;
        }

        .back-button, .add-to-cart-button, .login-button, .details-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.625rem 1.25rem;
            border-radius: 0.375rem;
            font-weight: 500;
            font-size: 0.875rem;
            transition: all 0.2s ease;
            position: relative;
            letter-spacing: 0.01em;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.08);
        }

        .back-button, .details-button {
            background-color: white;
            color: #886666;
            border: 1px solid rgba(136, 102, 102, 0.2);
            min-width: 100px;
            margin: 0 auto;
            position: relative;
            overflow: hidden;
        }
        
        .back-button::after, .details-button::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.1);
            transition: width 0.3s ease;
        }
        
        .back-button:hover::after, .details-button:hover::after {
            width: 100%;
        }

        .back-button:hover, .details-button:hover {
            background-color: #F8E8E8;
            transform: translateY(-1px);
            box-shadow: 0 3px 8px rgba(136, 102, 102, 0.15);
        }

        .add-to-cart-button, .login-button {
            background-color: #886666;
            color: white;
            border: none;
            position: relative;
            overflow: hidden;
        }
        
        .add-to-cart-button::after, .login-button::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background-color: rgba(136, 102, 102, 0.05);
            transition: width 0.3s ease;
        }
        
        .add-to-cart-button:hover::after, .login-button:hover::after {
            width: 100%;
        }

        .add-to-cart-button:hover, .login-button:hover {
            background-color: #734d4d;
            transform: translateY(-1px);
            box-shadow: 0 3px 8px rgba(136, 102, 102, 0.2);
        }

        .button-icon {
            height: 1.25rem;
            width: 1.25rem;
            color: currentColor !important;
            margin-right: 0.5rem;
            transition: transform 0.3s ease;
            position: relative;
            z-index: 2;
        }

        .back-button:hover .button-icon {
            transform: translateX(-4px);
            animation: pulse 1s infinite;
        }
        
        .add-to-cart-button:hover .button-icon, 
        .login-button:hover .button-icon,
        .info-button:hover .button-icon {
            animation: pulse 1s infinite;
        }
        
        .add-to-cart-button-front:hover .button-icon {
            animation: wiggle 0.5s ease;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        .add-to-cart-button:hover .button-icon,
        .login-button:hover .button-icon {
            animation: wiggle 0.5s ease;
        }

        @keyframes wiggle {
            0%, 100% { transform: rotate(0); }
            25% { transform: rotate(-10deg); }
            50% { transform: rotate(10deg); }
            75% { transform: rotate(-5deg); }
        }

        /* Load More Button */
        .load-more-button {
            background: linear-gradient(to right, #f8e8e8, #f0d8d8);
            color: #886666 !important;
            border: none;
            font-weight: 600;
            padding: 0.75rem 2.5rem;
            border-radius: 9999px;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 5px 15px rgba(136, 102, 102, 0.15);
            display: inline-flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .load-more-button::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, rgba(255,255,255,0.1), transparent);
            transform: translateX(-100%);
            transition: transform 0.6s ease;
        }

        .load-more-button:hover::after {
            transform: translateX(100%);
        }

        .load-more-button:hover {
            background: linear-gradient(to right, #f0d8d8, #e8c6c6);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(136, 102, 102, 0.2);
        }

        .load-more-icon {
            height: 1.25rem;
            width: 1.25rem;
            margin-left: 0.75rem;
            color: #886666 !important;
            transition: transform 0.3s ease;
        }

        .load-more-button:hover .load-more-icon {
            transform: translateY(3px);
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .product-card {
                height: auto;
                min-height: 28rem;
            }
            
            .product-image-container {
                height: 12rem;
            }

            .product-footer {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.75rem;
            }

            .product-price, .product-price-back {
                margin-bottom: 0.5rem;
            }

            .product-actions-front {
                width: 100%;
                display: flex;
                justify-content: space-between;
            }
            
            .add-to-cart-button-front {
                flex-grow: 1;
                margin-right: 0.5rem;
                justify-content: center;
            }
        }

        @media (max-width: 640px) {
            .product-image-container {
                height: 10rem;
            }

            .action-buttons {
                width: 100%;
                justify-content: space-between;
            }

            .back-button, .add-to-cart-button, .login-button {
                flex: 1;
                padding: 0.5rem 1rem;
                font-size: 0.875rem;
            }
        }
    </style>

    <script>
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
        
        document.addEventListener('DOMContentLoaded', function() {
            // Ajouter des écouteurs d'événements directement aux boutons
            document.querySelectorAll('.info-button').forEach(button => {
                button.onclick = function() {
                    const card = this.closest('.product-card');
                    if (card) {
                        // Fermer toutes les autres cartes ouvertes
                        document.querySelectorAll('.product-card.flipped').forEach(flippedCard => {
                            flippedCard.classList.remove('flipped');
                        });
                        // Puis ouvrir celle-ci
                        card.classList.add('flipped');
                    }
                };
            });
            
            document.querySelectorAll('.back-button').forEach(button => {
                button.onclick = function() {
                    const card = this.closest('.product-card');
                    if (card) {
                        card.classList.remove('flipped');
                    }
                };
            });
            
            // Configurer le bouton "Voir plus de produits"
            const loadMoreButton = document.getElementById('load-more');
            if (loadMoreButton) {
                loadMoreButton.onclick = function() {
                    loadMoreProducts(this);
                };
            }
        });

        function loadMoreProducts(button) {
            if (!button) return;

            const page = button.dataset.page;
            const container = document.getElementById('products-container');
            
            if (!container) {
                console.error('Products container not found');
                return;
            }

            const currentUrl = new URL(window.location.href);
            
            // Afficher l'état de chargement
            button.disabled = true;
            button.innerHTML = `
                <svg class="animate-spin h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Chargement...
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
                    // Ajouter le HTML directement au conteneur
                    container.insertAdjacentHTML('beforeend', data.html);
                    
                    // Sélectionner toutes les nouvelles cartes ajoutées
                    const allCards = container.querySelectorAll('.product-card');
                    const matchCount = (data.html.match(/<div class="product-card">/g) || []).length;
                    const newCards = Array.from(allCards).slice(-matchCount);
                    
                    // Ajouter une classe d'animation aux nouvelles cartes
                    newCards.forEach(card => {
                        card.classList.add('opacity-0');
                        setTimeout(() => {
                            card.classList.remove('opacity-0');
                            card.classList.add('transition-opacity', 'duration-500');
                        }, 50);
                        
                        // Appliquer les styles personnalisés aux nouvelles cartes
                        const cardBack = card.querySelector('.flip-card-back');
                        if (cardBack) {
                            const cardBackInner = cardBack.querySelector('div');
                            if (cardBackInner) {
                                cardBackInner.style.backgroundColor = '#fcfafa';
                            }
                            
                            const productNameBack = cardBack.querySelector('.product-name-back');
                            if (productNameBack) {
                                productNameBack.style.textAlign = 'left';
                                productNameBack.style.fontSize = '1.3rem';
                                productNameBack.style.color = '#333';
                            }
                            
                            const productDetails = cardBack.querySelector('.product-details');
                            if (productDetails) {
                                productDetails.style.textAlign = 'left';
                            }
                            
                            const detailItems = cardBack.querySelectorAll('.detail-item');
                            detailItems.forEach(item => {
                                item.style.backgroundColor = 'white';
                                item.style.border = '1px solid rgba(136, 102, 102, 0.15)';
                                
                                const detailIcon = item.querySelector('.detail-icon');
                                if (detailIcon) {
                                    detailIcon.style.color = '#886666';
                                }
                                
                                const detailText = item.querySelector('.detail-text');
                                if (detailText) {
                                    detailText.style.color = '#444';
                                    detailText.style.fontSize = '0.95rem';
                                    
                                    if (detailText.textContent.includes('Marque:')) {
                                        item.style.backgroundColor = '#f8e8e8';
                                    }
                                }
                            });
                            
                            const priceBack = cardBack.querySelector('.product-price-back');
                            if (priceBack) {
                                priceBack.style.color = '#886666';
                                priceBack.style.fontSize = '1.6rem';
                            }
                            
                            const refText = cardBack.querySelector('.text-[#886666]/60');
                            if (refText) {
                                refText.className = refText.className.replace('text-[#886666]/60', 'text-[#886666]/70 font-medium');
                            }
                            
                            const backButton = cardBack.querySelector('.back-button');
                            if (backButton) {
                                backButton.style.backgroundColor = 'white';
                                backButton.style.boxShadow = '0 3px 10px rgba(136, 102, 102, 0.12)';
                                backButton.style.border = '1px solid rgba(136, 102, 102, 0.15)';
                                backButton.style.fontWeight = '500';
                                backButton.style.padding = '0.75rem 0';
                                backButton.style.transition = 'all 0.3s ease';
                            }
                        }
                        
                        // Configurer les boutons pour chaque nouvelle carte
                        const infoButton = card.querySelector('.info-button');
                        const backButton = card.querySelector('.back-button');
                        
                        if (infoButton) {
                            infoButton.onclick = function() {
                                const card = this.closest('.product-card');
                                if (card) {
                                    // Fermer toutes les autres cartes ouvertes
                                    document.querySelectorAll('.product-card.flipped').forEach(flippedCard => {
                                        flippedCard.classList.remove('flipped');
                                    });
                                    // Puis ouvrir celle-ci
                                    card.classList.add('flipped');
                                }
                            };
                        }
                        
                        if (backButton) {
                            backButton.onclick = function() {
                                const card = this.closest('.product-card');
                                if (card) {
                                    card.classList.remove('flipped');
                                }
                            };
                        }
                    });

                    // Mettre à jour l'état du bouton
                    if (button) {
                        button.disabled = false;
                        button.innerHTML = `
                            <span>Voir plus de produits</span>
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
                    
                    // Réinitialiser les événements pour les nouvelles cartes
                    initializeProductCards();
                }
            })
            .catch(error => {
                console.error('Error loading more products:', error);
                if (button) {
                    button.disabled = false;
                    button.innerHTML = 'Erreur de chargement. Réessayez.';
                }
            });
        }

        function addToCart(productId, productName, productPrice, productImage = null) {
            // Check if user is authenticated
            @if(!auth()->check())
                window.location.href = "{{ route('login') }}";
                return;
            @endif

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
            @if(auth()->check())
                fetch('/cart/count')
                    .then(response => response.json())
                    .then(data => {
                        const cartCountElement = document.getElementById('cart-count');
                        if (cartCountElement) {
                            cartCountElement.textContent = data.count;
                        }
                    });
            @endif
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
    </script>

    <!-- Styles supplémentaires pour assurer la cohérence des cartes -->
    <style>
        /* Styles spécifiques pour le verso des cartes */
        .flip-card-back {
            background-color: white !important;
            transform: rotateY(180deg) !important;
            border: 1px solid rgba(248, 232, 232, 0.5) !important;
            display: flex !important;
            flex-direction: column !important;
            position: absolute !important;
            width: 100% !important;
            height: 100% !important;
            -webkit-backface-visibility: hidden !important;
            backface-visibility: hidden !important;
            border-radius: 1rem !important;
            overflow: hidden !important;
        }
        
        /* Styles pour les éléments de détail */
        .detail-item {
            display: flex !important;
            align-items: center !important;
            background-color: white !important;
            padding: 0.75rem 1rem !important;
            border-radius: 0.5rem !important;
            margin-bottom: 0.75rem !important;
            opacity: 1 !important;
            border: 1px solid rgba(136, 102, 102, 0.1) !important;
            transition: background-color 0.2s ease !important;
            box-shadow: 0 2px 5px rgba(136, 102, 102, 0.03) !important;
        }
        
        .detail-item:hover {
            background-color: #f8e8e8 !important;
        }
        
        /* Correction pour les éléments de détail dans les cartes */
        #products-container .product-card .detail-item {
            border: 1px solid rgba(136, 102, 102, 0.1) !important;
            background-color: white !important;
        }
    </style>
    
    <script>
        // Script pour appliquer les styles après chargement des nouveaux produits
        document.addEventListener('DOMContentLoaded', function() {
            // Fonction pour appliquer les styles corrects aux cartes
            function applyCardStyles() {
                // Appliquer les styles aux versos des cartes
                document.querySelectorAll('.flip-card-back').forEach(cardBack => {
                    // Styles de base pour le verso de la carte
                    cardBack.style.backgroundColor = 'white';
                    cardBack.style.transform = 'rotateY(180deg)';
                    cardBack.style.border = '1px solid rgba(248, 232, 232, 0.5)';
                    cardBack.style.display = 'flex';
                    cardBack.style.flexDirection = 'column';
                    cardBack.style.position = 'absolute';
                    cardBack.style.width = '100%';
                    cardBack.style.height = '100%';
                    cardBack.style.backfaceVisibility = 'hidden';
                    cardBack.style.WebkitBackfaceVisibility = 'hidden';
                    cardBack.style.borderRadius = '1rem';
                    cardBack.style.overflow = 'hidden';
                    cardBack.style.boxShadow = '0 5px 15px rgba(136, 102, 102, 0.05)';
                    
                    // Appliquer les styles personnalisés au contenu du verso
                    const cardBackInner = cardBack.querySelector('div');
                    if (cardBackInner) {
                        cardBackInner.style.backgroundColor = '#fcfafa';
                    }
                    
                    // Style du nom du produit au verso
                    const productNameBack = cardBack.querySelector('.product-name-back');
                    if (productNameBack) {
                        productNameBack.style.textAlign = 'left';
                        productNameBack.style.fontSize = '1.3rem';
                        productNameBack.style.color = '#333';
                    }
                    
                    // Style de la section détails
                    const productDetails = cardBack.querySelector('.product-details');
                    if (productDetails) {
                        productDetails.style.textAlign = 'left';
                        productDetails.classList.add('mt-3');
                    }
                    
                    // Style du prix et de la référence
                    const priceBack = cardBack.querySelector('.product-price-back');
                    if (priceBack) {
                        priceBack.style.color = '#886666';
                        priceBack.style.fontSize = '1.6rem';
                    }
                    
                    // Style du bouton retour
                    const backButton = cardBack.querySelector('.back-button');
                    if (backButton) {
                        backButton.style.backgroundColor = 'white';
                        backButton.style.boxShadow = '0 3px 10px rgba(136, 102, 102, 0.12)';
                        backButton.style.border = '1px solid rgba(136, 102, 102, 0.15)';
                        backButton.style.fontWeight = '500';
                        backButton.style.padding = '0.75rem 0';
                        backButton.style.transition = 'all 0.3s ease';
                        backButton.style.width = '100%';
                        backButton.style.justifyContent = 'center';
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
                    item.style.border = '1px solid rgba(136, 102, 102, 0.15)';
                    item.style.transition = 'background-color 0.2s ease';
                    item.style.boxShadow = '0 2px 5px rgba(136, 102, 102, 0.03)';
                    
                    // Style des icônes dans les éléments de détail
                    const detailIcon = item.querySelector('.detail-icon');
                    if (detailIcon) {
                        detailIcon.style.color = '#886666';
                    }
                    
                    // Style du texte dans les éléments de détail
                    const detailText = item.querySelector('.detail-text');
                    if (detailText) {
                        detailText.style.color = '#444';
                        detailText.style.fontSize = '0.95rem';
                        
                        // Vérifier si c'est l'élément de marque et appliquer un style spécial
                        if (detailText.textContent.includes('Marque:')) {
                            item.style.backgroundColor = '#f8e8e8';
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
    </script>
    
    @push('scripts')
    <script src="{{ asset('js/cart.js') }}"></script>
    @endpush
</x-app-layout>

