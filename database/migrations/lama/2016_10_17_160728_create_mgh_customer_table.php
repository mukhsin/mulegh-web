<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMghCustomerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mgh_customer', function(Blueprint $table)
		{
			$table->increments('idcust')->nullable();
			$table->string('cust_nomor', 12)->nullable();
			$table->string('cust_nama', 25)->nullable();
			$table->string('cust_alamat', 200)->nullable();
			$table->string('cust_notelp', 15)->nullable();
			$table->string('cust_date', 10)->nullable();
			$table->string('cust_author', 8)->nullable();
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
		Schema::drop('mgh_customer');
	}

}
