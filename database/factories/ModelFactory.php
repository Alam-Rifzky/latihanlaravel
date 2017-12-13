<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'usr_name' => $faker->name,
        'usr_username' => $faker->username,
        'usr_email' => $faker->unique()->safeEmail,
        'usr_password' => $password ?: $password = bcrypt('secret'),
        'usr_phone' => $faker->unique()->phoneNumber,

    ];
});
