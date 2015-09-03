<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelProject extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project', function(Blueprint $table)
		{
			$table->increments('project_id');
			$table->unsignedInteger('client_id');
			$table->string('project_name');
			$table->date('project_start_date');
			$table->date('project_end_date');
			$table->text('project_description');
			$table->tinyInteger('project_status')->default(1);
			$table->timestamps();
		});

		Schema::table('project', function(Blueprint $table)
			{
				$table->foreign('client_id')
					->references('client_id')
					->on('client')
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
		Schema::drop('project');
	}

}
