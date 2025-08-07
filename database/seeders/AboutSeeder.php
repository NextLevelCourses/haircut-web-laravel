<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('about_us')->insert([
            'title' => 'Kenyamanan tempat cukur yang tidak ada duanya',
            'description_title' => 'Kami adalah barbershop dengan sentuhan modern dan nuansa klasik. Dengan tempat yang bersih, nyaman, serta barber yang profesional, kami hadir untuk memberi pengalaman cukur rambut terbaik.

Lokasi kami sering dijadikan tempat event komunitas dan kunjungan klien tetap. Setiap minggu kami menerima kunjungan dari pelanggan tetap, termasuk artis lokal dan tokoh komunitas.',
            'since' => '2008',
            'description_since' => 'Telah melayani ribuan pelanggan dengan konsistensi dan kualitas tinggi.',
            'client' => '1.5M Happy Clients',
            'description_client' => 'Banyak pelanggan yang kembali secara rutin dan memberikan testimoni positif',
            'experience' => '30',
            'location' => 'Jalan Jambu Mente,King Adham Pratama',
            'work_phone' => '08180422xxxx',
            'work_email' => 'about@email.com',
            'created_at' => now()
        ]);
    }
}
