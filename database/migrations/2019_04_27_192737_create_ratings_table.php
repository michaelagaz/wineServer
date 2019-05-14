<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRatingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ratings', function(Blueprint $table)
		{
			$table->integer('exhibition_ID')->comment('vystava');
			$table->integer('sample_ID');
			$table->integer('committee_ID')->comment('komisia');
			$table->integer('exhibitor_ID')->comment('vystavovatel');
			$table->decimal('rating', 6);
			$table->primary(['exhibition_ID','sample_ID','exhibitor_ID']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ratings');
	}

}
