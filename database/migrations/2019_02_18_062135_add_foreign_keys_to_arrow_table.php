<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToArrowTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('arrow', function(Blueprint $table)
		{
			$table->foreign('arrowgroup_id', 'FK_arrowgroup_id')->references('id')->on('arrowgroup')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('arrow', function(Blueprint $table)
		{
			$table->dropForeign('FK_arrowgroup_id');
		});
	}

}
