<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBusinessSaleRecordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('business_sale_records', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('business_zone_id')->nullable()->index('business_zone_id_idx');
			$table->integer('people')->nullable()->comment('人单');
			$table->bigInteger('sale')->nullable()->comment('销售额');
			$table->timestamp('create_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->index('create_time_idx');
			$table->timestamp('update_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->index('update_time_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('business_sale_records');
	}

}
