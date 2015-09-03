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
			$table->increments('portfolio_image_id');
			$table->string('portfolio_image_title');
			$table->text('portfolio_image_description');
			$table->unsignedInteger('portfolio_id');
			$table->tinyInteger('portfolio_image_status')->default(1);
			$table->timestamps();
		});

		Schema::table('portfolio_image', function(Blueprint $table)
		{
			$table->foreign('portfolio_id')
				->references('portfolio_id')
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
