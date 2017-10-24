<?php

use App\Result;
use Illuminate\Database\Seeder;

class ResultsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//		$faker = Faker\Factory::create('fr_FR');
		factory(Result::class, 40)->create();
	}
}
