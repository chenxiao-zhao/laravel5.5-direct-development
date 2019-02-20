<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToHeatmapTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('heatmap', function(Blueprint $table)
		{
			$table->foreign('business_zone_id', 'FK_zone_top_id')->references('id')->on('business_zone')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('heatmap', function(Blueprint $table)
		{
			$table->dropForeign('FK_zone_top_id');
		});
	}

}
