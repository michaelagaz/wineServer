<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommitteesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('committees', function(Blueprint $table)
		{
			$table->integer('ID');
			$table->integer('exhibition_ID');
			$table->string('description', 15);
			$table->integer('evaluator_ID');
			$table->integer('chairman_ID');
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
		Schema::drop('committees');
	}

}
