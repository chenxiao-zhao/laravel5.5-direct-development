<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToArrowgroupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('arrowgroup', function(Blueprint $table)
		{
			$table->foreign('gate_id', 'FK_arrowgroup_gate_id')->references('id')->on('gate')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('pathflow_id', 'FK_arrowgroup_pathflow_id')->references('id')->on('pathflow')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('arrowgroup', function(Blueprint $table)
		{
			$table->dropForeign('FK_arrowgroup_gate_id');
			$table->dropForeign('FK_arrowgroup_pathflow_id');
		});
	}

}
