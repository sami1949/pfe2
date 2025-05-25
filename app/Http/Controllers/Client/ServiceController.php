<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function femme()
    {
        $services = ServiceCategory::where('category', 'femme')
            ->where('is_active', true)
            ->orderBy('display_order')
            ->get();

        return view('client.service.servicefemme', compact('services'));
    }

    public function homme()
    {
        $services = ServiceCategory::where('category', 'homme')
            ->where('is_active', true)
            ->orderBy('display_order')
            ->get();

        return view('client.service.servicehomme', compact('services'));
    }

    public function coiffure()
    {
        $services = Service::whereHas('category', function($query) {
            $query->where('slug', 'coiffure')
                  ->where('category', 'femme');
        })->where('is_active', true)->get();
        
        return view('client.service.servicefemme.coiffure', compact('services'));
    }

    public function maquillage()
    {
        $services = Service::whereHas('category', function($query) {
            $query->where('slug', 'maquillage')
                  ->where('category', 'femme');
        })->where('is_active', true)->get();
        
        return view('client.service.servicefemme.maquillage', compact('services'));
    }

    public function soinsvisage()
    {
        $services = Service::whereHas('category', function($query) {
            $query->where('slug', 'soins-visage')
                  ->where('category', 'femme');
        })->where('is_active', true)->get();
        
        return view('client.service.servicefemme.soinsvisage', compact('services'));
    }

    public function epilation()
    {
        $services = Service::whereHas('category', function($query) {
            $query->where('slug', 'epilation')
                  ->where('category', 'femme');
        })->where('is_active', true)->get();
        
        return view('client.service.servicefemme.epilation', compact('services'));
    }

    public function hamam()
    {
        $services = Service::whereHas('category', function($query) {
            $query->where('slug', 'hamam')
                  ->where('category', 'femme');
        })->where('is_active', true)->get();
        
        return view('client.service.servicefemme.hamam', compact('services'));
    }

    public function mariage()
    {
        $services = Service::whereHas('category', function($query) {
            $query->where('slug', 'mariage')
                  ->where('category', 'femme');
        })->where('is_active', true)->get();
        
        return view('client.service.servicefemme.mariage', compact('services'));
    }

    public function massage()
    {
        $services = Service::whereHas('category', function($query) {
            $query->where('slug', 'massage')
                  ->where('category', 'femme');
        })->where('is_active', true)->get();
        
        return view('client.service.servicefemme.massage', compact('services'));
    }

    public function regard()
    {
        $services = Service::whereHas('category', function($query) {
            $query->where('slug', 'regard')
                  ->where('category', 'femme');
        })->where('is_active', true)->get();
        
        return view('client.service.servicefemme.regard', compact('services'));
    }

    public function soinsmain()
    {
        $services = Service::whereHas('category', function($query) {
            $query->where('slug', 'soins-main')
                  ->where('category', 'femme');
        })->where('is_active', true)->get();
        
        return view('client.service.servicefemme.soinsmain', compact('services'));
    }

    public function soinscorps()
    {
        $services = Service::whereHas('category', function($query) {
            $query->where('slug', 'soins-corps')
                  ->where('category', 'femme');
        })->where('is_active', true)->get();
        
        return view('client.service.servicefemme.soinscorps', compact('services'));
    }

    public function soinspieds()
    {
        $services = Service::whereHas('category', function($query) {
            $query->where('slug', 'soins-pieds')
                  ->where('category', 'femme');
        })->where('is_active', true)->get();
        
        return view('client.service.servicefemme.soinspieds', compact('services'));
    }

    public function spa()
    {
        $services = Service::whereHas('category', function($query) {
            $query->where('slug', 'spa')
                  ->where('category', 'femme');
        })->where('is_active', true)->get();
        
        return view('client.service.servicefemme.spa', compact('services'));
    }

    public function voilee()
    {
        $services = Service::whereHas('category', function($query) {
            $query->where('slug', 'voilee')
                  ->where('category', 'femme');
        })->where('is_active', true)->get();
        
        return view('client.service.servicefemme.voilee', compact('services'));
    }

    public function fille()
    {
        $services = Service::whereHas('category', function($query) {
            $query->where('slug', 'fille')
                  ->where('category', 'femme');
        })->where('is_active', true)->get();
        
        return view('client.service.servicefemme.fille', compact('services'));
    }

    public function showAllServices()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }
}