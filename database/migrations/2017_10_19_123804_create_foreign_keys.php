<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->foreign('group_id')->references('id')->on('groups');
		});

		Schema::table('users', function(Blueprint $table)
		{
			$table->foreign('language_id')->references('id')->on('languages');
		});

		Schema::table('users', function(Blueprint $table)
		{
			$table->foreign('role_id')->references('id')->on('roles');
		});

		Schema::table('projects', function(Blueprint $table)
		{
			$table->foreign('unit_id')->references('id')->on('units');
		});

		Schema::table('results', function(Blueprint $table)
		{
			$table->foreign('project_id')->references('id')->on('projects')
			      ->onUpdate('cascade')
			      ->onDelete('cascade');
		});

		Schema::table('project_user', function(Blueprint $table)
		{
			$table->foreign('project_id')->references('id')->on('projects')
			      ->onUpdate('cascade')
			      ->onDelete('cascade');
		});

		Schema::table('project_user', function(Blueprint $table)
		{
			$table->foreign('user_id')->references('id')->on('users')
			      ->onUpdate('cascade')
			      ->onDelete('cascade');
		});

		Schema::table('form_project', function(Blueprint $table)
		{
			$table->foreign('form_id')->references('id')->on('forms')
			      ->onUpdate('cascade')
			      ->onDelete('cascade');
		});

		Schema::table('form_project', function(Blueprint $table)
		{
			$table->foreign('project_id')->references('id')->on('projects')
			      ->onUpdate('cascade')
			      ->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}
}
