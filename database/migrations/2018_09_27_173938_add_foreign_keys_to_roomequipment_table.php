<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRoomequipmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('roomequipment', function(Blueprint $table)
		{
			$table->foreign('equipment_id', 'fk_equipment')->references('equipment_id')->on('equipment')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('room_id', 'fk_rooms_equipment')->references('room_id')->on('rooms')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('roomequipment', function(Blueprint $table)
		{
			$table->dropForeign('fk_equipment');
			$table->dropForeign('fk_rooms_equipment');
		});
	}

}
