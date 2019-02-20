<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToQueuecountRecordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('queuecount_records', function(Blueprint $table)
		{
			$table->foreign('polygon_id', 'fk_queuecount_records_1_polygon_id')->references('id')->on('vm_polygonspec')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('queuecount_records', function(Blueprint $table)
		{
			$table->dropForeign('fk_queuecount_records_1_polygon_id');
		});
	}

}
