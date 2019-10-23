<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->increments('idOrderDetail');
            $table->integer('jumlahBarang');
            $table->decimal('totalHarga',11,2);
            $table->unsignedInteger('idOrder');
            $table->foreign('idOrder')->references('idOrder')->on('orders')->onDelete('CASCADE');
            $table->unsignedInteger('idProduk');
            $table->foreign('idProduk')->references('idProduk')->on('produks')->onDelete('CASCADE');
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
        Schema::dropIfExists('order_details');
    }
}
