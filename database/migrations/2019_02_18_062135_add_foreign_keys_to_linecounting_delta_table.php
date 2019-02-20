<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLinecountingDeltaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('linecounting_delta', function(Blueprint $table)
		{
			$table->foreign('line_id', 'linecounting_line_id0')->references('id')->on('vm_linespec')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('linecounting_delta', function(Blueprint $table)
		{
			$table->dropForeign('linecounting_line_id0');
		});
	}

}
