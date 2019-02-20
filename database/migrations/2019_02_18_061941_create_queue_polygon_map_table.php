<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQueuePolygonMapTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('queue_polygon_map', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('queue_id')->index('fk_queue_has_polygonspec_queue1_idx');
			$table->integer('polygon_id')->index('fk_queue_polygon_map_polygonid_idx');
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
		Schema::drop('queue_polygon_map');
	}

}
