<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelClientCp extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('client_cp', function(Blueprint $table)
		{
			$table->increments('cp_id');
			$table->unsignedInteger('client_id');
			$table->string('cp_name');
			$table->string('cp_email');
			$table->string('cp_phone');
			$table->string('cp_position');
			$table->tinyInteger('cp_status')->default(1);
			$table->timestamps();
		});

		Schema::table('client_cp', function(Blueprint $table)
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
		Schema::drop('client_cp');
	}

}
