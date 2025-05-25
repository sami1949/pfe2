<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1'
        ]);

        $product = Product::findOrFail($request->product_id);
        
        // Vérifier si le produit existe déjà dans le panier de l'utilisateur actuel
        $cartItem = CartItem::where('user_id', Auth::id())
            ->where('product_id', $product->id)
            ->first();

        if ($cartItem) {
            // Mettre à jour la quantité si le produit existe déjà
            $cartItem->quantity += $request->quantity;
            $cartItem->save();
        } else {
            // Créer un nouvel élément dans le panier
            CartItem::create([
                'user_id' => Auth::id(),
                'product_id' => $product->id,
                'quantity' => $request->quantity,
                'price' => $product->price
            ]);
        }

        return response()->json([
            'message' => 'Produit ajouté au panier avec succès',
            'cart_count' => CartItem::where('user_id', Auth::id())->sum('quantity')
        ]);
    }

    public function getCartCount()
    {
        $count = CartItem::where('user_id', Auth::id())->sum('quantity');
        return response()->json(['count' => $count]);
    }

    public function getCartItems()
    {
        $cartItems = CartItem::with('product')
            ->where('user_id', Auth::id())
            ->get();

        return response()->json(['items' => $cartItems]);
    }

    public function removeFromCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id'
        ]);

        CartItem::where('user_id', Auth::id())
            ->where('product_id', $request->product_id)
            ->delete();

        // Calculer le total du panier
        $total = CartItem::where('user_id', Auth::id())
            ->get()
            ->sum(function($item) {
                return $item->price * $item->quantity;
            });

        return response()->json([
            'success' => true,
            'message' => 'Produit retiré du panier',
            'total' => number_format($total, 2),
            'cart_count' => CartItem::where('user_id', Auth::id())->sum('quantity')
        ]);
    }

    public function clearCart()
    {
        CartItem::where('user_id', Auth::id())->delete();
        
        return response()->json([
            'message' => 'Panier vidé avec succès',
            'cart_count' => 0
        ]);
    }

    public function updateQuantity(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1'
        ]);

        $cartItem = CartItem::where('user_id', Auth::id())
            ->where('product_id', $request->product_id)
            ->first();

        if ($cartItem) {
            $cartItem->quantity = $request->quantity;
            $cartItem->save();

            // Calculer le total du panier
            $total = CartItem::where('user_id', Auth::id())
                ->get()
                ->sum(function($item) {
                    return $item->price * $item->quantity;
                });

            return response()->json([
                'success' => true,
                'message' => 'Quantité mise à jour',
                'price' => $cartItem->price,
                'total' => number_format($total, 2),
                'cart_count' => CartItem::where('user_id', Auth::id())->sum('quantity')
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Produit non trouvé dans le panier'
        ], 404);
    }
}
