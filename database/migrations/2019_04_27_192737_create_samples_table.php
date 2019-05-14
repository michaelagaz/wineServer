<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSamplesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('samples', function(Blueprint $table)
		{
			$table->integer('exhibition_ID');
			$table->integer('ID');
			$table->integer('committee_ID');
			$table->integer('variety_ID')->comment('odroda');
			$table->string('attribute', 15)->comment('privlastok');
			$table->integer('category_ID');
			$table->integer('exhibitor_ID')->comment('vystavovatel');
			$table->decimal('rating', 6)->comment('body');
			$table->integer('medal_ID');
			$table->string('award', 30)->comment('hodnotenie');
			$table->string('comments', 30);
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
		Schema::drop('samples');
	}

}
