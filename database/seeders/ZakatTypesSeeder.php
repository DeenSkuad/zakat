<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZakatTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('zakat_types')->insert([
            ['name' => 'Zakat Pendapatan'],
            ['name' => 'Zakat Pertanian'],
            ['name' => 'Zakat Simpanan'],
            ['name' => 'Zakat Perniagaan'],
            ['name' => 'Zakat Emas & Perak'],
        ]);
    }
}
