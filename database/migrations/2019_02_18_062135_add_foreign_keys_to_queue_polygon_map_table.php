<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToQueuePolygonMapTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('queue_polygon_map', function(Blueprint $table)
		{
			$table->foreign('queue_id', 'fk_queue_has_polygonspec_queue1')->references('id')->on('queue')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('polygon_id', 'fk_queue_polygon_map_polygonid')->references('id')->on('vm_polygonspec')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('queue_polygon_map', function(Blueprint $table)
		{
			$table->dropForeign('fk_queue_has_polygonspec_queue1');
			$table->dropForeign('fk_queue_polygon_map_polygonid');
		});
	}

}
