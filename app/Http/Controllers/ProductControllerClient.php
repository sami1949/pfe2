<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductControllerClient extends Controller
{
    public function index(Request $request)
    {
        // Get parameters from route or query string
        $gender = $request->route('gender') ?? $request->query('gender', Product::GENDER_FEMME);
        $category = $request->route('category') ?? $request->query('category');
        $subcategory = $request->route('subcategory') ?? $request->query('subcategory');
        // Nombre de produits par page
        $perPage = 9;

        // Get cart items from cookie
        $userId = auth()->id() ?? 'guest';
        $cartKey = 'cart_'.$userId;
        $cartItems = json_decode($request->cookie($cartKey), true) ?? [];

        // Debug log the incoming parameters
        \Illuminate\Support\Facades\Log::info('Product Filter Parameters:', [
            'gender' => $gender,
            'category' => $category,
            'subcategory' => $subcategory,
            'route_params' => $request->route()->parameters(),
            'query_params' => $request->query()
        ]);

        // Get products based on gender, category and subcategory filter
        $query = Product::query();
        
        if ($gender) {
            $query->where('gender', $gender);
        }
        
        if ($category) {
            $query->where('category', $category);
            
            // Debug log the category filter
            \Illuminate\Support\Facades\Log::info('Category Filter:', [
                'category' => $category,
                'sql' => $query->toSql(),
                'bindings' => $query->getBindings()
            ]);
        }

        if ($subcategory) {
            $query->where('subcategory', $subcategory);
            
            // Debug log the subcategory filter
            \Illuminate\Support\Facades\Log::info('Subcategory Filter:', [
                'subcategory' => $subcategory,
                'sql' => $query->toSql(),
                'bindings' => $query->getBindings()
            ]);
        }

        // Utiliser la pagination standard de Laravel
        $products = $query->paginate($perPage)->withQueryString();

        // Debug log the results
        \Illuminate\Support\Facades\Log::info('Query Results:', [
            'total_products' => $products->total(),
            'products_returned' => $products->count(),
            'products' => $products->pluck('name', 'id')
        ]);

        // Get available categories based on gender
        $categories = Product::getCategoriesByGender($gender);
        
        // Get subcategories for each category
        $subcategories = [];
        foreach (array_keys($categories) as $cat) {
            $subcategories[$cat] = Product::getSubcategoriesByCategory($cat);
        }

        if ($request->ajax()) {
            $view = view('client.products.partials.product-cards', [
                'products' => $products,
                'category' => $category,
                'subcategory' => $subcategory,
                'cartItems' => $cartItems
            ])->render();
            
            return response()->json([
                'html' => $view,
                'hasMore' => $products->hasMorePages(),
                'debug' => [
                    'count' => $products->count(),
                    'category' => $category,
                    'subcategory' => $subcategory
                ]
            ]);
        }

        return view('client.products.index', [
            'products' => $products,
            'category' => $category,
            'subcategory' => $subcategory,
            'currentGender' => $gender,
            'categories' => $categories,
            'subcategories' => $subcategories,
            'cartItems' => $cartItems
        ]);
    }

    public function addToCart(Request $request)
    {
        // Only authenticated users can add to cart
        if (!auth()->check()) {
            return response()->json(['error' => 'Please login to add items to cart'], 401);
        }

        // Rest of add to cart logic
    }

    public function publicIndex()
    {
        return $this->handleProductsView(null, false);
    }

    public function publicCategory($category)
    {
        return $this->handleProductsView($category, false);
    }

    public function privateIndex()
    {
        return $this->handleProductsView(null, true);
    }

    public function privateCategory($category)
    {
        return $this->handleProductsView($category, true);
    }

    private function handleProductsView($category, $isPrivate)
    {
        $gender = request()->query('gender', Product::GENDER_FEMME);
        $products = Product::query();
        
        if ($gender) {
            $products->where('gender', $gender);
        }
        
        if ($category) {
            $products->where('category', $category);
        }
        
        $products = $products->paginate(12);
        $categories = Product::getCategoriesByGender($gender);
        
        return view('products.index', [
            'products' => $products,
            'category' => $category,
            'isPrivate' => $isPrivate,
            'currentGender' => $gender,
            'categories' => $categories
        ]);
    }
}