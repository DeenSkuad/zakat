<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Sekolah Kebangsaan Bandar Baru Bangi'],
            ['name' => 'Universiti Islam Antarabangsa'],
            ['name' => 'Universiti Kebangsaan Malaysia'],
            ['name' => 'Maktab Rendah Sains Mara'],
            ['name' => 'Maktab Perguruan Islam'],
        ];

        DB::table('schools')->insert($data);
    }
}
