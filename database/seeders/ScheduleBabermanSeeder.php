<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScheduleBabermanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('schedules')->insert([
            [
                'barbermans_id' => 1,
                'start_at' => now()->toDateString(),
                'end_at' => now()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'barbermans_id' => 2,
                'start_at' => now()->toDateString(),
                'end_at' => now()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
