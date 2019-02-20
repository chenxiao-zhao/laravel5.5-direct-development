<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLinecountingDeltaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('linecounting_delta', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('line_id')->default(0)->index('linecounting_line_id_idx');
			$table->integer('exit_delta')->default(0)->comment('People number delta for exit');
			$table->timestamp('create_time')->default(DB::raw('CURRENT_TIMESTAMP'))->index('create_time_idx')->comment('Video real time (video capture host timezone)');
			$table->timestamp('update_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->index('update_time_idx')->comment('The record insert to DB time (DB timezone)');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('linecounting_delta');
	}

}
