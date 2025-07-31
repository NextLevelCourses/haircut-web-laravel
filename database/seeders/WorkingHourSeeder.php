<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkingHourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('working_hour')->insert([
            [
                'day' => 'Senin',
                'start_at' => '08:30',
                'end_at' => '14:30',
                'created_at' => now()
            ],
            [
                'day' => 'Selasa',
                'start_at' => '08:30',
                'end_at' => '14:30',
                'created_at' => now()
            ],
            [
                'day' => 'Rabu',
                'start_at' => '08:30',
                'end_at' => '14:30',
                'created_at' => now()
            ],
            [
                'day' => 'Kamis',
                'start_at' => '08:30',
                'end_at' => '14:30',
                'created_at' => now()
            ],
            [
                'day' => 'Jumat',
                'start_at' => '08:30',
                'end_at' => '14:30',
                'created_at' => now()
            ],
            [
                'day' => 'Sabtu',
                'start_at' => null,
                'end_at' => null,
                'created_at' => now()
            ],
            [
                'day' => 'Minggu',
                'start_at' => null,
                'end_at' => null,
                'created_at' => now()
            ]
        ]);
    }
}
