<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\User;
use App\Models\Cart;
use App\Models\Product;
use Carbon\Carbon;

class OrderSeeder extends Seeder
{
    public function run()
    {
        $users = User::where('usertype', 'client')->get();
        $products = Product::all();
        
        // Statuts possibles pour les commandes
        $statuses = ['pending', 'paid', 'cancelled'];
        
        // Créer 20 commandes
        for ($i = 0; $i < 20; $i++) {
            $user = $users->random();
            
            // Créer un panier pour la commande
            $cart = Cart::create([
                'user_id' => $user->id,
                'status' => 'checked_out'
            ]);
            
            // Sélectionner 1 à 3 produits aléatoires pour chaque commande
            $orderProducts = $products->random(rand(1, 3));
            
            $totalAmount = 0;
            
            foreach ($orderProducts as $product) {
                $quantity = rand(1, 3);
                $totalAmount += $product->price * $quantity;
                
                // Ajouter le produit au panier
                $cart->items()->create([
                    'product_id' => $product->id,
                    'quantity' => $quantity,
                    'price' => $product->price
                ]);
            }
            
            // Créer la commande
            Order::create([
                'user_id' => $user->id,
                'cart_id' => $cart->id,
                'total_amount' => $totalAmount,
                'status' => $statuses[array_rand($statuses)],
                'created_at' => Carbon::now()->subDays(rand(0, 30)),
            ]);
        }
    }
}
