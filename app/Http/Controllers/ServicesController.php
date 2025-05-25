<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        // Récupérer tous les services avec recherche et la relation category
        $services = Service::with('category')
            ->when($search, function ($query) use ($search) {
                $query->where(function($q) use ($search) {
                    // Recherche par ID
                    if (is_numeric($search)) {
                        $q->where('id', $search);
                    }
                    
                    // Recherche par nom
                    $q->orWhere('name', 'like', '%' . $search . '%');
                });
            })
            ->latest()
            ->paginate(10);

        // Statistiques
        $totalServices = Service::count();

        // Récupérer le service le plus demandé
        $mostRequestedService = Service::withCount('appointments')
            ->orderBy('appointments_count', 'desc')
            ->first();

        return view('admin.services.services', compact(
            'services',
            'totalServices',
            'mostRequestedService'
        ));
    }

    /**
     * Afficher le formulaire de création d'un service
     */
    public function create()
    {
        $categories = ServiceCategory::all();
        return view('admin.services.create', compact('categories'));
    }

    /**
     * Enregistrer un nouveau service
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'description_1' => 'nullable|string',
            'description_2' => 'nullable|string',
            'description_3' => 'nullable|string',
            'gender' => 'required|in:male,female',
            'category_id' => 'required|exists:service_categories,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'icon_1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:1024',
            'icon_2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:1024',
            'price' => 'required|numeric|min:0',
            'duration' => 'required|integer|min:1',
            'is_active' => 'boolean',
            'badge' => 'nullable|string|max:50',
        ]);

        try {
            // Gérer l'upload de l'image principale
            $imagePath = $request->file('image')->store('services', 'public');
            
            // Gérer l'upload des icônes
            $icon1Path = null;
            $icon2Path = null;
            
            if ($request->hasFile('icon_1')) {
                $icon1Path = $request->file('icon_1')->store('services/icons', 'public');
            }
            
            if ($request->hasFile('icon_2')) {
                $icon2Path = $request->file('icon_2')->store('services/icons', 'public');
            }
            
            Service::create([
                'name' => $request->name,
                'description' => $request->description,
                'description_1' => $request->description_1,
                'description_2' => $request->description_2,
                'description_3' => $request->description_3,
                'gender' => $request->gender,
                'category_id' => $request->category_id,
                'image_path' => $imagePath,
                'icon_1' => $icon1Path,
                'icon_2' => $icon2Path,
                'price' => $request->price,
                'duration' => $request->duration,
                'is_active' => $request->boolean('is_active', true),
                'badge' => $request->badge,
            ]);
            
            return redirect()->route('admin.services')->with('success', 'Service créé avec succès!');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la création du service: ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Afficher le formulaire de modification d'un service
     */
    public function edit(Service $service)
    {
        $categories = ServiceCategory::all();
        return view('admin.services.edit', compact('service', 'categories'));
    }

    /**
     * Mettre à jour un service
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'description_1' => 'nullable|string',
            'description_2' => 'nullable|string',
            'description_3' => 'nullable|string',
            'gender' => 'required|in:male,female',
            'category_id' => 'required|exists:service_categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'icon_1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:1024',
            'icon_2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:1024',
            'price' => 'required|numeric|min:0',
            'duration' => 'required|integer|min:1',
            'is_active' => 'boolean',
            'badge' => 'nullable|string|max:50',
        ]);

        try {
            $data = $request->except(['image', 'icon_1', 'icon_2']);
            
            // Gérer l'upload de l'image principale
            if ($request->hasFile('image')) {
                // Supprimer l'ancienne image
                if ($service->image_path) {
                    Storage::disk('public')->delete($service->image_path);
                }
                $data['image_path'] = $request->file('image')->store('services', 'public');
            }
            
            // Gérer l'upload des icônes
            if ($request->hasFile('icon_1')) {
                if ($service->icon_1) {
                    Storage::disk('public')->delete($service->icon_1);
                }
                $data['icon_1'] = $request->file('icon_1')->store('services/icons', 'public');
            }
            
            if ($request->hasFile('icon_2')) {
                if ($service->icon_2) {
                    Storage::disk('public')->delete($service->icon_2);
                }
                $data['icon_2'] = $request->file('icon_2')->store('services/icons', 'public');
            }
            
            $service->update($data);
            
            return redirect()->route('admin.services')->with('success', 'Service modifié avec succès!');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la modification du service: ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Supprimer un service
     */
    public function destroy(Service $service)
    {
        try {
            // Supprimer les fichiers associés
            if ($service->image_path) {
                Storage::disk('public')->delete($service->image_path);
            }
            if ($service->icon_1) {
                Storage::disk('public')->delete($service->icon_1);
            }
            if ($service->icon_2) {
                Storage::disk('public')->delete($service->icon_2);
            }
            
            $service->delete();
            return redirect()->route('admin.services')->with('success', 'Service supprimé avec succès!');
        } catch (\Exception $e) {
            return redirect()->route('admin.services')->with('error', 'Erreur lors de la suppression du service.');
        }
    }
}
