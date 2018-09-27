<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMeetingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('meetings', function(Blueprint $table)
		{
			$table->foreign('room_id', 'fk_rooms')->references('room_id')->on('rooms')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('employeeid', 'fk_users')->references('employeeid')->on('employees')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('meetings', function(Blueprint $table)
		{
			$table->dropForeign('fk_rooms');
			$table->dropForeign('fk_users');
		});
	}

}
