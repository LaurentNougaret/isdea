<?php

use App\Unit;
use Faker\Generator as Faker;

$factory->define(Unit::class, function (Faker $faker) {
    return [
        'name' => $faker->city,
	    'area' => $faker->streetName,
    ];
});
