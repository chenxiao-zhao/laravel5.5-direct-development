<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVmHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vm_history', function(Blueprint $table)
		{
			$table->integer('id', true)->comment('自增主键');
			$table->integer('user_id')->nullable();
			$table->string('operation_table', 36)->nullable()->comment('操作的数据库表');
			$table->string('operation_type', 45)->nullable()->comment('操作类型');
			$table->string('log', 1024)->nullable();
			$table->timestamp('history_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->comment('历史时间');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vm_history');
	}

}
