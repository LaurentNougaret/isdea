<?php

use App\Language;
use Faker\Generator as Faker;

$factory->define(Language::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement($language=['English', 'French', 'Spanish']),
        'locale' => $faker->randomElement($language=['en', 'fr', 'es']),
    ];
});


