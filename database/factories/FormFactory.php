<?php

use Faker\Generator as Faker;

$factory->define(App\Form::class, function (Faker $faker) {
	return [
		'name' => $faker->randomElement($array = [
			'Voirie',
			'Espace vert',
			'Canalisation eau',
			'Chauffage',
			'Sanitaires',
			'Toilettes publiques',
			'Electricité',
			'Gaz',
		]),
	];
});
