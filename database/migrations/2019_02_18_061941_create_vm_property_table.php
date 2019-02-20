<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVmPropertyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vm_property', function(Blueprint $table)
		{
			$table->integer('id', true)->comment('楼宇ID，自增主键');
			$table->integer('company_id')->default(0)->index('company_id_idx')->comment('集团ID');
			$table->string('name', 256)->default('')->comment('楼宇名称');
			$table->string('map_url', 512)->nullable()->comment('楼宇图片url');
			$table->string('longitude', 128)->nullable()->comment('经度');
			$table->string('latitude', 128)->nullable()->comment('纬度');
			$table->string('province', 128)->nullable()->comment('省');
			$table->string('city', 128)->nullable()->comment('市');
			$table->string('address', 256)->nullable()->comment('地址');
			$table->float('area', 16, 3)->nullable()->comment('面积');
			$table->time('daily_start')->nullable()->default('00:00:00')->comment('上班时间');
			$table->time('daily_end')->nullable()->default('24:00:00')->comment('下班时间');
			$table->string('weekday', 128)->nullable()->comment('工作日');
			$table->string('time_zone', 128)->nullable()->comment('时区');
			$table->string('description', 512)->nullable()->comment('描述');
			$table->timestamp('create_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->comment('创建时间');
			$table->timestamp('update_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->comment('更新时间');
			$table->integer('status_id')->nullable()->comment('状态ID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vm_property');
	}

}
