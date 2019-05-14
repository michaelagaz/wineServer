<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExhibitionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exhibitions', function(Blueprint $table)
		{
			$table->integer('ID')->primary();
			$table->string('name', 30);
			$table->integer('year');
			$table->integer('active')->comment('yes=1, no=0');
			$table->string('calculation', 15)->comment('vypocet');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('exhibitions');
	}

}
