<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBusinessZoneTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('business_zone', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('zone_index')->nullable()->comment('同一类型的business_zone的展示序号（比如楼层）');
			$table->string('name', 256)->default('');
			$table->integer('property_id')->index('FK_business_zone_property_id_idx');
			$table->integer('gate_id')->nullable();
			$table->integer('type_id')->nullable()->comment('property,floor,store,tenant,pathing');
			$table->integer('parent_id')->nullable()->comment('楼层、商铺之间的二层关系，此字段为本表的id，只有叶子节点才会关联business_zone_map');
			$table->integer('business_type_id')->nullable()->comment('业态类型，具体类型在字典表');
			$table->string('map_url', 512)->nullable();
			$table->string('description', 512)->nullable();
			$table->integer('status_id')->nullable();
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
		Schema::drop('business_zone');
	}

}
