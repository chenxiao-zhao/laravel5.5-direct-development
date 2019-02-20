<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDashboardUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dashboard_users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 45)->nullable()->unique('dashboard_usersname_UNIQUE');
			$table->string('password')->nullable();
			$table->string('email', 45)->nullable();
			$table->string('remember_token', 225)->nullable();
			$table->timestamps();
			$table->string('api_token', 512)->nullable();
			$table->integer('company_id')->nullable()->index('dashboard_users_company_id_idx');
			$table->string('last_page', 45)->nullable();
			$table->string('permission', 45)->nullable();
			$table->string('real_name', 128)->nullable();
			$table->boolean('is_male')->nullable();
			$table->integer('level_id')->nullable()->default(1)->comment('用户类型，管理员、普通用户等');
			$table->string('avatar', 512)->nullable();
			$table->string('property_id_list', 256)->nullable()->comment('用户查看property的权限，每个id之间用逗号分隔');
			$table->string('phone', 50)->nullable();
			$table->string('address', 256)->nullable();
			$table->integer('creator_id')->nullable();
			$table->integer('status_id')->nullable();
			$table->string('remark', 256)->nullable()->comment('备注');
			$table->integer('age')->nullable()->comment('年龄');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dashboard_users');
	}

}
