<?php


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
		$this->call([
			GroupsTableSeeder::class,
			UnitsTableSeeder::class,
			ProjectsTableSeeder::class,
			FormsTableSeeder::class,
			ResultsTableSeeder::class,
			UsersTableSeeder::class,

		]);
	}
}
