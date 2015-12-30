<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	    Schema::create('users', function(Blueprint $table)
		{
		    $table->increments('id');
	        $table->string('name')->nullable();
	        $table->string('username')->nullable()->unique();
	        $table->string('email')->nullable()->unique();
	        $table->string('avatar')->nullable();
	        $table->string('password')->nullable();
	        $table->string('provider')->nullable();
	        $table->string('provider_id')->nullable()->unique();
		    $table->rememberToken();
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
	     Schema::drop('users');
	}

}
