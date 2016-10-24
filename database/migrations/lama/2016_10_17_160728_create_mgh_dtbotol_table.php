<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMghDtbotolTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mgh_dtbotol', function(Blueprint $table)
		{
			$table->increments('idbotol')->nullable();
			$table->string('botol_tipe', 12)->nullable();
			$table->float('botol_harga', 10, 0)->nullable();
			$table->float('botol_stock', 10, 0)->nullable();
			$table->string('botol_date', 10)->nullable();
			$table->string('botol_author', 8)->nullable();
			$table->float('botol_ls_stock', 10, 0)->nullable();
			$table->string('botol_ls_date', 10)->nullable();
			$table->string('botol_ls_author', 8)->nullable();
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
		Schema::drop('mgh_dtbotol');
	}

}
