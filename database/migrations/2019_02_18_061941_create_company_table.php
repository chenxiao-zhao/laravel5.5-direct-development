<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company', function(Blueprint $table)
		{
			$table->integer('id', true)->comment('集团ID，自增主键');
			$table->string('name', 256)->default('')->comment('集团名称');
			$table->string('address', 256)->nullable()->comment('集团地址');
			$table->time('daily_start')->nullable()->comment('上班时间');
			$table->time('daily_end')->nullable()->comment('下班时间');
			$table->string('weekday', 128)->nullable()->comment('工作日');
			$table->integer('status_id')->nullable()->comment('状态ID');
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
		Schema::drop('company');
	}

}
