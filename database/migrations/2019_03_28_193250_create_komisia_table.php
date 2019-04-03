<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKomisiaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('komisia', function(Blueprint $table)
		{
			$table->integer('vystava_ID');
			$table->integer('ID');
			$table->string('popis', 15);
			$table->integer('hodnotitel_ID');
			$table->integer('predseda_ID');
			$table->primary(['vystava_ID','ID']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('komisia');
	}

}
