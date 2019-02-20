<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToZonePolygonMapTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('zone_polygon_map', function(Blueprint $table)
		{
			$table->foreign('polygon_id', 'fk_zone_polygon_polygon10')->references('id')->on('vm_polygonspec')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('zone_id', 'fk_zone_polygon_zone10')->references('id')->on('zone')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('zone_polygon_map', function(Blueprint $table)
		{
			$table->dropForeign('fk_zone_polygon_polygon10');
			$table->dropForeign('fk_zone_polygon_zone10');
		});
	}

}
