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
		factory(Result::class, 40)->create();
	}
}
