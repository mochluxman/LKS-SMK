<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('idOrder');
            $table->date('orderDate');
            $table->unsignedInteger('idCostmer');
            $table->foreign('idCostmer')->references('id')->on('users')->onDelete('CASCADE');
            $table->unsignedInteger('idKirim');
            $table->foreign('idKirim')->references('idKirim')->on('kirims')->onDelete('CASCADE');
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
        Schema::dropIfExists('orders');
    }
}
