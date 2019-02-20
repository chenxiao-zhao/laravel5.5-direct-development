<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPropertyInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('property_info', function(Blueprint $table)
		{
			$table->foreign('property_id', 'business_zone_info_business_zone_id_idx')->references('id')->on('vm_property')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('property_info', function(Blueprint $table)
		{
			$table->dropForeign('business_zone_info_business_zone_id_idx');
		});
	}

}
