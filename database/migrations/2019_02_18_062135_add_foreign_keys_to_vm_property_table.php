<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVmPropertyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('vm_property', function(Blueprint $table)
		{
			$table->foreign('company_id', 'FK_company_id')->references('id')->on('company')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('vm_property', function(Blueprint $table)
		{
			$table->dropForeign('FK_company_id');
		});
	}

}
