<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBusinessSaleRecordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('business_sale_records', function(Blueprint $table)
		{
			$table->foreign('business_zone_id', 'business_sale_record_business_zone_id')->references('id')->on('business_zone')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('business_sale_records', function(Blueprint $table)
		{
			$table->dropForeign('business_sale_record_business_zone_id');
		});
	}

}
