<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePolygontouchRecordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('polygontouch_records', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('polygon_id')->index('idx_polygon_touch_polygon_id');
			$table->integer('touch_num');
			$table->timestamp('created_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('update_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->index('idx_polygon_touch_create_time');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('polygontouch_records');
	}

}
