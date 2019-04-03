<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMedailaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('medaila', function(Blueprint $table)
		{
			$table->integer('vystava_ID');
			$table->string('ID', 5);
			$table->string('nazov', 30);
			$table->decimal('min', 6);
			$table->decimal('max', 6);
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
		Schema::drop('medaila');
	}

}
