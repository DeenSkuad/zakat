<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'UPSR / PMR / SPM'],
            ['name' => 'Vokasional'],
            ['name' => 'Diploma / Ijazah'],
            ['name' => 'Lain-lain'],
        ];

        DB::table('educations')->insert($data);
    }
}
