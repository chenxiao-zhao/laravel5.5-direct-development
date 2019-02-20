<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVmUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vm_users', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 45)->nullable()->unique('vm_users_name_UNIQUE');
			$table->string('password')->nullable();
			$table->string('email', 45)->nullable();
			$table->string('remember_token')->nullable();
			$table->string('api_token')->nullable();
			$table->integer('company_id')->nullable()->index('dashboard_users_company_id_idx');
			$table->string('last_page', 45)->nullable();
			$table->string('permission', 45)->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vm_users');
	}

}
