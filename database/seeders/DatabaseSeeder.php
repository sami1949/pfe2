<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            ServiceCategorySeeder::class,
            ProductsTableSeeder::class,    // Crée les produits
            ServicesTableSeeder::class,    // Crée les services
            AppointmentsTableSeeder::class, // Crée les rendez-vous
            OrderSeeder::class,            // Crée les commandes
        ]);
    }
}
