<?php

namespace App\Http\Controllers;

use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ServiceCategoryController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $categories = ServiceCategory::when($search, function ($query) use ($search) {
            $query->where('title', 'like', '%' . $search . '%');
        })
        ->orderBy('display_order')
        ->paginate(10);

        // Statistiques
        $totalCategories = ServiceCategory::count();
        $femmeCategories = ServiceCategory::where('category', 'femme')->count();
        $hommeCategories = ServiceCategory::where('category', 'homme')->count();

        return view('admin.service_categories.categories', compact(
            'categories',
            'totalCategories',
            'femmeCategories',
            'hommeCategories'
        ));
    }

    public function create()
    {
        return view('admin.service_categories.create');
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'category' => 'required|in:homme,femme',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'icon' => 'nullable|string',
                'route_name' => 'nullable|string|max:255',
                'is_active' => 'boolean',
                'display_order' => 'required|integer|min:0',
            ]);

            if (!$request->hasFile('image')) {
                return back()->with('error', 'L\'image est requise.')->withInput();
            }

            $image = $request->file('image');
            if (!$image->isValid()) {
                return back()->with('error', 'L\'image n\'est pas valide.')->withInput();
            }

            $imagePath = $image->store('categories', 'public');
            if (!$imagePath) {
                return back()->with('error', 'Erreur lors de l\'upload de l\'image.')->withInput();
            }
            
            $category = ServiceCategory::create([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'description' => $request->description,
                'category' => $request->category,
                'image_path' => $imagePath,
                'icon' => $request->icon,
                'route_name' => $request->route_name,
                'is_active' => $request->boolean('is_active', true),
                'display_order' => $request->display_order,
            ]);

            if (!$category) {
                Storage::disk('public')->delete($imagePath);
                return back()->with('error', 'Erreur lors de la création de la catégorie.')->withInput();
            }
            
            return redirect()->route('admin.categories')->with('success', 'Catégorie créée avec succès!');
        } catch (\Exception $e) {
            \Log::error('Erreur lors de la création de la catégorie: ' . $e->getMessage());
            \Log::error($e->getTraceAsString());
            return back()->with('error', 'Erreur lors de la création de la catégorie: ' . $e->getMessage())->withInput();
        }
    }

    public function edit(ServiceCategory $category)
    {
        return view('admin.service_categories.edit', compact('category'));
    }

    public function update(Request $request, ServiceCategory $category)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|in:homme,femme',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'icon' => 'nullable|string',
            'route_name' => 'nullable|string|max:255',
            'is_active' => 'boolean',
            'display_order' => 'required|integer|min:0',
        ]);

        try {
            $data = $request->except('image');
            $data['slug'] = Str::slug($request->title);
            
            if ($request->hasFile('image')) {
                if ($category->image_path) {
                    Storage::disk('public')->delete($category->image_path);
                }
                $data['image_path'] = $request->file('image')->store('categories', 'public');
            }
            
            $category->update($data);
            
            return redirect()->route('admin.categories')->with('success', 'Catégorie modifiée avec succès!');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la modification de la catégorie: ' . $e->getMessage())->withInput();
        }
    }

    public function destroy(ServiceCategory $category)
    {
        try {
            if ($category->image_path) {
                Storage::disk('public')->delete($category->image_path);
            }
            
            $category->delete();
            return redirect()->route('admin.categories')->with('success', 'Catégorie supprimée avec succès!');
        } catch (\Exception $e) {
            return redirect()->route('admin.categories')->with('error', 'Erreur lors de la suppression de la catégorie.');
        }
    }
} 