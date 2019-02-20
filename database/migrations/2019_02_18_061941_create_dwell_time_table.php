<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDwellTimeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dwell_time', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('type_id')->comment('小时、天等类型ID');
			$table->integer('model_id')->comment('zone_id,property_id');
			$table->integer('dwell_time')->default(0)->comment('Zone’s dwell time (seconds) of an hour or a day ');
			$table->timestamp('create_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->index('create_time_idx')->comment('Video real time (video capture host timezone)');
			$table->timestamp('update_time')->default(DB::raw('CURRENT_TIMESTAMP'))->index('update_time_idx')->comment('The record insert to DB time (DB timezone)');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dwell_time');
	}

}
