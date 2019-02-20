<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToZoneLineMapTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('zone_line_map', function(Blueprint $table)
		{
			$table->foreign('line_id', 'fk_zone_line_line1')->references('id')->on('vm_linespec')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('zone_id', 'fk_zone_line_zone1')->references('id')->on('zone')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('zone_line_map', function(Blueprint $table)
		{
			$table->dropForeign('fk_zone_line_line1');
			$table->dropForeign('fk_zone_line_zone1');
		});
	}

}
