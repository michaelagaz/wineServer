<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBodovanieTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bodovanie', function(Blueprint $table)
		{
			$table->integer('vystava_ID');
			$table->integer('vzorka_ID');
			$table->integer('hodnotitel_ID');
			$table->integer('komisia_ID');
			$table->decimal('body', 6);
			$table->primary(['vystava_ID','vzorka_ID','hodnotitel_ID']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bodovanie');
	}

}
