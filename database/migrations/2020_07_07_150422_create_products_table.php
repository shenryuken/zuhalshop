<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name');
			$table->string('code', 12);
			$table->string('sku', 30)->nullable();
			$table->text('description', 65535)->nullable();
			$table->float('price', 10, 0);
			$table->float('cost_price', 10, 0);
			$table->enum('type', array('Single Item','Bundle Items'));
			$table->integer('instock')->nullable()->default(0);
			$table->string('image');
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
		Schema::drop('products');
	}

}
