<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComingTipsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('coming_tips', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->dateTime('coming_time')->nullable()->comment('到店时间');
			$table->string('read_status', 1024)->nullable()->comment('管理员看过');
			$table->string('del_user', 1024)->nullable()->comment('用户清空');
			$table->float('similarity_score', 10, 0)->nullable()->comment('相识度');
			$table->string('avatar_url', 1024)->nullable()->comment('实时采集图');
			$table->integer('coming_count')->nullable()->comment('到店次数');
			$table->integer('vm_linespec_id')->nullable()->index('vm_linespec_id_idx')->comment('线id');
			$table->integer('customer_id')->index('fk_coming_tips_customer1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('coming_tips');
	}

}
