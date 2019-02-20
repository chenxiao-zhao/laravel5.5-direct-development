<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToZoneGateMapTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('zone_gate_map', function(Blueprint $table)
		{
			$table->foreign('gate_id', 'fk_zone_has_dash_gate_dash_gate1')->references('id')->on('gate')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('zone_id', 'fk_zone_has_dash_gate_zone1')->references('id')->on('zone')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('zone_gate_map', function(Blueprint $table)
		{
			$table->dropForeign('fk_zone_has_dash_gate_dash_gate1');
			$table->dropForeign('fk_zone_has_dash_gate_zone1');
		});
	}

}
