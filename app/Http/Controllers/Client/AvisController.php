<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\AvisMail;

class AvisController extends Controller
{
    public function store(Request $request)
    {
        try {
            // Valider les données
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'rating' => 'required|integer|min:1|max:5',
                'message' => 'required|string',
            ]);

            Log::info('Données validées avec succès', $validatedData);

            // Envoyer l'email
            try {
                Mail::to('elbandoudiaya1@gmail.com')->send(new AvisMail($validatedData));
                Log::info('Email envoyé avec succès');

                return response()->json([
                    'success' => true,
                    'message' => 'Merci pour votre avis !'
                ]);
            } catch (\Exception $mailError) {
                Log::error('Erreur lors de l\'envoi de l\'email: ' . $mailError->getMessage());
                Log::error('Stack trace: ' . $mailError->getTraceAsString());
                
                throw $mailError;
            }
        } catch (\Exception $e) {
            Log::error('Erreur lors de l\'envoi de l\'avis: ' . $e->getMessage());
            Log::error('Stack trace: ' . $e->getTraceAsString());

            return response()->json([
                'success' => false,
                'message' => 'Une erreur est survenue lors de l\'envoi de l\'avis. Veuillez réessayer.'
            ], 500);
        }
    }
}