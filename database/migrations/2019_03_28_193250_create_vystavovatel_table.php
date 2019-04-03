<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVystavovatelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vystavovatel', function(Blueprint $table)
		{
			$table->integer('ID')->primary();
			$table->string('nazov', 30);
			$table->string('fyz_prav_osoba', 30);
			$table->string('kontakt_osoba', 30);
			$table->string('adresa', 50);
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
		Schema::drop('vystavovatel');
	}

}
