<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArrowTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('arrow', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 128);
			$table->integer('arrowgroup_id')->index('arrowgroup_id_idx');
			$table->integer('angle')->comment('角度，12点方向为0度，顺时针增长');
			$table->string('color', 12)->nullable()->comment('箭头颜色');
			$table->float('position_x', 10, 0)->nullable()->comment('箭头起始点坐标x');
			$table->float('position_y', 10, 0)->nullable()->comment('箭头起始点坐标y');
			$table->timestamp('create_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->index('created_time_idx');
			$table->timestamp('update_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->integer('status_id')->nullable();
			$table->boolean('ispathby')->nullable()->comment('true is enter;
false is exit;');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('arrow');
	}

}
