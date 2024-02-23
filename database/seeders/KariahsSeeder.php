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
            ['district_id' => '1', 'name' => 'MASJID NEGERI, ARAU', 'address' => '02600, JALAN BESAR ARAU, PERLIS', 'postcode' => '02600', 'coord' => json_encode([6.430359932247868, 100.27030875582113])],
            ['district_id' => '1', 'name' => 'MASJID AL NUR', 'address' => 'UITM ARAU CAWANGAN PERLIS, ARAU, PERLIS', 'postcode' => '02600', 'coord' => json_encode([6.445801991829521, 100.27497576853008])],
            ['district_id' => '1', 'name' => 'MASJID ALI IMRAN', 'address' => 'KG. ULU PAUH,02600 ARAU, PERLIS', 'postcode' => '02600', 'coord' => json_encode([6.498216051162056, 100.33443333969443])],
            ['district_id' => '1', 'name' => 'MASJID AL MURSYID', 'address' => 'KAMPUNG GURING 02600 ARAU, PERLIS', 'postcode' => '02600', 'coord' => json_encode([6.43339742548246, 100.28812936853005])],
            ['district_id' => '1', 'name' => 'MASJID AL MASYHOR', 'address' => 'JALAN PADANG SIDING, PAUH, 02600 ARAU, PERLIS', 'postcode' => '02600', 'coord' => json_encode([6.455974891434227, 100.29571397599013])],
            ['district_id' => '1', 'name' => 'MASJID MUHAMMADIAH', 'address' => 'KAMPUNG GUAR GAJAH 02600 ARAU, PERLIS', 'postcode' => '02600', 'coord' => json_encode([6.449534200354241, 100.26786588078856])],
            ['district_id' => '1', 'name' => 'MASJID NURUL MUKMININ', 'address' => 'KG. ALOR ARA, 02600 ARAU, PERLIS', 'postcode' => '02600', 'coord' => json_encode([6.452632424552875, 100.2601671445039])],
            ['district_id' => '1', 'name' => 'MASJID AL TAQWA', 'address' => 'ALOR REDIS, 02600 ARAU, PERLIS', 'postcode' => '02600', 'coord' => json_encode([6.413749019245483, 100.22616861147387])],
            ['district_id' => '1', 'name' => 'MASJID IBNU TAIMIAH', 'address' => 'JALAN TAMBUN TULANG, 02600 ARAU, PERLIS', 'postcode' => '02600', 'coord' => json_encode([6.379116314298139, 100.23741073969428])],
            ['district_id' => '1', 'name' => 'MASJID AL FALAH', 'address' => 'KAMPUNG BEHOR MEMPELAM 02600 ARAU, PERLIS', 'postcode' => '02600', 'coord' => json_encode([6.450982490759584, 100.27948789416004])],
        ];

        DB::table('kariahs')->insert($data);
    }
}
