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
		Schema::create('users', function (Blueprint $table)
			{
				$table->foreign('group_id')->references('id')->on('groups');
			});

		Schema::create('projects', function (Blueprint $table)
			{
				$table->foreign('unit_id')->references('id')->on('units');
			});

		Schema::create('results', function (Blueprint $table)
			{
				$table->foreign('result_id')->references('id')->on('results');
			});

		Schema::create('project_user', function (Blueprint $table)
			{
				$table->foreign('project_id')->references('id')->on('projects')
					->onUpdate('cascade')
					->onDelete('cascade');

				$table->foreign('user_id')->references('id')->on('users')
					->onUpdate('cascade')
					->onDelete('cascade');
			});

		Schema::create('form_project', function (Blueprint $table)
		{
			$table->foreign('form_id')->references('id')->on('forms')
			      ->onUpdate('cascade')
			      ->onDelete('cascade');

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
