<?php

use App\Group;
use App\Project;
use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		factory( User::class, 30 )->create()
		                          ->each( function ($user) {
			                          $user->projects()->save(factory( Project::class)->make());
		                          } );
	}
}
