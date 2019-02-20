<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVmCameraPictureCollectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('vm_camera_picture_collect', function(Blueprint $table)
		{
			$table->foreign('camera_id', 'fk_vm_camera_picture_collect_1')->references('id')->on('vm_camera')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('vm_camera_picture_collect', function(Blueprint $table)
		{
			$table->dropForeign('fk_vm_camera_picture_collect_1');
		});
	}

}
