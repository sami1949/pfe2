<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function show()
    {
        $cartItems = CartItem::with('product')
            ->where('user_id', Auth::id())
            ->get();

        if ($cartItems->isEmpty()) {
            return redirect()->route('cart')->with('error', 'Votre panier est vide.');
        }

        return view('client.checkout.process', compact('cartItems'));
    }

    public function process(Request $request)
    {
        try {
            DB::beginTransaction();

            // Récupérer les articles du panier
            $cartItems = CartItem::with('product')
                ->where('user_id', Auth::id())
                ->get();

            if ($cartItems->isEmpty()) {
                return redirect()->route('cart')->with('error', 'Votre panier est vide.');
            }

            // Calculer le total
            $total = $cartItems->sum(function ($item) {
                return $item->price * $item->quantity;
            });

            // Créer la commande
            $order = Order::create([
                'user_id' => Auth::id(),
                'total_amount' => $total,
                'status' => 'pending',
                'payment_status' => 'pending'
            ]);

            // Créer les éléments de la commande
            foreach ($cartItems as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $item->product_id,
                    'quantity' => $item->quantity,
                    'price' => $item->price
                ]);
            }

            // Vider le panier
            CartItem::where('user_id', Auth::id())->delete();

            DB::commit();

            // Rediriger vers la page de confirmation
            return redirect()->route('checkout.success', ['order' => $order->id])
                           ->with('success', 'Votre commande a été enregistrée avec succès.');

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('cart')
                           ->with('error', 'Une erreur est survenue lors du traitement de votre commande.');
        }
    }

    public function success(Order $order)
    {
        return view('client.checkout.success', compact('order'));
    }
} 