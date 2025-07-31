<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimoniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('testimoni')->insert([
            [
                'users_id' => 1,
                'profession' => 'software engineer',
                'content' => 'sangat bagus pelayanan cepat dan ramah dan santun',
                'created_at' => now()
            ],
            [
                'users_id' => 2,
                'profession' => 'backend developer',
                'content' => 'sangat responsive,massive dan sedikit korupsi dana desa',
                'created_at' => now()
            ]
        ]);
    }
}
