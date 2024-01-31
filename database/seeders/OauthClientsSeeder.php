<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OauthClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Laravel Personal Access Client',
                'secret' => 'UEsWat6ngz057RMwaOPaJtRSCVAkMESRWEr049xJ',
                'provider' => null,
                'redirect' => 'http://localhost',
                'personal_access_client' => 1,
                'password_client' => 0,
                'revoked' => 0,
                'created_at' => '2024-01-29 15:57:32',
                'updated_at' => '2024-01-29 15:57:32'
            ],
            [
                'name' => 'Laravel Personal Access Client',
                'secret' => '35n2y27lwFQmpn3ymRepDZz1KOG3CHIv4FP5EgsW',
                'provider' => 'users',
                'redirect' => 'http://localhost',
                'personal_access_client' => 0,
                'password_client' => 1,
                'revoked' => 0,
                'created_at' => '2024-01-29 15:57:32',
                'updated_at' => '2024-01-29 15:57:32'
            ],
        ];

        $personalCLientData = [
            [
                'client_id' => 1,
                'created_at' => '2024-01-29 15:57:32',
                'updated_at' => '2024-01-29 15:57:32'
            ]
        ];

        DB::table('oauth_clients')->insert($data);
        DB::table('oauth_personal_access_clients')->insert($personalCLientData);
    }
}
