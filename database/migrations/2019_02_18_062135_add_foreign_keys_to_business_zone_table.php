<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBusinessZoneTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('business_zone', function(Blueprint $table)
		{
			$table->foreign('property_id', 'FK_business_zone_property_id')->references('id')->on('vm_property')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('business_zone', function(Blueprint $table)
		{
			$table->dropForeign('FK_business_zone_property_id');
		});
	}

}
