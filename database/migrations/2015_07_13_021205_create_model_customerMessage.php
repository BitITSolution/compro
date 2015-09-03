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
				$table->increments('message_id');
				$table->string('message_name');
				$table->text('message_address');
				$table->string('message_email');
				$table->unsignedInteger('project_type_id');
				$table->text('message_description');
				$table->dateTime('message_start_date');
				$table->dateTime('message_end_date');
				$table->text('message_budget');
				$table->tinyInteger('message_type');
				$table->tinyInteger('message_status')->default(1);
				$table->timestamps();
			});

		Schema::table('customer_message', function(Blueprint $table)
			{
				$table->foreign('project_type_id')
					->references('project_type_id')
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
