<?php

use App\Unit;
use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		factory(Unit::class, 5)->create();
	}
}
