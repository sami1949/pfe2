<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-8">
            <div class="text-center mb-8">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-check text-3xl text-green-600"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Commande Confirmée</h2>
                <p class="text-gray-600">Merci pour votre commande !</p>
            </div>

            <div class="border-t border-gray-200 pt-6">
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Détails de la commande</h3>
                    <div class="bg-gray-50 rounded-lg p-4">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <p class="text-sm text-gray-600">Numéro de commande</p>
                                <p class="font-medium">#{{ $order->id }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Date</p>
                                <p class="font-medium">{{ $order->created_at->format('d/m/Y H:i') }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Statut</p>
                                <p class="font-medium capitalize">{{ $order->status }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Total</p>
                                <p class="font-medium">{{ number_format($order->total_amount, 2) }} €</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Articles commandés</h3>
                    <div class="space-y-4">
                        @foreach($order->items as $item)
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="w-16 h-16 bg-gray-100 rounded-md overflow-hidden">
                                        <img src="{{ asset('storage/' . $item->product->image) }}" alt="{{ $item->product->name }}" class="w-full h-full object-cover">
                                    </div>
                                    <div class="ml-4">
                                        <p class="font-medium">{{ $item->product->name }}</p>
                                        <p class="text-sm text-gray-600">Quantité: {{ $item->quantity }}</p>
                                    </div>
                                </div>
                                <p class="font-medium">{{ number_format($item->price * $item->quantity, 2) }} €</p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="flex justify-center space-x-4">
                    <a href="{{ route('product.private') }}" class="px-6 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700 transition-colors duration-200">
                        Continuer les achats
                    </a>
                    <a href="#" class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors duration-200">
                        Voir mes commandes
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 