<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(\App\Models\Article::class, function (Faker $faker) {
    $title = $faker->sentence(rand(3, 9));
    $intro = $faker->realText(rand(20, 100));
    $text = $faker->realText(rand(1000, 4000));
    $created_at = $faker->dateTimeBetween('-3 months', '-2 months');
    return [
        'name' => $title,
        'slug' => Str::slug($title),
        'intro' => $intro,
        'text' => $text,
        'created_at' => $created_at,
        'updated_at' => $created_at,
    ];
});

