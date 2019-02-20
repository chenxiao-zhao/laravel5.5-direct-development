<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBusinessZoneMapTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('business_zone_map', function(Blueprint $table)
		{
			$table->foreign('zone_id', 'fk_zone_top_has_zone_zone1')->references('id')->on('zone')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('business_zone_id', 'fk_zone_top_has_zone_zone_top1')->references('id')->on('business_zone')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('business_zone_map', function(Blueprint $table)
		{
			$table->dropForeign('fk_zone_top_has_zone_zone1');
			$table->dropForeign('fk_zone_top_has_zone_zone_top1');
		});
	}

}
