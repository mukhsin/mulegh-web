<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('variant_id')->unsigned()->nullable();
            $table->foreign('variant_id')->references('id')->on('variants');
			$table->integer('botol_id')->unsigned()->nullable();
            $table->foreign('botol_id')->references('id')->on('botols');
			$table->float('awal', 10, 2);
			$table->float('order', 10, 2);
			$table->float('akhir', 10, 2);
			$table->integer('status');
			$table->string('keterangan', 255);
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
        Schema::dropIfExists('stocks');
    }
}
