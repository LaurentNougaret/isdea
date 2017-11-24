<?php

use App\Project;
use App\Result;
use Faker\Generator as Faker;

$factory->define(Result::class, function (Faker $faker) {
	return [
		'progress' => $faker->randomFloat(2, 0, 1),
		'project_content' => $faker->paragraph(mt_rand(0, 50), true)
	];
});
