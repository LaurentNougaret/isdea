<?php

use App\Group;
use Faker\Generator as Faker;

$factory->define(Group::class, function (Faker $faker) {
	return [
        'name' => $faker->randomElement($group = [
        	'Les Boss',
	        'Les Loosers',
	        'Les Beatnick',
	        'Les Bidochon',
	        'Les Falzars Troués',
	        'Les Monty Python',
	        'Les black Mamba',
	        'Les Minimoys',
	        'Les Terminators',
	        'Les Tontons Flingueurs',
	        'Les Bulls de Chicago',
        ]),
    ];
});
