<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEvaluatorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('evaluators', function(Blueprint $table)
		{
			$table->string('ID', 10)->primary();
			$table->string('password', 10);
			$table->string('name', 15);
			$table->string('surname', 15);
			$table->string('street', 20);
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
		Schema::drop('evaluators');
	}

}
