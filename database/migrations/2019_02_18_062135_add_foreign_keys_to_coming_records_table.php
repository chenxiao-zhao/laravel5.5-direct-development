<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToComingRecordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('coming_records', function(Blueprint $table)
		{
			$table->foreign('vm_linespec_id', 'fk_vm_linespec_id1')->references('id')->on('vm_linespec')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('coming_records', function(Blueprint $table)
		{
			$table->dropForeign('fk_vm_linespec_id1');
		});
	}

}
