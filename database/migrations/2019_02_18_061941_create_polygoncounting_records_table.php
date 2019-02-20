<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePolygoncountingRecordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('polygoncounting_records', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('polygon_id')->default(0)->index('polygoncounting_polygon_id_idx')->comment('Polygon ID');
			$table->integer('enter_num')->default(0)->comment('Polygon enter numbre');
			$table->integer('exit_num')->default(0)->comment('Polygon exit numbre');
			$table->timestamp('create_time')->default(DB::raw('CURRENT_TIMESTAMP'))->index('creat_time_idx')->comment('Video real time (video capture host timezone)');
			$table->timestamp('update_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->index('update_time_idx')->comment('The record insert to DB time (DB timezone)');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('polygoncounting_records');
	}

}
