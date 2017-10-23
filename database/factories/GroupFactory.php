<?php

use App\Group;
use Faker\Generator as Faker;

$factory->define(Group::class, function (Faker $faker) {
	return [
        'name' => $faker->randomElement($array=[
        	'Les boss',
	        'Les loosers',
	        'Les beatnick',
	        'Les Bidochon',
	        'Les falzars troués',
	        'Les Monty Python',
	        'Les black Mamba',
	        'Les minimoys',
	        'Les Terminators',
	        'Les tontons flingueurs',
	        'Les Bulls de Chicago',
        ]),
    ];
});
