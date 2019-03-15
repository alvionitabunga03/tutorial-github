<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdukTable extends Migration
{
	/**
     * Reverse the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
			$table->increments('id');
			$table->string('nama', 100);
			$table->integer('id_kategori');
			$table->integer('qty');
			$table->integer('harga_beli');
			$table->integer('harga_jual');
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
        Schema::dropIfExists('produks');
    }
}
