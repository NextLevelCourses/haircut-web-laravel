<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'name' => 'Haircut',
                'description' => 'Layanan potong rambut untuk pria',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Coloring',
                'description' => 'Layanan cukur jenggot untuk pria',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
