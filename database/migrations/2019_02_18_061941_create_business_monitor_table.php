<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBusinessMonitorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('business_monitor', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('monitor_assign')->nullable();
			$table->string('monitor_sql', 10240)->nullable();
			$table->integer('interval_time')->nullable();
			$table->timestamp('created_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('email_receivers')->nullable();
			$table->string('wechat_receivers')->nullable();
			$table->integer('delete_flag')->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('business_monitor');
	}

}
