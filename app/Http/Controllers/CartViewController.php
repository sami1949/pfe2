<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CartViewController extends Controller
{
    public function index()
    {
        $userId = auth()->id();
        Log::info('User ID: ' . $userId);

        $cartItems = CartItem::with('product')
            ->where('user_id', $userId)
            ->get();

        Log::info('Cart Items:', ['count' => $cartItems->count(), 'items' => $cartItems->toArray()]);

        return view('client.cart.index', compact('cartItems'));
    }
} 