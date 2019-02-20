<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLinecountingRecordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('linecounting_records', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('line_id')->default(0)->index('linecounting_line_id_idx');
			$table->integer('enter_num')->default(0)->comment('Enter people number');
			$table->integer('exit_num')->default(0)->comment('Exit people number');
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
		Schema::drop('linecounting_records');
	}

}
