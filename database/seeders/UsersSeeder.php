<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'ic_no' => '11111',
                'name' => 'Ahmad Admin',
                'email' => 'admin@test.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('asdasd')
            ],
            [
                'ic_no' => '22222',
                'name' => 'Ahmad Zakat HoD',
                'email' => 'zakathod@test.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('asdasd')
            ],
            [
                'ic_no' => '33333',
                'name' => 'Ahmad Amil',
                'email' => 'amil@test.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('asdasd')
            ],
            [
                'ic_no' => '44444',
                'name' => 'Ahmad Pembantu Amil',
                'email' => 'pembantuamil@test.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('asdasd')
            ],
            [
                'ic_no' => '55555',
                'name' => 'Ahmad Asnaf',
                'email' => 'asnaf@test.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('asdasd')
            ],
            [
                'ic_no' => '66666',
                'name' => 'Ahmad Pembayar Zakat',
                'email' => 'pembayarzakat@test.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('asdasd')
            ],
        ];


        DB::table('users')->insert($data);

        $users = User::get();

        $users[0]->assignRole('Admin');
        $users[1]->assignRole('ZakatHOD');
        $users[2]->assignRole('Amil');
        $users[3]->assignRole('PembantuAmil');
        $users[4]->assignRole('Asnaf');
        $users[5]->assignRole('PembayarZakat');

        DB::table('amil_profiles')->insert([
            ['user_id' => 3, 'amil_no' => 12345, 'type' => 'organization', 'phone_no' => '+60176336312', 'district_id' => 1, 'kariah_id' => 1]
        ]);
    }
}
