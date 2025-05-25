<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Création de l'administrateur
        User::create([
            'first_name' => 'Admin',
            'last_name' => 'System',
            'email' => 'admin@elagancevibe.com',
            'password' => Hash::make('admin123'),
            'usertype' => 'admin',
            'phone' => '0600000000',
            'gender' => 'male'
        ]);

        // Création de 20 clients
        $firstNames = ['Sophie', 'Emma', 'Léa', 'Chloé', 'Julie', 'Sarah', 'Marie', 'Laura', 'Camille', 'Inès'];
        $lastNames = ['Martin', 'Bernard', 'Dubois', 'Thomas', 'Robert', 'Richard', 'Petit', 'Durand', 'Leroy', 'Moreau'];
        $genders = ['male', 'female'];

        for ($i = 1; $i <= 20; $i++) {
            $firstName = $firstNames[array_rand($firstNames)];
            $lastName = $lastNames[array_rand($lastNames)];
            $gender = $genders[array_rand($genders)];
            
            User::create([
                'first_name' => $firstName,
                'last_name' => $lastName,
                'email' => strtolower($firstName) . '.' . strtolower($lastName) . $i . '@example.com',
                'password' => Hash::make('password123'),
                'usertype' => 'client',
                'phone' => '06' . str_pad(rand(0, 99999999), 8, '0', STR_PAD_LEFT),
                'gender' => $gender
            ]);
        }
    }
}
