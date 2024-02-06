<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OccupationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Pekerja Awam'],
            ['name' => 'Pekerja Swasta'],
            ['name' => 'Tidak Bekerja'],
            ['name' => 'Lain-lain'],
        ];

        DB::table('occupations')->insert($data);
    }
}
