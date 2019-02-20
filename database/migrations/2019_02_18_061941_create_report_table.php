<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReportTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('report', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('property_id')->index('property_id_idx');
			$table->string('report_url', 512);
			$table->integer('time_range')->nullable()->comment('时间维度类型');
			$table->integer('space_type')->nullable()->comment('空间维度类型，比如集团、楼宇等');
			$table->integer('report_type')->comment('报告类型，比如行人、车等');
			$table->string('date', 100)->index('date_idx')->comment('报告所属日期');
			$table->timestamp('create_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->index('creat_time_idx')->comment('报告创建日期');
			$table->timestamp('update_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->index('update_time_idx')->comment('报告更新日期');
			$table->integer('status_id')->nullable()->comment('报告状态ID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('report');
	}

}
