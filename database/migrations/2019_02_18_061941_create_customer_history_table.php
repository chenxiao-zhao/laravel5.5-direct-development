<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customer_history', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->dateTime('update_time')->nullable();
			$table->integer('type')->nullable();
			$table->integer('customer_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customer_history');
	}

}
