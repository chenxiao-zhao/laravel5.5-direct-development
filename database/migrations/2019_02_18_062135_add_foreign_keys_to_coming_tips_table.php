<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToComingTipsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('coming_tips', function(Blueprint $table)
		{
			$table->foreign('customer_id', 'fk_coming_tips_customer1')->references('id')->on('customer')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('vm_linespec_id', 'fk_vm_linespec_id')->references('id')->on('vm_linespec')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('coming_tips', function(Blueprint $table)
		{
			$table->dropForeign('fk_coming_tips_customer1');
			$table->dropForeign('fk_vm_linespec_id');
		});
	}

}
