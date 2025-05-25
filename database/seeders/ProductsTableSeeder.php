<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Shampooing Professionnel',
                'description' => 'Shampooing haute qualité pour tous types de cheveux',
                'price' => 149.99,
                'quantity' => rand(10, 50),
                'category' => 'female',
                'status' => 'available'
            ],
            [
                'name' => 'Après-shampooing Réparateur',
                'description' => 'Soin réparateur intense pour cheveux abîmés',
                'price' => 179.99,
                'quantity' => rand(10, 50),
                'category' => 'female',
                'status' => 'available'
            ],
            [
                'name' => 'Huile d\'Argan Pure',
                'description' => 'Huile naturelle pour cheveux et corps',
                'price' => 299.99,
                'quantity' => rand(10, 50),
                'category' => 'female',
                'status' => 'available'
            ],
            [
                'name' => 'Masque Capillaire Intense',
                'description' => 'Masque nourrissant pour cheveux secs',
                'price' => 199.99,
                'quantity' => rand(10, 50),
                'category' => 'female',
                'status' => 'available'
            ],
            [
                'name' => 'Sérum Pointes Abîmées',
                'description' => 'Sérum réparateur pour pointes fourchues',
                'price' => 159.99,
                'quantity' => rand(10, 50),
                'category' => 'female',
                'status' => 'available'
            ],
            [
                'name' => 'Brosse Démêlante Pro',
                'description' => 'Brosse professionnelle anti-nœuds',
                'price' => 129.99,
                'quantity' => rand(10, 50),
                'category' => 'female',
                'status' => 'available'
            ],
            [
                'name' => 'Laque Fixation Forte',
                'description' => 'Laque professionnelle longue tenue',
                'price' => 89.99,
                'quantity' => rand(10, 50),
                'category' => 'female',
                'status' => 'available'
            ],
            [
                'name' => 'Gel Coiffant',
                'description' => 'Gel coiffant effet naturel',
                'price' => 79.99,
                'quantity' => rand(10, 50),
                'category' => 'male',
                'status' => 'available'
            ],
            [
                'name' => 'Crème Hydratante',
                'description' => 'Crème hydratante pour cheveux secs',
                'price' => 169.99,
                'quantity' => rand(10, 50),
                'category' => 'female',
                'status' => 'available'
            ],
            [
                'name' => 'Kit Coloration Pro',
                'description' => 'Kit de coloration professionnelle',
                'price' => 399.99,
                'quantity' => rand(10, 50),
                'category' => 'female',
                'status' => 'available'
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}