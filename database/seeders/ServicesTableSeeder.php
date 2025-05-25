<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Coupe Femme',
                'description' => 'Coupe et mise en forme pour femmes',
                'price' => 200.00,
                'duration' => 60,
                'category' => 'female'
            ],
            [
                'name' => 'Coupe Homme',
                'description' => 'Coupe et style pour hommes',
                'price' => 150.00,
                'duration' => 45,
                'category' => 'male'
            ],
            [
                'name' => 'Coloration Complète',
                'description' => 'Coloration professionnelle avec produits de qualité',
                'price' => 450.00,
                'duration' => 120,
                'category' => 'female'
            ],
            [
                'name' => 'Mèches et Balayage',
                'description' => 'Technique de coloration pour un effet naturel',
                'price' => 550.00,
                'duration' => 150,
                'category' => 'female'
            ],
            [
                'name' => 'Brushing',
                'description' => 'Mise en forme et brushing professionnel',
                'price' => 150.00,
                'duration' => 45,
                'category' => 'female'
            ],
            [
                'name' => 'Soin Profond',
                'description' => 'Traitement nourrissant pour cheveux',
                'price' => 250.00,
                'duration' => 60,
                'category' => 'female'
            ],
            [
                'name' => 'Lissage Brésilien',
                'description' => 'Lissage longue durée avec produits brésiliens',
                'price' => 800.00,
                'duration' => 180,
                'category' => 'female'
            ],
            [
                'name' => 'Coiffure Mariage',
                'description' => 'Coiffure élégante pour mariées',
                'price' => 600.00,
                'duration' => 120,
                'category' => 'female'
            ],
            [
                'name' => 'Coupe Enfant',
                'description' => 'Coupe adaptée pour enfants',
                'price' => 100.00,
                'duration' => 30,
                'category' => 'female'
            ],
            [
                'name' => 'Barbe et Rasage',
                'description' => 'Taille de barbe et rasage traditionnel',
                'price' => 120.00,
                'duration' => 45,
                'category' => 'male'
            ]
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
