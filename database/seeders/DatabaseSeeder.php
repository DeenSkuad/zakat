<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            StatesSeeder::class,
            DistrictsSeeder::class,
            KariahsSeeder::class,
            OauthClientsSeeder::class,
            RolesSeeder::class,
            UsersSeeder::class,
            ServicesSeeder::class
        ]);
    }
}
