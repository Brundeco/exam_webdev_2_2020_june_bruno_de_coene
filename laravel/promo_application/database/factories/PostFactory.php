<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'slug' => $faker->slug,
        'title' => $faker->title,
        'intro' => $faker->text($maxNbChars = 50),
        'body' => $faker->text($maxNbChars = 400),
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'alt' => $faker->text($maxNbChars = 15)
    ];
});
