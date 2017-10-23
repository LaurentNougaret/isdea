<?php

use App\Project;
use App\Unit;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
	return [
		'name' => $faker->randomElement($array = [
			'Projet trop naze',
			'Projet qui claque',
			'Rénovation des catacombes',
			'Voirie et espaces verts de Paris Gigapole',
			'Assainissement de la Seine',
			'Reboiser le 93',
			'Karchériser Neuilly',
		]),
		'unit_id' => function () {
			return factory(Unit::class)->create()->id;
		}

	];
});
