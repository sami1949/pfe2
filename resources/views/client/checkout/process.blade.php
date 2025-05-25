<x-app-layout>
    <div class="min-h-screen bg-gray-50 py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto">
                <!-- En-tête -->
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900">Finaliser votre commande</h2>
                    <p class="mt-2 text-gray-600">Veuillez vérifier vos informations et procéder au paiement</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Formulaire de paiement -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                        <div class="p-6 border-b border-gray-200">
                            <h3 class="text-xl font-semibold text-gray-900">Informations de paiement</h3>
                        </div>
                        <form action="{{ route('checkout.process') }}" method="POST" class="p-6 space-y-8">
                            @csrf
                            
                            <!-- Informations personnelles -->
                            <div class="space-y-6">
                                <h4 class="text-lg font-medium text-gray-900">Informations personnelles</h4>
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label for="first_name" class="block text-sm font-medium text-gray-700">Prénom</label>
                                        <input type="text" name="first_name" id="first_name" required 
                                               class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500">
                                    </div>
                                    <div>
                                        <label for="last_name" class="block text-sm font-medium text-gray-700">Nom</label>
                                        <input type="text" name="last_name" id="last_name" required 
                                               class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500">
                                    </div>
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <input type="email" name="email" id="email" required 
                                           class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500">
                                </div>
                            </div>

                            <!-- Adresse de livraison -->
                            <div class="space-y-6">
                                <h4 class="text-lg font-medium text-gray-900">Adresse de livraison</h4>
                                <div>
                                    <label for="address" class="block text-sm font-medium text-gray-700">Adresse</label>
                                    <input type="text" name="address" id="address" required 
                                           class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500">
                                </div>
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label for="city" class="block text-sm font-medium text-gray-700">Ville</label>
                                        <input type="text" name="city" id="city" required 
                                               class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500">
                                    </div>
                                    <div>
                                        <label for="postal_code" class="block text-sm font-medium text-gray-700">Code postal</label>
                                        <input type="text" name="postal_code" id="postal_code" required 
                                               class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500">
                                    </div>
                                </div>
                            </div>

                            <!-- Informations de paiement -->
                            <div class="space-y-6">
                                <h4 class="text-lg font-medium text-gray-900">Informations de paiement</h4>
                                <div>
                                    <label for="card_number" class="block text-sm font-medium text-gray-700">Numéro de carte</label>
                                    <div class="mt-1 relative rounded-lg shadow-sm">
                                        <input type="text" name="card_number" id="card_number" required 
                                               class="block w-full rounded-lg border-gray-300 pl-10 focus:border-green-500 focus:ring-green-500"
                                               placeholder="1234 5678 9012 3456">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fas fa-credit-card text-gray-400"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label for="expiry_date" class="block text-sm font-medium text-gray-700">Date d'expiration</label>
                                        <div class="mt-1 relative rounded-lg shadow-sm">
                                            <input type="text" name="expiry_date" id="expiry_date" required 
                                                   class="block w-full rounded-lg border-gray-300 pl-10 focus:border-green-500 focus:ring-green-500"
                                                   placeholder="MM/AA">
                                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <i class="far fa-calendar-alt text-gray-400"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="cvv" class="block text-sm font-medium text-gray-700">CVV</label>
                                        <div class="mt-1 relative rounded-lg shadow-sm">
                                            <input type="text" name="cvv" id="cvv" required 
                                                   class="block w-full rounded-lg border-gray-300 pl-10 focus:border-green-500 focus:ring-green-500"
                                                   placeholder="123">
                                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <i class="fas fa-lock text-gray-400"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Boutons d'action -->
                            <div class="flex justify-between items-center pt-6 border-t border-gray-200">
                                <a href="{{ route('cart') }}" 
                                   class="inline-flex items-center px-6 py-3 border border-gray-300 shadow-sm text-base font-medium rounded-lg text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                    <i class="fas fa-arrow-left mr-2"></i>
                                    Retour au panier
                                </a>
                                <button type="submit" 
                                        class="inline-flex items-center px-8 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                    Confirmer le paiement
                                    <i class="fas fa-lock ml-2"></i>
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Récapitulatif de la commande -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                        <div class="p-6 border-b border-gray-200 bg-gradient-to-r from-green-50 to-green-100">
                            <h3 class="text-xl font-semibold text-gray-900 flex items-center">
                                <i class="fas fa-shopping-bag mr-2 text-green-600"></i>
                                Récapitulatif de la commande
                            </h3>
                        </div>
                        <div class="p-6 space-y-6">
                            <div class="space-y-4">
                                @foreach($cartItems as $item)
                                    <div class="flex items-center space-x-4 p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors duration-200">
                                        <div class="w-24 h-24 bg-white rounded-lg overflow-hidden flex-shrink-0 shadow-sm">
                                            <img src="{{ asset('storage/' . $item->product->image) }}" 
                                                 alt="{{ $item->product->name }}" 
                                                 class="w-full h-full object-cover">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <h4 class="text-lg font-medium text-gray-900 truncate">{{ $item->product->name }}</h4>
                                            <div class="mt-1 flex items-center text-sm text-gray-500">
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full bg-green-100 text-green-800">
                                                    <i class="fas fa-hashtag mr-1 text-xs"></i>
                                                    {{ $item->quantity }}
                                                </span>
                                                <span class="mx-2">×</span>
                                                <span class="font-medium text-gray-900">{{ number_format($item->price, 2) }} €</span>
                                            </div>
                                            <p class="text-base font-medium text-green-600 mt-2">
                                                {{ number_format($item->price * $item->quantity, 2) }} €
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            
                            <div class="border-t border-gray-200 pt-6 mt-6 space-y-4">
                                <div class="flex justify-between items-center text-gray-600">
                                    <span>Sous-total</span>
                                    <span>{{ number_format($cartItems->sum(function($item) { return $item->price * $item->quantity; }), 2) }} €</span>
                                </div>
                                <div class="flex justify-between items-center text-gray-600">
                                    <span>Livraison</span>
                                    <span>Gratuite</span>
                                </div>
                                <div class="flex justify-between items-center pt-4 border-t border-gray-200">
                                    <span class="text-lg font-medium text-gray-900">Total</span>
                                    <div class="text-right">
                                        <span class="text-2xl font-bold text-green-600">
                                            {{ number_format($cartItems->sum(function($item) { return $item->price * $item->quantity; }), 2) }} €
                                        </span>
                                        <p class="text-sm text-gray-500 mt-1">TVA incluse</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6 p-4 bg-green-50 rounded-lg border border-green-100">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <i class="fas fa-shield-alt text-green-600 text-xl"></i>
                                    </div>
                                    <div class="ml-3">
                                        <h4 class="text-sm font-medium text-green-800">Paiement sécurisé</h4>
                                        <p class="text-sm text-green-700 mt-1">
                                            Vos informations de paiement sont protégées par un cryptage de niveau bancaire.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 