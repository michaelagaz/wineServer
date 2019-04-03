<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHodnotitelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hodnotitel', function(Blueprint $table)
		{
			$table->string('ID', 10)->primary();
			$table->string('heslo', 10);
			$table->string('meno', 15);
			$table->string('priezvisko', 15);
			$table->string('telefon', 15);
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
		Schema::drop('hodnotitel');
	}

}
