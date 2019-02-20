<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePropertyInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('property_info', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('property_id')->nullable()->index('business_zone_info_property_idx');
			$table->bigInteger('sale_target_1')->nullable()->comment('一月销售目标');
			$table->bigInteger('sale_target_2')->nullable();
			$table->bigInteger('sale_target_3')->nullable();
			$table->bigInteger('sale_target_4')->nullable();
			$table->bigInteger('sale_target_5')->nullable();
			$table->bigInteger('sale_target_6')->nullable();
			$table->bigInteger('sale_target_7')->nullable();
			$table->bigInteger('sale_target_8')->nullable();
			$table->bigInteger('sale_target_9')->nullable();
			$table->bigInteger('sale_target_10')->nullable();
			$table->bigInteger('sale_target_11')->nullable();
			$table->bigInteger('sale_target_12')->nullable();
			$table->integer('flow_target_1')->nullable()->comment('一月客流目标');
			$table->integer('flow_target_2')->nullable();
			$table->integer('flow_target_3')->nullable();
			$table->integer('flow_target_4')->nullable();
			$table->integer('flow_target_5')->nullable();
			$table->integer('flow_target_6')->nullable();
			$table->integer('flow_target_7')->nullable();
			$table->integer('flow_target_8')->nullable();
			$table->integer('flow_target_9')->nullable();
			$table->integer('flow_target_10')->nullable();
			$table->integer('flow_target_11')->nullable();
			$table->integer('flow_target_12')->nullable();
			$table->string('description', 512)->nullable();
			$table->timestamp('create_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('update_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->integer('status_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('property_info');
	}

}
