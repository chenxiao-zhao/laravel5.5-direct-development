<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArrowgroupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('arrowgroup', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('pathflow_id')->index('FK_arrowgroup_pathflow_id_idx');
			$table->integer('gate_id')->nullable()->index('FK_arrowgroup_gate_id_idx');
			$table->string('name', 128);
			$table->string('location', 128)->nullable()->comment('路口坐标');
			$table->timestamp('create_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->index('created_time_idx');
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
		Schema::drop('arrowgroup');
	}

}
