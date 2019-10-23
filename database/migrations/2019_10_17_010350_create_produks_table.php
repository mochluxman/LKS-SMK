<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->increments('idProduk');
            $table->unsignedInteger('idKategori');
            $table->foreign('idKategori')->references('idKategori')->on('kategoris')->onDelete('CASCADE');
            $table->string('namaProduk',20);
            $table->integer('beratProduk');
            $table->date('tanggalProduksi');
            $table->decimal('hargaProduk',10,2);
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
