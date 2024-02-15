<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = [
            ['name' => "Johor"],
            ['name' => "Kedah"],
            ['name' => "Kelantan"],
            ['name' => "Melaka"],
            ['name' => "Negeri Sembilan"],
            ['name' => "Pahang"],
            ['name' => "Perak"],
            ['name' => "Perlis"],
            ['name' => "Pulau Pinang"],
            ['name' => "Sarawak"],
            ['name' => "Selangor"],
            ['name' => "Terengganu"],
            ['name' => "Kuala Lumpur"],
            ['name' => "Labuan"],
            ['name' => "Sabah"],
            ['name' => "Putrajaya"],
        ];

        $citiesData = [
            "Johor" => [
                "Johor Bahru",
                "Tebrau",
                "Pasir Gudang",
                "Bukit Indah",
                "Skudai",
                "Kluang",
                "Batu Pahat",
                "Muar",
                "Ulu Tiram",
                "Senai",
                "Segamat",
                "Kulai",
                "Kota Tinggi",
                "Pontian Kechil",
                "Tangkak",
                "Bukit Bakri",
                "Yong Peng",
                "Pekan Nenas",
                "Labis",
                "Mersing",
                "Simpang Renggam",
                "Parit Raja",
                "Kelapa Sawit",
                "Buloh Kasap",
                "Chaah"
            ],
            "Kedah" => [
                "Sungai Petani",
                "Alor Setar",
                "Kulim",
                "Jitra / Kubang Pasu",
                "Baling",
                "Pendang",
                "Langkawi",
                "Yan",
                "Sik",
                "Kuala Nerang",
                "Pokok Sena",
                "Bandar Baharu"
            ],
            "Kelantan" => [
                "Kota Bharu",
                "Pangkal Kalong",
                "Tanah Merah",
                "Peringat",
                "Wakaf Baru",
                "Kadok",
                "Pasir Mas",
                "Gua Musang",
                "Kuala Krai",
                "Tumpat"
            ],
            "Melaka" => [
                "Bandaraya Melaka",
                "Bukit Baru",
                "Ayer Keroh",
                "Klebang",
                "Masjid Tanah",
                "Sungai Udang",
                "Batu Berendam",
                "Alor Gajah",
                "Bukit Rambai",
                "Ayer Molek",
                "Bemban",
                "Kuala Sungai Baru",
                "Pulau Sebang",
                "Jasin"
            ],
            "Negeri Sembilan" => [
                "Seremban",
                "Port Dickson",
                "Nilai",
                "Bahau",
                "Tampin",
                "Kuala Pilah"
            ],
            "Pahang" => [
                "Kuantan",
                "Temerloh",
                "Bentong",
                "Mentakab",
                "Raub",
                "Jerantut",
                "Pekan",
                "Kuala Lipis",
                "Bandar Jengka",
                "Bukit Tinggi"
            ],
            "Perak" => [
                "Ipoh",
                "Taiping",
                "Sitiawan",
                "Simpang Empat",
                "Teluk Intan",
                "Batu Gajah",
                "Lumut",
                "Kampung Koh",
                "Kuala Kangsar",
                "Sungai Siput Utara",
                "Tapah",
                "Bidor",
                "Parit Buntar",
                "Ayer Tawar",
                "Bagan Serai",
                "Tanjung Malim",
                "Lawan Kuda Baharu",
                "Pantai Remis",
                "Kampar"
            ],
            "Perlis" => [
                "Kangar",
                "Kuala Perlis",
                "Arau"
            ],
            "Pulau Pinang" => [
                "Bukit Mertajam",
                "Georgetown",
                "Sungai Ara",
                "Gelugor",
                "Ayer Itam",
                "Butterworth",
                "Perai",
                "Nibong Tebal",
                "Permatang Kucing",
                "Tanjung Tokong",
                "Kepala Batas",
                "Tanjung Bungah",
                "Juru"
            ],
            "Sabah" => [
                "Kota Kinabalu",
                "Sandakan",
                "Tawau",
                "Lahad Datu",
                "Keningau",
                "Putatan",
                "Donggongon",
                "Semporna",
                "Kudat",
                "Kunak",
                "Papar",
                "Ranau",
                "Beaufort",
                "Kinarut",
                "Kota Belud"
            ],
            "Sarawak" => [
                "Kuching",
                "Miri",
                "Sibu",
                "Bintulu",
                "Limbang",
                "Sarikei",
                "Sri Aman",
                "Kapit",
                "Batu Delapan Bazaar",
                "Kota Samarahan"
            ],
            "Selangor" => [
                "Subang Jaya",
                "Klang",
                "Ampang Jaya",
                "Shah Alam",
                "Petaling Jaya",
                "Cheras",
                "Kajang",
                "Selayang Baru",
                "Rawang",
                "Taman Greenwood",
                "Semenyih",
                "Banting",
                "Balakong",
                "Gombak Setia",
                "Kuala Selangor",
                "Serendah",
                "Bukit Beruntung",
                "Pengkalan Kundang",
                "Jenjarom",
                "Sungai Besar",
                "Batu Arang",
                "Tanjung Sepat",
                "Kuang",
                "Kuala Kubu Baharu",
                "Batang Berjuntai",
                "Bandar Baru Salak Tinggi",
                "Sekinchan",
                "Sabak",
                "Tanjung Karang",
                "Beranang",
                "Sungai Pelek",
                "Sepang",
            ],
            "Terengganu" => [
                "Kuala Terengganu",
                "Chukai",
                "Dungun",
                "Kerteh",
                "Kuala Berang",
                "Marang",
                "Paka",
                "Jerteh"
            ],
            "Kuala Lumpur" => [
                "Kuala Lumpur",
            ],
            "Labuan" => [
                "Labuan",
            ],
            "Putrajaya" => [
                "Putrajaya"
            ]
        ];

        DB::table('states')->insert($states);

        // For each state, insert its cities into the 'cities' table
        foreach ($citiesData as $stateName => $cities) {
            // Find the state ID by its name
            $stateId = DB::table('states')->where('name', $stateName)->first()->id;

            // Prepare cities data with state_id
            $citiesToInsert = array_map(function ($cityName) use ($stateId) {
                return ['state_id' => $stateId, 'name' => $cityName];
            }, $cities);

            // Insert cities for the current state
            DB::table('cities')->insert($citiesToInsert);
        }
    }
}
