<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdultsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Dewasa (18 tahun ke atas)', 'description' => 'Bekerja'],
            ['name' => 'Dewasa (18 tahun ke atas)', 'description' => 'Tidak Bekerja'],
        ];

        DB::table('adults')->insert($data);
    }
}
