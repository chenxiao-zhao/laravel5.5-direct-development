<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToZoneCameraMapTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('zone_camera_map', function(Blueprint $table)
		{
			$table->foreign('camera_id', 'fk_zone_camera_line10')->references('id')->on('vm_camera')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('zone_id', 'fk_zone_camera_zone10')->references('id')->on('zone')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('zone_camera_map', function(Blueprint $table)
		{
			$table->dropForeign('fk_zone_camera_line10');
			$table->dropForeign('fk_zone_camera_zone10');
		});
	}

}
