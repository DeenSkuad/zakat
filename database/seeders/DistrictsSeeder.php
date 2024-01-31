<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['state_id' => '13', 'city_id' => '170', 'name' => 'Kampung Baru Ampang', 'postcode' => '43650'],
        ];

        DB::table('districts')->insert($data);
    }
}
