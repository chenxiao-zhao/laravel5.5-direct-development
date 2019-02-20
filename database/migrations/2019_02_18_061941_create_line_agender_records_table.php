<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLineAgenderRecordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('line_agender_records', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('line_id')->default(0)->index('FK_line_id_idx');
			$table->boolean('is_enter')->nullable()->comment('Enter or exit，enter is 1，exit is 0');
			$table->integer('age')->default(0)->comment('Age range start');
			$table->integer('age_max')->default(0)->comment('Age range end');
			$table->boolean('is_male')->default(0)->comment('Gender，male is 1，female is 0');
			$table->timestamp('create_time')->default(DB::raw('CURRENT_TIMESTAMP'))->index('create_time_idx')->comment('Video real time (video capture host timezone)');
			$table->timestamp('update_time')->default(DB::raw('CURRENT_TIMESTAMP'))->index('update_time_idx')->comment('The record insert to DB time (DB timezone)');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('line_agender_records');
	}

}
