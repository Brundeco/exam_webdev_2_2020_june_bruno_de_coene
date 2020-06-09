<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Page;
use Faker\Generator as Faker;

$factory->define(Page::class, function (Faker $faker) {
    return [
        'page_title' => 'home',
        'page_intro' => $faker->text($maxNbChars = 100),
        'section_title' => $faker->sentence(5),
        'content' => $faker->text($maxNbChars = 400),
        'button_text' => 'Read more',
        'button_link' => 'https://google.com',
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'alt' => 'default_alt'
    ];
});
