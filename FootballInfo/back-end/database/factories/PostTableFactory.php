<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PostTbl;
use Faker\Generator as Faker;

$factory->define(PostTbl::class, function (Faker $faker) {
    return [
        'title'    => $faker->sentence,
        'content'  => $faker->paragraph,
        'avatar_post' => $faker->imageUrl($width = 100, $height = 100),
        'cate_id' =>  rand(1,10),
        'user_id' =>  rand(1,10)
    ];
});
