<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Appointment;
use App\Models\User;
use App\Models\Service;
use Carbon\Carbon;

class AppointmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Créer un employé pour les rendez-vous
        $employee = User::create([
            'first_name' => 'Sarah',
            'last_name' => 'Coiffeuse',
            'email' => 'sarah.coiffeuse@elagancevibe.com',
            'password' => bcrypt('password123'),
            'usertype' => 'employee',
            'phone' => '0611223344',
            'gender' => 'female',
            'specialty' => 'Coiffure femme'
        ]);

        $clients = User::where('usertype', 'client')->get();
        $services = Service::all();
        
        // Statuts possibles pour les rendez-vous
        $statuses = ['pending', 'confirmed', 'completed', 'cancelled'];
        
        // Créer 20 rendez-vous
        for ($i = 0; $i < 20; $i++) {
            $service = $services->random();
            $client = $clients->random();
            
            // Générer une date aléatoire dans les 30 prochains jours
            $date = Carbon::now()->addDays(rand(1, 30));
            $time = sprintf('%02d:00:00', rand(9, 17)); // Entre 9h et 17h
            
            Appointment::create([
                'date' => $date->format('Y-m-d'),
                'time' => $time,
                'client_id' => $client->id,
                'employee_id' => $employee->id,
                'service_id' => $service->id,
                'status' => $statuses[array_rand($statuses)]
            ]);
        }
    }
}
