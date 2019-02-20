<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVmLinespecTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vm_linespec', function(Blueprint $table)
		{
			$table->integer('id', true)->comment('主键id');
			$table->string('name', 64)->comment('名称');
			$table->integer('camera_id')->index('camera_id_idx')->comment('线对应的摄像头id');
			$table->string('specification', 512)->nullable()->comment('JSON格式的坐标位置');
			$table->integer('type_id')->nullable()->comment('类型id');
			$table->string('extra_parameter', 512)->nullable();
			$table->boolean('enabled')->default(1)->comment('是否启用');
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
		Schema::drop('vm_linespec');
	}

}
