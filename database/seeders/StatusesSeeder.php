<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('statuses')->insert([
            ['name' => 'Active'],
            ['name' => 'Inactive'],
            ['name' => 'Approved'],
            ['name' => 'Rejected'],
            ['name' => 'Paid'],
            ['name' => 'Pending Payment'],
            ['name' => 'Fail'],
            ['name' => 'Closed'],
        ]);
    }
}
