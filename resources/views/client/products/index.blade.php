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
                <p class="text-[#886666]/60 text-sm tracking-wider font-light mt-1">Découvrez notre sélection exclusive de produits de beautéeeeeeeeeeeeeee</p>
            </div>
        </div>
    </x-slot>
    
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">

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
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#FF750F]/10 text-[#FF750F]">
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
                                <div class="mb-1 text-xs font-medium text-[#FF750F]/80 uppercase tracking-wider text-center">{{ $product->brand ?? 'Elegance Vibe' }}</div>
                                <h3 class="product-name" style="text-align: center; font-size: 1.4rem; margin: 0.5rem 0 0.75rem; font-weight: 700; color: #333;">{{ $product->name }}</h3>
                                <p style="text-align: center; color: #666; font-size: 0.95rem; line-height: 1.5; margin: 0 auto 1.5rem; max-width: 90%; overflow: hidden; text-overflow: ellipsis; display: block; max-height: 3em;">{{ Str::limit($product->description, 100) }}</p>
                                
                                <div class="product-footer">
                                    <div class="flex justify-center items-center mb-4">
                                        <span class="animated-price" style="font-size: 1.8rem; font-weight: 700; color: #FF750F; text-align: center; display: inline-block;">{{ number_format($product->price, 2) }}€</span>
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <div class="product-actions-left" style="flex: 1;">
                                            @auth
                                            <button type="button" class="add-to-cart-button-front" onclick="addToCart({{ $product->id }}, '{{ $product->name }}', {{ $product->price }}, '{{ $product->image }}')" style="background-color: #FF750F; color: white; border: none; padding: 12px 20px; border-radius: 6px; display: flex; align-items: center; justify-content: center; gap: 8px; font-weight: 500; transition: all 0.3s ease; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); width: auto; max-width: 150px;">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="button-icon" viewBox="0 0 20 20" fill="currentColor" style="width: 20px; height: 20px;">
                                                    <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                                                </svg>
                                                <span>Panier</span>
                                            </button>
                                            @else
                                            <a href="{{ route('login') }}" class="add-to-cart-button-front" style="background-color: #FF750F; color: white; border: none; padding: 12px 20px; border-radius: 6px; display: flex; align-items: center; justify-content: center; gap: 8px; font-weight: 500; transition: all 0.3s ease; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); text-decoration: none; width: auto; max-width: 150px;">
                                                <svg class="button-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="width: 20px; height: 20px;">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                                                </svg>
                                                <span>Connexion</span>
                                            </a>
                                            @endauth
                                        </div>
                                        <div class="product-actions-right" style="flex: 1; display: flex; justify-content: flex-end;">
                                            <button type="button" class="info-button" onclick="flipCard(this, true)" style="background-color: #FF750F; color: white; border: none; padding: 10px 15px; border-radius: 6px; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                                                <span style="font-weight: bold; font-size: 20px;">i</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Back of the card -->
                        <div class="flip-card-back">
                            <div class="p-6 flex flex-col h-full" style="background: linear-gradient(145deg, #ffffff, #fff9f5); border-radius: 1rem; box-shadow: inset 0 1px 3px rgba(255, 117, 15, 0.05);">
                                <!-- Header with brand and product name -->
                                <div class="mb-5 pb-3 border-b border-[#FF750F]/10">
                                    <div class="text-xs font-medium text-[#FF750F]/90 uppercase tracking-wider mb-2 flex items-center">
                                        <span class="inline-block w-2 h-2 rounded-full bg-[#FF750F] mr-2"></span>
                                        {{ $product->brand ?? 'Elegance Vibe' }}
                                    </div>
                                    <h3 class="product-name-back relative" style="text-align: left; font-size: 1.4rem; color: #333; font-weight: 600;">
                                        {{ $product->name }}
                                        <span class="absolute -bottom-1 left-0 w-12 h-[2px] bg-gradient-to-r from-[#FF750F] to-[#FF750F]/10"></span>
                                    </h3>
                                </div>
                                
                                <!-- Product details with improved styling -->
                                <div class="product-details flex-grow mt-4 space-y-3" style="text-align: left;">
                                    @if($product->description1)
                                    <div class="detail-item flex items-center p-3 rounded-lg transition-all hover:translate-x-1" style="background-color: white; border: 1px solid rgba(255, 117, 15, 0.08); box-shadow: 0 2px 6px rgba(255, 117, 15, 0.03);">
                                        <div class="detail-icon rounded-full flex items-center justify-center" style="background-color: rgba(255, 117, 15, 0.08); color: #FF750F; width: 2rem; height: 2rem; flex-shrink: 0;">
                                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                        <div class="ml-3">
                                            <p class="detail-text" style="color: #444; font-size: 0.95rem; line-height: 1.4;">{{ $product->description1 }}</p>
                                        </div>
                                    </div>
                                    @endif

                                    @if($product->description2)
                                    <div class="detail-item flex items-center p-3 rounded-lg transition-all hover:translate-x-1" style="background-color: white; border: 1px solid rgba(255, 117, 15, 0.08); box-shadow: 0 2px 6px rgba(255, 117, 15, 0.03);">
                                        <div class="detail-icon rounded-full flex items-center justify-center" style="background-color: rgba(255, 117, 15, 0.08); color: #FF750F; width: 2rem; height: 2rem; flex-shrink: 0;">
                                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                        <div class="ml-3">
                                            <p class="detail-text" style="color: #444; font-size: 0.95rem; line-height: 1.4;">{{ $product->description2 }}</p>
                                        </div>
                                    </div>
                                    @endif

                                    @if($product->description3)
                                    <div class="detail-item flex items-center p-3 rounded-lg transition-all hover:translate-x-1" style="background-color: white; border: 1px solid rgba(255, 117, 15, 0.08); box-shadow: 0 2px 6px rgba(255, 117, 15, 0.03);">
                                        <div class="detail-icon rounded-full flex items-center justify-center" style="background-color: rgba(255, 117, 15, 0.08); color: #FF750F; width: 2rem; height: 2rem; flex-shrink: 0;">
                                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                        <div class="ml-3">
                                            <p class="detail-text" style="color: #444; font-size: 0.95rem; line-height: 1.4;">{{ $product->description3 }}</p>
                                        </div>
                                    </div>
                                    @endif

                                    @if($product->brand)
                                    <div class="detail-item flex items-center p-3 rounded-lg transition-all hover:translate-x-1" style="background-color: rgba(255, 117, 15, 0.03); border: 1px solid rgba(255, 117, 15, 0.08); box-shadow: 0 2px 6px rgba(255, 117, 15, 0.03);">
                                        <div class="detail-icon rounded-full flex items-center justify-center" style="background-color: rgba(255, 117, 15, 0.08); color: #FF750F; width: 2rem; height: 2rem; flex-shrink: 0;">
                                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5h14l-4 10H9L5 5z" />
                                            </svg>
                                        </div>
                                        <div class="ml-3">
                                            <p class="detail-text" style="color: #444; font-size: 0.95rem; line-height: 1.4;">Marque: <span class="font-medium text-[#FF750F]">{{ $product->brand }}</span></p>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                
                                <!-- Footer with price and back button -->
                                <div class="product-actions mt-auto pt-4 border-t border-[#FF750F]/10">
                                    <!-- Price and button with price at left and button at far right -->
                                    <div class="flex items-center justify-between w-full">
                                        <span class="product-price-back relative inline-block" style="color: #FF750F; font-size: 1.6rem; font-weight: 700;">
                                            {{ number_format($product->price, 2) }}€
                                        </span>
                                        
                                        <div style="display: flex !important; justify-content: flex-end !important; width: 100% !important;">
                                            <button type="button" 
                                                    onclick="flipCard(this, false)" 
                                                    style="display: flex !important; align-items: center !important; justify-content: center !important;
                                                           background-color: #FF750F !important; color: white !important; font-size: 0.9rem !important;
                                                           box-shadow: 0 3px 10px rgba(255, 117, 15, 0.12) !important; border: 1px solid rgba(255, 117, 15, 0.15) !important;
                                                           font-weight: 500 !important; padding: 0.75rem 1rem !important; transition: all 0.3s ease !important;
                                                           border-radius: 0.5rem !important; width: auto !important; margin: 0 !important;">
                                                <svg xmlns="http://www.w3.org/2000/svg" style="width: 1rem !important; height: 1rem !important; margin-right: 0.375rem !important;" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                </svg>
                                                <span>retourrre</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-16 flex justify-center">
                {{ $products->links() }}
            </div>
        </div>
    </div>
    
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
    <script src="{{ asset('js/products.js') }}"></script>
    
    @push('scripts')
    <script src="{{ asset('js/cart.js') }}"></script>
    @endpush
</x-app-layout>

