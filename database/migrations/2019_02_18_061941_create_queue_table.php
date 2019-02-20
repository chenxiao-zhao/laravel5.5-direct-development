<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQueueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('queue', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 128)->nullable();
			$table->string('description', 512)->nullable();
			$table->boolean('enabled')->default(1)->comment('是否启用');
			$table->char('type', 1)->nullable()->default('q')->comment('q for queue count  for checkout count t for touch');
			$table->timestamp('create_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('update_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('queue');
	}

}
