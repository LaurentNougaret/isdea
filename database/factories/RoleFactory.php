<?php

use App\Role;
use Faker\Generator as Faker;

$factory->define(Role::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement($role = ['Administrator', 'Supervisor', 'Advanced Input Operator', 'Input Operator'])
    ];
});