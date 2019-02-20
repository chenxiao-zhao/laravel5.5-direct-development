<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCheckoutRecordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('checkout_records', function(Blueprint $table)
		{
			$table->foreign('polygon_id', 'fk_checkout_records_1_porygon_id')->references('id')->on('vm_polygonspec')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('checkout_records', function(Blueprint $table)
		{
			$table->dropForeign('fk_checkout_records_1_porygon_id');
		});
	}

}
