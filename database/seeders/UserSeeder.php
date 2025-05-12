<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{

    /**

     * Run the database seeds.

     */

    public function run(): void

    {
        // Create users
        User::insert([
            [
                'firstname' => Str::random(10),
                'lastname' => Str::random(10),
                'phone' => "+225 " . "0171424977",
                'email' => 'nogues@gmail.com',
                'role_id' => 1,
                'email_verified_at' => null,
                'password' => Hash::make('nogues@gmail.com'),
                'status' => 1,
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'firstname' => Str::random(10),
                'lastname' => Str::random(10),
                'phone' => "+225 " . "0123456781",
                'email' => strtolower(Str::random(10)) . '@gmail.com',
                'role_id' => 1,
                'email_verified_at' => null,
                'password' => Hash::make('123456789'),
                'status' => 1,
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'firstname' => Str::random(10),
                'lastname' => Str::random(10),
                'phone' => "+225 " . "0123456782",
                'email' => strtolower(Str::random(10)) . '@gmail.com',
                'role_id' => 1,
                'email_verified_at' => null,
                'password' => Hash::make('123456789'),
                'status' => 1,
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
