<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVmPolygonspecHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vm_polygonspec_history', function(Blueprint $table)
		{
			$table->integer('id')->nullable()->comment('自增主键');
			$table->string('name', 64)->nullable()->comment('名称');
			$table->integer('camera_id')->nullable()->comment('摄像头id');
			$table->integer('zone_id')->nullable()->comment('对应zone的id');
			$table->string('specification', 512)->nullable()->comment('JSON格式的坐标位置');
			$table->string('extra_parameter', 512)->nullable()->comment('额外参数，如果算法需要一个每个polygon不一样的参数，用此字段
比如：polygon_type_id/ratio/timeout_duration_miutes');
			$table->boolean('enabled')->default(1)->comment('是否启用');
			$table->dateTime('create_time')->nullable();
			$table->dateTime('update_time')->nullable();
			$table->timestamp('history_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
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
		Schema::drop('vm_polygonspec_history');
	}

}
