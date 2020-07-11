<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'nickname' => $faker->unique()->userName,
        'date_join' => $faker->dateTimeBetween($startDate = '-10 years', $endDate = 'now', $timezone = null),
        'last_login' => $faker->dateTimeBetween($startDate = '-10 years', $endDate = 'now', $timezone = null),
        'email_verified_at' => $faker->dateTimeBetween($startDate = '-10 years', $endDate = 'now', $timezone = null),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
