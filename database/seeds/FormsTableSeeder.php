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
		factory(Form::class, 50)->create();
	}
}
