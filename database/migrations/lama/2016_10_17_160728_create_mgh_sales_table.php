<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMghSalesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mgh_sales', function(Blueprint $table)
		{
			$table->increments('idsales')->nullable();
			$table->integer('sales_idcust')->nullable();
			$table->integer('sales_idvariant')->nullable();
			$table->float('sales_mililiter', 10, 0)->nullable();
			$table->float('sales_totalml', 10, 0)->nullable();
			$table->integer('sales_idbotol')->nullable();
			$table->float('sales_hargavariant', 10, 0)->nullable();
			$table->float('sales_hargabotol', 10, 0)->nullable();
			$table->float('sales_hargatotal', 10, 0)->nullable();
			$table->float('sales_diskon', 10, 0)->nullable();
			$table->float('sales_hargadiskon', 10, 0)->nullable();
			$table->string('sales_date', 10)->nullable();
			$table->string('sales_author', 10)->nullable();
			$table->integer('sales_status')->nullable();
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
		Schema::drop('mgh_sales');
	}

}
