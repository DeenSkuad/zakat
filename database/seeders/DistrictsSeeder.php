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
            ['state_id' => '8', 'city_id' => '99', 'name' => 'Mukim Abi'],
            ['state_id' => '8', 'city_id' => '99', 'name' => 'Mukim Arau'],
            ['state_id' => '8', 'city_id' => '99', 'name' => 'Mukim Beseri'],
            ['state_id' => '8', 'city_id' => '99', 'name' => 'Mukim Chuping'],
            ['state_id' => '8', 'city_id' => '99', 'name' => 'Mukim Utan Aji'],
            ['state_id' => '8', 'city_id' => '99', 'name' => 'Mukim Jejawi'],
            ['state_id' => '8', 'city_id' => '99', 'name' => 'Mukim Kayang'],
            ['state_id' => '8', 'city_id' => '99', 'name' => 'Mukim Kechor'],
            ['state_id' => '8', 'city_id' => '99', 'name' => 'Mukim Kuala Perlis'],
            ['state_id' => '8', 'city_id' => '99', 'name' => 'Mukim Kurong Anai'],
            ['state_id' => '8', 'city_id' => '99', 'name' => 'Mukim Kurong Batang'],
            ['state_id' => '8', 'city_id' => '99', 'name' => 'Mukim Ngulang'],
            ['state_id' => '8', 'city_id' => '99', 'name' => 'Mukim Oran'],
            ['state_id' => '8', 'city_id' => '99', 'name' => 'Mukim Padang Pauh'],
            ['state_id' => '8', 'city_id' => '99', 'name' => 'Mukim Padang Siding'],
            ['state_id' => '8', 'city_id' => '99', 'name' => 'Mukim Paya'],
            ['state_id' => '8', 'city_id' => '99', 'name' => 'Mukim Sanglang'],
            ['state_id' => '8', 'city_id' => '99', 'name' => 'Mukim Sena'],
            ['state_id' => '8', 'city_id' => '99', 'name' => 'Mukim Seriab'],
            ['state_id' => '8', 'city_id' => '99', 'name' => 'Mukim Sungai Adam'],
            ['state_id' => '8', 'city_id' => '99', 'name' => 'Mukim Titi Tinggi'],
            ['state_id' => '8', 'city_id' => '99', 'name' => 'Mukim Wang Bintong'],
        ];

        DB::table('districts')->insert($data);
    }
}
