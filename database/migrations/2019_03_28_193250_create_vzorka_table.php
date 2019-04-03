<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVzorkaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vzorkas', function(Blueprint $table)
		{
			$table->integer('vystava_ID');
			$table->integer('ID');
			$table->integer('komisia_ID');
			$table->integer('odroda_ID');
			$table->string('privlastok', 15);
			$table->integer('kategoria_ID');
			$table->integer('vystavovatel_ID');
			$table->decimal('body', 6);
			$table->integer('medaila_ID');
			$table->string('hodnotenie', 30);
			$table->string('poznamka', 30);
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
		Schema::drop('vzorka');
	}

}
