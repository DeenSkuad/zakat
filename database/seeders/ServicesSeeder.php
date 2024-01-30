<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Bantuan Perubatan'],
            ['name' => 'Bantuan Rumah Sewa'],
            ['name' => 'Pembinaan Rumah Berkelompok'],
            ['name' => 'Pengurusan Rumah Orang Tua'],
            ['name' => 'Pengurusan Jenazah Fakir'],
            ['name' => 'Pembinaan Rumah Individu'],
            ['name' => 'Membaikpulih Rumah'],
            ['name' => 'Saguhati Hari Raya'],
            ['name' => 'Bantuan Kecemasan / Runcit'],
            ['name' => 'Bantuan Kewangan Bulanan'],
            ['name' => 'Plumbing & Wiring Rumah'],
            ['name' => 'Projek Asnaf'],
            ['name' => 'Bantuan Makanan Bulanan'],
            ['name' => 'Kursus Latihan'],
        ];

        DB::table('services')->insert($data);
    }
}
