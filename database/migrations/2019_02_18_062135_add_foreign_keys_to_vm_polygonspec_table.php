<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVmPolygonspecTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('vm_polygonspec', function(Blueprint $table)
		{
			$table->foreign('camera_id', 'vm_polygonspec_fk_camera_id')->references('id')->on('vm_camera')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('vm_polygonspec', function(Blueprint $table)
		{
			$table->dropForeign('vm_polygonspec_fk_camera_id');
		});
	}

}
