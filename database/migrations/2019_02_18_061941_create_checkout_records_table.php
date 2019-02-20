<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCheckoutRecordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('checkout_records', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('polygon_id')->index('fk_checkout_records_1_idx');
			$table->timestamp('timestamp')->default(DB::raw('CURRENT_TIMESTAMP'))->index('checkout_records_idx_timestamp');
			$table->dateTime('start_time');
			$table->dateTime('end_time');
			$table->timestamp('update_time')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('checkout_records');
	}

}
