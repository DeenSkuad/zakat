<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeadOfFamiliesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Ketua Keluarga', 'description' => 'Rumah Berbayar'],
            ['name' => 'Ketua Keluarga', 'description' => 'Rumah Percuma'],
            ['name' => 'Tiada', 'description' => null],
        ];

        DB::table('head_of_families')->insert($data);
    }
}
