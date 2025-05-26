<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // Base query
        $query = Product::where('status', 'available');
        
        // Get current gender and category from route parameters
        $currentGender = $request->route('gender');
        $category = $request->route('category');
        $subcategory = $request->route('subcategory');
        
        // Apply filters from request
        if ($request->filled('price_range')) {
            $priceRange = $request->input('price_range');
            if ($priceRange === '0-25') {
                $query->where('price', '<', 25);
            } elseif ($priceRange === '25-50') {
                $query->whereBetween('price', [25, 50]);
            } elseif ($priceRange === '50-100') {
                $query->whereBetween('price', [50, 100]);
            } elseif ($priceRange === '100+') {
                $query->where('price', '>=', 100);
            }
        }
        
        if ($request->filled('brand')) {
            $query->where('brand', $request->input('brand'));
        }
        
        if ($request->filled('is_new') && $request->input('is_new') == '1') {
            $query->where('is_new', true);
        }
        
        // Apply sorting
        if ($request->filled('sort')) {
            $sort = $request->input('sort');
            if ($sort === 'price-asc') {
                $query->orderBy('price', 'asc');
            } elseif ($sort === 'price-desc') {
                $query->orderBy('price', 'desc');
            } elseif ($sort === 'name-asc') {
                $query->orderBy('name', 'asc');
            } elseif ($sort === 'name-desc') {
                $query->orderBy('name', 'desc');
            } else {
                $query->latest(); // Default: newest first
            }
        } else {
            $query->latest(); // Default: newest first
        }
        
        // Get all products for the view
        $products = $query->paginate(12)->appends($request->except('page'));
        
        // Get categories and subcategories for the navigation
        $categories = Product::getCategories();
        
        // Get all brands for the filter
        $brands = Product::select('brand')
            ->distinct()
            ->whereNotNull('brand')
            ->pluck('brand');
        
        // Get price ranges for the filter
        $priceRanges = [
            '' => 'Tous les prix',
            '0-25' => 'Moins de 25€',
            '25-50' => '25€ - 50€',
            '50-100' => '50€ - 100€',
            '100+' => 'Plus de 100€'
        ];
        
        // Get sort options for the filter
        $sortOptions = [
            'newest' => 'Plus récents',
            'price-asc' => 'Prix croissant',
            'price-desc' => 'Prix décroissant',
            'name-asc' => 'Nom (A-Z)',
            'name-desc' => 'Nom (Z-A)'
        ];
        
        // Pass all data to the view
        return view('client.products.index', compact(
            'products',
            'categories',
            'currentGender',
            'category',
            'subcategory',
            'brands',
            'priceRanges',
            'sortOptions'
        ));
    }
}