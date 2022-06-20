<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Apotek;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Admin',
                'username' => 'admin',
                'apotek_id' => NULL,
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'role' => 'superuser',
                'status' => 'active',
                'telp' => '1111',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Apoteker',
                'username' => 'apoteker',
                'apotek_id' => Apotek::all()->random()->id,
                'email' => 'apoteker@gmail.com',
                'email_verified_at' => now(),
                'role' => 'apoteker',
                'status' => 'active',
                'telp' => '2222',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ],

        ];
        DB::table('users')->insert($data);
    }
}