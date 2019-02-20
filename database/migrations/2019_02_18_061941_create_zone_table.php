<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateZoneTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('zone', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 128)->default('');
			$table->float('area', 16, 3)->nullable()->comment('面积');
			$table->string('description', 512)->nullable();
			$table->integer('status_id')->nullable();
			$table->integer('type_id')->nullable();
			$table->integer('element_type')->nullable()->comment('line or polygon 组成');
			$table->string('position', 256)->nullable()->comment('bbby项目dashboard用，横向图片坐标');
			$table->string('rect_pos', 256)->nullable()->comment('dashboard上zone name文字定位');
			$table->string('specification', 512)->nullable()->comment('zone在property中的顶点坐标位置，heatmap使用，bbby项目纵向图片坐标');
			$table->timestamp('create_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
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
		Schema::drop('zone');
	}

}
