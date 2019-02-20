<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHeatmapTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('heatmap', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('business_zone_id')->nullable()->index('business_zone_id_idx');
			$table->string('heatmap_url', 512)->nullable();
			$table->integer('time_range')->nullable()->comment('统计时间单位，小时、天、周、月');
			$table->timestamp('create_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('update_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('heatmap');
	}

}
