<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVmEtcdTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vm_etcd', function(Blueprint $table)
		{
			$table->integer('id', true)->comment('主键');
			$table->string('key', 1024)->nullable()->comment('etcd key');
			$table->string('value', 1024)->nullable()->comment('etcd值');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vm_etcd');
	}

}
