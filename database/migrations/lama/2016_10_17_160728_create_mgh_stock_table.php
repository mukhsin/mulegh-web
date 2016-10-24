<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMghStockTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mgh_stock', function(Blueprint $table)
		{
			$table->increments('idstock')->nullable();
			$table->string('stock_name', 12)->nullable();
			$table->integer('stock_idname')->nullable();
			$table->float('stock_awal', 10, 0)->nullable();
			$table->float('stock_order', 10, 0)->nullable();
			$table->float('stock_akhir', 10, 0)->nullable();
			$table->string('stock_date', 10)->nullable();
			$table->string('stock_author', 10)->nullable();
			$table->integer('stock_status')->nullable();
			$table->string('stock_keterangan', 100)->nullable();
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
		Schema::drop('mgh_stock');
	}

}
