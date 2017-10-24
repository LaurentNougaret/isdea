<?php

use App\Project;
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
//		$faker = Faker\Factory::create('fr_FR');
		factory(Project::class, 7)->create();
	}
}
