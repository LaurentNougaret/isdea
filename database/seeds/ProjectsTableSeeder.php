<?php

use App\Form;
use App\Project;
use App\User;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		factory(Project::class, 7)->create()
		                          ->each(function ($project) {
			                          $project->forms()->save(factory(Form::class)->make());
			                          $project->users()->save(factory(User::class)->make());
		                          });
	}
}
