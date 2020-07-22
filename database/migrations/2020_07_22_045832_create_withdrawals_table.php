<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWithdrawalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('withdrawals', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id');
			$table->float('amount', 10, 0);
			$table->integer('account_id');
			$table->integer('status')->comment('0=>Pending, 1=>Processing, 2=>Cancel, 4=>Paid, 5=>rejected');
			$table->date('created_at');
			$table->date('updated_at');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('withdrawals');
	}

}
