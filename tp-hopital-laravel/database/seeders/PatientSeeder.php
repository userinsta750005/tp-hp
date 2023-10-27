<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatientSeeder extends Seeder
{
    public function run()
    {
        DB::table('patients')->delete();

        for ($i = 1; $i <= 6; $i++) {
            DB::table('patients')->insert([
                'nom' => 'Patient Nom ' . $i,
                'prenom' => 'Patient Prénom ' . $i,
                'date_de_naissance' => now()->subYears(30)->addDays($i), 
                'adresse' => 'Adresse Patient ' . $i,
                'age' => rand(20, 70),
                'tel' => '123456789' . $i,
                'ailment' => 'Ailment Patient ' . $i,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
