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
            ['district_id' => '1', 'name' => 'MASJID NEGERI, ARAU', 'address' => '02600, JALAN BESAR ARAU, PERLIS', 'postcode' => '02600'],
            ['district_id' => '1', 'name' => 'MASJID AL NUR', 'address' => 'UITM ARAU CAWANGAN PERLIS, ARAU, PERLIS', 'postcode' => '02600'],
            ['district_id' => '1', 'name' => 'MASJID ALI IMRAN', 'address' => 'KG. ULU PAUH,02600 ARAU, PERLIS', 'postcode' => '02600'],
            ['district_id' => '1', 'name' => 'MASJID AL MURSYID', 'address' => 'KAMPUNG GURING 02600 ARAU, PERLIS', 'postcode' => '02600'],
            ['district_id' => '1', 'name' => 'MASJID AL MASYHOR', 'address' => 'JALAN PADANG SIDING, PAUH, 02600 ARAU, PERLIS', 'postcode' => '02600'],
            ['district_id' => '1', 'name' => 'MASJID MUHAMMADIAH', 'address' => 'KAMPUNG GUAR GAJAH 02600 ARAU, PERLIS', 'postcode' => '02600'],
            ['district_id' => '1', 'name' => 'MASJID NURUL MUKMININ', 'address' => 'KG. ALOR ARA, 02600 ARAU, PERLIS', 'postcode' => '02600'],
            ['district_id' => '1', 'name' => 'MASJID AL TAQWA', 'address' => 'ALOR REDIS, 02600 ARAU, PERLIS', 'postcode' => '02600'],
            ['district_id' => '1', 'name' => 'MASJID IBNU TAIMIAH', 'address' => 'JALAN TAMBUN TULANG, 02600 ARAU, PERLIS', 'postcode' => '02600'],
            ['district_id' => '1', 'name' => 'MASJID AL FALAH', 'address' => 'KAMPUNG BEHOR MEMPELAM 02600 ARAU, PERLIS', 'postcode' => '02600'],
        ];

        DB::table('kariahs')->insert($data);
    }
}
