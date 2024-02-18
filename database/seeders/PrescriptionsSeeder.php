<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrescriptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Antibiotik'],
            ['name' => 'Ubat Batuk'],
            ['name' => 'Ubat Cacing'],
            ['name' => 'Ubat Sakit Jantung'],
        ];

        DB::table('prescriptions')->insert($data);
    }
}
