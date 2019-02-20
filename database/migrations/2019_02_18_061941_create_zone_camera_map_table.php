<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateZoneCameraMapTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('zone_camera_map', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('zone_id')->nullable()->index('fk_zone_line_zone1_idx');
			$table->integer('camera_id')->nullable()->index('fk_zone_line_line10_idx');
			$table->timestamp('create_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('update_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->integer('status_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('zone_camera_map');
	}

}
