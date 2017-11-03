<?php

use App\Group;
use App\Language;
use App\Role;
use App\User;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/
$factory->define(User::class, function (Faker $faker) {
	static $password;

	return  [
		'firstname' => $faker->firstName,
		'lastname' => $faker->lastName,
		'email' => $faker->unique()->safeEmail,
		'password' => $password ?: $password = bcrypt('secret'),
        'language_id' => function () {
	        return factory(Language::class)->create()->id;
        },
		'group_id' => function () {
			return factory(Group::class)->create()->id;
		},
		'role_id' => function () {
			return factory(Role::class)->create()->id;
		}
	];
});
