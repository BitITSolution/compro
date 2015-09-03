<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelUserProject extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_project', function(Blueprint $table)
		{
			$table->increments('user_project_id');
			$table->unsignedInteger('project_id');
			$table->unsignedInteger('user_id');
			$table->string('user_project_role');
			$table->tinyInteger('user_project_status')->default(1);
			$table->timestamps();
		});

		Schema::table('user_project', function(Blueprint $table)
			{
				$table->foreign('project_id')
					->references('project_id')
					->on('project')
					->onDelete('cascade');
				$table->foreign('user_id')
					->references('user_id')
					->on('users')
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
		Schema::drop('user_project');
	}

}
