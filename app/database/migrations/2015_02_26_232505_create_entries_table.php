<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('entries', function($t) {
			$t->increments('id');
			$t->string('idea', 255);
			$t->string('email', 255);
			$t->string('firstname', 255);
			$t->string('lastname', 255);
			$t->string('address', 255);
			$t->string('city');
			$t->string('zipcode', 7);
			$t->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('entries');
	}

}
