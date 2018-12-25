<?php

use Faker\Generator as Faker;

use App\Page;

$factory->define(App\Page::class, function (Faker $faker) {
    return [
        'title' => rtrim($faker->sentence, '.'),
        'slug' => $faker->slug,
        'content' => "<p>".implode("</p><p>", $faker->paragraphs($nb = 3, $asText = false)).("</p>"),
    ];
});