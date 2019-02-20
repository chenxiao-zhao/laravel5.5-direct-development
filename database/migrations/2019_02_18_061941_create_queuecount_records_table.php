<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQueuecountRecordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('queuecount_records', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('polygon_id')->index('fk_queuecount_records_1_idx');
			$table->timestamp('timestamp')->default(DB::raw('CURRENT_TIMESTAMP'))->index('queuecount_records_idx_timestamp');
			$table->integer('counting');
			$table->timestamp('update_time')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('create_time')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('queuecount_records');
	}

}
