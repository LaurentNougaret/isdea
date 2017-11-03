<?php

use App\Form;
use App\Project;
use Illuminate\Database\Seeder;

class FormsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		factory(Form::class, 8)->create()
		                        ->each(function ($form) {
			                        $form->projects()->save(factory(Project::class)->make());
		                        });
	}
}
