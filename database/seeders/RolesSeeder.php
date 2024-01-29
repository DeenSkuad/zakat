<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Admin', 'guard_name' => 'web'],
            ['name' => 'ZakatHOD', 'guard_name' => 'web'],
            ['name' => 'Amil', 'guard_name' => 'web'],
            ['name' => 'PembantuAmil', 'guard_name' => 'web'],
            ['name' => 'Asnaf', 'guard_name' => 'web'],
            ['name' => 'PembayarZakat', 'guard_name' => 'web']
        ];

        DB::table('roles')->insert($data);
    }
}
