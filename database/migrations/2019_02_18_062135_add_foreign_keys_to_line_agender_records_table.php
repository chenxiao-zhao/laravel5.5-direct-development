<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLineAgenderRecordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('line_agender_records', function(Blueprint $table)
		{
			$table->foreign('line_id', 'FK_line_id')->references('id')->on('vm_linespec')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('line_agender_records', function(Blueprint $table)
		{
			$table->dropForeign('FK_line_id');
		});
	}

}
