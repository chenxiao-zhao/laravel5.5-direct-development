<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGateLineMapTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('gate_line_map', function(Blueprint $table)
		{
			$table->foreign('gate_id', 'fk_gate_line_gate1')->references('id')->on('gate')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('line_id', 'fk_gate_line_line1')->references('id')->on('vm_linespec')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('gate_line_map', function(Blueprint $table)
		{
			$table->dropForeign('fk_gate_line_gate1');
			$table->dropForeign('fk_gate_line_line1');
		});
	}

}
