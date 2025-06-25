<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'roles_id' => 2,
                'name' => "User Haircut",
                'email' => "haircutuser@gamil.com",
                'password' => Hash::make('HaircutUser123!@#'),
                'no_hp' => '081804228935',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'roles_id' => 2,
                'name' => "Teguh Afrianda",
                'email' => "teguhafrianda@gamil.com",
                'password' => Hash::make('UserTeguhAfrianda123!@#'),
                'no_hp' => '082190486490',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        DB::table('admins')->insert([
            'roles_id' => 1,
            'name' => "Admin Haircut",
            'username' => 'adminhaircut',
            'email' => "haircutadmin@gamil.com",
            'password' => Hash::make('AdminHaircut123!@#'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
