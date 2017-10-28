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
//		$faker = Faker\Factory::create('fr_FR');
		factory(Form::class, 50)->create()
		                        ->each(function ($form) {
			                        $form->projects()->save(factory(Project::class)->make());
//			$form->projects()->attach(mt_rand(1, 7));
//			$form->save();
		                        });

	}
}
