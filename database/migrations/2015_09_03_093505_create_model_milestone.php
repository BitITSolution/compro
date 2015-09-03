<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelMilestone extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('milestone', function(Blueprint $table)
		{
			$table->increments('milestone_id');
			$table->unsignedInteger('project_id');
			$table->string('milestone_title');
			$table->text('milestone_description');
			$table->date('milestone_start_date');
			$table->date('milestone_end_date');
			$table->tinyInteger('milestone_status')->default(1);
			$table->timestamps();
		});

		Schema::table('milestone', function(Blueprint $table)
			{
				$table->foreign('project_id')
					->references('project_id')
					->on('project')
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
		Schema::drop('milestone');
	}

}
