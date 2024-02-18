<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiseasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Sakit Tulang'],
            ['name' => 'Sakit Buah Pinggang'],
            ['name' => 'Sakit Kepala'],
            ['name' => 'Sakit Jantung'],
            ['name' => 'Tuberculosis'],
        ];

        DB::table('diseases')->insert($data);
    }
}
