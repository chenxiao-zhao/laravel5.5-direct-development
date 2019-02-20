<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVmCameraPictureCollectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vm_camera_picture_collect', function(Blueprint $table)
		{
			$table->integer('id', true)->comment('“主键”');
			$table->integer('camera_id')->nullable()->index('fk_vm_camera_picture_collect_1')->comment('“camera的id”');
			$table->integer('capture_status')->nullable()->comment('获取状态
0，添加到队列里
1，正在处理
2，处理成功
-1，处理失败');
			$table->string('remark', 256)->nullable()->comment('评论');
			$table->timestamp('create_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->comment('创建时间');
			$table->timestamp('update_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->comment('更新时间');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vm_camera_picture_collect');
	}

}
