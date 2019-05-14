<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacteristicsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('characteristics', function(Blueprint $table)
		{
			$table->integer('exhibition_ID');
			$table->string('property', 15)->comment('vlastnost');
			$table->string('value', 15);
			$table->string('quality', 15);
			$table->decimal('rating', 6);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('characteristics');
	}

}
