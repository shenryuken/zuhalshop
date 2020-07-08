<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id');
			$table->string('first_name', 150);
			$table->string('last_name', 100);
			$table->date('dob');
			$table->enum('id_type', array('MyKad','Passport','Army/Police'));
			$table->string('nric', 14);
			$table->string('gender', 6)->nullable();
			$table->string('about_me');
			$table->string('mobile_no', 14);
			$table->string('contact_no_office', 14)->nullable();
			$table->string('contact_no_home', 14)->nullable();
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
		Schema::drop('profiles');
	}

}
