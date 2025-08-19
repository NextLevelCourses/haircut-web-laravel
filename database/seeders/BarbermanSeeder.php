<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarbermanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barbermans')->insert([
            [
                'name' => 'John Doe',
                'genders_id' => 1,
                'price' => 50000,
                'services_id' => 1,
                'rating' => 4,
                'no_hp' => '081804228936',
                'email' => 'dummy1@gmail.com',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sie Doe',
                'genders_id' => 2,
                'price' => 100000,
                'services_id' => 2,
                'rating' => 5,
                'no_hp' => '081804228932',
                'email' => 'dummy2@gmail.com',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
