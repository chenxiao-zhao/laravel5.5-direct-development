<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUploadLogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('upload_logs', function(Blueprint $table)
		{
			$table->integer('id', true)->comment('主键');
			$table->timestamp('create_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->comment('上传时间');
			$table->string('host_name', 256)->nullable()->comment('上传的主机名');
			$table->string('module_name', 256)->nullable()->comment('模块名称');
			$table->string('log_cloud_path', 512)->nullable()->comment('上传后的云端路径');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('upload_logs');
	}

}
