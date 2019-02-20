<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gate', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 128);
			$table->string('description', 512)->nullable();
			$table->integer('status_id');
			$table->string('arrow_specification', 512)->comment('dashboard展示用json参数');
			$table->float('position_x', 16, 3)->nullable()->default(0.000);
			$table->float('position_y', 16, 3)->nullable()->default(0.000);
			$table->integer('gate_index');
			$table->string('gate_map_url', 512);
			$table->timestamp('create_time')->default(DB::raw('CURRENT_TIMESTAMP'));
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
		Schema::drop('gate');
	}

}
