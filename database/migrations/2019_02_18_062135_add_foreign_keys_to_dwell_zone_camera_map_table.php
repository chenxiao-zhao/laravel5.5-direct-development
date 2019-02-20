<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDwellZoneCameraMapTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('dwell_zone_camera_map', function(Blueprint $table)
		{
			$table->foreign('camera_id', 'dwell_zone_camera_map_camera_id')->references('id')->on('vm_camera')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('zone_id', 'dwell_zone_camera_map_zone_id')->references('id')->on('zone')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('dwell_zone_camera_map', function(Blueprint $table)
		{
			$table->dropForeign('dwell_zone_camera_map_camera_id');
			$table->dropForeign('dwell_zone_camera_map_zone_id');
		});
	}

}
