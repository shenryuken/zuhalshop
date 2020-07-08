<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('addresses', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id');
			$table->enum('type', array('Billing','Office','Home','Gift'));
			$table->string('receiver_name', 150);
			$table->string('street');
			$table->integer('city_id');
			$table->integer('postcode');
			$table->integer('state_id');
			$table->integer('country_id');
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
		Schema::drop('addresses');
	}

}
