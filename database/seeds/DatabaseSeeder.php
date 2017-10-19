<?php

use App\Form;
use App\Group;
use App\Project;
use App\Result;
use App\Unit;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker\Factory::create('fr_FR');
		factory(Group::class, 11)->create();
		factory(User::class, 30)->create();
		factory(Unit::class, 5)->create();
		factory(Project::class, 7)->create();
		factory(Result::class, 40)->create();
		factory(Form::class, 50)->create();
	}
}
