<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UserTbl;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;

$factory->define(UserTbl::class, function (Faker $faker) {
    return [
        'login_id' => $faker->userName,
        'password' => Hash::make(123123123),
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'address' => $faker->streetAddress,
        'gender'     => rand(0,1),
        'age'     => rand(10,99),
        'api_token'  => Str::random(60)
    ];
});
