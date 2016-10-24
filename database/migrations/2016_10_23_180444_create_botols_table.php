<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBotolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('botols', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('tipe', 12);
			$table->float('harga', 10, 2);
			$table->float('stock', 10, 2);
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
        Schema::dropIfExists('botols');
    }
}
