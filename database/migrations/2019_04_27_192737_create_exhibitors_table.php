<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExhibitorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exhibitors', function(Blueprint $table)
		{
			$table->integer('ID')->primary();
			$table->string('name', 30);
			$table->string('contact', 30);
			$table->string('street', 50);
			$table->string('town', 20);
			$table->string('zipcode', 10);
			$table->string('phone', 15);
			$table->string('email', 30);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('exhibitors');
	}

}
