<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComingRecordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('coming_records', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->dateTime('coming_time')->nullable()->index('coming_records_coming_time_idx')->comment('Customer arrival time');
			$table->string('avatar_url', 1024)->nullable()->comment('Picture that customer arrived');
			$table->integer('age')->nullable()->comment('Age');
			$table->integer('age_max')->nullable()->comment('Age range (not used in face detect)');
			$table->boolean('ismale')->nullable()->comment('Gender，male is 1，female is 0');
			$table->integer('vm_linespec_id')->index('vm_linespec_id_idx');
			$table->float('similarity_score', 10, 0)->nullable()->comment('Similarity degree');
			$table->integer('customer_object_id')->nullable()->comment('Matching object ID');
			$table->boolean('is_front')->nullable()->default(1)->comment('front face or not');
			$table->boolean('is_enter')->nullable()->default(1)->comment('enter or exit ');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('coming_records');
	}

}
