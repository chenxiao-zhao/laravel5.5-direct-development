<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_log', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id')->nullable();
			$table->timestamp('login_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('logout_time')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('operate_model', 512)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_log');
	}

}
