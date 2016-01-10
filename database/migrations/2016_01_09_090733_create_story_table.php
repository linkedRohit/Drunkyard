<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('story', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title')->index();
			$table->string('description')->nullable()->index();
			$table->string('tags')->nullable()->index();
			$table->string('status');
			$table->integer('visible');
			$table->string('genre');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('story');
	}

}
