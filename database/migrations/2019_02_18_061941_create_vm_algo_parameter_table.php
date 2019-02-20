<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVmAlgoParameterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vm_algo_parameter', function(Blueprint $table)
		{
			$table->integer('id', true)->comment('自增主键');
			$table->string('name', 64)->unique('vm_algo_parameter_name_UNIQUE')->comment('唯一名称');
			$table->string('algo_type', 64)->nullable()->comment('算法类型：peoplecounting/dwell/agegender');
			$table->string('algo_resolution', 32)->nullable();
			$table->time('daily_start')->nullable();
			$table->time('daily_end')->nullable()->comment('采集类型：视频/图片');
			$table->string('capture_type', 64)->nullable()->default('video')->comment('picture OR video');
			$table->float('capture_inteval_sec', 10, 0)->nullable()->comment('采集间隔（秒）0.1 表示1秒采集10张');
			$table->integer('media_keep_hours')->nullable()->comment('采集的视频图片需要保存少个小时后删除');
			$table->string('message_queue_url', 512)->nullable()->comment('RabbitMQ的地址，采集的视频会发送到这个MQ中。');
			$table->text('algo_config_json_str', 65535)->nullable()->comment('算法流程配置JSON文件内容');
			$table->string('extra_parameter', 512)->nullable();
			$table->boolean('upload_cloud')->nullable()->comment('是否上传到Cloud');
			$table->integer('mem_cost_mb')->nullable()->comment('内存消耗，MB');
			$table->float('cpu_cost', 10, 0)->nullable()->comment('CPU消耗');
			$table->float('gpu_cost', 10, 0)->nullable()->comment('GPU消耗');
			$table->integer('worker_number')->nullable()->comment('需要启动的算法处理worker的个数');
			$table->timestamp('create_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
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
		Schema::drop('vm_algo_parameter');
	}

}
