<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVystavaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vystava', function(Blueprint $table)
		{
			$table->integer('ID')->primary();
			$table->string('nazov', 30);
			$table->integer('rok');
			$table->integer('aktivna');
			$table->string('vypocet', 15);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vystava');
	}

}
