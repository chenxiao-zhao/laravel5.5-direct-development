<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArrowLineMapTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('arrow_line_map', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('arrow_id')->index('fk_arrow_line_arrow1_idx');
			$table->integer('line_id')->index('fk_arrow_line_line1_idx');
			$table->timestamp('create_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
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
		Schema::drop('arrow_line_map');
	}

}
