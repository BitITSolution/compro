<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelPortfolioImage extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('portfolio_image', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->text('description');
			$table->unsignedInteger('portfolio_id');
			$table->timestamps();
		});

		Schema::table('portfolio_image', function(Blueprint $table)
		{
			$table->foreign('portfolio_id')
				->references('id')
				->on('portfolio')
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
		Schema::dropIfExists('portfolio_image');
	}

}
