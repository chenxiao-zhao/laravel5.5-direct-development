<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPolygoncountingRecordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('polygoncounting_records', function(Blueprint $table)
		{
			$table->foreign('polygon_id', 'polygoncounting_polygon_id')->references('id')->on('vm_polygonspec')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('polygoncounting_records', function(Blueprint $table)
		{
			$table->dropForeign('polygoncounting_polygon_id');
		});
	}

}
