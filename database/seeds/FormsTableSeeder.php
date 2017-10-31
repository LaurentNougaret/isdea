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
		factory(Form::class, 50)->create();
	}
}
