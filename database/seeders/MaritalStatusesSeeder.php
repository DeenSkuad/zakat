<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaritalStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Bujang', 'description' => null],
            ['name' => 'Janda / Duda', 'description' => 'Kematian Pasangan'],
            ['name' => 'Berpisah', 'description' => 'Tidak Tinggal Bersama'],
            ['name' => 'Bercerai', 'description' => null],
        ];

        DB::table('marital_statuses')->insert($data);
    }
}
