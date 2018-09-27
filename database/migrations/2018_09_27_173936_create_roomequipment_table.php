<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoomequipmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('roomequipment', function(Blueprint $table)
		{
			$table->integer('roomequipment_id', true);
			$table->integer('equipment_id')->nullable()->index('fk_equipment');
			$table->integer('room_id')->nullable()->index('fk_rooms_equipment');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('roomequipment');
	}

}
