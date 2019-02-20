<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPathflowTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pathflow', function(Blueprint $table)
		{
			$table->foreign('id', 'pathflow_business_zone_id')->references('id')->on('business_zone')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pathflow', function(Blueprint $table)
		{
			$table->dropForeign('pathflow_business_zone_id');
		});
	}

}
