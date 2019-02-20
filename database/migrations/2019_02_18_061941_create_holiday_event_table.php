<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHolidayEventTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('holiday_event', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 64)->nullable();
			$table->integer('type_id')->nullable()->comment('类型，节假日或者活动');
			$table->dateTime('start_date')->nullable();
			$table->dateTime('end_date')->nullable();
			$table->string('description', 512)->nullable();
			$table->timestamp('creat_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('update_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->integer('status_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('holiday_event');
	}

}
