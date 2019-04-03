<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVlastnostTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vlastnost', function(Blueprint $table)
		{
			$table->integer('vystava_ID');
			$table->string('vlastnost', 15);
			$table->string('hodnota', 15);
			$table->string('kvalita', 15);
			$table->decimal('body', 6);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vlastnost');
	}

}
