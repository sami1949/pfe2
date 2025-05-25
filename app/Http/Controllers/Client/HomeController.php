<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        // Récupérer les produits disponibles
        $products = Product::where('status', 'available')
                         ->latest()
                         ->take(6)
                         ->get();

        // Récupérer les services disponibles
        $services = Service::latest()
                         ->take(6)
                         ->get();

        return view('client.home.index', compact('products', 'services'));
    }
} 