<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMeetingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('meetings', function(Blueprint $table)
		{
			$table->integer('meeting_id', true);
			$table->string('title')->nullable();
			$table->dateTime('start_time')->nullable();
			$table->dateTime('end_time')->nullable();
			$table->integer('memnumber')->nullable();
			$table->integer('employeeid')->nullable()->index('fk_users');
			$table->integer('room_id')->nullable()->index('fk_rooms');
			$table->string('requirements')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('meetings');
	}

}
