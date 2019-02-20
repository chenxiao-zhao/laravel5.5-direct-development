<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDwellMatchRecordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dwell_match_records', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('line_id')->index('FK_dwell_match_records_line_id_idx');
			$table->integer('track_id')->nullable();
			$table->boolean('is_enter')->nullable();
			$table->integer('object_id');
			$table->float('score', 10, 0)->nullable();
			$table->timestamp('create_time')->default(DB::raw('CURRENT_TIMESTAMP'))->index('IDX_dwell_match_records_createtime')->comment('Enter or exit time.');
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
		Schema::drop('dwell_match_records');
	}

}
