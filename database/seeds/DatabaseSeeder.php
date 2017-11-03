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
        $faker = Faker\Factory::create();
        $this->call([
            GroupsTableSeeder::class,
            UnitsTableSeeder::class,
            RolesTableSeeder::class,
            LanguagesTableSeeder::class,
            UsersTableSeeder::class,
            FormsTableSeeder::class,
            ProjectsTableSeeder::class,
            ResultsTableSeeder::class,
        ]);
    }
}
