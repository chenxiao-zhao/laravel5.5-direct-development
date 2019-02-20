<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customer', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('avatar_url', 1024)->nullable()->comment('URL of customer photo');
			$table->string('name', 45)->nullable()->comment('Custormer name');
			$table->integer('age')->nullable()->comment('Age');
			$table->integer('age_max')->nullable()->comment('Age range (not used in face detect)');
			$table->boolean('ismale')->nullable()->comment('Gender，male is 1，female is 0');
			$table->string('mobile', 45)->nullable()->comment('Phone number');
			$table->integer('type')->nullable()->comment('Customer type.VIP is 1,normal custormer is 2,shop assistant is 3.');
			$table->string('feature_url')->nullable()->comment('URL of feature file');
			$table->integer('company_id')->nullable()->comment('Company ID');
			$table->integer('customer_object_id')->nullable()->index('customer_customer_object_id_idx')->comment('Matching object id ');
			$table->integer('property_id')->nullable()->index('property_id_idx')->comment('Retail ID');
			$table->string('remark', 256)->nullable()->comment('remark');
			$table->timestamp('create_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->index('customer_create_time_idx')->comment('Customer first arrival time');
			$table->timestamp('update_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Customer information update time');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customer');
	}

}
