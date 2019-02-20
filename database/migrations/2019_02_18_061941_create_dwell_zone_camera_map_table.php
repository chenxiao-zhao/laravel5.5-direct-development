<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDwellZoneCameraMapTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dwell_zone_camera_map', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('zone_id')->index('zone_id_idx');
			$table->integer('camera_id')->index('dwell_zone_camera_map_camera_id_idx');
			$table->timestamp('create_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Record insert DB time');
			$table->timestamp('update_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->comment('update_time');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dwell_zone_camera_map');
	}

}
