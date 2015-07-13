<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelCustomerMessage extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::create('customer_message', function(Blueprint $table)
			{
				$table->increments('id');
				$table->string('name');
				$table->text('address');
				$table->string('email');
				$table->unsignedInteger('projectType_id');
				$table->text('description');
				$table->dateTime('start_date');
				$table->dateTime('end_date');
				$table->text('budget');
				$table->tinyInteger('message_type');
				$table->timestamps();
			});

		Schema::table('customer_message', function(Blueprint $table)
			{
				$table->foreign('projectType_id')
					->references('id')
					->on('project_type')
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
		Schema::dropIfExists('customer_message');
	}

}
