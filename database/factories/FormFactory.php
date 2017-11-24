<?php

use App\Form;
use App\Group;
use App\Project;
use Faker\Generator as Faker;



$factory->define(Form::class, function (Faker $faker) {
	return [
		'name' => $faker->randomElement($form = [
			'Voirie',
			'Espace vert',
			'Canalisation eau',
			'Chauffage',
			'Sanitaires',
			'Toilettes publiques',
			'Electricité',
			'Gaz',
		]),
        'group_id' => function () {
            return factory(Group::class)->create()->id;
        },
	];

});
