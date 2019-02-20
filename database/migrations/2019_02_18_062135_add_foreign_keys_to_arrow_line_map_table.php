<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToArrowLineMapTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('arrow_line_map', function(Blueprint $table)
		{
			$table->foreign('arrow_id', 'fk_arrow_line_arrow1')->references('id')->on('arrow')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('line_id', 'fk_arrow_line_line1')->references('id')->on('vm_linespec')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('arrow_line_map', function(Blueprint $table)
		{
			$table->dropForeign('fk_arrow_line_arrow1');
			$table->dropForeign('fk_arrow_line_line1');
		});
	}

}
