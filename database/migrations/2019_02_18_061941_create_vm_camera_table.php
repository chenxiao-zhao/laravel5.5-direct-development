<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVmCameraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vm_camera', function(Blueprint $table)
		{
			$table->integer('id', true)->comment('自增主键');
			$table->string('name', 64)->unique('vm_algo_parameter_name_UNIQUE')->comment('\'唯一名称\'');
			$table->string('stream_url', 512)->nullable()->comment('\'RTSP url\'');
			$table->string('screen_capture', 256)->nullable()->comment('\'抓取的摄像头底图\'');
			$table->float('position_x', 10, 0)->nullable()->default(0)->comment('相对于topview的X坐标');
			$table->float('position_y', 10, 0)->nullable()->default(0)->comment('相对与topview的Y坐标');
			$table->float('direction_angle', 16, 3)->nullable()->default(0.000)->comment('角度，相对于12点的顺时针度数');
			$table->boolean('enabled')->default(1)->comment('是否启用');
			$table->integer('property_id')->nullable()->index('property_id_idx')->comment('所在的楼宇的ID');
			$table->integer('algo_parameter_id')->nullable()->index('algo_parameter_id_idx')->comment('关联的算法参数表的id');
			$table->string('management_url', 512)->nullable()->comment('摄像头管理链接地址');
			$table->string('capture_host', 256)->nullable()->comment('采集该摄像头的主机名称');
			$table->string('extra_parameter', 512)->nullable()->comment('其它参数');
			$table->string('capture_dir', 256)->nullable()->comment('采集路径');
			$table->timestamp('create_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->comment('记录创建时间');
			$table->timestamp('update_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vm_camera');
	}

}
