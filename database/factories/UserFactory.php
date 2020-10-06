<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'role' => 'registered', 
        'avatar' => 'https://i.pravatar.cc/100?u=' . $faker->unique()->safeEmail, 
        'public_id' => Str::random(30),
        'address' => $faker->streetAddress,
        'city' => $faker->city,
        'state' => $faker->state,
        'postcode' => $faker->randomNumber($nbDigits = 5, $strict = true),
        'country' => $faker->country,
        'tax_id' => null, 
        'google2fa_secret' => null, 
        'preferences' => ["broadcast","database","mail"], 
        'slack_webhook' => null, 
        'country_code' => $faker->randomNumber(2), 
        'mobile_no' => $faker->randomNumber($nbDigits = 8, $strict = true), 
    ];
});
