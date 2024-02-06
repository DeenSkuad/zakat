<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BanksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Maybank Bhd'],
            ['name' => 'Ambank Bhd'],
            ['name' => 'Bank Islam Bhd'],
            ['name' => 'CIMB Bhd'],
            ['name' => 'Public Bank Bhd'],
        ];

        DB::table('banks')->insert($data);
    }
}
