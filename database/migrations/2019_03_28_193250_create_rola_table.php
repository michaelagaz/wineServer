<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRolaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rola', function(Blueprint $table)
		{
			$table->integer('vystava_ID');
			$table->string('nazov', 10);
			$table->integer('hodnotitel_ID');
			$table->primary(['hodnotitel_ID','vystava_ID']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rola');
	}

}
