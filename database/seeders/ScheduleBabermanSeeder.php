<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
                'schedule_date' => Carbon::now()->format('Y-m-d'),
                'start_time' => Carbon::now()->format('H:i:s'),
                'end_time' => Carbon::now()->format('H:i:s'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'barbermans_id' => 1,
                'schedule_date' => Carbon::now()->timezone('UTC')->format('Y-m-d'),
                'start_time' => Carbon::now()->timezone('UTC')->format('H:i:s'),
                'end_time' => Carbon::now()->timezone('UTC')->format('H:i:s'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'barbermans_id' => 2,
                'schedule_date' => Carbon::now()->timezone('Asia/Makassar')->format('Y-m-d'),
                'start_time' => Carbon::now()->timezone('Asia/Makassar')->format('H:i:s'),
                'end_time' => Carbon::now()->timezone('Asia/Makassar')->format('H:i:s'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
