<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPolygontouchRecordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('polygontouch_records', function(Blueprint $table)
		{
			$table->foreign('polygon_id', 'fk_polygon_touch_polygon_id')->references('id')->on('vm_polygonspec')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('polygontouch_records', function(Blueprint $table)
		{
			$table->dropForeign('fk_polygon_touch_polygon_id');
		});
	}

}
