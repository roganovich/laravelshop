<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(\App\Models\Catalog::class, function (Faker $faker) {
    $title = $faker->sentence(rand(3, 9));
    $text = $faker->realText(rand(1000, 4000));

    return [
        'name' => $title,
        'slug' => Str::slug($title),
        'description' => $text,
    ];
});
