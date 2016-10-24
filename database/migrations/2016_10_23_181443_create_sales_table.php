<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers');
			$table->integer('variant_id')->unsigned();
            $table->foreign('variant_id')->references('id')->on('variants');
			$table->integer('botol_id')->unsigned();
            $table->foreign('botol_id')->references('id')->on('botols');
			$table->float('mililiter', 10, 2);
			$table->float('totalmililiter', 10, 2);
			$table->float('variant_harga', 10, 2);
			$table->float('botol_harga', 10, 2);
			$table->float('harga', 10, 2);
			$table->float('diskon', 10, 2);
			$table->float('total', 10, 2);
			$table->integer('status');
			$table->string('author', 20);
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
        Schema::dropIfExists('sales');
    }
}
