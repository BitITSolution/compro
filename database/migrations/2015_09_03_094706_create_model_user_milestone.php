<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelUserMilestone extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_milestone', function(Blueprint $table)
		{
			$table->increments('user_milestone_id');
			$table->unsignedInteger('user_id');
			$table->unsignedInteger('milestone_id');
			$table->string('user_milestone_description');
			$table->tinyInteger('user_milestone_status')->default(1);
			$table->timestamps();
		});

		Schema::table('user_milestone', function(Blueprint $table)
			{
				$table->foreign('user_id')
					->references('user_id')
					->on('users')
					->onDelete('cascade');
				$table->foreign('milestone_id')
					->references('milestone_id')
					->on('milestone')
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
		Schema::drop('user_milestone');
	}

}
