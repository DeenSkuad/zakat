<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KariahsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['district_id' => '1', 'name' => 'Masjid Al Ehsan'],
            ['district_id' => '1', 'name' => 'Masjid Nurul Amin'],
            ['district_id' => '1', 'name' => 'Masjid Al Falah'],
            ['district_id' => '1', 'name' => 'Masjid At Taqwa'],
            ['district_id' => '1', 'name' => 'Masjid Darul Muttaqin'],
        ];

        DB::table('kariahs')->insert($data);
    }
}
