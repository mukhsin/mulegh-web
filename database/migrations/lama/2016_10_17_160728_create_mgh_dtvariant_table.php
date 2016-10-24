<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMghDtvariantTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mgh_dtvariant', function(Blueprint $table)
		{
			$table->increments('idvariant')->nullable();
			$table->string('variant_kode', 12)->nullable();
			$table->string('variant_nama', 20)->nullable();
			$table->float('variant_harga', 10, 0)->nullable();
			$table->float('variant_stock', 10, 0)->nullable();
			$table->string('variant_date', 10)->nullable();
			$table->string('variant_author', 8)->nullable();
			$table->float('variant_ls_stock', 10, 0)->nullable();
			$table->string('variant_ls_date', 10)->nullable();
			$table->string('variant_ls_author', 8)->nullable();
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
		Schema::drop('mgh_dtvariant');
	}

}
