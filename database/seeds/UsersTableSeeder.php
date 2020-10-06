<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => env('ADMIN_USER_NAME', 'Administrator'),
            'email' => env('ADMIN_USER_EMAIL', 'admin@example.com'),
            'email_verified_at' => now(),
            'password' => Hash::make(env('ADMIN_USER_PASSWORD', 'Passw0rd')),
            'role' => 'admin',
            'avatar' => 'https://i.pravatar.cc/100?u=' . env('ADMIN_USER_EMAIL', 'admin@example.com'),
            'public_id' => Str::random(30),
            'preferences' => '["broadcast", "database", "mail"]',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
