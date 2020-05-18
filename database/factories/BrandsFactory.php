<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(\App\Models\Brand::class, function (Faker $faker) {
    $title = $faker->sentence(rand(3, 9));
    return [
        'name' => $title,
        'slug' => Str::slug($title),

    ];
});
