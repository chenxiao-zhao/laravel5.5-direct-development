<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVmCameraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('vm_camera', function(Blueprint $table)
		{
			$table->foreign('algo_parameter_id', 'vm_camera_fk_algo_parameter_id')->references('id')->on('vm_algo_parameter')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('property_id', 'vm_camera_fk_property_id')->references('id')->on('vm_property')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('vm_camera', function(Blueprint $table)
		{
			$table->dropForeign('vm_camera_fk_algo_parameter_id');
			$table->dropForeign('vm_camera_fk_property_id');
		});
	}

}
