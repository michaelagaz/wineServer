<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMedalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('medals', function(Blueprint $table)
		{
			$table->string('ID', 5);
			$table->integer('exhibition_ID');
			$table->string('name', 30);
			$table->decimal('min', 6);
			$table->decimal('max', 6);
			$table->primary(['exhibition_ID','ID']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('medals');
	}

}
