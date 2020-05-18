<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(\App\Models\Product::class, function (Faker $faker) {
    $title = $faker->sentence(rand(3, 9));
    $text = $faker->realText(rand(1000, 4000));
    $created_at = $faker->dateTimeBetween('-3 months', '-2 months');
    $brand_id = \App\Models\Brand::all()->random();
    return [
        'name' => $title,
        'brand_id'=>$brand_id->id,
        'slug' => Str::slug($title),
        'code' => $faker->creditCardNumber(),
        'description' => $text,
        'created_at' => $created_at,
        'updated_at' => $created_at,
    ];
});

