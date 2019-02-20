<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVmLinespecHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vm_linespec_history', function(Blueprint $table)
		{
			$table->integer('id')->nullable()->comment('主键id');
			$table->string('name', 64)->nullable()->comment('名称');
			$table->integer('camera_id')->nullable()->comment('线对应的摄像头id');
			$table->string('specification', 512)->nullable()->comment('JSON格式的坐标位置');
			$table->integer('type_id')->nullable()->comment('类型id');
			$table->string('extra_parameter', 512)->nullable();
			$table->boolean('enabled');
			$table->dateTime('create_time')->nullable();
			$table->timestamp('update_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('history_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->comment('历史记录生成日期时间');
			$table->string('history_action', 16)->nullable()->comment('历史记录操作类型“修改/更新/删除”');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vm_linespec_history');
	}

}
