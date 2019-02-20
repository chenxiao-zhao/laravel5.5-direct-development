<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBusinessZoneMapTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('business_zone_map', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('business_zone_id')->nullable()->index('fk_zone_top_has_zone_zone_top1_idx');
			$table->integer('zone_id')->nullable()->index('fk_zone_top_has_zone_zone1_idx');
			$table->integer('status_id')->nullable();
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
		Schema::drop('business_zone_map');
	}

}
